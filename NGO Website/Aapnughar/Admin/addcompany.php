


<!DOCTYPE html>
<html>
<head>

    <title></title>
   
</head>
<body>

</body>
</html>



<?php include 'common/header.php'; ?>

                    <!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    <!-- /sidebar menu -->

            <!-- page content -->
                <div class="right_col" role="main">
                        <form action="controller.php" method="post">

                        <h1>Create Account</h1>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Company Name" required="" name="c_name" id="c_name"/>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required="" name="email" id="email" />
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" maxlength=10 placeholder="Contact No." required="" name="contact_no" id="contact_no"/>
                        </div>

                        <div class="form-group">
                            <textarea type="text" class="form-control" placeholder="Address" required="" name="address" id="address"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" name="addcompanybtn" value="addcompanybtn" id="addcompanybtn">OK</button>
                        </div>
                        
                    </form>
                  
        
            </div>
            <!-- /page content -->
<?php include 'common/footer.php'; ?>   


