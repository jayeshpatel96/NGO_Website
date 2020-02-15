<?php
$currentpage='index';
 include 'common/header.php'; ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: home -->
    <?php include 'common/slider.php'; ?>
    <!-- Section: featured project -->
    
    
    <!-- Section: Causes -->
    <section id="causes"> 
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mt-0">Our Recent Events</h3>
              <div class="title-icon">
                <i class="flaticon-hand221"></i>
              </div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem<br> voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
          <?php 
                    $i=1;
                                           
                    $q=$d->select("event","","");

                    while ($data=mysqli_fetch_array($q)) {
                    extract($data);
            ?>
            <div class="col-sm-6 col-md-4 mb-sm-60 text-left sm-text-center">
              <div class="volunteer maxwidth400 mb-30">
                <div class="thumb"><img alt="" src="images/event/<?php echo $event_photo; ?>" class="img-fullwidth"></div>
                <div class="overlay">
                  <div class="content text-center">
                    <h4 class="author mb-0"><a href="volunteerdetails.php?v_id=<?php echo $v_id; ?>" class="text-white"><?php echo $title; ?></a></h4>
                    <h6 class="title text-black font-14 mt-5 mb-15">Event Time :<?php echo $created_date; ?></h6>
                    <ul class="social-icons icon-dark square small mt-10">
                      <li class="mr-10"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="mr-10"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              </div>

            <?php } ?>
      </div>
    </section>

  
    
    <!-- divider: Donate Now -->
    <section class="divider"  data-bg-img="images/bg/bg7.jpg">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-md-7">
            <div class="p-40" data-bg-color="rgba(255,255,255,0.8)">
              <h4 class="text-uppercase mb-5">Make a Donation Now!</h4>
              <div class="line-bottom mb-20"></div>

              <form method="post" action="donation.php" id="donation-main-form" class="donation-form">
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label>Donation Amount</label>
                      <div class="radio mt-5">
                        <label class="radio-inline">
                          <input type="radio" value="20" name="donateAmount">
                          20 USD</label>
                        <label class="radio-inline">
                          <input type="radio" value="50" name="donateAmount">
                          50 USD</label>
                        <label class="radio-inline">
                          <input type="radio" value="100" name="donateAmount">
                          100 USD</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group mb-20">
                      <label>Donation Type</label>
                      <div class="radio mt-5">
                        <label class="radio-inline">
                          <input type="radio" value="One Time" name="donateType">
                          One Time</label>
                        <label class="radio-inline">
                          <input type="radio" value="Monthly" name="donateType">
                          Monthly</label>
                        <label class="radio-inline">
                          <input type="radio" value="Yearly" name="donateType">
                          Yearly</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" placeholder="Enter Name" name="donate_name" required="" class="form-control" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" placeholder="Enter Email" name="donate_email" class="form-control" required="" disabled="disabled">
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label>I Want to Donate for</label>
                      <select class="form-control">
                        <option>educate children</option>
                        <option>Summer Camps</option>
                        <option>Give Clean Water</option>
                        <option>Ensuring better life</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button data-loading-text="Please wait..." class="btn btn-colored btn-orange pl-30 pr-30" type="submit">Donate Now</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-5">
          </div>
        </div>
      </div>
    </section>
    
 
    
    
  </div>
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>