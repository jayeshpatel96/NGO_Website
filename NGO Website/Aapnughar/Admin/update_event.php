


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
                                    <h2>Event <small>Update Event</small></h2>
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
                                            $e_id=$_GET['e_id'];
                                            $q=$d->select("event","e_id='$e_id'","");
                                            $data=$q->fetch_array();

                                            extract($data);
                                            echo $e_id;

                                        ?>
                                     <!-- <form> -->
                                   
                                <form action="controller.php" method="post" enctype="multipart/form-data">

                                        <h1>Update Event</h1>    
                                   
                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Event Id" required="" name="e_id" id="e_id" value="<?php echo $e_id; ?>" >
                                        </div>
                                    
                                   
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Title" required="" name="title" id="title" value="<?php echo $title; ?>" />
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Event Type" required="" name="event_type" id="event_type" value="<?php echo $event_type ?>" />
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Phone Number" required="" name="phone" id="phone" value="<?php echo $phone ?>" />
                                        </div>

                                         <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Event Place" required="" name="place" id="place" value="<?php echo $place ?>" />
                                        </div>
                                        <div class="form-group">
                                            <input type="date" class="form-control" placeholder="Event date" required="" name="date" id="date" value="<?php echo $date ?>" />
                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Event time" required="" name="time" id="time" value="<?php echo $time ?>" />
                                        </div>



                                   
                                        
                                        <div class="form-group">
                                            <img src="../images/event/<?php echo $event_photo; ?>" height="100px" width="100px">
                                            <label>Event Picture</label>
                                            <input type="file" name="event_photo" default="<?php echo $event_photo;?>">

                                        </div>

                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Event Description" required="" name="description" id="description" value="<?php echo $description ?>" />
                                        </div>


                                        <div class="form-group">
                                            <button class="btn btn-primary" name="update_event" value="update_event" id="update_event">Update</button>
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


