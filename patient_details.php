<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="jumbotron" style="background:url('images/13.jpg') no-repeat;background-size: cover; height: 300px"></div>
	<div class="container">
		
		<div class="card">
			<div class="card-body" style="background-color: #3498DB;color: #ffffff;">
				<div class="row">
					<div class="col-md-1">
				<a href="admin-panel.php" class="btn btn-light">Back</a>
					</div>
					<div class="col-md-3"><h3>Patient Details</h3></div>
					<div class="col-md-8">
						<form class="form-group" action="func.php" method="post">
							<div class="row">
								<div class="col-md-10">
							<input type="text" name="search" class="form-control">
								</div>
								<div class="col-md-2">
							<input type="submit" name="patient_search" class="btn btn-light" value="Search">
								</div></div>
							
						</form>
					</div>
			</div>
			</div>
			<div class="card-body" style="background-color: #3498DB;color: #ffffff;">

			<table class="table table-hover">
  <thead>
    <tr>
      
      <th>First Name</th>
      <th>Last Name</th>
      <th>Email</th>
      <th>Contact</th>
      <th>Doctor Appointment</th>
    </tr>
  </thead>
  <tbody>

    <?php get_patient_details(); ?>
    
  </tbody>
</table>
</div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>