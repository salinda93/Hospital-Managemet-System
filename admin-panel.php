<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
<div class="jumbotron" style="background:url('images/13.jpg') no-repeat;background-size: cover; height: 300px"></div>

<div class="container-fluid">
<div class="row">
	<div class="col-md-3">
		<div class="list-group">
			<a href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff; border-color: #3498DB">Patients</a>
			<a href="patient_details.php" class="list-group-item">Patient Details</a>
			<a href="" class="list-group-item">Payment/Checkout</a>
		</div>
		<hr>
		<div class="list-group">
			<a href="" class="list-group-item active" style="background-color: #3498DB;color: #ffffff; border-color: #3498DB">Staff</a>
			<a href="" class="list-group-item">Staff Details</a>
			<a href="" class="list-group-item">Add New Staff</a>
			<a href="" class="list-group-item">Remove Staff Member</a>
		</div>
	</div>
	<div class="col-md-8">
		<div class="card">
			<div class="card-body" style="background-color: #3498DB;color: #ffffff;">
				Book an Appointment 
			</div>
			<div class="card-body">
				<form class="form-group" action="func.php" method="post">
					<label>First Name :</label>
					<input type="text" name="fname" class="form-control"><br>

					<label>Last Name :</label>
					<input type="text" name="lname" class="form-control"><br>

					<label>Email ID :</label>
					<input type="text" name="email" class="form-control"><br>

					<label>Contact :</label>
					<input type="text" name="contact" class="form-control"><br>

					<label>Doctor Appointment :</label>
					<select class="form-control" name="docapp">
						<option value="Dr Jayasundara From 6pm to 8pm">Dr Jayasundara From 6pm to 8pm</option>
						<option value="Dr Godage From 4pm to 6pm">Dr Godage From 4pm to 6pm</option>
					</select><br>

					<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">

				</form>



			</div>
		</div>
	</div>
</div>	

</div>















<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>