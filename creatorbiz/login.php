<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>
<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <title>Creeator Biz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="login-style.css">
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Creato Biz</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html">ABOUT</a></li>
                    <li><a href="https://drive.google.com/drive/u/0/folders/1adoOv5jFDM988hDSYfGNyZ3Kig_WNC1T?fbclid=IwAR0KR3MVEDkf8UwCKTzon8crrIuYP2DNiTCFS2_SQhp_IKxM-SItJLEdBMI">FREE COURSES</a></li>
                    <li><a href="index.html">SERVICES</a></li>
                    <li><a href="index.html">PRODUCTS</a></li>
                    <li><a href="index.html">PORTFOLIO</a></li>
                    <li><a href="index.html">PRICING</a></li>
                    <li><a href="index.html">CONTACT</a></li>
                    <li><a href="login.php">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  form code  -->
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <h2 class="active"> Sign In </h2>
            <a href="sign-up.php">
                <h2 class="inactive underlineHover">Sign Up </h2>
            </a>

            <!-- Icon -->
            <div class="fadeIn first">
                <i style='font-size:24px' class='fas'>&#xf406;</i>
            </div>

            <div class="wrapper">
    <section class="form login">
      <header>Realtime Chat App</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="field input">
          <label>Email Address</label>
          <input type="text" name="email" placeholder="Enter your email" required>
        </div>
        <div class="field input">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Continue to Chat" class="buttonsubmit">
        </div>
      </form>
      <div class="link">Not yet signed up? <a href="sign-up.php">Signup now</a></div>
    </section>
  </div>
  
  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/login.js"></script>

        </div>
    </div>

    <!-- Image of Creator Biz -->
    <img src="map.png" class="w3-image w3-greyscale-min" style="width:100%">

    <footer class="container-fluid text-center">
        <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span>
        </a>
    </footer>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>