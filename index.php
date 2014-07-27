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
                <div class="col-md-5 col-md-offset-1" style="background-color:white; border-radius:12px;">
                    <h2 style="font-family:matura mt script capitals;color:black;font-size:20px;">No one has ever become poor by helping!</h2>
                    <p style="padding:5px;">
                        We look to provide help to the physically challenged from people who have overcome the same problems 
                        or from a few people who think sharing their bit of a knowledge if the least they could do help the needy people of this beautiful world.
                    </p>
                </div>
                <div class="col-md-3 col-md-offset-1" style="background-color:white; opacity:.95; border-radius:12px;" >
                    <br>
                    <!--<span id="quote">"No one has ever become poor by helping!"</span>-->
                    <form action="login_valid.php" method="GET">
                        <br>
                        <input type="text" id="username" name="uname" class="form-control " placeholder="Username" required>
                        <br>
                        <input type="password" id="Password" name="pwd" class="form-control " placeholder="Password" required>
                        <br>
                        <input type="submit" value="Login!" id="login" class="btn btn-primary  "><br>
                        <span style="margin-left:75px;"><a href="#">Forgot Password?</a></span>
                        <br>
                        &nbsp;<span style="margin-left:75px;"><a href="./registrationForm.php">Register here</a></span>

                    </form>
                </div>
            </div>
            <div class="row">
                <span style="font-family:matura mt script capitals;color:white;font-size:50px; margin-top:450px;">Welcome to a world without limits!</span>
            </div>
        </div>
        
    </body>
</html>