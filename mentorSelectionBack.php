<?
session_start();
include 'connection.php';
$uid=$_SESSION['uname'];

$course=$_GET['course'];
$mid=$_GET['mid'];
mysql_query("insert into mentee_req values('$uid','$course',CURTIME(),'$mid','')");
echo "<script>alert('Successfully Linked');</script>";
echo"<script>window.location='./mentee.php'</script>";
?>