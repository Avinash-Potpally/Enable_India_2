//alert("hello");
jQuery(function($){
	alert("12345");
	$('#resetpwd1').validate({		
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			cpwd: {
				required: true,
				minlength: 8
			},
			npwd: {
				required: true,
				minlength: 8
			},
			rnpwd: {
				required: true,
				equalTo: "#resetpwd1 #npwd"				
			}			
		},
		
		messages: {
			cpwd: {			
				required: "please enter the current password sent to your mail",
				minlength: "password should be minimum 8 characters length"
			},
			npwd: {
				required: "please enter the new password",
				minlength: "password should be minimum 8 characters length"
			},
			rnpwd: {
				required: "please Re-enter the new password",
				equalTo: "password's do not match"				
			}
		},
		
		showErrors: function(errorMap, errorList) 
		{
			
			if(errorList.length!=0)
			{
				//console.log(errorList);
				$('#resetpwd1 .error-block').removeClass('hidden');
				$('#resetpwd1 .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#resetpwd1 .error-block').addClass('hidden');
				
			}
		},
	
		submitHandler: function(form) {
			alert("write the code first");			
		}
		
	});
	});