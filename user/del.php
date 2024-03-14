<!-- delete query -->
<?php
include 'connection.php';
if (isset($_GET['id']))
{
$sel=mysqli_query($connect,"select * from add_c where
id='".$_GET['id']."' ");


 $delete = mysqli_query($connect,"DELETE FROM `add_c` WHERE 
id='".$_GET['id']."'");


if ($delete)
{
echo "<script>;";
echo "window.alert('Product delete successfully from cart....!');";
echo 'window.location.href = "add.php?id=&cat=";';
echo "</script>";}
else {
echo "<script>;";
echo "alert('Error deleteing product from cart....!');";
echo 'window.location.href = "add.php";';
echo "</script>;";
}
}

?>
<!-- end delete query -->



<!-- update query -->




<!-- end delete query -->



<!-- update query -->



