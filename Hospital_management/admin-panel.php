<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<div class="jumbotron" style="background: url('images/4.jpg') no-repeat;background-size: cover;
	height: 205px;"></div>

	<div class="container-fluid">
		<div class="row">
			
			<div class="col-md-3">
			<div class="list-group">

				<a href="" class="list-group-item active">Patients</a>

				<a href="patient_details.php" class="list-group-item">Patient Details</a>

				<a href="" class="list-group-item">Add New patient</a>

				<a href="" class="list-group-item">Payment/Checkout</a>
			</div>
			<hr>
			<div class="list-group">

				<a href="" class="list-group-item active">Staff</a>

				<a href="" class="list-group-item">Staff Details</a>

				<a href="" class="list-group-item">Add New Staff</a>

				<a href="" class="list-group-item">Remove staff members</a>
			</div>
			</div>

			<div class="col-md-8">
				<div class="card">
					<div class="card-body" style="background-color:#3390FF;
					color: #ffffff; ">
						<h3>Book an appoinment</h3>
					</div>

					<div class="card-body">
						
						<form class="form-group" action="func.php" method="post">
							
						<label>First Name :</label>
						<input type="text" name="fname" class="form-control"><br>

						<label>Last Name :</label>
						<input type="text" name="lname" class="form-control"><br>

						<label>Email id :</label>
						<input type="text" name="email" class="form-control"><br>

						<label>Contact :</label>
						<input type="text" name="contact" class="form-control"><br>

						<label>Doctor Appointment :</label>

						<select name="docapp" class="form-control">
							
						   <option value="Dr Sharma from 6pm to 8pm">Dr Sharma from 6pm to 8pm</option>

						   <option value="Dr Shetty from  6pm to 8pm">Dr Shetty from 4pm to 6pm</option>

						</select><br>

						<input type="submit" class="btn btn-primary" name="pat_submit" value="Enter Appointment">

					</form>
				</div>
			</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>