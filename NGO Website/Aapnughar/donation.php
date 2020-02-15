<?php 
include 'common/header.php'; ?>
  
  <!-- Start main-content -->
  <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg4.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Content -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">Donation</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="index.php">Home</a></li>
              
                <li class="active">Donation</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>


    <!-- Divider: Contact form -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <h4 class="text-uppercase mb-5">Make a Donation Now!</h4>
            <div class="line-bottom mb-20"></div>
            <p class="maxwidth600">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus laborum quibusdam suscipit obcaecati optio fuga inventore, libero, temporibus aut explicabo dolorum excepturi adipisci quisquam ad eos eius corporis, modi. Aut, quam ipsum sunt unde voluptatem.</p>
            <form id="donation-main-form" class="donation-form" method="post" action="controller.php">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" placeholder="Enter Name" name="name" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Email</label>
                    <input type="text" placeholder="Enter Email" name="email" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Phone Number</label>
                    <input type="text" placeholder="Enter Phone Number " name="mobile" required="" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" placeholder="Enter Address" name="address" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label>Donation Amount</label>
                    <div class="radio mt-5">
                      <label class="radio-inline">
                        <input type="radio" value="20" name="donateAmount" id="donateAmount">
                        20 USD</label>
                      <label class="radio-inline">
                        <input type="radio" value="50" name="donateAmount" id="donateAmount">
                        50 USD</label>
                      <label class="radio-inline">
                        <input type="radio" value="100" name="donateAmount" id="donateAmount">
                        100 USD</label>
                      <label class="radio-inline">
                        <input type="radio" value="200" name="donateAmount" id="donateAmount">
                        200 USD</label>
                      <label class="radio-inline">
                        <input type="radio" value="500" name="donateAmount" id="donateAmount">
                        500 USD</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label>Donation Type</label>
                    <div class="radio mt-5">
                      <label class="radio-inline">
                        <input type="radio" value="One Time" name="donateType" id="donateType">
                        One Time</label>
                      <label class="radio-inline">
                        <input type="radio" value="Weekly" name="donateType" id="donateType">
                        Weekly</label>
                      <label class="radio-inline">
                        <input type="radio" value="Monthly" name="donateType" id="donateType">
                        Monthly</label>
                      <label class="radio-inline">
                        <input type="radio" value="Yearly" name="donateType" id="donateType">
                        Yearly</label>
                      <label class="radio-inline">
                        <input type="radio" value="Lifetime" name="donateType" id="donateType">
                        Lifetime</label>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label>Card Number</label>
                    <input type="text" placeholder="Card Number" id="donate_card_number" name="donate_card_number" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label>CVC Number</label>
                    <input type="text" placeholder="CVC Number" id="donate_cvc_number" name="donate_cvc_number" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group mb-20">
                    <label>Card Expiry Date</label>
                    <input type="text" placeholder="MM/DD/YY" id="donate_expiry_date" name="donate_expiry_date" class="form-control" required="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label>I Want to Donate for</label>
                    <select class="form-control" name="donatefor" id="donatefor">
                      <option>educate children</option>
                      <option>Summer Camps</option>
                      <option>Give Clean Water</option>
                      <option>Ensuring better life</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label>Comment Us</label>
                <textarea rows="5" placeholder="Enter Message" id="contact_message" name="message" id="message" required class="form-control"></textarea>
              </div>
              <div class="form-group text-center">
                <button data-loading-text="Please wait..." class="btn btn-colored btn-rounded btn-orange pl-30 pr-30" type="submit" name="donationdetails" id="donationdetails">Donate Now</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
 <?php 
include 'common/footer.php'; ?>