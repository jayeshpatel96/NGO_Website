
<?php include 'common/header.php'; ?>

                    <!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    <!-- /sidebar menu -->



            <!-- page content -->
            <script type="text/javascript"> 
            function search() {

            $.ajax({
                url: 'search.php',
                type: 'post',
                data: {searchuser: $('input#searchuser').val()},

                success: function(response) {
                    $('#msg').html(response);
                }
            });
        }
    </script>
                <div class="right_col" role="main">

                        <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Donation <small>Donation Tables</small></h2>
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
                                            <td> <a class="btn btn-primary" href="ExportExcel.php">Export To Excel</a></td>
                                            <td> <a class="btn btn-primary" href="ExportWord.php">Export To Word</a></td>

                                            <td><input type="text" class="form-control" placeholder="User Name" required="" name="searchuser" id="searchuser" onkeydown="search();"/></td>
                                           
                        
                                           <!--  <td> <a class="btn btn-primary" onClick="search()">Search</a></td> -->

                                            </tr>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phone Number</th>
                                                    <th>Address</th>
                                                    <th>Donation Type</th>
                                                    <th>Donation Amount</th>
                                                    <th>Action</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody id="msg">
                                            <?php 
                                            $i=1;
                                           
                                            $q=$d->select("donation","","");
                                            while ($data=mysqli_fetch_array($q)) {
                                                extract($data);
                                             ?>
                                                <tr>
                                                    <td><?php echo $i++; ?></td>
                                                    <td><?php echo $name; ?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <td><?php echo $mobile; ?></td>
                                                    <td><?php echo $address; ?></td>
                                                    <td><?php echo $donate_type; ?></td>
                                                    <td><?php echo $amount; ?></td>
                                                    <td>
                                                    <a class="btn btn-primary" href="updatedonation.php?d_id=<?php echo $d_id; ?>">Edit</a>
                                                    <a class="btn btn-danger" href="controller.php?donationdelete=<?php echo $d_id; ?>">Delete</a></td>

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


