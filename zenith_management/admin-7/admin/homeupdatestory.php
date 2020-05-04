<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> BLOG list</h1>
				<h4>BLOG History A-Z</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> BLOG list below</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<h1>We Are Real Estate Right Icon & List</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>WE ARE REAL ESTATE Right LIST</th>
				        <th>POST DATE</th>
				        <th>ACTION</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM we_are_realestate ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) {?>
							<?php $id=$data['id'];
							
								$list=$data['list'];
							
							$date=$data['date'];
							echo '
							 <tr>
							 	<td>'.$id.'</td>
						        <td>'.$list.'</td>
						        <td>'.$date.'</td>
							    <td>
							        <a href="home_update_edit.php?id='.$id.'">EDIT</a>
							    </td>
							    <td>
							         <a href="home_delete.php?id='.$id.'">DELETE</a>
							    </td>
							 </tr>
							';
							?>
					<?php } } ?>
			    </tbody>
			</table>


			<h1>We Care About Real Estate.</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>Title NAME</th>
				        <th>Left Icon</th>
				        <th>Details.</th>
				        <th>Date.</th>
				        <th>Action.</th>
				       
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$we_care_main="SELECT * FROM we_care ORDER BY id DESC";
					if($we_care_main1=mysql_query($we_care_main)){
						while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { ?>
						<?php
							$id11        =$we_care_main2['id'];
							$name11      =$we_care_main2['name'];
							$icon1       =$we_care_main2['we_care_icon'];
							$we_detail11 =$we_care_main2['we_care_detail'];
							$date11      =$we_care_main2['date'];
						
							echo '
							 <tr>
							 	<td>'.$id11.'</td>
						        <td>'.$name11.'</td>
						        <td>'.$icon1.'</td>
						        <td>'.$we_detail11.'</td>
						        <td>'.$date11.'</td>
						        <td>
							        <a href="we_care_edit.php?id='.$id11.'">EDIT</a>
							    </td>
							    <td>
							         <a href="we_care_delete.php?id='.$id11.'">DELETE</a>
							    </td>
						      </tr>
							';
							?>
					<?php	}
					}
			    	?>
			    </tbody>
			</table>

			<h1>WATCH US.</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>Watch Us Youtube Link.</th>
				        <th>Date.</th>
				        <th>EDIT.</th>
				        <th>Delete.</th>
				       
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$watch="SELECT * FROM watch ORDER BY id DESC";
					if($watch1=mysql_query($watch)){
						while ($watch2=mysql_fetch_assoc($watch1)) {?>
						<?php	
							$watch_id      =$watch2['id'];
							$watch_link    =$watch2['link'];
							$watch_date    =$watch2['date'];
						
							echo '
							 <tr>
							 	<td>'.$watch_id.'</td>
						        <td>'.$watch_link.'</td>
						        <td>'.$watch_date.'</td>
						        <td>
							        <a href="youtube_edit.php?id='.$watch_id.'">EDIT</a>
							    </td>
							    <td>
							         <a href="youtube_delete.php?id='.$watch_id.'">DELETE</a>
							    </td>
						      </tr>
							';
							?>
					<?php	}
					}
			    	?>
			    </tbody>
			</table>


			<h1>Map Output.</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>MAP LINK</th>
				        <th>Date</th>
				        <th>EDIT.</th>
				        <th>DELETE.</th>
				      </tr>
				</thead>
			    <tbody>
			    	<?php
			    	$map="SELECT * FROM map ORDER BY id DESC";
					if($map1=mysql_query($map)){
						while ($map2=mysql_fetch_assoc($map1)) { ?>
						<?php
							$map_id      =$map2['id'];
							$map_text    =$map2['map'];
							$map_date    =$map2['date'];
						
							echo '
							 <tr>
							 	<td>'.$map_id.'</td>
						        <td>'.$map_text.'</td>
						        <td>'.$map_date.'</td>
						        <td>
							        <a href="map_edit.php?id='.$id.'">EDIT</a>
							    </td>
							    <td>
							         <a href="youtube_delete.php?id='.$id.'">DELETE</a>
							    </td>
						      </tr>
							';
						?>
			    <?php } }?>
			    </tbody>
			</table>
		</div>

		

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

<?php
	require_once 'footer.php';
?>

