
 <?php
  require_once 'header.php';

 ?>

<!-- title area start-->
  <div class="section_titles fix pt-100 pb-50" style="background-image: url(img/service.jpg);background-repeat: no-repeat;background-size: cover;background-position: center center;background-attachment: fixed;height: 300px;animation: 10s header_anim 8">

  	   <div class="container">
  	   	     <div class="section_heading text-center">
  	   	     	<h2>Service</h2>
  	   	     	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
  	   	     </div>
  	   </div>

</div>
<!-- title area end -->

<!-- service page start -->
     <section class="product-area pt-100 pb-100">
    <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="product-tab">
          	<!-- content heaing -->
            <ul class="nav mb-50 " id="myTab" role="tablist" >
               <li class="nav-item">
                  <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                </li>
               <li class="nav-item">
                  <a class="nav-link " id="wedding-tab" data-toggle="tab" href="#wedding" role="tab" aria-controls="wedding" aria-selected="true">Wedding Management</a>
                </li>

                <li class="nav-item">
                  <a class="nav-link" id="photography-tab" data-toggle="tab" href="#photography" role="tab" aria-controls="photography" aria-selected="false">Photography & Cinematrography</a>
                </li>

                 <li class="nav-item">
                    <a class="nav-link" id="corporate-tab" data-toggle="tab" href="#corporate" role="tab" aria-controls="corporate" aria-selected="false">Corporate Events</a>
                 </li>

                 <li class="nav-item">
                   <a class="nav-link" id="seminer-tab" data-toggle="tab" href="#seminer" role="tab" aria-controls="seminer" aria-selected="false">Conference & Seminer</a>
                 </li>

                 <li class="nav-item">
                  <a class="nav-link" id="film-tab" data-toggle="tab" href="#film" role="tab" aria-controls="film" aria-selected="false">Ad Film Making</a>
                 </li> 

                 <li class="nav-item">
                   <a class="nav-link" id="media-tab" data-toggle="tab" href="#media" role="tab" aria-controls="media" aria-selected="false">Print Media solution</a>
                 </li> 

                  <li class="nav-item">
                   <a class="nav-link" id="artist-tab" data-toggle="tab" href="#artist" role="tab" aria-controls="artist" aria-selected="false">Artist & Singer Booking</a>
                 </li> 

                 <li class="nav-item">
                   <a class="nav-link" id="brand-tab" data-toggle="tab" href="#brand" role="tab" aria-controls="brand" aria-selected="false">Brand Promation</a>
                 </li> 

                 <li class="nav-item">
                   <a class="nav-link" id="stall-tab" data-toggle="tab" href="#stall" role="tab" aria-controls="stall" aria-selected="false">Exhibanation , seminar & stall decor</a>
                 </li> 

            </ul>

              <!-- content  -->
            <div class="tab-content" id="myTabContent">

              <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">

                <?php
                    $we_care_main="SELECT * FROM service ORDER BY id DESC";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active pb-20">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>




            </div>

            <div class="tab-pane fade  " id="wedding" role="tabpanel" aria-labelledby="wedding-tab">
               <?php
                    $we_care_main="SELECT * FROM service WHERE id=11";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
            	<div class="product-active">
                      <div class="service-section">
                      	<div class="row">
                      		<div class="col-md-6 offset-md-1">
                      			<div class="service-img">
                      				<img src="images/upload/<?php echo $image;?>" alt="">
                      			</div>
                      		</div>
                      		<div class="col-md-5">
                      			<div class="service_details">
                      				<h2><?php echo $empname;?></h2>
                      				<p><?php echo $details;?> </p>
                      			</div>
                      		</div>
                      	</div>
                      </div>
                </div>
              <?php } } ?>
            </div>

            <div class="tab-pane fade  " id="photography" role="tabpanel" aria-labelledby="photography-tab">
                  <?php
                    $we_care_main="SELECT * FROM service WHERE id=10";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
            </div>
           
         
            <div class="tab-pane fade  " id="corporate" role="tabpanel" aria-labelledby="corporate-tab">
                 <?php
                    $we_care_main="SELECT * FROM service WHERE id=9";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
		           </div>
           

            <div class="tab-pane fade  " id="seminer" role="tabpanel" aria-labelledby="seminer-tab">
                    <?php
                    $we_care_main="SELECT * FROM service WHERE id=8";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
            </div>

             <div class="tab-pane fade  " id="film" role="tabpanel" aria-labelledby="film-tab">
                   <?php
                    $we_care_main="SELECT * FROM service WHERE id=7";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
             </div>

             <div class="tab-pane fade  " id="media" role="tabpanel" aria-labelledby="media-tab">
                     <?php
                    $we_care_main="SELECT * FROM service WHERE id=6";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
             </div>

               <div class="tab-pane fade  " id="artist" role="tabpanel" aria-labelledby="artist-tab">
                     <?php
                    $we_care_main="SELECT * FROM service WHERE id=5";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
             </div>

              <div class="tab-pane fade  " id="brand" role="tabpanel" aria-labelledby="brand-tab">
                    <?php
                    $we_care_main="SELECT * FROM service WHERE id=4";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
             </div>

              <div class="tab-pane fade  " id="stall" role="tabpanel" aria-labelledby="stall-tab">
                    <?php
                    $we_care_main="SELECT * FROM service WHERE id=3";
            if($we_care_main1=mysql_query($we_care_main)){
            while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 
              $empname      =$we_care_main2['name'];
              $image      =$we_care_main2['image'];
              $details      =$we_care_main2['details'];
                ?>
              <div class="product-active">
                      <div class="service-section">
                        <div class="row">
                          <div class="col-md-6 offset-md-1">
                            <div class="service-img">
                              <img src="images/upload/<?php echo $image;?>" alt="">
                            </div>
                          </div>
                          <div class="col-md-5">
                            <div class="service_details">
                              <h2><?php echo $empname;?></h2>
                              <p><?php echo $details;?> </p>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
              <?php } } ?>
             </div>

          </div>
         </div>
        </div>
      </div>
     </div>
  </section>


<!-- service page End -->



 
 <?php
  require_once 'footer.php';

 ?>