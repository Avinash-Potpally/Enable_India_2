<?
session_start();
include 'connection.php';
$uid=$_SESSION['uname'];
$em=$_GET['uid'];
mysql_query("update user_info set status='active' where email='$em'");
echo "<script>alert('Updated Status');</script>";
echo "<script> window.location='./moderator.php';</script>";
?>