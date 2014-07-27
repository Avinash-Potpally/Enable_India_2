
			
jQuery(function($){
	//alert("AB");
	$('#f2').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			userName:{
				required:true,
				minlength:4
			},
			emailID: {
				required: true,
				email:true
			},
			password: {
				required: true,
				minlength: 8
			},
			confirmPassword: {
				required: true,
				equalTo: "#f2 #password"
			}
		},

		messages: {
			emailID: {
				required: "Please provide a valid email.",
				emailID: "Please provide a valid email."
			},
			password: {
				required: "Please specify a password.",
				minlength: "Please enter password more than 8 characters length."
			},
			
			confirmPassword:{
				required:"Please enter the password to confirm",
				equalTo:"Please re enter the same password"
			},
			
			userName: {
				required: "Please enter your full name.",
				minlength: "Name should be more than 4 characters length."
			}
			
		},
		
		showErrors: function(errorMap, errorList) 
		{
			
			if(errorList.length!=0)
			{
				//console.log(errorList);
				$('#f2 .error-block').removeClass('hidden');
				$('#f2 .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#f2 .error-block').addClass('hidden');
				
			}
		},
		
		submitHandler: function(form) {
			
			form.p.value = hex_sha512(form.password.value);
			form.password.value = "";
			form.confirmPassword.value = "";
			//console.log(form.serializeArray());
			var postData=$(form).serializeArray();
			
			$('#f2 .status-block').removeClass('hidden');
			$('#f2 input,select,button').attr("disabled",true);
			//alert("AB11");
			//console.log(postData);
			$.ajax(
			{
				url : "./registration_process.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					//alert(data);
					if(data=="**Successfully Registered**")
					{
						$('#login-box').removeClass('hidden');
						$('#login-box.error-block.message').html(data);
					}
					else
					{
						$('#f2 .error-block').removeClass('hidden');
						$('#f2 .error-block .message').html(data);
					}
					//data: return data from server
					//window.location.assign("ma_login.html");
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					//if fails
					alert("Unable to register due to network failure");
				}
			}).done(function()
			{
				
				$('#f2 .status-block').addClass('hidden');
				$('#f2 input,select,button').attr("disabled",false);
			
			});
		}
		
	});
	
	$("#f2 button[type='reset']").click(function()
	{
		console.log("resetting form..");
		$("#f2 .error-block").addClass('hidden');
	});
	
	$('#f1').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			uid: {
				required: true,
				minlength: 5
			},
			lpassword: {
				required: true,
				minlength: 6
			}
		},

		messages: {
			uid: {
				required: "Please provide a valid userID."				
			},
			lpassword: {
				required: "Please specify a password.",
				minlength: "Password must be more than 8 characters length."
			}
			
		},
		
		showErrors: function(errorMap, errorList) {
			
			if(errorList.length!=0)
			{
				console.log(errorList);
				$('#f1 .error-block').removeClass('hidden');
				$('#f1 .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#f1 .error-block').addClass('hidden');
			}
		},
		
		invalidHandler: function (event, validator) { //display error alert on form submit   
			//$('.alert-danger', $('.f1')).show();
			$('#f1 .error-block').removeClass('hidden');
			
		},

		submitHandler: function (form) {
		    //alert("In login page");
			//alert(form.password.value);
			form.p.value = hex_sha512(form.lpassword.value);
			//form.lpassword.value = "";
			var postData=$(form).serializeArray();
			
			//console.log(postData);
			$.ajax(
			{
				url : "./login-process.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					alert(data);
					if(data=="login failed" || data=="failed")
					{
						alert("sorry");
						$('#f1 .error-block').removeClass('hidden');
						$('#f1 .error-block .message').html("Login Failed.");
					}
					else if(data=="student")
					{		
						alert("student");
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
					}
					else if(data=="mentor")
					{		
						alert("mentor");
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
					}
					else if(data=="pmentor")
					{		
						alert("pmentor");
						//$('#f1 .error-block').removeClass('hidden');
						//$('#f1 .error-block .message').html(data);
					}
					//data: return data from server
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					//if fails
					alert("Unable to login due to network failure");
				}
			});
		}
		
	});
	
});