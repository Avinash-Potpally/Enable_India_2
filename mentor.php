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
                      <li style="font-size:.5em; "><a href="#">Children</a></li>  
                    </ul>
                    </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </h1>
            <div class="row " style="margin-left:5px;" >
                <div class="col-md-2" style="background-color:white; border-radius:12px;">
                    <img src="img/profile.jpg"  width="100" height="100" alt="PROFILE PHOTO!" style="padding:5px;">
                    <ul class=" nav nav-pills" >
                        <li><a href="#">Edit Profile</a></li><br><br>
                        <span> Arpan Bhandari </span><br>
                        <span> 1BM11I022 </span><br>
                        <span>Mob: +91 9632960321</span><br><br>
                        <!--<li><a href="#"></a></li><br><br>
                        <li><a href="#"></a></li><br><br>
                        <li><a href="#"></a></li><br><br>-->
                    </ul>
                </div>
                
                <div class="col-md-9 col-md-offset-1" style="background-color:white; opacity:.95; border-radius:12px;" >
                    <?php
                        echo "<span style=\"color:black;\"> Number of learning Mentees:</span><br><br>";
                        echo "<span style=\"color:black;\"> List of Mentees:</span><br><br>";
                        echo "<span style=\"color:black;\"> Other Details:</span><br><br><br><br><br>";
                        echo "<span style=\"color:black;\"> Want to shar knowledge? <a href=\"#\">Take up new Challenge!</a> </span><br><br><br>";

                    ?>
                </div>
            </div>
            
        </div>
        
    </body>
</html>