<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> About Us</h1>
				<h4>Overview, stats, chat and more</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-user"></i> About Us</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
			<h1>About us We Care</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>Title</th>
				        <th>Text</th>
				        <th>Icon</th>
				        <th>POST DATE</th>
				        <th>ACTION</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM service ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) { ?>
						<?php $id=$data['id'];
							$service_name=$data['service_name'];
							$service_text=$data['service_text'];
							$icon=$data['icon'];
						
							$date=$data['date'];
							echo '
							 <tr>
							 	<td>'.$id.'</td>
						        <td>'.$service_name.'</td>
						        <td>'.$service_text.'</td>
						        <td>'.$icon.'</td>
						        <td>'.$date.'</td>
						        <td>
								    <a href="service_edit.php?smile='.$id.'">EDIT</a>
								</td>
								<td>
								    <a href="service_delete.php?id='.$id.'">DELETE</a>
								</td>
						      </tr>
							';
							?>
					<?php } } ?>
			    </tbody>
			</table>


			<h1>WHO WE ARE DETAILS UPDATE</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>Title NAME</th>
				        <th>TEXT</th>
				        <th>IMAGE</th>
				        <th>Date</th>
				        <th>EDIT</th>
				        <th>DELETE</th>
				       </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$we_care_main="SELECT * FROM whoweare ORDER BY id DESC";
					if($we_care_main1=mysql_query($we_care_main)){
						while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { ?>
						<?php
							$who_id         =$we_care_main2['id'];
							$who_title      =$we_care_main2['who_we_title'];
							$who_details    =$we_care_main2['who_we_details'];
							$who_image 		=$we_care_main2['who_image'];
							$who_date       =$we_care_main2['date'];
						
							echo '
							 <tr>
							 	<td>'.$who_id.'</td>
						        <td>'.$who_title.'</td>
						        <td>'.$who_details.'</td>
						        <td>'.$who_image.'</td>
						        <td>'.$who_date.'</td>
							    <td>
								    <a href="who_we_are_edit.php?hate='.$who_id.'">EDIT</a>
								</td>
								<td>
								    <a href="who_we_are_delete.php?id='.$who_id.'">DELETE</a>
								</td>
						      </tr>
							';
							?>
					<?php	}
					}
			    	?>
			    </tbody>
			</table>

		</div>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<?php
	require_once 'footer.php';
?>

