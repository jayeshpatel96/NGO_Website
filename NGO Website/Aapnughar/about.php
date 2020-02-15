<?php 
$currentpage='about';
include 'common/header.php'; 



?>
  
  <!-- Start main-content -->
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg4.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">About</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">About</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: About -->
    <section> 
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-7">
            <div class="image-carousel">
              <div class="item">
                <div class="thumb">
                  <img src="images/bg/bg4.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="images/bg/bg2.jpg" alt="">
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="images/bg/bg3.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-5">
            <h3 class="text-orange text-uppercase">About Us</h3>
            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Quas, veniam nobis minima. Delectus, dolorem rerum, eos nemo dolore amet quis, eum debiti modi voluptatibus ducimus molestiae laborum itaque quam maxime dolor amit laboriosam aperiam exercitationem.Cos nemo dolore amet quis, eum debiti modi voluptatibus ducimus molestiae laborum itaque quam maxime dolor amit laboriosam aperiam exercitationem. Amit dolor sit.</p>
            <div class="row mt-30 mb-30 ml-20">
             <div class="col-xs-6">
              <ul class="mt-10">
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Education</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Community</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Education</li>
              </ul>
             </div>
             <div class="col-xs-6">
              <ul class="mt-10">
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Education</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Teamwork</li>
                <li class="mb-10"><i class="fa fa-check-circle text-orange"></i>&emsp;Creativity</li>
              </ul>
             </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectet adipisicing elit. Quas, veniam nobis minima. Delectus, dolorem rerum, eos nemo dolore amet quis, eum debiti modi voluptatibus ducimus molestiae laborum itaque quam maxime dolor amit laboriosam aperiam exercitationem.</p>
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
              <h2>Just call at <span class="text-orange"><?php echo $contact_no; ?></span> to make a donation</h2>
            </div>
          </div>
        </div>
      </div>      
    </section>
    
    <!-- Section: Causes -->
   <!-- <section> 
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mb-20 mt-0">Featured Causes</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row mtli-row-clearfix">
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes box-hover-effect effect1 maxwidth500 mb-sm-30" data-bg-color="#f5f5f5">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/project/1.jpg">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor a child today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-orange pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-colored btn-orange btn-sm pull-left" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-orange"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes box-hover-effect effect1 maxwidth500 mb-sm-30" data-bg-color="#f5f5f5">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/project/2.jpg">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor a child today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-orange pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-colored btn-orange btn-sm pull-left" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-orange"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes box-hover-effect effect1 maxwidth500 mb-sm-30" data-bg-color="#f5f5f5">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/project/3.jpg">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor a child today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-orange pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-colored btn-orange btn-sm pull-left" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-orange"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
              <div class="causes box-hover-effect effect1 maxwidth500 mb-sm-30" data-bg-color="#f5f5f5">
                <div class="thumb">
                  <img class="img-fullwidth" alt="" src="images/project/4.jpg">
                </div>
                <div class="progress-item mt-0">
                  <div class="progress mb-0">
                    <div class="progress-bar" data-percent="85"></div>
                  </div>
                </div>
                <div class="causes-details clearfix border-bottom p-15 pt-10">
                  <h5><a href="#">Sponsor a child today</a></h5>
                  <p>Lorem ipsum dolor sit amet, consect adipisicing elit. Praesent quos sit.</p>
                  <ul class="list-inline clearfix mt-20">
                    <li class="pull-left pr-0">Raised: $1890</li>
                    <li class="text-orange pull-right pr-0">Goal: $2500</li>
                  </ul>
                  <div class="mt-10">
                   <a class="btn btn-colored btn-orange btn-sm pull-left" href="#">Donate</a>
                   <div class="pull-right mt-15"><i class="fa fa-heart-o text-orange"></i> 89 Donors</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>-->
    
    <!-- divider: Featured News -->
    <!--<section class="divider parallax layer-overlay overlay-white"  data-bg-img="images/bg/bg4.jpg">
      <div class="container">
        <div class="section-content">
          <div class="row">
            <div class="col-md-7">
              <h3 class="mt-0">Support Our Project In Nepal</h3>
              <div class="line-bottom mb-20"></div>
              <p class="mt-30 mb-30">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, et placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis! Quidem, repellendus exit placeat ipsam, officiis fugiat doloremque ducimus tempore aliquid nihil soluta, quia similique veritatis.</p>
              <a class="btn btn-colored btn-orange btn-lg pull-left" href="#">Donate Now</a>
            </div>
            <div class="col-md-5">
              <div class="fluid-video-wrapper">
                <iframe src="http://player.vimeo.com/video/22029657?title=0&amp;byline=0&amp;portrait=0" width="640" height="360"  title="Creative" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>      
    </section>-->

    <!-- Section: Volunteer -->
    <section>
      <div class="container">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h3 class="text-uppercase mb-20 mt-0">Our Top Volunteers</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem autem voluptatem obcaecati!</p>
            </div>
          </div>
        </div>
        <div class="section-content">
          <div class="row multi-row-clearfix">
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
              <div class="volunteer maxwidth400">
                <div class="thumb"><img alt="" src="images/team/team1.jpg" class="img-fullwidth"></div>
                <div class="overlay">
                  <div class="content text-center">
                    <h4 class="author mb-0"><a href="#" class="text-white">Alex Jacobson</a></h4>
                    <h6 class="title text-black font-14 mt-5 mb-15">Joined: May, 15</h6>
                    <ul class="social-icons icon-dark square small mt-10">
                      <li class="mr-10"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="mr-10"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
              <div class="volunteer maxwidth400">
                <div class="thumb"><img alt="" src="images/team/team2.jpg" class="img-fullwidth"></div>
                <div class="overlay">
                  <div class="content text-center">
                    <h4 class="author mb-0"><a href="#" class="text-white">Alex Jacobson</a></h4>
                    <h6 class="title text-black font-14 mt-5 mb-15">Joined: May, 15</h6>
                    <ul class="social-icons icon-dark square small mt-10">
                      <li class="mr-10"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="mr-10"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
              <div class="volunteer maxwidth400">
                <div class="thumb"><img alt="" src="images/team/team3.jpg" class="img-fullwidth"></div>
                <div class="overlay">
                  <div class="content text-center">
                    <h4 class="author mb-0"><a href="#" class="text-white">Alex Jacobson</a></h4>
                    <h6 class="title text-black font-14 mt-5 mb-15">Joined: May, 15</h6>
                    <ul class="social-icons icon-dark square small mt-10">
                      <li class="mr-10"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="mr-10"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-sm-60 text-left sm-text-center">
              <div class="volunteer maxwidth400">
                <div class="thumb"><img alt="" src="images/team/team4.jpg" class="img-fullwidth"></div>
                <div class="overlay">
                  <div class="content text-center">
                    <h4 class="author mb-0"><a href="#" class="text-white">Alex Jacobson</a></h4>
                    <h6 class="title text-black font-14 mt-5 mb-15">Joined: May, 15</h6>
                    <ul class="social-icons icon-dark square small mt-10">
                      <li class="mr-10"><a href="#"><i class="fa fa-facebook"></i></a></li>
                      <li class="mr-10"><a href="#"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Divider: Partners & Donors -->
    <section class="divider parallax layer-overlay overlay-white"  data-bg-img="images/bg/bg2.jpg">
      <div class="container pt-30 pb-30">
        <div class="row">
          <div class="col-md-12">
            <div class="clients-logo carousel">
              <div class="item"> <a href="#"><img src="images/clients/1.png" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/2.png" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/3.png" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/4.png" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/5.png" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/6.png" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/2.png" alt=""></a> </div>
              <div class="item"> <a href="#"><img src="images/clients/4.png" alt=""></a> </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
 
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>