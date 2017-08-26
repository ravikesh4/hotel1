<?php include 'header1.php';?>
<?php
					$name=$_POST['name'];
					$password=$_POST['password'];
					$mobile=$_POST['mobile'];
					$dob=$_POST['dob'];
					$address=$_POST['address'];
					mysql_connect('localhost','root','');

					mysql_select_db("hotel");


					$order= "UPDATE user set name='$name',password='$password',mobile='$mobile',dob='$dob',address='$address' where username='$login_session'";

					mysql_query($order);


					if($order)
					{
					echo("Profile Changed Successfully");
					}
					else
					{
					echo("Fail to Change");
					}
				?>
                        <br>
                        <br>

							<div align="center"><h2><b><u>Your Profile</u></b></h2></div>
								
									<div class="panel-body">
										<div class="table-responsive">
											<table class="table mb-none">
												<thead>
													<tr>
														<th>Field</th>
														<th>Value</th>
													</tr>
												</thead>
												<tbody>


<?php
 $db = mysql_connect("localhost", "root", "");
 mysql_select_db("hotel",$db);
 $result = mysql_query("SELECT * FROM user where username='$login_session'",$db);
while ($myrow = mysql_fetch_array($result)) 
	{ 
		echo "<TR><TD>";
		echo "Name";
		echo "<TD>";
		echo $myrow["name"];
		echo "</TD></TR>";
		echo "<TR><TD>";
		echo "Username";
		echo "<TD>";
		echo $myrow["username"];
		echo "</TD></TR>";
		echo "<TR><TD>";
		echo "Password";
		echo "<TD>";
		echo $myrow["password"];
		echo "</TD></TR>";
		echo "<TR><TD>";
		echo "DOB";
		echo "<TD>";
		echo $myrow["dob"];
		echo "</TD></TR>";
		echo "<TR><TD>";
		echo "Mobile";
		echo "<TD>";
		echo $myrow["mobile"];
		echo "</TD></TR>";
		
		echo "<TR><TD>";
		echo "Address";
		echo "<TD>";
		echo $myrow["address"];
		echo "</TD></TR>";
		} 
	echo "</TABLE>";
	 ?> 
	 <h5><a href="edit.php"><b><u>Edit your profile</b></u></a></h5>
	</table>
	</tbody>
		 <?php include 'footer1.php';?>