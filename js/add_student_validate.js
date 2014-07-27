
jQuery(function($){
	$('#add_student').validate({
		errorElement: 'div',
		errorClass: 'help-block',
		focusInvalid: false,
		onkeyup:false,
		rules: {
			rollno:{
				required: true,
				minlength: 5
				maxlength: 11
			},
			studentname: {
				required: true,
				minlength: 3
			},
			fathername: {
				required: true,
				minlength: 3
			},
			stuemail: {
				required: true,
				email:	true
			},
			syearid: {
				required: true,
				minlength: 1
				maxlength: 4
			},
			eyearid: {
				required: true,									},

			dob:{
					required: true
				},
				
			gender:{
						required: true
					}
			
			
		},

		messages: {
			rollno: {
				required: "Please provide a valid roll no.",
				minlength: "Please enter roll no more than 5 characters length."
				maxlength: "Please enter the roll less than 11 characters length
			},
			
			studentname: {
				required: "Please enter your full name.",
				minlength: "Name should be more than 3 characters length."
			},
			
			fathername: {
				required: "Please enter your full name.",
				minlength: "Name should be more than 3 characters length."
			},
			yearid: {
				required: "Please enter your full name.",
				minlength: "year id should be more than 1 characters length."
			},
			
			stuemail: {
				required: "Please provide a valid email.",
				stuemail: "Please provide a valid email."
			},
			
			dob: {
				required: "Please select Date of birth."
			},

			gender: {
				required: "Please select gender."
			}
			
		},
		
		showErrors: function(errorMap, errorList) 
		{
			
			if(errorList.length!=0)
			{
				//console.log(errorList);
				$('#add_student .error-block').removeClass('hidden');
				$('#add_student .error-block .message').html(errorList[0].message);
				
			}
			else{
				$('#add_student .error-block').addClass('hidden');
				
			}
		},
	
		submitHandler: function(form) {
			alert("AB11");
			/*form.p.value = hex_sha512(form.password.value);
			form.password.value = "";
			form.confirmPassword.value = "";
			//console.log(form.serializeArray());*/
			var postData=$(form).serializeArray();
			
			$('#add_student .status-block').removeClass('hidden');
			$('#add_student input,select,button').attr("disabled",true);
			//alert_box("AB11");
			//console.log(postData);
			$.ajax(
			{
				url : "./add_student_store.php",
				type: "POST",
				data : postData,
				success:function(data, textStatus, jqXHR) 
				{
					alert(data);
					/*if(data=="**Successfully Registered**")
					{
						$('#login-box').removeClass('hidden');
						$('#login-box.error-block.message').html(data);
					}
					else
					{
						$('#add_student.error-block').removeClass('hidden');
						$('#add_student .error-block .message').html(data);
					}
					//data: return data from server
					//window.location.assign("ma_login.html");*/
				},
				error: function(jqXHR, textStatus, errorThrown) 
				{
					//if fails
					alert("Unable to register due to network failure");
				}
			}).done(function()
			{
				
				$('#add_student .status-block').addClass('hidden');
				$('#add_student input,select,button').attr("disabled",false);
			
			});
		}
		
	});
	
	$("#add_student button[type='reset']").click(function()
	{
		console.log("resetting form..");
		$("#add_student .error-block").addClass('hidden');
	});
	});
	