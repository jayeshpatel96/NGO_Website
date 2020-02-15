<?php 
include 'common/header.php'; ?>
  
  <!-- Start main-content -->
 <div class="main-content">
    <!-- Section: inner-header -->
    <section class="inner-header divider layer-overlay overlay-dark" data-bg-img="images/bg/bg4.jpg">
      <div class="container pt-30 pb-30">
        <!-- Section Con
$currentpage='gallery';tent -->
        <div class="section-content text-center">
          <div class="row"> 
            <div class="col-md-6 col-md-offset-3 text-center">
              <h2 class="text-orange font-36">Gallery</h2>
              <ol class="breadcrumb text-center mt-10 white">
                <li><a href="#">Home</a></li>
                <li><a href="#">Pages</a></li>
                <li class="active">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>      
    </section>
  
    <!-- Section: Gallery -->
    <section>
      <div class="container">
        <div class="section-content"> 
          <!-- Gallery items -->
          <div class="masonry-items" data-maxitemwidth="400">

            <?php 
                  $i=1;
                                           
                      $q=$d->select("gallery","","");
                      while ($data=mysqli_fetch_array($q)) {
                      extract($data);
                ?>

            <div class="masonry-item">
              <div class="box-hover-effect effect11">
                <div class="thumb">
                  <img class="img-responsive" src="Admin/images/gallery/<?php echo $photo; ?>" alt="thumb">
                </div>
                <div class="overlay white">
                  <div class="details">
                      <div class="icons"><i class="fa fa-link text-black"></i></div>
                  </div>
                  <a href="Admin/images/gallery/<?php echo $photo; ?>" data-lightbox-gallery="gallery">View more</a>
                </div>
              </div>
              <div class="details text-center">
                <h5><?php echo $title; ?></h5>
                <p>Lorem ipsum dolor sit amet edfia dolor</p>
              </div>
            </div>
            <?php } ?>
            
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
  
  <?php include 'common/footer.php'; ?>