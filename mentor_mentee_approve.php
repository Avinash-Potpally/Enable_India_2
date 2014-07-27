<?
session_start();
include 'connection.php';
$uid=$_SESSION['uname'];
$em=$_GET['uid'];
$mentor=$_GET['mid'];

$q=mysql_query("select course from mentee_req where mt_id='$em'");
if($row=mysql_fetch_array($q))
{
$course=$row['course'];
}
//echo $course;
mysql_query("update mentee_req set mod_approval='active' where mt_id='$em' and course='$course'");
mysql_query("insert into mentor_mentee values('$em','$mentor','$course',CURDATE(),'','Inprogress')")or die(mysql_error());
echo "<script>alert('Updated Status');</script>";
echo "<script> window.location='./moderator.php';</script>";
?>
?>