



<?php include 'header1.php';?>
								
									<?php 
											$db = mysql_connect("localhost", "root", ""); 
											mysql_select_db("hote",$db); 
											mysql_query("DELETE FROM payment WHERE email='$login_session'",$db); 
											echo "Room Ckeck-Out Successfully"; 
										?> 



                               
<?php include 'footer1.php';?>               