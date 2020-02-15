
<?php include 'common/header.php'; ?>

                    <!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    <!-- /sidebar menu -->


            <!-- page content -->
                <div class="right_col" role="main">

                        <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>View Role</h2>
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

                                   <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Role ID</th>
                                                    <th>Role Type</th> 
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="msg">
                                            <?php 
                                            $i=1;
                                           
                                            $q=$d->select("roletype","","");
                                            while ($data=mysqli_fetch_array($q)) {
                                                extract($data);
                                             ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $roleid; ?></td>
                                                    <td><?php echo $rolename; ?></td>
                                                 
                                            
                                                    <td>
                                                    <a class="btn btn-primary" href="updaterole.php?roleid=<?php echo $roleid; ?>">Edit</a>
                                                    <a class="btn btn-danger" href="controller.php?roleid=<?php echo $roleid; ?>">Delete</a></td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
 </div>

                </div>


            </div>
            <!-- /page content -->
<?php include 'common/footer.php'; ?>   


