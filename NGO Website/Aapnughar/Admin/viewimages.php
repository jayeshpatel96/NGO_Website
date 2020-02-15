    
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
                                        <h2>Images</h2>
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
                                            <div class="masonry-items" data-maxitemwidth="400">

                                                <?php 
                                                    $i=1;
                                                                                 
                                                    $q=$d->select("gallery","","");
                                                    while ($data=mysqli_fetch_array($q)) 
                                                    {
                                                    extract($data);
                                                ?>

                                                <div class="col-md-4">
                                                    <div class="masonry-item">
                                                        <div class="box-hover-effect effect11">


                                                            <style> 
                                                              table{ 
                                                              border-collapse:separate; 
                                                              border-spacing: 0 2px; 
                                                              } 
                                                              
                                                            </style>    
                                                        <table align="center">
                                                            <tr>
                                                                <td colspan="2"><img class="img-responsive" src="images/gallery/<?php echo $photo;?>"></td>
                                                            </tr>

                                                            <tr>
                                                                <td><ul class="nav navbar-right panel_toolbox">
                                                                    
                                                                    <a class="btn btn-primary" href="images/gallery/<?php echo $photo; ?>" data-lightbox-gallery="gallery">View</a>
                                                                </td>
                                                            
                                                            
                                                                <td>
                                                                    <a class="btn btn-danger" href="controller.php?deleteimage=<?php echo $g_id; ?>">Delete</a>
                                            
                                                            
                                                            </td>
                                                            
                                                            </tr>
                                                        </table>

                                                           


                                                        </div>

                                                        <div class="details text-center">
                                                            <h5><?php echo $title; ?></h5>
                                                        </div>
                                                    </div>
                                                </div>
                                                  <?php } ?>
                                            </div>
                                        </div>
                            </div>
                      </div>
                </div>

                </div>


            </div>
            <!-- /page content -->
<?php include 'common/footer.php'; ?>   


