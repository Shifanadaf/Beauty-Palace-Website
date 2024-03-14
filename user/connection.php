<?php
$connect=mysqli_connect("localhost","root","","php")
or die(mysqli_error($connect));

if ($connect) {
//	echo "database connected";
	# code...
}
else
{
	echo "error";
}
?>