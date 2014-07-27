<?
session_start();
    session_unset();
    session_destroy();
	echo "<script>alert('Logged Out')</script>";
	echo "<script>window.location='./index.php';</script>"
?>