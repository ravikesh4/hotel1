

<?php include 'header1.php';?>
<div class="container">

<h1 class="title">Payment Form</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	

		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		
				<h3>
					<?php
	$email=$_POST['email'];
	$name=$_POST['name'];
	$phone=$_POST['phone'];
	$address=$_POST['address'];
	$checkin=$_POST['checkin'];
	$checkout=$_POST['checkout'];
	$amount=$_POST['amount'];
	$card=$_POST['card'];
	$date1=$_POST['date1'];
	mysql_connect('localhost','root','');

	mysql_select_db("hotel");


	$order= "INSERT INTO payment(email,name,phone,address,checkin,checkout,amount,card,date1) VALUES ('$email','$name','$phone','$address','$checkin','$checkout','$amount','$card','$date1')";

	mysql_query($order);


	if($order)
	{
	echo("Payment is successful   ");
	}
	else
	{
	echo("payment is fail, Try again later");
	}
?>
<a href="index1.php">  Go to Home Page</a>
</h3>
       		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Payment Form</h4>
			<form role="form" method="post" action="payment1.php">
			<div class="form-group">	

			<input type="text" class="form-control" id="email" name="email" placeholder="*Email" required>
			</div>
			<div class="form-group">	
			<input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
			</div>
			<div class="form-group">	
			<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" required>
			</div>
			<div class="form-group">	
			<input type="text" class="form-control" id="address" name="address" placeholder="address" required>
			</div>
						<div class="form-group">	
			<input type="date" class="form-control" id="address" name="checkin" placeholder="CHECK-IN" required>
			</div>
						<div class="form-group">	
			<input type="date" class="form-control" id="address" name="checkout" placeholder="CHECK-OUTX" required>
			</div>
			<div class="form-group">	
			<select name="amount">
				<option value="3000">One Room Rs. 3000.00/day</option>
				<option value="5000">Two Room Rs. 5000.00/day</option>
				<option value="7000">Three Room Rs. 7000.00/day</option>


				
			</div>
			
			<div class="form-group">
			<input type="text" class="form-control" id="amount" name="card" placeholder="Enter Card number" required>
			</div>

			<div class="form-group">
				<h4>Enter Card Expire date</h4>
			<input type="month" class="form-control" id="date1" name="date1" placeholder="Enter Card Expire date" required>
			</div>


			
					
			<button type="submit" class="btn btn-default">payment</button>
			</form>
			</div>


       	</div>



       </div>
</div>
</div>
<!-- form -->

</div>
</div>
</div>
<?php include 'footer.php';?>