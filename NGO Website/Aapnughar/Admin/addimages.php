 

<?php include 'common/header.php'; ?>

                    <!-- sidebar menu -->
<?php include 'common/sidebar.php'; ?>
                    <!-- /sidebar menu -->


            <!-- page content -->
                <div class="right_col" role="main">
                        <form action="controller.php" method="post" enctype="multipart/form-data">

                        <h1>Add Images</h1>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Title" required="" name="title" id="title"/>
                        </div>

                        <div class="form-group">
                        

                        <label>Profile</label>
                        <input type="file" name="photo">
                         </div>

                       

                        <div class="form-group">
                            <button class="btn btn-primary" name="addimgbtn" value="addimgbtn" id="addimgbtn">Add Image</button>
                        </div>
                        
                    </form>
                  
        
            </div>
            <!-- /page content -->
<?php include 'common/footer.php'; ?>   







