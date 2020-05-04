
 <?php
  require_once 'header.php';

 ?>

<!-- title area start-->
  <div class="section_titles fix pt-100 pb-50" style="background-image: url(img/gallery.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;height: 300px;animation: 10s header_anim 8">

  	   <div class="container">
  	   	     <div class="section_heading text-center">
  	   	     	<h2>Gallery</h2>
  	   	     	<p>Our knowledge and experience in the hospitality</p>
  	   	     </div>
  	   </div>

</div>
<!-- title area end -->

<!-- Gallery page start -->
 
  <!-- Gallery   area Start -->


 <section class="portfolio-area mb-60 mt-60">
       <div class="container">
         

 <div class="row">
 	<div class="col-12">
     <div id="filters" class="button-group">  <button class="button is-checked" data-filter="*">All</button>
  <button class="button" data-filter=".wedding">Wedding</button>
  <button class="button" data-filter=".photography">Photography</button>
  <button class="button" data-filter=".media">Media</button>
  <button class="button" data-filter=".other">Other</button>
  
</div>
</div>


<div class="col-12">

<div class="grid" >
  
  <?php 
    $we_care_main="SELECT * FROM gallery ORDER BY id DESC";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $vurl      =$we_care_main2['vurl'];
              $empname      =$we_care_main2['image'];
              $gallery_name      =$we_care_main2['gallery_name'];

  ?>
   <div class="element-item <?php echo $gallery_name;?> " data-category="metalloid">
    <img src="images/upload/<?php echo $empname;?>">
     <div class="overlay-effects">
      <div class="portfolio-icon">
        <button  class="video-play" data-video-id="<?php echo $vurl;?>"><i class="fa fa-play"></i></button>
      </div>
    </div>
  </div>
<?php } } ?>
 
 



  </div> 
               </div>
          </div>


       </div>
  </section>


<!-- gallery area end-->

<!-- gallery page End -->



 
 <?php
  require_once 'footer.php';

 ?>