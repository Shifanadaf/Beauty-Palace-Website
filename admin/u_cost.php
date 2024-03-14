<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>


<!----------------------from W3 school--------------------->

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- calendar -->
<link rel="stylesheet" href="css/monthly.css">
<!-- //calendar -->
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
  <script type="text/javascript">
 $(document).ready(function(){

 $("#image").change(function(){
 readImageData(this);

 });
 });

 function readImageData(imgData){
 if (imgData.files && imgData.files[0]) {
 var readerObj = new FileReader();

 readerObj.onload = function (element) { 


 $('#preview_img').attr('src', element.target.result);
 }

 readerObj.readAsDataURL(imgData.files[0]);

 }
 }
</script>

  <title>update</title>
</head>
<body style="background-image: url('img/bg.jpg');background-size: cover;
">

<?php 

include 'connection.php';
?>
<?php
if($_GET['id'])
{
  

    $update = mysqli_query($connect,"select * from cost where id='".$_GET['id']."'") or die(mysqli_error($connect));
    $row = mysqli_fetch_array($update);}

?>
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
          <div class="brand">
    <a href="#" class="logo">
       <i class="glyphicon glyphicon-user"></i>
     Admin
    </a>
    </div>
            <ul class="sidebar-menu" id="nav-accordion">
                              <li>
                    <a class="active" href="v1.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
        <li>
                    <a class="active" href="view_pro.php">
                        <i class="glyphicon glyphicon-th"></i>
                        <span>View products</span>
                        </a>
                    
                </li>
                <li>
                    <a class="active" href="add_pro.php">
                        <i class="glyphicon glyphicon-plus"></i>
                        <span>Insert a product</span>
                    </a>
                </li>
                <li>
                    <a class="active" href="logout.php">
                        <i class="glyphicon glyphicon-log-out"></i>
                        <span>Log out</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</aside>    

<center><h1 style="margin-left: 200px; margin-top: 50px;"><strong>Update Beauty Care </strong></h1></center>

<section id="main-content" style="margin-top:-50px;">
<section class="wrapper">

<div class="panel panel-default" style="align-items: center;">
  <div class="panel-body">

    <form name="up_pro" method="post">
      <div class="form-group">
        <label >Enter product name</label>
        <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
      </div>
      <div class="form-group">
        <label >Enter product price</label>
        <input type="number" class="form-control" name="price" value="<?php echo $row['price']; ?>">
      </div>

           <div class="form-group">
            <label >Enter product brand</label>
            <input type="text" class="form-control" name="brand" value="<?php echo $row['brand']; ?>">
          </div>
      <div class="form-group">
        <label >Choose thumbnail for the product</label>
        <img id="preview_img" src="" alt="photonotloaded">
        <input type="file" name="photo" accept=".png,.jpeg,.jpg">
        <!-- <p class="help-block">Example block-level help text here.</p> -->
      </div>
      <div class="form-group">
        <label >Choose catagorty of the product</label>
        <select class="form-control" name="cat">
          <option value="oil" <?php if($row['cat']=='oil'){echo "selected";}?>>Oil & Shampoo</option>
          <option value="hairst"  <?php if($row['cat']=='hairst'){echo "selected";}?>>Hair Styling</option>
        
          </select>
      </div>
      
      <button type="submit" name="submit" class="btn btn-default">Update</button>
    </form>

  </div>
</div><br><br><br><br><br><br><br><br><br><br>
</section></section>
</body>
</html>
<?php

if(isset($_POST['submit']))
{
extract($_POST);

 // $pname=$_FILES['photo']['name'];
 // $type=$_FILES['photo']['type'];
 // $size=$_FILES['photo']['size'];
 // $temp=$_FILES['photo']['tmp_name'];
 // if($pname)
 // {

 // $upload= "image/";
 // $imgExt=strtolower(pathinfo($pname, PATHINFO_EXTENSION));
 // $valid_ext= array('jpg','png','jpeg' );
 // $photo= rand(1000,1000000).".".$imgExt;
 // unlink($upload.$row['Photo']);
 // move_uploaded_file($temp,$upload.$photo);
 // }
 // else
 // {
 // $photo=$row['Photo'];
 // }
$update = mysqli_query($connect,"update cost set
name='".$name."',
price='".$price."',
brand='".$brand."',

photo='".$photo."',
cat='".$cat."'
where id='".$_GET['id']."' ") or die
(mysqli_error($connect));
if($update)
{
echo "<script>;";
echo "window.alert('Data update successfully....!');";
echo 'window.location.href = "view_pro.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo 'window.location.href ="update-pro.php";';
echo "</script>";
}
}
?>