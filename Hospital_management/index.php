<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<style type="text/css">
	#ab1:hover{cursor: pointer;
		background: green;}
</style>

<body class="body-img">

<div class="container">
	<div class="card">
		 <img src="images/1.jpg" class="card-img-top">
		<div class="card-body">

	<form class="form-group" action="func.php" method="post">


		<label>Username :</label>
		<input type="text" name="username" class = "form-control" placeholder="enter username"><br>

		<label>Password :</label>
		<input type="password" name="password" class = "form-control" placeholder="enter password"><br>

		<input type="submit" name="login_submit" id = "ab1" class="btn btn-primary">

	</form>

</div>
</div>
</div>



 

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>