


<?php include 'common/header.php'; ?>

                    <!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    <!-- /sidebar menu -->



            <!-- page content -->
                <div class="right_col" role="main">


                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Donation <small>Update Donation</small></h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Settings 1</a>
                                                </li>
                                                <li><a href="#">Settings 2</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                       <?php 
                                            $d_id=$_GET['d_id'];
                                             $q=$d->select("donation","d_id='$d_id'","");
                                            $data=mysqli_fetch_array($q);

                                            extract($data);

                                        ?>
                                     <!-- <form> -->
                                   
                                <form action="controller.php" method="post" enctype="multipart/form-data">

                                        <h1>Update Donation</h1>    
                                   
                                        
                                    
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name" required="" name="username" id="username" value="<?php echo $name; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" required="" name="email" id="email" value="<?php echo $email; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number" required="" name="phonenumber" id="phonenumber" value="<?php echo $mobile; ?>" />
                                        </div>


                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Address" required="" name="address" id="address" value="<?php echo $address; ?>" />
                                        </div>


                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Donation Type" required="" name="donationtype" id="donationtype" value="<?php echo $donate_type; ?>" />
                                        </div>


                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Donation Amount" required="" name="donationamount" id="donationamount" value="<?php echo $amount; ?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <button class="btn btn-primary" name="updatedonation" value="updatedonation" id="updateuserbtn">Update</button>
                                        </div>
                                        
                                        
                                </form>

                                </div>
                            </div>
                        </div>


                       
                    </div>

                </div>


            </div>
            <!-- /page content -->
<?php include 'common/footer.php'; ?>   


