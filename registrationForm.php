<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="css/custom.css" media="screen">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" media="screen">
        <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script type="text/javascript">
function validateForm()
{
if(document.Registration form.password.value.compare(document.Registration form.confirm_password.value)!=0)
{
alert("Re-enter Confirm password!!!");
}

}
</script>
    </head>
    <body background="img/background.jpg" style="background-color:#808080">
        <div class="container" >
            <h1 class="logo">
                
                <!--<ul>
                    <li>Persons with Disability</li>
                    <li>Employers</li>
                    <li>Training</li>
                    <li>Partners</li>
                    <li>Children</li>
                    
                </ul>-->
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
                      <li style="font-size:.5em; " ><a href="#">Persons with Disability</a></li>
                      <li style="font-size:.5em; "><a href="#" >Employers</a></li>
                      <li style="font-size:.5em; "><a href="#">Training</a></li>
                      <li style="font-size:.5em; "><a href="#">Partners</a></li>
                      <li style="font-size:.5em; "><a href="#">Children</a></li>  
                    </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </h1>
            <div class="row " style="margin-left:5px;" >
                <div class="col-md-2" style="background-color:white; border-radius:12px;">
                    <ul class="sideLists nav nav-pills" >
                        <li><a href="#">Home</a></li><br><br>
                        <li><a href="#">About Us</a></li><br><br>
                        <li><a href="#">Events</a></li><br><br>
                        <li><a href="#">Site Map</a></li><br><br>
                    </ul>
                </div>
                <div class="col-md-9 col-md-offset-1" style="background-color:white; opacity:.95; border-radius:12px;" >
                    <br>
                    <!--<span id="quote">"No one has ever become poor by helping!"</span>-->
                    <form action="./Registration.php" method="POST" >
                        <input type="text" name="uname" id="name" placeholder="Enter  name.." class=" form-control reg" style="text-align:center;" required>
                        <br>
                        <input type="text" name="email" id="email" placeholder="Enter  emailid.." class="form-control" style="text-align:center;width:50%;" required><br>
                        
                        <input type="password" name="password" placeholder="Enter Password.." class="form-control" style="width:250px;text-align:center;" required>
                        <br>
                        
                        
                        <input type="password" name="repassword"placeholder="Confirm Password.." class="form-control" style="width:250px;text-align:center;" required><br>
                        <input type="tel" pattern="[0-9]{10,10}" name="tel" maxlength="10" placeholder="Enter Mobile Number.." class="form-control" style="width:250px;text-align:center;" required>
                        <span style="margin-left:350px;font-family:matura mt script capitals;color:red;font-size:25px;">Just a few details and you are aboard!!</span>
                        <br>
                        <input type="date" placeholder="Date of Birth" name="dob" class="form-control" style="width:250px;text-align:center;" required><br>
                        
                        <input type="text" class="form-control" name="skype" placeholder="SkypeID" style="text-align:center; width: 50%; position:relative;" required>
                        
               <br>     
                        <input type="text" class="form-control" name="fb" placeholder="Facebook id" style="text-align:center; width: 50%; position:relative;" required><br>
                        <select name="qual" class="form-control" style="width:250px;text-align:center;" required>
                            <option>Select Qualification..</option>
                            <option>B.E/B.Tech</option>
                            <option>M.Tech</option>
                        </select>
                        <br>
                        <select name="gender" class="form-control" style="width:250px;text-align:center;" required>
                            <option>Select Gender</option>
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        <br>
                        <select name="role" class="form-control" style="width:250px;text-align:center;" required>
                            <option>Select Role..</option>
                            <option>Mentor</option>
                            <option>Mentee</option>
                            <option>Moderator</option>
                        </select>
                        <br>
                        <input type="submit" value="Submit!" class="btn btn-primary" style="margin-left:50%;">
                        
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>