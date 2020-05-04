<?php 


require_once 'header.php';


?>

<!--slider area  -->
<div class="slider-area ">
	<div class="slider-active owl-carousel">
      <?php
             $we_care_main="SELECT * FROM add_slider ORDER BY id DESC ";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $image      =$we_care_main2['image'];
              $pstatus      =$we_care_main2['caption'];
              $gallery_name      =$we_care_main2['gallery_name'];
          ?>
		<div class="single-slider d-flex align-items-center justify-content-center  text-center" style="background-image: url(images/upload/<?php echo $image;?>); width: 100%;background-repeat: no-repeat;background-size: cover;background-position: center center; ">
			<div class="slider-inner">
			
			<h2><?php echo $gallery_name;?></h2>
			
		</div>
		</div>
  <?php }  } ?>

	</div>
</div>

<!-- header area end -->

  <!-- we are you start -->
  <div class="we-are_section fix pt-40 pb-40" style="background-image: url(img/event-bg.jpg); width: 100%;background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;">
  	<div class="container">
  		<div class="section_heading text-center">
  			<h2>Who We Are</h2>
  			<span></span>
  			<p>My team of results-driven former journalists and communications experts transforms complex thoughts and insights into persuasive stories.</p>
  		</div>
  		<div class="we_are_section_details pt-20">
  			<div class="row">
          <?php
             $we_care_main="SELECT * FROM who_we_are ORDER BY id DESC limit 6";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $image      =$we_care_main2['image'];
              $pstatus      =$we_care_main2['caption'];
              $gallery_name      =$we_care_main2['gallery_name'];
          ?>
  				<div class=" col-md-4 col-sm-6 col-12">
  					<div class="we_are_details">
  						<img src="images/upload/<?php echo $image;?>" alt="">
  						<h2><?php echo $gallery_name;?></h2>
  						<p><?php echo $pstatus;?></p>
  					</div>
  				</div>
        <?php  } } ?>
  			
  			</div>
  		</div>
  	</div>
  </div>

  <!-- we are you End-->



<!-- About area start -->

  <div class="about-area fix">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-xl-6">
  				<div class="about_video">
  					<iframe width="100%" height="400" src="https://www.youtube.com/embed/PIyORsLqkJc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  				</div>
  			</div>
  			<div class="col-xl-6 pt-50 pb-50">
  				<div class="about_text text-center">
  					<h2>Zenith <br>Celebration</h2>
  					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
  				</div>
  			</div>
  		</div>
  	</div>
  </div>


<!-- About area End -->

<!-- Client area start -->
   <div class="clients_area pt-50 pb-50 fix">
   	<div class="container">
   		<div class="section_heading text-center">
  			<h2 class="section_title_black">Clients</h2>
  			<span></span>
  		</div>
  	
       <div class="client_section">
         <div class="row">
           <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client1.png" alt="">
           </div>
            <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client2.png" alt="">
           </div>
            <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client3.png" alt="">
           </div>
            <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client4.png" alt="">
           </div>
            <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client5.png" alt="">
           </div>
            <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client6.png" alt="">
           </div>
            <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client7.png" alt="">
           </div>
            <div class="col-md-3 col-sm-4 col-12">
             <img src="img/client8.png" alt="">
           </div>
         </div>
       </div>
   		</div>
   </div>
   

<!-- Client area End -->

<!-- client testimonial area start -->
<div class="testimonial_area pt-50 pb-50 fix">
    <div class="container">
      <div class="section_heading text-center">
        <h2 class="section_title_black">Client Testimonials</h2>
        <span></span>
      </div>
    
    <div class="col-8 offset-2">
      <div class="testimonial_active owl-carousel">
     
      <?php
             $we_care_main="SELECT * FROM testimonial ORDER BY id DESC limit 4";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $image      =$we_care_main2['image'];
              $pstatus      =$we_care_main2['caption'];
              $gallery_name      =$we_care_main2['gallery_name'];
          ?>
    <div class="testimonial_section text-center">
      <img style="width: 100px; height: 100px;" src="images/upload/<?php echo $image;?>" alt="">
      <p><?php echo $pstatus;?></p>
        <span>CEO: <?php echo $gallery_name;?></span>
    </div>
  <?php } } ?>

       <div class="testimonial_section text-center">
      <img style="width: 100px; height: 100px;" src="img/partner2.jpg" alt="">
      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
        <span>CEO: company 2</span>
    </div>
  </div>
  </div>
</div>
</div>



<!-- client testimonial area end -->


 <?php
  require_once 'footer.php';

 ?>