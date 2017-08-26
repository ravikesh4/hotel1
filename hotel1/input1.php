
<?php
include('signin.php'); // Includes Login Script

if(isset($_SESSION['login_user']))
{
header("location: room-details1.php");
}
?>
<?php 
	include 'header.php';  
	
?>
<div class="container">

<h1 class="title">Login</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	
		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		
				<?php
					$name=$_POST['name'];
					$username=$_POST['username'];
					$password=$_POST['password'];
					$mobile=$_POST['mobile'];
					$dob=$_POST['dob'];
					$address=$_POST['address'];
					mysql_connect('localhost','root','');

					mysql_select_db("hotel");


					$order= "INSERT INTO user(name,username,password,mobile,dob,address) VALUES ('$name','$username','$password','$mobile','$dob','$address')";

					mysql_query($order);


					if($order)
					{
					echo("Thank you for SignUp. Please Enter your Email-id and Password");
					}
					else
					{
					echo("SignUp is fail");
					}
				?>
				<br>
				<br>
       		<h4>Login</h4>
			<form method="POST" method= " ">
			<div class="form-group">	
			<input type="text" class="form-control" name="username" id="username" placeholder="UserName">
			</div>
			<div class="form-group">
			<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
			</div>
			
					
			<input name="submit" type="submit" is="submit" value=" Login " class="btn btn-default">
			<span><?php echo $error; ?></span>

			<a href="signup.php">Sign Up</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>