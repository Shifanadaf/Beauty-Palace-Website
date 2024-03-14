<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


	<link rel="stylesheet" href="../style1.css" type="text/css">
</head>
<center>
    <body  style="background-color: #52595D;">
	<?php

	include 'connection.php';

	?>

	<div class="main">
		<div class="register">
			<h2 style="color: white;"><strong >Register Here</h2></strong><br><br>
			<form id="register" method="post" style="border: solid 1px; border-width: 80px;" ><br>
				<label style="color: white;" >First Name: </label>&emsp;
				<input class="in" type="text" name="fname" id="name" placeholder="Enter Your First Name" style="color: black;"><br><br>

				<label style="color: white;">Last Name: </label>&emsp;
                <input style="color: black;" type="text" name="lname" id="name" placeholder="Enter Your Last Name"><br><br>

                <label style="color: white;">Email: </label>&emsp;&emsp;&emsp;
                <input style="color: black;" type="email" name="email" id="name" placeholder="Enter Your valid Email id"><br><br>

                <label style="color: white;">Address: </label>&emsp;&emsp;
                <input style="color: black;" type="addresss" name="address" id="name" placeholder="Enter Your Address"><br><br>

                <label style="color: white;">Gender: </label>&emsp;&emsp;&emsp;&emsp;
               
                <input  type="radio" name="gender" id="male" value="male">
                
                <span style="color: white;" id="male">Male</span>
                &nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" id="female" value="female">
                &nbsp;
                <span style="color: white;" id="male">Female</span><br><br>

                <label style="color: white;">Password: </label>&emsp;
                <input style="color: black;" type="Password" name="pass" id="name" placeholder="Enter Your Password"><br><br><br>
                <label style="color: white;">Phone no: </label>&emsp;
                <input style="color: black;" type="text" name="ph_no" id="ph_no" placeholder="Enter Your phone no"><br><br><br>
                
               &emsp;&emsp; <a href="login.php" type="submit" value="Login" name="Login" id="Login" class="btn btn-md btn-warning">Login</a>
<input type="submit" value="submit" name="submit" id="submit" class="btn btn-md btn-success">

               

        </form>&emsp;&emsp;<br>
    </div>
</div><br><br>

	</body></center>
	</html>
<?php
if(isset($_POST['submit']))
{
extract($_POST);


    $asd = "INSERT INTO `reg`( `fname`, `lname`, `email`, `address`, `gender`, `pass`, `ph_no`) VALUES ('$fname','$lname','$email','$address','$gender','$pass','$ph_no')" ;
    $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('Data insert successfully....!');";
echo 'window.location.href = "index.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo "</script>";
}
}
?>
