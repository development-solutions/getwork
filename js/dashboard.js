
function Dashboard(){

	this.shortlist = function(ele){
		var id = jQuery(ele).attr("data-id");
		jQuery.ajax({
			url:"/dashboard/shortlist_candidate/"+id,
			async:true,
			beforeSend:function(){
				jQuery("spinner").show();
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
					jQuery(ele).removeClass("btn-default").addClass("btn-primary cstm-btn").contents().eq(1).replaceWith(" Shortlisted");
			        toastr.success(data.response,{timeOut: 5000});
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery("spinner").hide();
			}
		});
	}

	this.sendMessage = function(){
		var objData = new Object();
		var data = jQuery("#job-form").serializeArray();
		for(var i in data){
			objData[data[i].name] = data[i].value;
		}

		jQuery.ajax({
			url:"/dashboard/sendMessage",
			data:objData,
			type:"POST",
			async:true,
			beforeSend:function(){
				jQuery("spinner").show();
			},
			success:function(res){
				$('#myModal').modal("hide")
				jQuery("#job-form")[0].reset();
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
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery("spinner").hide();
			}
		});
	}

	this.loadMsg = function(ele){
		var id = jQuery(ele).attr("data-id");
		if(id=="" || id===undefined || id===null)
			return true;
		jQuery.ajax({
			url:"/dashboard/loadMessages/"+id,
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
					jQuery(ele).removeAttr("onclick");
					jQuery(".profile-nav .badge").html("new "+data.unread);
					jQuery(ele).closest(".panel-heading").find(".badge").html("unread 0")
					var result = data.response;
					var html = "";
					for(var i=0;i<result.length;i++){
						if(result[i].msg_from==id){
							var img = result[i].profile_image!=""?result[i].profile_image:"profile.jpg";							
							var name = result[i].first_name+" "+result[i].last_name;
							var cls = "left";
						}else{
							var img = result[i].logo!=""?result[i].logo:"logo.jpg";
							var name = "Me";
							var cls = "right";
						}
						
						html+='<li class="'+cls+' clearfix">';
						html+='<span class="chat-img pull-'+cls+'">';
						html+='<img src="/uploads/'+img+'" alt="avatar" class="img-circle" />';
						html+='</span>';
						html+='<div class="chat-body clearfix">';
						html+='<div class="header">';
						if(result[i].msg_from==id){
							html+='<strong class="primary-font">'+name+'</strong>';
							html+='<small class="pull-right text-muted">';
							html+='<span class="glyphicon glyphicon-time"></span>'+result[i].time;
							html+='</small>';
						}else{
							html+='<strong class="pull-right primary-font">'+name+'</strong>';
							html+='<small class=" text-muted">';
							html+='<span class="glyphicon glyphicon-time"></span>'+result[i].time;
							html+='</small>';
						}
						html+='</div>';
						html+='<p>'+result[i].message+'</p>';
						html+='</div>';
						html+='</li>';
					}
					jQuery(ele).closest(".panel").find(".chat").html(html);
					var $container = jQuery(ele).closest(".panel-primary").find(".panel-body");
					$container.animate({scrollTop:$container.prop("scrollHeight")},1000);
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery(".cstm-loader").hide();
			}
		});
	}

	this.replyMessage = function(ele){
		var id = jQuery(ele).attr("data-id");
		var msg = jQuery(ele).closest(".panel-footer").find("textarea").val().trim();
		var $message = '<li class="right clearfix"><span class="chat-img pull-right"><img src="http://placehold.it/50/55C1E7/fff&amp;text=U" alt="avatar" class="img-circle"></span><div class="chat-body clearfix"><div class="header"><strong class="pull-right primary-font">Me</strong><small class=" text-muted"><span class="glyphicon glyphicon-time"></span> now</small></div><p>'+msg+'</p></div></li>'
		if(id=="" || id===null || id===undefined)
			return false;
		var $container = jQuery(ele).closest(".collapse").find(".panel-body");
		var $chatbox = jQuery(ele).closest(".collapse").find(".chat");
		$chatbox.append($message);
		$container.animate({scrollTop:$container.prop("scrollHeight")},3000);
		jQuery(ele).closest(".panel-footer").find("textarea").val("");
		jQuery.ajax({
			url:"/dashboard/sendMessage",
			data:{message:msg,to:id},
			type:"POST",
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
				}else{
					toastr.error(data.response,{timeOut: 5000});
				}
			},
			complete:function(){
				jQuery(".cstm-loader").hide();
			}
		});
	}

	this.removeShortlist = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete this candidate from list ?");
		if(response){
			jQuery.ajax({
				url:"/dashboard/delete_shortlist/"+id,
				async:true,
				beforeSend:function(){
					jQuery("spinner").show();
				},
				success:function(res){
					if(res){
						alert("The candidate is removed successfully!");
						jQuery(ele).closest("tr").fadeOut("slow").remove();
					}
				},
				complete:function(){
					jQuery("spinner").hide();
				}
			});
		}
	}

	this.deletejob = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete this job ?");
		if(response){
			jQuery.ajax({
				url:"/dashboard/delete_job/"+id,
				async:true,
				beforeSend:function(){
					jQuery("spinner").show();
				},
				success:function(res){
					if(res){
						alert("The job is deleted successfully!");
						jQuery(ele).closest(".job-box").fadeOut("slow").remove();
					}
				},
				complete:function(){
					jQuery("spinner").hide();
				}
			});
		}
	}

	this.delCourse = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete this Course ?");
		if(response){
			jQuery.ajax({
				url:"/dashboard/delete_course/"+id,
				async:true,
				beforeSend:function(){
					jQuery("spinner").show();
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
						jQuery(ele).closest(".job-box").slideUp(1000).remove();			
				        toastr.success(data.response,{timeOut: 5000});
					}else{
						toastr.error(data.response,{timeOut: 5000});
					}
				},
				complete:function(){
					jQuery("spinner").hide();
				}
			});
		}
	}

	this.deleteMsg = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete this Message ?");
		if(response){
			jQuery.ajax({
				url:"/dashboard/delete_msg/"+id,
				async:true,
				beforeSend:function(){
					jQuery("spinner").show();
				},
				success:function(res){
					if(res){
						alert("Message is deleted successfully!");
						jQuery(ele).closest(".job-box").fadeOut("slow").remove();
					}
				},
				complete:function(){
					jQuery("spinner").hide();
				}
			});
		}
	}

	this.deljobsingle = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete this job ?");
		if(response){
			jQuery.ajax({
				url:"/dashboard/delete_job/"+id,
				async:true,
				beforeSend:function(){
					jQuery("spinner").show();
				},
				success:function(res){
					if(res){
						alert("The job is deleted successfully!");
						window.location.href="/dashboard/jobs";
					}
				},
				complete:function(){
					jQuery("spinner").hide();
				}
			});
		}
	}

	this.applicantSearch = function(dataObj,id){
        
        jQuery("#keywords ul").html("");
        dataObj["search"] = true;
        jQuery.ajax({
            url:"/dashboard/job_applicants/"+id,
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
}

var dashboard = new Dashboard();