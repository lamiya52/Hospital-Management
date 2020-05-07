<?php

$con=mysqli_connect("localhost", "root", "", "hospital_management");
if(isset($_POST['login_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query="select * from login where username='$username' and password='$password'";
	//var_dump($query);//
	//die();//
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		header("Location:admin-panel.php");
	}

	else
	{
		echo "<script>alert('Enter correct details.')</script>";
		echo "window.open('index.php')";
	}
}

if(isset($_POST['pat_submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	$query="insert into doctorapp(fname,lname,email,contact,docapp)values('$fname', '$lname', '$email', '$contact', '$docapp')";
	//var_dump($query);//
	//die();//
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Appoinment registered.')</script>";
		echo "<script>window.open('admin-panel.php', '_self')</script>";
	}
}

function get_patient_details()
{
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	//var_dump(mysqli_fetch_array($result));//
	//die();//
	while($row=mysqli_fetch_array($result))
	{
		$fname=$row['fname'];
		$lname=$row['lname'];
		$email=$row['email'];
		$contact=$row['contact'];
		$docapp=$row['docapp'];

		echo "<tr>
		      <td>$fname</td>
		      <td>$lname</td>
		      <td>$email</td>
		      <td>$contact</td>
		      <td>$docapp</td>
		  </tr>";
	}
}





?>




