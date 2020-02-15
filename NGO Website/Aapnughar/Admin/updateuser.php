


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
                                    <h2>User <small>Update User</small></h2>
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
                                            $userId=$_GET['userId'];
                                             $q=$d->select("users","","INNER JOIN roletype ON users.roleid=roletype.roleid where userId=$userId");
                                            $data=$q->fetch_array();

                                            $rname=$data['rolename'];

                                        ?>
                                     <!-- <form> -->
                                   
                                <form action="controller.php" method="post" enctype="multipart/form-data">

                                        <h1>Update User</h1>    
                                   
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User ID" required="" name="userId" id="userId" value="<?php echo $data['userId']; ?>" >
                                        </div>
                                    
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="User Name" required="" name="username" id="username" value="<?php echo $data['username']; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email" required="" name="email" id="email" value="<?php echo $data['email']; ?>" />
                                        </div>

                                        <div class="form-group">

                                        <select class="form-control" name="roleid" id="roleid">
                                            <option>--Select--</option>



                                                <?php 

                                                       if($_SESSION['flag']=='1')
                                                        {
                                                            $q=$d->select("roletype","",""); 
                                                        }    
                                                        else
                                                        {
                                                            $q=$d->select("roletype","flag=0","");
                                                        }

                                                     while ($data=mysqli_fetch_array($q))
                                                     {
                                                        extract($data);

                                                        
                                                ?>
                                        
                                            <option <?php if($rname==$rolename){echo "selected='selected'";} ?> value="<?php echo $roleid; ?>"><?php echo $rolename; ?></option>
                                        
                                    <?php } ?>

                                    </select>

                                    </div>
                                         <?php 
                                            $userId=$_GET['userId'];
                                             $q=$d->select("users","userId=$userId","");
                                            $data=$q->fetch_array();



                                        ?>
                                        
                                        <div class="form-group">
                                            <img src="images/<?php echo $data['profile_photo']; ?>" height="100px" width="100px">
                                            <label>Profile</label>
                                            <input type="file" name="profile_photo" default="<?php echo $data['profile_photo'];?>">

                                        </div>

                                        <div class="form-group">
                                            <button class="btn btn-primary" name="updateuserbtn" value="updateuserbtn" id="updateuserbtn">Update</button>
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


