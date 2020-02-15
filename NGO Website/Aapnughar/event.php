<?php 
$currentpage='event';
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
              <h2 class="text-orange font-36">Upcoming Event</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li class="active">Upcoming Event</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Divider: Partners & Donors -->
    <section>
      <div class="container">
        <div class="row">

          <?php 
              $i=1;
                                           
              $q=$d->select("event","","");
              while ($data=mysqli_fetch_array($q)) {
              extract($data);
          ?>
          <div class="col-sm-12 col-md-12">
            <div class="upcoming-events box-hover-effect effect1 media maxwidth400 mb-20" data-bg-color="#f5f5f5">
              <div class="row equal-height">
                <div class="col-sm-4 pr-0 pr-sm-15">
                  <div class="thumb p-15">
                    <img class="img-fullwidth" src="images/event/<?php echo $event_photo; ?>" alt="...">
                  </div>
                </div>
                <div class="col-sm-4 border-right pl-0 pl-sm-15">
                  <div class="event-details p-15 mt-20">
                    <h4 class="media-heading text-uppercase font-weight-500"><?php echo $title; ?></h4>
                    <p><?php echo $description; ?></p>
                    <a href="eventdetails.php?e_id=<?php echo $e_id; ?>" class="text-orange btn btn-colored btn-orange btn-sm">Details <i class="fa fa-angle-double-right"></i></a>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="event-count p-15 mt-15">
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-white"><?php echo $month = date("M",strtotime($date)); ?></li>
                      <li class="p-15 pl-20 pr-20 mr-5 bg-white"><?php echo $month = date("d",strtotime($date)); ?></li>
                      <li class="p-15 bg-white"><?php echo $month = date("yy",strtotime($date)); ?></li>
                    </ul>
                    <ul>
                      <li class="mb-10 text-orange"><i class="fa fa-clock-o mr-5"></i><?php echo $time; ?></li>
                      <li class="text-orange"><i class="fa fa-map-marker mr-5"></i> <?php echo $place; ?>.</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
            <div class="row">
              <div class="col-sm-12">
                <nav>
                  <ul class="pagination pull-right xs-pull-center mb-xs-40">
                    <li> <a href="#" aria-label="Previous"> <span aria-hidden="true">«</span> </a> </li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>