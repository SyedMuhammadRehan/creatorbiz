<!DOCTYPE html>
<html lang="en">

<head>
    <title>Payment Transaction</title>
    <meta charset="UTF-8">
    <title>Creator Biz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="sign-up-style.css">
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
                    <li><a href="index.html#about">ABOUT</a></li>
                    <li><a href="https://drive.google.com/drive/u/0/folders/1adoOv5jFDM988hDSYfGNyZ3Kig_WNC1T?fbclid=IwAR0KR3MVEDkf8UwCKTzon8crrIuYP2DNiTCFS2_SQhp_IKxM-SItJLEdBMI">FREE COURSES</a></li>
                    <li><a href="index.html#services">SERVICES</a></li>
                    <li><a href="index.html#portfolio">PORTFOLIO</a></li>
                    <li><a href="index.html#pricing">PRICING</a></li>
                    <li><a href="index.html#contact">CONTACT</a></li>
                    <li><a href="index.html#Login">LOGIN</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!--  form code  -->
    <div class="wrapper fadeInDown" id="a12">
        <div id="formContent">
            <!-- Tabs Titles -->
            <a href="TID.php">
                <h2 class="active"> Bank Details </h2>
            </a>
            <a href="EJ-tid.php">
                <h2 class="inactive underlineHover"> Easypaisa & Jazzcash </h2>
            </a>
             
            <!-- Transaction Details -->
            <h2>After Sending Payment on Below Mentioned Account <br> Please Fill this form and Submit !</h2> 
            <h2> Easypaisa & Jazzcash </h2> <br>
            Easypaisa: 03452625097 <br>
            Jazzcash:  03094350775
            <br> <br>
             
            <!-- Icon -->
            <div class="fadeIn first">
                <i style='font-size:24px' class='fas'>&#xf406;</i>
            </div>

            <!-- easypaisa/Jazcash Payment Form -->
            <form action="payment.php" method="post">
                <input type="text" id="login" class="fadeIn second" name="name" placeholder="Enter Name">
                <input type="text" id="login" class="fadeIn second" name="email" placeholder="Enter Email">
                <input type="text" id="password" class="fadeIn third" name="TID" placeholder="Enter TID">
                <input type="submit" class="fadeIn fourth" value="Submit" name="submit" >
            </form>

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