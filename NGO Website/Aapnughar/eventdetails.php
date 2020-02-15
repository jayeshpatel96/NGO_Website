<?php 
$currentpage='eventdetails';
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
              <h2 class="text-orange font-36">Event Details</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                
                <li class="active">Event Details</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <section>
      <div class="container">
        <div class="row">

          <?php
              $e_id=$_GET['e_id'];
              $q=$d->select("event","e_id='$e_id'","");
              $data=mysqli_fetch_array($q);
              extract($data);
          ?>
          <div class="col-sm-12 col-md-12">
            <h3 class="text-uppercase font-weight-500 mt-0"><?php echo $title; ?></h3>
            <div class="upcoming-events media p-15 pb-60 mb-50 mb-sm-30" data-bg-color="#f5f5f5">
              <div class="thumb">
                <img class="img-fullwidth" src="images/event/<?php echo $event_photo; ?>" alt="...">
              </div>
              <div class="event-count mt-15">
                <ul class="list-inline">
                  <li>
                    <ul class="event-date list-inline font-16 text-uppercase mt-10 mb-20">
                      <li class="p-15 mr-5 bg-white"><?php echo $month = date("M",strtotime($date)); ?></li>
                      <li class="p-15 pl-20 pr-20 mr-5 bg-white"><?php echo $day = date("d",strtotime($date)); ?></li>
                      <li class="p-15 bg-white"><?php echo $year = date("yy",strtotime($date)); ?></li>
                    </ul>
                  </li>
                  <li class="pull-right mt-10">
                    <ul>
                      <li class="mb-5 text-orange"><i class="fa fa-clock-o mr-5"></i><?php echo $time; ?>
                      <li class="text-orange"><i class="fa fa-map-marker mr-5"></i> <?php echo $place; ?>.</li>
                    </ul>
                  </li>
                </ul>                    
              </div>
              <div class="event-details mt-20">
                <p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem modi sequi cupiditate ut commodi beatae animi dolore natus consequuntur ab velit excepturi veritatis sunt unde sapiente non, expedita deleniti explicabo quod doloribus accusantium veniam adipisci at. Labore id atque, distinctio exercitationem a ratione ut eaque.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Placeat qui ducimus illum modi? Libero saepe perspiciatis accusamus soluta perferendis, ad illum, nesciunt, reiciendis iusto et cupiditate. Repudiandae provident, consectetur, sapiente, libero iure necessitatibus corporis nulla voluptate, quisquam aut eum perspiciatis? Fugiat labore aspernatur eius, perspiciatis ut molestiae, delectus rem tempora omnis optio odio autem asperiores quae maiores ea eveniet cupiditate aut repellendus? Quo iure explicabo quam reprehenderit ipsam sequi. Perferendis esse iure ullam, illum, quibusdam corporis nobis dolores unde dolorem ipsa quaerat suscipit.</p>
                <div class="row mt-20">
                  <div class="col-sm-5">
                    <p class="mt-10">Lorem ipsum dolor sit amet, consectis adipisicing elit. Quam eum deserunt eos inventore solutaa delectus, blanditiis, repellendus, voluptatum numquam vel sit amet quaerat quidem, odit ipsa harum quis tempora optio velit fuga? Cupiditate ab, facere odit? Explicabo recusandae laudantium voluptas animi?</p>
                  </div>
                  <div class="col-sm-7">
                    <div class="comment">
                      <p><?php echo $description; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <h3 class="mt-0 text-gray">Upcoming Events</h3>

              <div class="gallery-list-carosel owl-nav-top">

                 <?php 
                    $i=1;
                                                 
                    $q=$d->select("event","e_id!='$e_id'","");
                    while ($data=mysqli_fetch_array($q)) {
                    extract($data);
                 ?>


                <div class="item">
                  <a href="eventdetails.php?e_id=<?php echo $e_id; ?>">
                    <img alt="" src="images/event/<?php echo $event_photo; ?>">
                  </a>
                </div>
                
                <?php } ?>
            </div>
          </div>
          
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <!-- Footer -->
<?php 
include 'common/footer.php'; ?>