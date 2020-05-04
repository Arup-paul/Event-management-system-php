<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>

<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-list"></i> Product List</h1>
			
		</div>

		
		
			<table class="table table-bordered">
				<thead>
				      <tr>
				        <th style="width: 250px">Short Info</th>
				        <th  style="width: 150px">Image</th>
				        <th  style="width: 800px">Detail</th>
				      </tr>
				    </thead>
			    <tbody>
			    	<?php
			    	$i=1;
			    	$sqlforuser="SELECT * FROM product ORDER BY id DESC";
					if($run=mysql_query($sqlforuser)){
						while ($data=mysql_fetch_assoc($run)) {
							$id        =$data['id'];
							$name  =$data['name'];
							$category      =$data['category'];
							$subcategory      =$data['subcategory'];
							$details =$data['details'];
							$pimage     =$data['pimage'];
							$date = $data['date'];
							$sttime=strtotime($date);
							$dated=date('d/m/Y',$sttime);
							echo '<tr>
								 	
									
								 	<td style="text-align:left"> 
								 		<p><b>SL: '.$i.' | Dated: '.$dated.'</b> </p>
										<p><b>Title: '.$name.'</b></p>
										<p>'.$category.'>'.$subcategory.'</p>

									</td>
							        
							        
							        <td>
							        	<img src="../images/upload/'.$pimage.'" alt="Here is uploaded image" height="150px"> 
							        </td>

							        <td style="text-align:left">
							        	'.$details.'
							        	<hr>
							        	<p>
									    	<a class="btn btn-success btn-sm" href="product_edit.php?id='.$id.'"> <i class="fa fa-edit"></i> EDIT</a>
									    	<a  class="btn btn-danger btn-sm" href="product_delete.php?id='.$id.'"><i class="fa fa-times-circle"></i>  DELETE</a>
									    </p>
							        </td>
							        
								    
							      </tr>
								';
								$i++;
						}
					}
			    	?>
			     


			    </tbody>
			</table>
			
		

		

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
	</div>

<?php
	require_once 'footer.php';
?>

