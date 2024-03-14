<!-- INCREASE QTY query -->
<?php
include 'connection.php';
if (isset($_GET['id']))
{
$sel=mysqli_query($connect,"SELECT * FROM `add` WHERE
id='".$_GET['id']."' ");
 $row = mysqli_fetch_array($sel);
 $qty=$row['qty'];
 $qty=$qty+1;
 echo '$qty';
 $inc = mysqli_query($connect,"UPDATE `add` SET `qty`='".$qty."' WHERE 
id='".$_GET['id']."'");


if ($inc)
{
echo "<script>;";
// echo "window.alert('Data delete successfully....!');";
echo 'window.location.href = "add.php?id=&cat=";';
echo "</script>";}
else {
echo "<script>;";
echo "alert('registration data error....!');";
echo 'window.location.href = "add.php";';
echo "</script>;";
}
}

?>
<!-- end delete query -->
