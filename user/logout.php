

<?php
include 'connection.php';
session_start();
session_destroy();
$delete = mysqli_query($connect,"DELETE FROM `add`");


if ($delete)
{
echo "<script>;";
echo "window.alert('Log out successfully....!');";
echo 'window.location.href = "login.php";';
echo "</script>";}
else {
echo "<script>;";
echo "alert('registration data error....!');";
echo 'window.location.href = "add.php";';
echo "</script>;";
}
// echo "<script>";

// echo 'window.location.href="index.php";';
// echo "</script>";

?>