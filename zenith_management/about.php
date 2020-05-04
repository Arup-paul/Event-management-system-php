
 <?php
  require_once 'header.php';

 ?>

<!-- title area start-->
  <div class="section_titles fix pt-100 pb-50" style="background-image: url(img/about.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;height: 300px;animation: 10s header_anim 8">

  	   <div class="container">
  	   	     <div class="section_heading text-center">
  	   	     	<h2>About Us</h2>
  	   	     	
  	   	     </div>
  	   </div>

</div>
<!-- title area end -->

<!-- about page start -->

    <div class="about-area pt-50 pb-50">
    	<div class="container">
    		
    			<div class="about-description">
    				<div class="row">
                <?php
             $we_care_main="SELECT * FROM project where pstatus='about' ORDER BY id DESC ";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $image      =$we_care_main2['image'];
              $sdetails=$we_care_main2['details'];
          ?>
    			<div class="col-xl-6 col-md-6 col-sm-12">
    				<img src="images/upload/<?php echo $image;?>" alt="">
    			</div>
    			<div class="col-xl-6 col-md-6 col-sm-12">
    				<p><?php echo $sdetails;?></p>
    			</div>
        <?php } } ?>
    		</div>
    		</div>

    	    <div class="about-des">
    	    	<div class="row">
    	    		<div class="col-12">
                    <?php
             $we_care_main="SELECT * FROM project  where pstatus='message' ORDER BY id DESC ";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) {
               $empname      =$we_care_main2['name']; 
              $sdetails=$we_care_main2['details'];
          ?>
              <h2><?php echo $empname;?></h2>
              <p><?php echo $sdetails;?></p>
    	    		
              <?php } } ?>
    	    			
    	    		</div>
    	    	</div>
    	    </div>
    	</div>
    	
    	
    </div>

<!-- about page End -->



 
 <?php
  require_once 'footer.php';

 ?>