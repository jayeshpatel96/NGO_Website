 
<?php include 'common/header.php'; ?>

                    <!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    <!-- /sidebar menu -->


 <div class="right_col" role="main">


                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Company <small>Update Company</small></h2>
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
                                            $c_id=$_GET['c_id'];
                                             $q=$d->select("company_info","c_id=$c_id","");
                                            $data=$q->fetch_array();

                                        ?>
                                     <!-- <form> -->
                                   
                                <form action="controller.php" method="post">

                                        <h1>Update Company</h1>
                                   
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Company ID" required="" name="c_id" id="c_id" value="<?php echo $data['c_id']; ?>" >
                                        </div>
                                    
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Company Name" required="" name="c_name" id="c_name" value="<?php echo $data['c_name']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email" required="" name="email" id="email" value="<?php echo $data['email']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" maxlength="10" placeholder="Contact No." required="" name="contact_no" id="contact_no" value="<?php echo $data['contact_no']; ?>" />
                                        </div>

                                        <div class="form-group">
                                             <textarea type="text" class="form-control" placeholder="Address" required="" name="address" id="address" value="<?php echo $data['address']; ?>"><?php echo $data['address']; ?></textarea>
                                        </div>
                                        
                                         <div class="form-group">
                                            <button class="btn btn-primary" name="updatecompanybtn" value="updatecompanybtn" id="updatecompanybtn">Update</button>
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