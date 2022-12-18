<?php
	// session_start();
  if(isset($_POST['register'])){
    include('connection.php');
    $query = "insert into users values(null,'$_POST[name]','$_POST[email]','$_POST[password]',$_POST[mobile])";
  	$query_run = mysqli_query($connection,$query);
    if($query_run){
      echo "<script type='text/javascript'>
      	alert('User registered successfully....');
        window.location.href = 'login.php';  
      </script>";
    }
    else{
      echo "<script type='text/javascript'>
      	alert('Error...Plz try again.');
      	window.location.href = 'register.php';
      </script>";
    }
  }
?>
<html>
    <head>
        <title>Register Page</title>
        <!-- Bootsrap Files -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"></link>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body style="background-color:#eaeaea;">
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
            <div class="col-md-4" id="login_form">
            <center><h3><u>New User Registration</u></h3></center>
            <form action="" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input class="form-control" type="text" name="name" placeholder="Enter your Name" required>
                </div>
                <div class="form-group">
                <label for="email">Email:</label>
                <input class="form-control" type="text" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                <label for="password">Password:</label>
                <input class="form-control" type="password" name="password" placeholder="Choose Password" required>
                </div>
                <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input class="form-control" type="text" name="mobile" placeholder="Enter Mobile No." required>
                </div>
                <center><button class="btn btn-danger" type="submit" name="register" style="background-color:#E30B5C;"> Register</button></center>
            </form>
            </div>
        </div>
        <br>
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