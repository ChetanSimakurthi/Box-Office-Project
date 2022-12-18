<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
		<!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body style="overflow-x: hidden; background-color:#eaeaea;">
    <!-- Header code starts here -->
    <div class="row" id="header">
      <div class="col-md-4" >
        <h4 style="padding-left:15px;font-family:'Comic Sans MS';">BOX OFFICE</h4>
      </div>
      <div class="col-md-7" style="text-align: right;">
        <ul>
          <li><a href="index.php" class="active">Home</a></li>
          <li><a href="movies.php">Movies</a></li>
          <li><a href="register.php">Sign Up</a></li>
          <li><a href="login.php">User Login</a></li>
          <li><a href="admin/login.php">Admin Login</a></li>
        </ul>
      </div>
    </div>
    <!-- Header code ends here -->
    <div class="row">
      <div class="col-md-12" style="padding:15px;margin-left:15px;margin-right:15px;">
        <h3 style="color:#E30B5C;"><b>About :</b></h3>
        <p>
        Box Office is one of a kind movie ticket booking website where you can find and book tickets of your favorite films at nearby theatres.
It is your one stop destination for movies.
 We're continuosly improve ourselves to make your experience of booking movie tickets simple.
 </p>
      </div>
    </div>
    <center><h3><u>Recently Released Movies</u></h3></center>
    <div class="row" style="margin:20px;">
      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/avatar2.webp" alt="Card image cap">
          <div class="card-body">
            
            <a href="viewMovie.php?mid=6" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/ramsetu.jpeg" alt="Card image cap">
          <div class="card-body">
            
            <a href="viewMovie.php?mid=8" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>

      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/ps1.jpg" alt="Card image cap">
          <div class="card-body">

            <a href="viewMovie.php?mid=9" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>


      <div class="col-md-3">
      <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="images/movie2.jpeg" alt="Card image cap">
          <div class="card-body">
            
            <a href="viewMovie.php?mid=2" class="btn btn-primary btn-sm">View details</a>
            <a href="login.php" class="btn btn-danger btn-sm">Book ticket</a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer">
    <hr></hr>
    <center>
      <p> copyrighted(c) 2022 @ www.boxoffice.com All rights reserved. Developed by Chetan Simakurthi</p>
      <a href="https://www.facebook.com/chetanmj.1512" class="fa fa-facebook"></a>  
      <a href="https://twitter.com/CS__Tweets" class="fa fa-twitter"></a>     
      <a href="https://www.linkedin.com/in/chetan-simakurthi-7955a1195/" class="fa fa-linkedin"></a>  
      <a href="https://www.instagram.com/chetan_mj._/" class="fa fa-instagram"></a>  
      <a href="#" class="fa fa-youtube"></a>     
    </center>
    </div>
    <br>
  </body>
</html>
