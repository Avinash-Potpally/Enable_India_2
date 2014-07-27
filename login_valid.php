<?
session_start();
include 'connection.php';
$uname=$_GET['uname'];
$pwd=$_GET['pwd'];
$rowset=mysql_query("select * from user_info where email='$uname' and  pwd='$pwd'");
if($row = mysql_fetch_array($rowset))
{
	$role=$row['role'];
	$status=$row['status'];
	//echo $status;
	if($status=="pending")
	{
		echo"<script> alert('Approvel Required');</script>";
			echo"<script>window.location='./index.php';</script>";
	}
	if($role=="Mentor")
	{
		echo"<script>window.location='./mentor.php';</script>";
	echo"<script> alert('Success');
	</script>";
	}
	else if($role=="Mentee")
	{
	echo"<script>window.location= './mentee.php';</script>";
	echo"<script> alert('Success');
	</script>";
	}
	else
	{
	//moderator
	echo"<script>window.location= './moderator.php';</script>";
	echo"<script> alert('Success');
	</script>";
	}
	$_SESSION['uname']=$uname;
	$_SESSION['role']=$role;
}
else 
{
	echo"<script> alert('Failed Try Again');</script>";
	echo "<script>window.location='./index.php';</script>";
}
?>