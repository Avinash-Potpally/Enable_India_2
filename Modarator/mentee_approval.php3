<?php
$con=mysqli_connect("example.com","peter","abc123","my_db");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

mysqli_query($con,"UPDATE user_info SET status="activate"
WHERE mt_id=x");

mysqli_close($con);
?>