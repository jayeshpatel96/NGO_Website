<!-- Footer -->
  <footer class="footer pb-0" data-bg-img="images/footer-bg.png" data-bg-color="#25272e">
    <div class="container pb-30">
      <div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="footer-widget"> <img class="mt-0" alt="" src="images/logo-wide2.png">
            <p class="font-12 mt-20">CharityFund is a library of Crowdfunding and Charity templates with predefined elements which helps you to build your own site. Lorem ipsum dolor sit amet, consectetur adipis cing you to build elit.</p>
            <a href="#" class="text-gray font-12"><i class="fa fa-angle-double-right text-orange"></i> Read more</a>
            <ul class="social-icons small square list-inline mt-10">
              <li><a href="#" data-bg-color="#3A5795"><i class="fa fa-facebook text-white"></i></a></li>
              <li><a href="#" data-bg-color="#55ACEE"><i class="fa fa-twitter text-white"></i></a></li>
              <li><a href="#" data-bg-color="#05A7E3"><i class="fa fa-skype text-white"></i></a></li>
              <li><a href="#" data-bg-color="#A11312"><i class="fa fa-google-plus text-white"></i></a></li>
              <li><a href="#" data-bg-color="#C22E2A"><i class="fa fa-youtube text-white"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-widget">
            <h5 class="widget-title text-white">Pages<span class="line-bottom"></span></h5>
            <nav>
              <ul class="list angle-double-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="event.php">Events</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="volunteer.php">Volunteers</a></li>
               <!-- <li><a href="news.php">News</a></li>-->
                <li><a href="about.php">About Us</a></li>
                <li><a href="contact.php">Contact Us</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-widget">
            <h5 class="widget-title text-white pb-10">Quick Links<span class="line-bottom"></span></h5>
            <nav>
              <ul class="list angle-double-right">
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Donor Privacy Policy</a></li>
                <li><a href="#">Disclaimer</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Copyright Notice</a></li>
                <li><a href="#">Media Center</a></li>
              </ul>
            </nav>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="footer-widget">
            <h5 class="widget-title text-white">Quick Contact<span class="line-bottom"></span></h5>
            <ul>
              <li><a href="#"><?php echo $contact_no; ?></a></li>
              <li><a href="#"><?php echo $email; ?></a></li>
              <li><a class="lineheight-20" href="#"><?php echo $address; ?></a></li>
            </ul>
            <p class="text-white">Subscribe Our Newsletter</p>
            <form action="controller.php" method="post" enctype="multipart/form-data" class="newsletter-form">
              <div class="input-group">
                <input type="email" class="form-control" value="" name="email" id="email" placeholder="Your Email"  class="form-control input-lg" data-height="43px" id="mce-EMAIL">
                <span class="input-group-btn">
                    <button class="btn btn-colored btn-orange btn-lg m-0" name="subbtn" value="subbtn" id="subbtn"><i class="fa fa-paper-plane-o text-white"></i></button>
                </span>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid p-20" data-bg-color="#fe9322">
      <div class="row text-center">
        <div class="col-md-12">
          <p class="font-11 text-white m-0">Copyright &copy;2015 ApnuGhar. All Rights Reserved</p>
        </div>
      </div>
    </div>
  </footer>
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- end wrapper --> 

<!-- Modal: donate now -->
<div class="modal fade" id="modal-donate-now" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-orange pl-40 pt-20 pb-20">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-white" id="myModalLabel">Make a Donation</h4>
      </div>
      <div class="modal-body pl-40 pr-40">
        <form id="donation-form" class="donation-form">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group mb-20">
                <label><strong>Donation Amount</strong></label>
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
                  <label class="radio-inline">
                    <input type="radio" value="200" name="donateAmount">
                    200 USD</label>
                  <label class="radio-inline">
                    <input type="radio" value="500" name="donateAmount">
                    500 USD</label>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group mb-20">
                <label><strong>Donation Type</strong></label>
                <div class="radio mt-5">
                  <label class="radio-inline">
                    <input type="radio" value="One Time" name="donateType">
                    One Time</label>
                  <label class="radio-inline">
                    <input type="radio" value="Weekly" name="donateType">
                    Weekly</label>
                  <label class="radio-inline">
                    <input type="radio" value="Monthly" name="donateType">
                    Monthly</label>
                  <label class="radio-inline">
                    <input type="radio" value="Yearly" name="donateType">
                    Yearly</label>
                  <label class="radio-inline">
                    <input type="radio" value="Lifetime" name="donateType">
                    Lifetime</label>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label><strong>Name</strong></label>
                <input type="text" placeholder="Enter Name" id="donate_name" name="donate_name" required="" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label><strong>Email</strong></label>
                <input type="text" placeholder="Enter Email" id="donate_email" name="donate_email" class="form-control" required="">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label><strong>Phone</strong></label>
                <input type="text" placeholder="Enter Phone" id="donate_phone" name="donate_phone" required="" class="form-control">
              </div>
            </div>
            <div class="col-sm-6">
              <div class="form-group">
                <label><strong>Address</strong></label>
                <input type="text" placeholder="Enter Address" id="donate_address" name="donate_address" class="form-control" required="">
              </div>
            </div>
            <div class="col-sm-12">
              <div class="form-group">
                <label><strong>I Want to Donate for</strong></label>
                <select class="form-control">
                  <option>educate children</option>
                  <option>Summer Camps</option>
                  <option>Give Clean Water</option>
                  <option>Ensuring better life</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group text-center">
            <button data-loading-text="Please wait..." class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" type="submit">Donate Now</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php if (isset($_SESSION['email'])){ ?>

