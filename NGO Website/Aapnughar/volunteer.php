<?php include 'common/header.php'; ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg4.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">Volunteers</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Volunteers</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: Volunteer -->
    <section>
      <div class="container pb-40">
        <div class="section-content">
          <div class="row multi-row-clearfix">

            <?php 
                    $i=1;
                                           
                    $q=$d->select("volunteer","","");

                    while ($data=mysqli_fetch_array($q)) {
                    extract($data);
            ?>
              <div class="col-sm-6 col-md-4 mb-sm-60 text-left sm-text-center">
              <div class="volunteer maxwidth400 mb-30">
                <div class="thumb"><img alt="" src="images/volunteer/<?php echo $profile_photo; ?>" class="img-fullwidth"></div>
                <div class="overlay">
                  <div class="content text-center">
                    <h4 class="author mb-0"><a href="volunteerdetails.php?v_id=<?php echo $v_id; ?>" class="text-white"><?php echo $name; ?></a></h4>
                    <h6 class="title text-black font-14 mt-5 mb-15">Join By :<?php echo $created_date; ?></h6>
                    <ul class="social-icons icon-dark square small mt-10">
                      <li class="mr-10"><a href="volunteerdetails.php?v_id=<?php echo $v_id; ?>"><i class="fa fa-facebook"></i></a></li>
                      <li class="mr-10"><a href="volunteerdetails.php?v_id=<?php echo $v_id; ?>"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="volunteerdetails.php?v_id=<?php echo $v_id; ?>"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              </div>

            <?php } ?>
            
          </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-white"  data-bg-img="images/bg/bg2.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0">How you can help us</h3>
              <h2>Just call at <span class="text-orange">(01) 234 5678</span> to make a donation</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
<?php include 'common/footer.php'; ?>