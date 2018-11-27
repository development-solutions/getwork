function Common(){

    $this = this;

    this.getCL = function(callback){

        jQuery(".cstm-loader").show();
        navigator.geolocation.getCurrentPosition(function(pos){
            jQuery(".cstm-loader").hide();
            lat = pos.coords.latitude;
            lon = pos.coords.longitude;
            callback({lat:lat,lon:lon});
        },function(error){
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    msg = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    msg = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    msg = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    msg = "An unknown error occurred."
                    break;
                default:
                    msg = "we'r sorry, your current location could not be dertermined at this moment, Please try later!";
            }
            jQuery(".cstm-loader").hide();
            alert(msg);
        });
    }

    this.getUserLocation = function(ele){

        this.getCL(function(res){
            var geocoder = new google.maps.Geocoder();
            var latlng = new google.maps.LatLng(res.lat, res.lon);
            geocoder.geocode({'location': latlng}, function(results, status) {
                if(status === 'OK'){
                    if(results[1]){
                        var address = results[1].formatted_address;
                        jQuery(ele).parent().find("input").val(address);
                    }else{
                        window.alert('No results found');
                    }
                }else{
                    window.alert('Geocoder failed due to: ' + status);
                }
            });
        });
    }

    this.getJobTitle = function(val){
        if(val!=""){
            jQuery.ajax({
                url:"/home/getJobTitle",
                type:"POST",
                data:{key:val},
                async:true,
                success:function(res){
                    if(res){
                        var data = JSON.parse(res);
                        var html = "";
                        for(var i in data){
                            html+='<li><a href="javascript:void(0)" onclick="window.common.setSearch(this)">'+data[i].title+'</a></li>';
                        }
                        jQuery("#keywords ul").html(html);
                    }else{
                        jQuery("#keywords ul").html('<li><a href="javascript:void(0)">No result found</a></li>');
                    }
                }
            });
        }else{
            jQuery("#keywords ul").html("");
        }
    }

    this.setSearch = function(ele){
        var val = jQuery(ele).text();
        if(jQuery("input[name='keyword']").length)
            jQuery("input[name='keyword']").val(val);
        if(jQuery("form[name='job_post'] input[name='title']").length)
            jQuery("form[name='job_post'] input[name='title']").val(val);
        jQuery("#keywords ul").html("");
    }
	
    this.initAutocomplete = function(){
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode'],componentRestrictions: {country: "uk"}}
        );
    }

    this.geolocate = function(){
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position){
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }

    this.getCourseTitle = function(val){
        if(val!=""){
            jQuery.ajax({
                url:"/home/getCourseTitle",
                type:"POST",
                data:{key:val},
                async:true,
                success:function(res){
                    if(res){
                        var data = JSON.parse(res);
                        var html = "";
                        for(var i in data){
                            html+='<li><a href="javascript:void(0)" onclick="window.common.setSearch(this)">'+data[i].title+'</a></li>';
                        }
                        jQuery("#keywords ul").html(html);
                    }else{
                        jQuery("#keywords ul").html('<li><a href="javascript:void(0)">No result found</a></li>');
                    }
                }
            });
        }else{
            jQuery("#keywords ul").html("");
        }
    }

    this.validate = function(ele){

        var status = jQuery(ele).find("input[name='tnc']").prop("checked");
        if(!status){
            alert("Please accept terms and conditions by clicking checkbox.")
            jQuery(ele).find("input[name='tnc']").focus();
        }
        return status;
    }

    this.sendReminder = function(){
        var emailPattren = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        var $form = jQuery("form[name='forgotpwd']")[0];
        var email = $form.email.value;
        if(email==""){
            alert("please enter email");
            return false;
        }
        if(!email.match(emailPattren)){
            alert("please enter a valid email");
            return false;
        }
        jQuery.ajax({
            url:"/home/send_reminder",
            type:"POST",
            data:{email:email},
            async:true,
            beforeSend:function(){
                jQuery(".cstm-loader").show();
            },
            success:function(res){
                var data = JSON.parse(res);
                toastr.options = {
                    "closeButton": true,
                    "positionClass": "toast-top-center",
                    "progressBar": true,
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                }
                if(!data.error){              
                    toastr.success(data.response,{timeOut: 5000});
                    jQuery("form[name='forgotpwd']").html(data.template);
                }else{
                    toastr.error(data.response,{timeOut: 5000});
                }
            },
            complete:function(){
                jQuery(".cstm-loader").hide();
            }
        });
    }

    this.saveConfig = function(name,value){
        jQuery.ajax({
            url:"/home/searchConfig",
            type:"POST",
            data:{name:name,value:value},
            async:true,
            beforeSend:function(){
                jQuery(".cstm-loader").show();
            },
            success:function(res){
                var data = JSON.parse(res);
                window.location.href="http://www.getwork.construction/home/jobs"
            },
            complete:function(){
                jQuery(".cstm-loader").hide();
            }
        });
    }

    this.jobSearch = function(dataObj){
        jQuery("#keywords ul").html("");
        dataObj["search"] = true;
        jQuery.ajax({
            url:"/home/jobs",
            type:"POST",
            data:dataObj,
            async:true,
            beforeSend:function(){
                jQuery(".cstm-loader").show();
            },
            success:function(res){
                jQuery(".categories-list-page").html(res);
            },
            complete:function(){
                jQuery(".cstm-loader").hide();
            }
        });
    }

    this.jumpJobSearch = function(value){

        var $form = document.createElement("form");
        $form.setAttribute("method","post");
        $form.setAttribute("action","/home/jobs");
        var $ele = document.createElement("input");
        $ele.setAttribute("type","text");
        $ele.setAttribute("name","jobcat");
        $ele.setAttribute("value",value);
        $form.appendChild($ele);
        document.body.appendChild($form);
        $form.submit();
    }

    this.courseSearch = function(keyword,cats,types){

        jQuery("#keywords ul").html("");
        jQuery.ajax({
            url:"/home/courses",
            type:"POST",
            data:{search:true,keyword:keyword,courseCat:cats,courseTypes:types},
            async:true,
            beforeSend:function(){
                jQuery(".cstm-loader").show();
            },
            success:function(res){
                jQuery(".categories-list-page").html(res);
            },
            complete:function(){
                jQuery(".cstm-loader").hide();
            }
        });
    }

    this.jumpCourseSearch = function(value){

        var $form = document.createElement("form");
        $form.setAttribute("method","post");
        $form.setAttribute("action","/home/courses");
        var $ele = document.createElement("input");
        $ele.setAttribute("type","text");
        $ele.setAttribute("name","courseCat");
        $ele.setAttribute("value",value);
        $form.appendChild($ele);
        document.body.appendChild($form);
        $form.submit();
    }

    this.candidateSearch = function(dataObj){
        
        jQuery("#keywords ul").html("");
        dataObj["search"] = true;
        jQuery.ajax({
            url:"/home/candidates",
            type:"POST",
            data:dataObj,
            async:true,
            beforeSend:function(){
                jQuery(".cstm-loader").show();
            },
            success:function(res){
                jQuery(".categories-list-page").html(res);
            },
            complete:function(){
                jQuery(".cstm-loader").hide();
            }
        });
    }

    this.dateFormat = function(val){

        var datePattren = /^[0-3]?[0-9]-[0-1]?[0-9]-(?:[0-9]{2})?[0-9]{2}$/;
        if(val.match(datePattren)){
            return true;
        }else{
            return false;
        }
    }

    this.regUser = function(data){
    
        data["register"] = "Register";
        jQuery.ajax({
            url:"/register/regUser",
            type:"POST",
            data:data,
            async:true,
            beforeSend:function(){
                jQuery(".cstm-loader").show();
            },
            success:function(res){
                var data = JSON.parse(res);
                if(!data.error){
                    IN.User.logout();
                    window.location.href = data.response;
                }else{
                    if(IN.User.isAuthorized()){
                        IN.User.logout();
                        window.location.href = data.response;  
                    }
                }
            },
            complete:function(){
                jQuery(".cstm-loader").hide();
            }
        });
    }

    this.verifyEmail = function(){
        jQuery.ajax({
            url:"/register/resendVerification",
            async:true,
            beforeSend:function(){
                jQuery(".cstm-loader").show();
            },
            success:function(res){
                var data = JSON.parse(res);
                alert(data.response);                
            },
            complete:function(){
                jQuery(".cstm-loader").hide();
            }
        });
    }
}

var common = new Common();