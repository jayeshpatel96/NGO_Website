<?php 
session_start();
include_once('lib/dao.php');
include_once('lib/model.php');

$d = new dao();
$m = new model();

extract($_POST);

if (isset($_POST['reset'])) {

    extract($_POST);


    $q=$d->select("users","email='$email'");

    $data=mysqli_fetch_array($q);

    if($data>0)
    {
         $otp=mt_rand(100000,999999);
         $_SESSION['botp']= $otp;
         $_SESSION['email']= $email;

         $subject="Forgot Password OTP";
         $txt="Hello Your Forgot Password otp is : $otp!";
         $header="From: admin@Silverwingtechnologies.com";
         mail($email,$subject,$txt,$header);
         header('location:otp.php');

    }   
    else 
    {
        
         header('location:forgot.php?msgError=Wrong Email');
    }
 }

$q1=$d->select("company_info","","");

    $data1=mysqli_fetch_array($q1);
    extract($data1);


 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> <?php echo $c_name; ?> </title>
   

    <!-- Bootstrap core CSS -->

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <!-- Custom styling plus plugins -->
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/icheck/flat/green.css" rel="stylesheet">


    <script src="js/jquery.min.js"></script>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript">

      
    </script>
</head>

<body style="background:#F7F7F7;">



    
    <div class="">
        <a class="hiddenanchor" id="toregister"></a>
        <a class="hiddenanchor" id="tologin"></a>

        <div id="wrapper">
            <div id="login" class="animate form">
                <section class="login_content" id="login_redirect">
                    <form method="post">
                        <h1>Forgot Password</h1>

                         <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required="" name="email" id="email" />
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" name="reset" value="reset" id="reset">Reset</button>
                        </div>

                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> <?php echo $c_name; ?></h1>

                                <p>©2017 All Rights Reserved. <?php echo $c_name; ?></p>
                            </div>
                        </div>
                    </form>
                    <!-- form -->
                </section>
                <!-- content -->
            </div>
          
        </div>
    </div>

</body>

</html>
