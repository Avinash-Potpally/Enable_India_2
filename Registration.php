    <?
		 include'connection.php';
		  $name=$_POST['uname'];
		  $email=$_POST['email'];
		  $pw=$_POST['password'];
		  $qual=$_POST['qual'];
		  //$status=$-POST['status'];
		  $dob=$_POST['dob'];
		  //$addr=$_POST['address'];
		  $ph=$_POST['tel'];
		 // $lang=$_POST['language'];
		  $gen=$_POST['gender'];
		  $skype=$_POST['skype'];
		  $fb=$_POST['fb'];
		  $role=$_POST['role'];
		 $repwd=$_POST['repassword'];
		if($repwd==$pw)
		{
		 $rowset = mysql_query("insert into user_info values ('','$name','$email','$pw','$qual','','$dob','$ph','','$gen','$skype','$fb','$role','pending')");
		 echo"<script>alert('Success');</script>";
		 echo "<script>window.location='./index.php';</script>";
		// echo"1";
		}
		else
		{
		echo"<script>alert('Password Mis-Match');</script>";
		 echo "<script>window.location='./registrationForm.php';</script>";
		//echo "2";
		
		}
		
		   
    ?>