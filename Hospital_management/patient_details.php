<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>
	<title>Patient Detaills</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>


	<div class="jumbotron" style="background: url('images/4.jpg') no-repeat;background-size: cover;
	height: 205px;"></div>

<div class="container">

	<div class="card">
	  <div class="card-body" style="background-color:#3390FF;color: #ffffff; ">

		  <div class="row"> 
			 <div class="col-md-1"><a href="admin-panel.php" class="btn btn-light">Back</a></div>

				<div class="col-md-3"><h3>Patient Details</h3></div>
				  <div class="col-md-8">
					<form class="form-group" action="patient_search.php" method="post">
					<div class="row">
					 <div class="col-md-10">
						<input type="text" name="search" class="form-control" placeholder="enter contact">
						 </div>
							<div class="col-md-2">
							  <input type="submit" name="patient_search_submit" class="btn btn-light" value="search">
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>




		<div class="card-body" style="background-color:#3390FF; color: #ffffff; ">

		<table class="table table-hover">
		  <thead>
		    <tr>
		      <th>First Name</th>
		      <th>Last Name</th>
		      <th>Email Id</th>
		      <th>Contact</th>
		      <th>Doctor Appoinment</th>
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
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>