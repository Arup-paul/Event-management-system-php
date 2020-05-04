<?php
	require_once 'head.php';
	require_once 'left_side_nav.php';
?>


<div id="main-content" class="main-content">
		<div class="page-title">
			
				<h1><i class="fa fa-picture-o"></i>Media Update</h1>
				<h4>Gallery &amp; Promotional Video panel</h4>
			
		</div>


	<?php 

			echo '
			<table class="table table-bordered">
						<thead>
						<tr>
						
						<th>Sl no</th>
						<th>personal Info</th>
						<th>Educational qualication</th>
						<th>Contact info</th>
						<th>Application info</th>
						
						</tr>
					</thead>
			<tbody>
				';		

						$we_care_main="SELECT * FROM apply_online ORDER BY id ";
						if($we_care_main1=mysql_query($we_care_main)){
						while ($we_care_main2=mysql_fetch_assoc($we_care_main1)) { 

							$id         =$we_care_main2['id'];
							$f_name         =$we_care_main2['f_name'];
							$ielts_score      =$we_care_main2['ielts_score'];
							$date_birth      =$we_care_main2['date_birth'];
							$mobile_phone      =$we_care_main2['mobile_phone'];
                            $title            =$we_care_main2['title'];
							$gender      =$we_care_main2['gender'];
							$l_name      =$we_care_main2['l_name'];
							$passport_no      =$we_care_main2['passport_no'];
							$address      =$we_care_main2['address'];
							$email_address      =$we_care_main2['email_address'];
							$city      =$we_care_main2['city'];
							$zip_code      =$we_care_main2['zip_code'];
							$lan_phone      =$we_care_main2['lan_phone'];
							$taken_ielts      =$we_care_main2['taken_ielts'];
							$ielts_score      =$we_care_main2['ielts_score'];
							$education_qualification     =$we_care_main2['education_qualification'];
							$choose_country      =$we_care_main2['choose_country'];

							$comment      =$we_care_main2['comment'];
							$date      =$we_care_main2['date'];
							



						echo '
							 <tr >
						        <td '.$id.'</td>
						        <td style="text-align:left:;">Name:'.$f_name.'<br>
						        '.$l_name.'<br>
						       Birthday: '.$date_birth.'<br>
						     
						        </td>



						        <td>Ielts Score:'.$ielts_score.'<br>
						       '.$education_qualification.'</td>

						        <td>
						        Mobile no:'.$mobile_phone.'<br>
						        City:'.$city.'<br>
						        Zip Code:'.$zip_code .'<br>
						       Lan Phone: '.$lan_phone.'<br>
						        </td>

						         <td>
						        Choose country:'.$choose_country.'<br>
						        Date:'.$date .'<br>
						        </td>


						      
				
						      </tr>
							';
							
							}
						}
						echo '
						</tbody>
						</table>
						';
	?>

		<a id="btn-scrollup" class="btn btn-circle btn-lg" href="#"><i class="fa fa-chevron-up"></i></a>
</div>


?>

