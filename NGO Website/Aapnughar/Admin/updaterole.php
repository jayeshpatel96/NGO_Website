

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
                                    <h2>Role Type <small>Add Role</small></h2>
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
                                            $roleid=$_GET['roleid'];
                                             $q=$d->select("roletype","roleid=$roleid","");
                                            $data=$q->fetch_array();

                                        ?>

                                     <form action="controller.php" method="post">

                                        <h1>Add Role</h1>
                                       
                                   
                                             <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Role ID" required="" name="roleid" id="roleid" value="<?php echo $data['roleid']; ?>" >
                                        </div>
                                    
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Role Name" required="" name="rolename" id="rolename" value="<?php echo $data['rolename']; ?>" />
                                        </div>
                                        
                                        <div class="form-group">
                                            <button class="btn btn-primary" name="updaterolebtn" value="updaterolebtn" id="updaterolebtn">Update</button>

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


