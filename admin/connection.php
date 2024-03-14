<?php
$connect=mysqli_connect("localhost","root","","php")
or die(mysqli_error($connect));

if ($connect) {
	// echo " <script>alert('database connected')</script>";
	// # code...
}
else
{
	echo "error";
}
?>