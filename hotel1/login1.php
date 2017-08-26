<?php
include('signin1.php'); // Includes Login Script

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

       		<h4>Login</h4>
			<form method="POST" method= " ">
			<div class="form-group">	
			<input type="text" class="form-control" name="username" id="username" placeholder="UserName">
			</div>
			<div class="form-group">
			<input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
			</div>
			<a href="#">Forget Password</a>
			<br/>
			<br/>	
			<input name="submit" type="submit" is="submit" value=" Login " class="btn btn-default">
			<span><?php echo $error; ?></span>

			<button class="btn btn-default"><a href="signup1.php">Sign Up</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>