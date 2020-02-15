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
              <h3 class="text-orange font-36">Volunteer Details</h3>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
              
                <li class="active">Volunteer Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
      
    <!-- Section: Practice Area -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="row">

            <?php
              $v_id=$_GET['v_id'];
              $q=$d->select("volunteer","v_id='$v_id'","");
              $data=mysqli_fetch_array($q);
              extract($data);
            ?>
            <div class="col-md-4">
              <div class="thumb">
                <img src="images/volunteer/<?php echo $profile_photo; ?>" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <h4 class="text-uppercase mt-0">Volunteer</h4>
              <div class="line-bottom"></div>
              <h5 class="name mt-30 mb-0"><?php echo $name;?></h5>
              <h6 class="mt-5"><?php echo $occupation; ?></h6>
              <p><?php echo $about; ?></p>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias, consectetur blanditiis eum maxime sunt accusantium ipsa doloribus reiciendis. Ea quod reprehenderit deserunt. Veritatis omnis similique tempora delectus a consequuntur, quis.  Adipisicing elit. Nesciunt culpa dicta quaerat qui recusandae possimus placeat quidem ipsam voluptates similique libero tempore, labore quasi delectus vero alias.</p>
              <ul class="social-icons small square list-inline mt-15 mb-0">
               <li><a class="bg-orange" href="#"><i class="fa fa-facebook text-white"></i></a></li>
               <li><a class="bg-orange" href="#"><i class="fa fa-skype text-white"></i></a></li>
               <li><a class="bg-orange" href="#"><i class="fa fa-twitter text-white"></i></a></li>
             </ul>
            </div>
          </div>
          <div class="row mt-30">
            <div class="col-md-4">
              <h4>About Me:</h4>
              <div class="line-bottom mb-30"></div>
              <div class="volunteer-address">
                <ul>
                  <li>
                    <div class="media border-bottom p-15 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fa fa-book text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Education:</h5>
                        <p><?php echo $education; ?><br>From Rutgers University, California.</p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media border-bottom p-15 mb-20" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fa fa-map-marker text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Address:</h5>
                        <p><?php echo $address; ?></p>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media border-bottom p-15" data-bg-color="#f5f5f5">
                      <div class="media-left">
                        <i class="fa fa-phone text-orange font-24 mt-5"></i>
                      </div>
                      <div class="media-body">
                        <h5 class="mt-0 mb-0">Contact:</h5>
                        <p><span>Phone:</span><?php echo $mobile; ?><br><span>Email:</span> <?php echo $email; ?></p>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-4">
              <h4>Find Location:</h4>
              <div class="line-bottom mb-30"></div>
              <div class="map-canvas autoload-map" data-height="335" data-address="121 King Street, Melbourne Victoria 3000 Australia" data-zoom="14" data-mapstyle="style8" data-marker="images/map-icon-blue.png"></div>
            </div>
            <div class="col-md-4">
              <div class="clearfix">
                <h4>Quick Contact:</h4>
              </div>
              <div class="line-bottom mb-30"></div>
              <form id="contact-form" class="contact-form-transparent">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Name" id="contact_name" name="contact_name" required="" class="form-control">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Email" id="contact_email" name="contact_email" class="form-control" required="">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" placeholder="Enter Subject" id="contact_subject" name="contact_subject" class="form-control" required="">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <textarea rows="5" placeholder="Enter Message" id="contact_message" name="contact_message" required class="form-control"></textarea>
                </div>
                <div class="form-group">
                  <button data-loading-text="Please wait..." class="btn btn-colored btn-orange" type="submit">Send your message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
<?php include 'common/footer.php'; ?>