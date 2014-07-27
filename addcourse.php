<?
session_start();
include 'connection.php';
$uid=$_SESSION['uname'];
$course=$_POST['course'];
mysql_query("insert into mentor_skill values('$uid','$course')");
echo"<script>alert('Course Added');</script>";
echo "<script>window.location='./mentor_AddCourse.php';</script>";
?>