<!-- Modal: User -->
<div class="modal fade" id="modal-user" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-orange pl-40 pt-20 pb-20">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-white" id="myModalLabel">Edit User Details</h4>
      </div>
      <div class="modal-body pl-40 pr-40">
         <form action="controller.php" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="col-sm-12">
              <div class="form-group mb-20">
              <?php

               $user_id=$_SESSION['userId'];
               $q=$d->select("users","userId=$user_id","");

              $data=$q->fetch_array();

               ?>
              <div class="radio mt-5">
                  <div class="form-group">
                      <input type="hidden" id="userId" name="userId" required="" class="form-control" value="<?php echo $data['userId']; ?>">
                  </div>
                </div>

                  

                <div class="radio mt-5">
                  <div class="form-group">
                      <input type="text" id="username" name="username" required="" class="form-control" value="<?php echo $data['username']; ?>">
                  </div>
                </div>

                 <div class="radio mt-5">
                  <div class="form-group">
                      <input type="text" id="email" name="email" required="" class="form-control" value="<?php echo $data['email']; ?>">
                  </div>
                </div>

                <div class="radio mt-5">
                  <div class="form-group">
                  
                      <img src="images/<?php echo $data['profile']; ?>" height="100px" width="100px" class="img-circle profile_img">
                      <br>
                      <input type="file" name="profile" value="<?php echo $data['profile'];?>">

                  </div>
                </div>

               

              </div>
              </div>
            </div>
          </div>
          <div class="form-group text-center">
           

            <button class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" name="edituser" value="edituser" id="edituser">Update</button>
                                        
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php } ?>



<!-- Modal: login -->
<div class="modal fade" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-orange pl-40 pt-20 pb-20">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-white" id="myModalLabel">Log In</h4>
      </div>
      <div class="modal-body pl-40 pr-40">
         
          <form method="post" action="controller.php">
              <div class="row">
              <div class="col-md-12 text-right">
                  <div class="form-group">
                    <a data-toggle="modal" href="#modal-register"> <font color="light blue" size="2px">Create a New User?</font></a>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter username" id="username" name="username" required="" class="form-control">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="password" placeholder="Enter Password" id="password" name="password" class="form-control" required="">
                  </div>
                </div>
                
             
                    <div class="col-md-12">
                      <div class="form-group text-right">
                        <button class="btn btn-colored btn-orange btn-block pl-30 pr-30" name="usercheck" id="usercheck">Log in</button>
                      </div>
                    </div>

                
                     <div class="col-md-12">
                        <div class="form-group text-right">
                           <a data-toggle="modal" href="#modal-forgot"> <font color="light blue" size="2px">Lost Your Password?</font></a>
                        </div>
                     </div>

                
            </form>

      </div>


    </div>
  </div>
</div>

<div class="modal fade" id="modal-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-orange pl-40 pt-20 pb-20">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-white" id="myModalLabel"><a data-toggle="modal" href="#modal-register"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>Create a New User</h4>
       

      </div>
      <div class="modal-body pl-40 pr-40">
         
         <form method="post" action="controller.php" enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                  
                  <div class="form-group">
                    <input type="text" placeholder="Enter Name" id="username" name="username" required="" class="form-control">
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter Email" id="email" name="email" class="form-control" required="">
                  </div>
                </div>

                <div class="col-md-12">
                   <div class="form-group">
                    <label>Profile</label>
                    <input type="file" name="profile" id="profile">
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" placeholder="Enter password" id="password" name="password" class="form-control" required="">
                  </div>
                </div>

                <div class="col-md-12">
                  <div class="form-group text-center">
                      <button class="btn btn-colored btn-block btn-orange pl-30 pr-30" type="submit" name="adduserbtn" id="adduserbtn">Register</button>
                  </div>

                </div>
               </div>
            </form>

      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="modal-forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-orange pl-40 pt-20 pb-20">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-white" id="myModalLabel">Lost Your Password</h4>
      </div>
      <div class="modal-body pl-40 pr-40">
         
         <form method="post">
                        <h1>Forgot Password</h1>

                         <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email" required="" name="email" id="email" />
                        </div>

                        <div class="form-group">
                            <button class="btn btn-primary" name="reset" value="reset" id="reset">Reset</button>
                        </div>

                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><i class="fa fa-paw" style="font-size: 26px;"></i> <?php echo $c_name; ?></h1>

                                <p>©2017 All Rights Reserved. <?php echo $c_name; ?></p>
                            </div>
                        </div>
                    </form>
      </div>
    </div>
  </div>
</div>


<!-- jQuery scripts -->
<script src="js/jquery-2.1.4.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<!-- Revolution Slider -->
<script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
<script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>
<script src="js/custom-rev-slider.js"></script> 
<!-- JS | google map -->
<script src="http://maps.google.com/maps/api/js?sensor=false"></script> 
<!-- JS | Necessary jQuery Collection for this theme --> 
<script src="js/jquery-plugin-collection.js"></script> 
<!-- JS | Custom script for all pages --> 
<script src="js/custom.js"></script>



<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
      (Load Extensions only on Local File Systems ! 
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="js/revolution-slider/js/extensions/revolution.extension.video.min.js"></script>
</body>

<!-- Mirrored from kodesolution.com/demo/nonprofit/charityfund-html/index-sp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 01 Jan 2016 17:25:48 GMT -->
</html>