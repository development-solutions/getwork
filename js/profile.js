
function Profile(){

	this.addEducationBlcok = function(ele){

		html='<div class="profile-edit row">';
		html+='<input type="hidden" name="eduId[]" value=""/>';
		html+='<span onclick="window.profile.deleteEdu(this)" class="cstm-del-btn glyphicon glyphicon-remove-sign" aria-hidden="true"></span>';
		html+='<div class="col-md-12 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Degree Title <span class="required"></span></label>';
		html+='<input placeholder="Degree Title" class="form-control" type="text" name="degree_title[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-12 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>University/College <span class="required"></span></label>';
		html+='<input placeholder="University/College" class="form-control" type="text" name="degree_college[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-6 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Degree start Date <span class="required"></span></label>';
		html+='<input placeholder="Pick Date" data-date-format="dd-mm-yyyy" class="form_date form-control" type="text" name="degree_start_date[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-6 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Degree End Date <span class="required"></span></label>';
		html+='<input placeholder=" Pick Date" data-date-format="dd-mm-yyyy" class="form_date form-control" type="text" name="degree_end_date[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-12 col-sm-12 col-xs-12">';
		html+='<div class="form-group">';
		html+='<label>Description <span class="required"></span></label>';
		html+='<textarea cols="6" rows="8" placeholder="" class="form-control" name="degree_description[]"></textarea>';
		html+='</div>';
		html+='</div>';
		html+='</div>';
		jQuery(ele).parent().before(html);
		$('.form_date').datetimepicker({
	        language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
	        autoclose: 1,
	        todayHighlight: 1,
	        startView: 2,
	        minView: 2,
	        forceParse: 0
	    });
	}	

	this.addExperienceBlock = function(ele){

		html='<div class="profile-edit row">';
		html+='<input type="hidden" name="expId[]" value=""/>';
		html+='<span onclick="window.profile.deleteExp(this)" class="cstm-del-btn glyphicon glyphicon-remove-sign" aria-hidden="true"></span>';
		html+='<div class="col-md-12 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Position <span class="required"></span></label>';
		html+='<input placeholder="Position Title" class="form-control" type="text" name="job_profile[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-12 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Company <span class="required"></span></label>';
		html+='<input placeholder="Company Name" class="form-control" type="text" name="job_company[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-6 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Job start Date <span class="required"></span></label>';
		html+='<input placeholder="Pick Date" data-date-format="dd-mm-yyyy" class="form_date form-control" type="text" name="job_start_date[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-6 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Job End Date <span class="required"></span></label>';
		html+='<input placeholder=" Pick Date" data-date-format="dd-mm-yyyy" class="form_date form-control" type="text" name="job_end_date[]">';
		html+='</div>';
		html+='</div>';
		html+='<div class="col-md-12 col-sm-12 col-xs-12">';
		html+='<div class="form-group">';
		html+='<label>Description <span class="required"></span></label>';
		html+='<textarea cols="6" rows="8" placeholder="" class="form-control" name="job_description[]"></textarea>';
		html+='</div>';
		html+='</div>';
		html+='</div>';
		jQuery(ele).parent().before(html);
		$('.form_date').datetimepicker({
	        language:  'fr',
	        weekStart: 1,
	        todayBtn:  1,
	        autoclose: 1,
	        todayHighlight: 1,
	        startView: 2,
	        minView: 2,
	        forceParse: 0
	    });
	}

	this.addSkillBlock = function(ele){

		html='<div class="profile-edit row">';
		html+='<input type="hidden" name="skillId[]" value=""/>';
		html+='<span onclick="window.profile.deleteSkill(this)" class="cstm-del-btn glyphicon glyphicon-remove-sign" aria-hidden="true"></span>';
		html+='<div class="col-md-12 col-sm-12 col-xs-12 nopadding">'
		html+='<div class="col-md-12 col-sm-12">';
		html+='<div class="form-group">';
		html+='<label>Skill Name <span class="required"></span></label>';
		html+='<input placeholder="Skill Name" class="form-control" type="text" name="skill_name[]">';
		html+='</div>';
		html+='</div>';
		html+='</div>';
		html+='</div>';
		jQuery(ele).parent().before(html);
	}

	this.deleteEdu = function(ele){

		var id = jQuery(ele).parent().find("input[name='eduId[]']").val();
		var res = confirm("Are you sure you want to remove this section ?");
		if(res){
			if(id!=''){
				jQuery.ajax({
					url:"/profile/deleteEdu",
					type:"POST",
					async:true,
					data:{id:id},
					beforeSend:function(){
						jQuery(".cstm-loader").show();
					},
					success:function(){
						jQuery(ele).parent().remove();
					},
					complete:function(){
						jQuery(".cstm-loader").hide();
					}
				});
			}else{
				jQuery(ele).parent().remove();
			}
		}
	}

	this.deleteExp = function(ele){

		var id = jQuery(ele).parent().find("input[name='expId[]']").val();
		var res = confirm("Are you sure you want to remove this section ?");
		if(res){
			if(id!=''){
				jQuery.ajax({
					url:"/profile/deleteExp",
					type:"POST",
					async:true,
					data:{id:id},
					beforeSend:function(){
						jQuery(".cstm-loader").show();
					},
					success:function(){
						jQuery(ele).parent().remove();
					},
					complete:function(){
						jQuery(".cstm-loader").hide();
					}
				});
			}else{
				jQuery(ele).parent().remove();
			}
		}
	}

	this.sendMessage = function(ele){
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
			url:"/profile/sendMessage",
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

	this.deleteMsg = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete this Message ?");
		if(response){
			jQuery.ajax({
				url:"/profile/delete_msg/"+id,
				async:true,
				beforeSend:function(){
					jQuery(".cstm-loader").show();
				},
				success:function(res){
					if(res){
						alert("Message is deleted successfully!");
						jQuery(ele).closest(".job-box").fadeOut("slow").remove();
					}
				},
				complete:function(){
					jQuery(".cstm-loader").hide();
				}
			});
		}
	}

	this.deleteSkill = function(ele){

		var id = jQuery(ele).parent().find("input[name='skillId[]']").val();
		var res = confirm("Are you sure you want to remove this section ?");
		if(res){
			if(id!=''){
				jQuery.ajax({
					url:"/profile/deleteSkill",
					type:"POST",
					async:true,
					data:{id:id},
					beforeSend:function(){
						jQuery(".cstm-loader").show();
					},
					success:function(){
						jQuery(ele).parent().remove();
					},
					complete:function(){
						jQuery(".cstm-loader").hide();
					}
				});
			}else{
				jQuery(ele).parent().remove();
			}
		}
	}

	this.applyJob = function(ele){
		var id = jQuery(ele).attr("data-id");
		jQuery.ajax({
			url:"/profile/applyJob/"+id,
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
					jQuery(ele).contents().eq(1).replaceWith("Applied");			
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

	this.bookmarkJob = function(ele){
		var id = jQuery(ele).attr("data-id");
		jQuery.ajax({
			url:"/profile/bookmarkJob/"+id,
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
					jQuery(ele).contents().eq(1).replaceWith("Bookmarked");			
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

	this.delBookmark = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete from Bookmark List ?");
		if(response){
			jQuery.ajax({
				url:"/profile/delete_bookmark/"+id,
				async:true,
				beforeSend:function(){
					jQuery(".cstm-loader").show();
				},
				success:function(res){
					var html = '<div class="col-md-8 col-sm-12 col-xs-12"><h4 class="search-result-text">You have 0 Bookmark jobs.</h4></div>';
					var data = JSON.parse(res);
					toastr.options = {
			            "closeButton": true,
			            "positionClass": "toast-top-center",
			            "progressBar": true,
			            "showMethod": "fadeIn",
			            "hideMethod": "fadeOut"
			        }
					if(!data.error){
						jQuery(ele).closest(".job-box").fadeOut("slow").remove();
				        toastr.success(data.response,{timeOut: 5000});
				        if(!jQuery(".all-jobs-list-box2").children().length){
							jQuery(".all-jobs-list-box2").html(html);
						}
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

	this.subscribeOrg = function(ele){
		var id = jQuery(ele).attr("data-id");
		jQuery.ajax({
			url:"/profile/subscribeOrg/"+id,
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

	this.shortListCourse = function(ele){
		var id = jQuery(ele).attr("data-id");
		if(id=="" || id===undefined || id===null)
			return true;
		jQuery.ajax({
			url:"/profile/shortListCourse/"+id,
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
					jQuery(ele).removeClass("btn-default").addClass("btn-primary cstm-btn").contents().eq(1).replaceWith("Shortlisted");
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

	this.delCourse = function(ele){
		var id = jQuery(ele).attr("data-id");
		response = confirm("Are you sure you want to delete from course List ?");
		if(response){
			jQuery.ajax({
				url:"/profile/delete_course/"+id,
				async:true,
				beforeSend:function(){
					jQuery(".cstm-loader").show();
				},
				success:function(res){
					var html = '<div class="col-md-8 col-sm-12 col-xs-12"><h4 class="search-result-text">You have 0 shortlisted courses.</h4></div>';
					var data = JSON.parse(res);
					toastr.options = {
			            "closeButton": true,
			            "positionClass": "toast-top-center",
			            "progressBar": true,
			            "showMethod": "fadeIn",
			            "hideMethod": "fadeOut"
			        }
					if(!data.error){
						jQuery(ele).closest(".job-box").fadeOut("slow").remove();		
				        toastr.success(data.response,{timeOut: 5000});
				        if(!jQuery(".all-jobs-list-box2").children().length){
							jQuery(".all-jobs-list-box2").html(html);
						}
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

	this.queryCourse = function(){
		var objData = new Object();
		var data = jQuery("#job-form").serializeArray();
		for(var i in data){
			objData[data[i].name] = data[i].value;
		}

		jQuery.ajax({
			url:"/profile/queryCourse",
			data:objData,
			type:"POST",
			async:true,
			beforeSend:function(){
				jQuery(".cstm-loader").show();
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
				jQuery(".cstm-loader").hide();
			}
		});
	}

	this.loadMsg = function(ele){
		var id = jQuery(ele).attr("data-id");
		if(id=="" || id===undefined || id===null)
			return true;
		jQuery.ajax({
			url:"/profile/loadMessages/"+id,
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
							var img = result[i].logo!=""?result[i].logo:"logo.jpg";
							var name = result[i].company_name;
							var cls = "left";
						}else{
							var img = result[i].profile_image!=""?result[i].profile_image:"profile.jpg";
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
}

var profile = new Profile();