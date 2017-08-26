
<?php include 'header1.php';?>
<div class="container">

<h1 class="title">Payment Form</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	

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
			<input type="phone" class="form-control" id="phone" name="phone" placeholder="Phone" Maxlength="10" required>
			</div>
			<div class="form-group">	
			<input type="text" class="form-control" id="address" name="address" placeholder="address" required>
			</div>
						<div class="form-group">
						<div font-size=10>
						<b>check-in date</div></b>	
			<input type="date" class="form-control" id="address" name="checkin" placeholder="CHECK-IN" min="2017-06-01"  required>
			</div>
						<div class="form-group">	
						<div font size=10>
						<b>check-out date</div></b>	
			<input type="date" class="form-control" id="address" name="checkout" placeholder="CHECK-OUTX" min="2017-05-26" max="2017-06-26" required>
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
<?php include 'footer.php';?>