<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content">
		<!-- BEGIN Page Title -->
		<div class="page-title">
			<div>
				<h1><i class="fa fa-file-o"></i> Footer Page</h1>
				<h4>BLOG History A-Z</h4>
			</div>
		</div>
		<!-- END Page Title -->

		<!-- BEGIN Breadcrumb -->
		<div id="breadcrumbs">
			<ul class="breadcrumb">
				<li class="active"><i class="fa fa-home"></i> Footer Content below</li>
			</ul>
		</div>
		<!-- END Breadcrumb -->

		<div class="row">
		<h1>Quick LINK TABLE</h1>
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>TITLE</th>
				        <th>DATE</th>
				        <th>EDIT</th>
				        <th>DELETE</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM quick ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) { ?>
						<?php
							$id=$data['id'];
						
							$link_name=$data['link_name'];
							$date=$data['date'];
							echo '
							 <tr>
							 	<td>'.$id.'</td>
						        <td>'.$link_name.'</td>
						        <td>'.$date.'</td>
						        <td>
							        <a href="footer_quick_edit.php?id='.$id.'">EDIT</a>
							    </td>
							    <td>
							         <a href="footer_quick_delete.php?id='.$id.'">DELETE</a>
							    </td>
						      </tr>
							'; ?>
						<?php }
					}
			    	?>
			    </tbody>
			</table>


			<h1>Latest News Table</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>LINK TITLE</th>
				        <th>DATE</th>
				        <th>EDIT</th>
				        <th>DELETE</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM latest_news ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($latest=mysql_fetch_assoc($run)) { ?>
						<?php
							$latestid              =$latest['id'];
							$latestlink_name       =$latest['lnews'];
							$latestdate            =$latest['date'];
							echo '
							 <tr>
							 	<td>'.$latestid.'</td>
						        <td>'.$latestlink_name.'</td>
						        <td>'.$latestdate.'</td>
						        <td>
							        <a href="footer_latest_edit.php?id='.$latestid.'">EDIT</a>
							    </td>
							    <td>
							         <a href="footer_latest_delete.php?id='.$latestid.'">DELETE</a>
							    </td>
						      </tr>
							'; ?>
						<?php }
					}
			    	?>
			    </tbody>
			</table>


			<h1>Footer About Update History Table</h1>

			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th>ID</th>
				        <th>About</th>
				        <th>DATE</th>
				        <th>EDIT</th>
				        <th>DELETE</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$sqlforuser="SELECT * FROM footer_about ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($latest=mysql_fetch_assoc($run)) { ?>
						<?php
							$latestid              =$latest['id'];
							$latestlink_name       =$latest['text'];
							$latestdate            =$latest['date'];
							echo '
							 <tr>
							 	<td>'.$latestid.'</td>
						        <td>'.$latestlink_name.'</td>
						        <td>'.$latestdate.'</td>
						        <td>
							        <a href="footer_about_edit.php?id='.$latestid.'">EDIT</a>
							    </td>
							    <td>
							         <a href="footer_about_delete.php?id='.$latestid.'">DELETE</a>
							    </td>
						      </tr>
							'; ?>
						<?php }
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

