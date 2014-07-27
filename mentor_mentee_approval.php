<?
session_start();
include 'connection.php';
$uid=$_SESSION['uname'];
$role=$_SESSION['role'];
if($role!="Moderator")
{
echo "<script>alert('Unauthersized Access');</script>";
echo "<script>window.location='./index.php';</script>";
}
$quer=mysql_query("select * from user_info where email='$uid'");
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
       
    </head>
    <body background="img/background.jpg" style="background-color:#808080">
        <div class="container" >
            <h1 class="logo">
                
                 <nav class="navbar navbar-inverse" role="navigation" style="background-color:white;">
                    <div class="container-fluid">
              <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.php" style="color:black;"><b>EnAble India</b></a>
                        </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" >
                    <ul class="nav navbar-nav navbar-right">
                      <li  style="font-size:.5em; " ><a href="#">Persons with Disability</a></li>
                      <li style="font-size:.5em; "><a href="#" >Employers</a></li>
                      <li style="font-size:.5em; "><a href="#">Training</a></li>
                      <li style="font-size:.5em; "><a href="#">Partners</a></li>
					  <li style="font-size:.5em; "><a href="./moderator.php">Moderator Home</a></li>
                      <li style="font-size:.5em; "><a href="./mentor_mentee_approval.php">Mentor-Mentee</a></li>  
					  <li style="font-size:.5em; "><a href="./logout.php">Logout</a></li>
                    </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </h1>
            <div class="row " style="margin-left:5px;" >
                 <div class="col-md-2" style="background-color:white; border-radius:12px;">
                    <img src="img/profile.jpg"  width="100" height="100" alt="PROFILE PHOTO!" style="padding:5px;">
                    <ul class=" nav nav-pills" >
					<?if($row=mysql_fetch_array($quer)or die(mysql_error())) {?>
                        <li><a href="#">Edit Profile</a></li><br><br>
                        <span> Name :<?echo $row['name'];?>  </span><br>
                        <span> Id :<?echo $row['id']?>  </span><br>
                        <span>Mob: <?echo $row['phone'];}?></span><br><br>
                        <!--<li><a href="#"></a></li><br><br>
                        <li><a href="#"></a></li><br><br>
                        <li><a href="#"></a></li><br><br>-->
                    </ul>
                </div>
                
                <span style="font-family:matura mt script capitals;color:black;margin-left:100px;font-size:30px;">With great leadership, comes great responsibility!</span>
                <div class="col-md-9 col-md-offset-1" style="background-color:white; opacity:.95; border-radius:12px;" >
                <!--    <span style="font-family:matura mt script capitals;color:black;font-size:20px;">There is an end to everything, except learning!</span>-->
				<h2>Mentor-Mentee Linking Pending Request<h2>
                    <?php
                        echo "<br>";
                  
						$que=mysql_query("select * from mentee_req where mod_approval='pending'");
						?>
						<table>
						<tr>
						<td><b>User</b></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td><b>Action</b></td>
						</tr>
						<?while($row=mysql_fetch_array($que)){?>
						<tr>
						<td> <?echo $row['mt_id'];?></td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
						<td> <a href="./mentor_mentee_approve.php?uid=<?echo $row['mt_id'];?>&&mid=<?echo $row['mid'];?>"><input type="button" value="Approve" class="btn btn-primary"></a></td>
						</tr>
						
						<?}
                        echo "<br>";
                    ?>
					</table>
                </div>
            </div>
            
        </div>
         
    </body>
</html>