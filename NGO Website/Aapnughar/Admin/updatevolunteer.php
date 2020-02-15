


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
                                    <h2>User <small>Update Volunteer</small></h2>
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
                                            $v_id=$_GET['v_id'];
                                            $q=$d->select("volunteer","v_id='$v_id'","");
                                            $data=$q->fetch_array();
                                            extract($data);

                                        ?>
                                     <!-- <form> -->
                                   
                                <form action="controller.php" method="post" enctype="multipart/form-data">

                                        <h1>Update User</h1>    
                                   
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Volunteer ID" required="" name="v_id" id="v_id" value="<?php echo $v_id; ?>" >
                                        </div>
                                    
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Volunteer Name" required="" name="name" id="name" value="<?php echo $name; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Volunteer Occupation" required="" name="occupation" id="occupation" value="<?php echo $occupation; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="About " required="" name="about" id="about" value="<?php echo $about; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder=" Education " required="" name="education" id="education" value="<?php echo $education; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Volunteer Address" required="" name="address" id="address" value="<?php echo $address; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Contact No" required="" name="mobile" id="mobile" value="<?php echo $mobile; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" required="" name="email" id="email" value="<?php echo $data['email']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <img src="../images/volunteer/<?php echo $profile_photo; ?>" height="100px" width="100px">
                                            <label>Profile</label>
                                            <input type="file" name="profile_photo" default="<?php echo $profile_photo;?>">

                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" name="updatevolunteer" value="updatevolunteer" id="updatevolunteer">Update</button>
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


