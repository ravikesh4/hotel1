

<?php include 'header1.php';?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	
       	<?php

				$user_name="root";
				$pass="";
				$server="localhost";


				$name=$_POST['name'];
				$email=$_POST['email'];
				$phone=$_POST['phone'];
				$msg=$_POST['msg'];

				mysql_connect($server,$user_name,$pass) or die(mysql_error());

				mysql_select_db("hotel");


				$order= "INSERT INTO contact(name,email,phone,msg) VALUES ('$name','$email','$phone','$msg')";

				mysql_query($order);


				if($order)
				{
				echo("Thank you for writting with us .");
				}
				else
				{
				echo("Sorry, Message is not send.");
				}

		?>

		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" method="post" action="contact1.php">
			<div class="form-group">	
			<input type="text" class="form-control" id="name" name="name" placeholder="Name" Required>
			</div>
			<div class="form-group">
			<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" Required>
			</div>
			<div class="form-group">
			<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" Required>
			</div>
			<div class="form-group">
			<textarea type="text" class="form-control" name="msg" placeholder="Message" rows="4" Required></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer1.php';?>