<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-paper-plane"></i> Contact/Order Form Feedback</h1>
			
		</div>

		
			<table  class="table table-bordered">
				<tr>
					<th style="width:200px">Sender</th>
					<th style="width:800px">Detail</th>
				</tr>
				<?php 

					$message="SELECT * FROM message ORDER BY id DESC";
					if($message1=mysql_query($message)){
						
						while ($message2=mysql_fetch_assoc($message1)) {
						$id=$message2['id'];
						$name=$message2['name'];
						$email=$message2['email'];
						$message=$message2['message'];
						$date=$message2['update_date'];
					
					echo '<tr>
							<td style="text-align:left"> 
								
									<p>Name: '.$name.'</p>
								 	<p>E-mail '.$email.'</p>
								 	<p> <a class="btn btn-sm btn-danger" href="message.php?delete='.$id.'&email='.$email.'" title="Delete Post"> <i class="fa fa-times-circle "></i> Delete</a></p>
								
							</td>
							
							<td style="text-align:left">
							<p><small><b>Dated: <u>'.$date.'</u></b></small></p>
								
								 	<p><b>Message: </b>'.$message.'</p>
								 
							</td>

						</tr>';
				} }?>
			</table>
		

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
		
</div>

<?php
	if(isset($_GET['delete'])){
		$pid=$_GET['delete'];
		$del_query="DELETE FROM message WHERE id='$pid'";
		if($del_query_del=mysql_query($del_query)){
			echo "<script>alert('Information DELETED Successfully!!');</script>";
		}else{
			echo mysql_error();
		}

	}
	require_once 'footer.php';
?>

