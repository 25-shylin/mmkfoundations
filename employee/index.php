<?php session_start();?>
<?php 
  include("includes/database.php");
 ?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <!--=========================*
                Met Data
    *===========================-->
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Employee | MMK FOUNDATION">

    <!--=========================*
              Page Title
    *===========================-->
    <title>Employee | MMK FOUNDATION</title>

    <!--=========================*
                Favicon
    *===========================-->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png">

    <!--=========================*
            Bootstrap Css
    *===========================-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!--=========================*
              Custom CSS
    *===========================-->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--=========================*
               Owl CSS
    *===========================-->
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">

    <!--=========================*
            Font Awesome
    *===========================-->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!--=========================*
             Themify Icons
    *===========================-->
    <link rel="stylesheet" href="assets/css/themify-icons.css">

    <!--=========================*
               Ionicons
    *===========================-->
    <link href="assets/css/ionicons.min.css" rel="stylesheet"/>

    <!--=========================*
              EtLine Icons
    *===========================-->
    <link href="assets/css/et-line.css" rel="stylesheet"/>

    <!--=========================*
              Feather Icons
    *===========================-->
    <link href="assets/css/feather.css" rel="stylesheet"/>

    <!--=========================*
              Modernizer
    *===========================-->
    <script src="assets/js/modernizr-2.8.3.min.js"></script>

    <!--=========================*
               Metis Menu
    *===========================-->
    <link rel="stylesheet" href="assets/css/metisMenu.css">

    <!--=========================*
               Slick Menu
    *===========================-->
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    
    <!--=========================*
              Flag Icons
    *===========================-->
    <link href="assets/css/flag-icon.min.css" rel="stylesheet"/>

    <!--=========================*
            Google Fonts
    *===========================-->

    <!-- Font USE: 'Roboto', sans-serif;-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">

    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="login-bg">
                    <div class="login-overlay"></div>
                    <div class="login-left">
                        <img src="images/logo.png" alt="Logo">
                        <h1 style="color: #fff;">Employee</h1>
                        <!-- <a href="../index.php" class="btn btn-primary">Learn More</a> -->
                    </div><!--login-left-->
                </div><!--login-bg-->

                <div class="login-form">
                    <form action="#" method="post">
                        <div class="login-form-body">
                            <div class="form-gp">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" id="exampleInputEmail1" name="employeeno" autocomplete="off">
                                <i class="ti-email"></i>
                            </div>
                            <div class="form-gp">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" id="exampleInputPassword1" name="password" autocomplete="off">
                                <i class="ti-lock"></i>
                            </div>
                            
                            <div class="submit-btn-area">
                                <button id="form_submit" type="submit" class="btn btn-primary" name="login">Submit <i class="ti-arrow-right"></i></button>
                                
                            </div>
                            
                        </div>
                    </form>
                </div><!--login-form-->

            </div><!--row-->
        </div><!--container-fluid-->
    </div><!--wrapper-->


<!--=========================*
            Scripts
*===========================-->

<!-- Jquery Js -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap 4 js -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel Js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/metisMenu.min.js"></script>
<!-- SlimScroll Js -->
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!-- Slick Nav -->
<script src="assets/js/jquery.slicknav.min.js"></script>
<!-- Fancy Box Js -->
<script src="assets/js/jquery.fancybox.pack.js"></script>
<!-- Main Js -->
<script src="assets/js/main.js"></script>
</body>


</html>
<?php 
 // login
    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($con, $_POST['employeeno']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $encrypt = md5($password);
      
      

      $volunteersquery = "select * from employee where employeeno = '$username' AND password = '$password'";

      $run = mysqli_query($con, $volunteersquery);

      if (mysqli_num_rows($run)) {
        $_SESSION['username'] = $username;
        echo "<script>window.open('dashboard.php','_self')</script>";
      }
      else {
        echo "<script>alert('please enter correct user name password')</script>";
        exit;
      }
     }
     //end_login

     

 ?>