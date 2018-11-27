
function superAdmin(){

	this.approveJob = function(ele){
		var id = jQuery(ele).attr("data-id");
		if(id == "" || id === null || id === undefined)
			return true;

		jQuery.ajax({
			url:"/admin/approveJob/"+id,
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
					//jQuery(ele).closest(".job-box").fadeOut("slow").remove();			
			        toastr.success(data.response,{timeOut: 5000});
			        setTimeout(function(){window.location.href = "http://www.getwork.construction/admin/jobs";},1500);
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery(".cstm-loader").hide();
			}
		});
	}

	this.disapproveJob = function(){
		
		var objData = new Object();
		var data = jQuery("#job-form").serializeArray();
		for(var i in data){
			objData[data[i].name] = data[i].value;
		}
		jQuery.ajax({
			url:"/admin/disapproveJob/",
			type:"POST",
			data:objData,
			async:true,
			beforeSend:function(){
				jQuery(".cstm-loader").show();
			},
			success:function(res){
				$('#myModal').modal("hide")
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
			        setTimeout(function(){window.location.href = "http://www.getwork.construction/admin/jobs";},1500);
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery(".cstm-loader").hide();
			}
		});
	}

	this.approveCourse = function(ele){
		var id = jQuery(ele).attr("data-id");
		if(id == "" || id === null || id === undefined)
			return true;

		jQuery.ajax({
			url:"/admin/approveCourse/"+id,
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
					//jQuery(ele).closest(".job-box").fadeOut("slow").remove();			
			        toastr.success(data.response,{timeOut: 5000});
			        setTimeout(function(){window.location.href = "http://www.getwork.construction/admin/courses";},1500);
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery(".cstm-loader").hide();
			}
		});
	}

	this.disapproveCourse = function(){
		
		var objData = new Object();
		var data = jQuery("#job-form").serializeArray();
		for(var i in data){
			objData[data[i].name] = data[i].value;
		}
		jQuery.ajax({
			url:"/admin/disapproveCourse/",
			type:"POST",
			data:objData,
			async:true,
			beforeSend:function(){
				jQuery(".cstm-loader").show();
			},
			success:function(res){
				$('#myModal').modal("hide")
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
			        setTimeout(function(){ window.location.href = "http://www.getwork.construction/admin/courses"; },1500);
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery(".cstm-loader").hide();
			}
		});
	}
}

var su = new superAdmin();