<?php 
session_start();

include_once('lib/dao.php');
include_once('lib/model.php');
include_once('lib/dbconnect.php');
$d = new dao();
$m = new model();

if(!isset($_SESSION['email'])) {
    header('location:login.php');
}

$q=$d->select("company_info","","");

    $data=mysqli_fetch_array($q);
    extract($data);
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php echo $c_name; ?></title>

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/maps/jquery-jvectormap-2.0.1.css" />
    <link href="css/icheck/flat/green.css" rel="stylesheet" />
    <link href="css/floatexamples.css" rel="stylesheet" type="text/css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/nprogress.js"></script>
    <script>
        NProgress.start();
    </script>
    
    

</head>


<body class="nav-md">

    <div class="container body">


        <div class="main_container">

            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">

                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span><?php echo $c_name; ?></span></a>
                    </div>
                    <div class="clearfix"></div>

                    <!-- menu prile quick info -->
                    <div class="profile">
                        <div class="profile_pic">
                          

                            <img src="../images/user/<?php echo $_SESSION['profile_photo']; ?>" alt="..." class="img-circle profile_img" width="50%">
                        </div>
                       <div class="profile_info">
                            <span>Welcome</span>
                            <h2><?php
                                  echo $_SESSION['username'];

                                ?></h2>
                        </div>
                    </div>
                    <!-- /menu prile quick info -->

                    <br>