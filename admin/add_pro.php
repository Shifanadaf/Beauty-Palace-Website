<!DOCTYPE html>
<html>
<head>
	<title>Adding product in database</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
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
</head>
<body style="background-image: url('img/bg.jpg');background-size: cover;
">

<?php 
include 'connection.php';
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
                    <a class="active" href="main.php">
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
</aside>    <center><h1 style="margin-left: 200px; margin-top: 50px;"><strong>Insert</strong></h1></center>

<section id="main-content" style="margin-top:-50px;">
<section class="wrapper">
<!-- //market-->



		<div class="panel panel-default" style="align-items: center;">
  <div class="panel-body">
        <center><table class="table table-bordered" >
        	<tr>

		<form name="add_pro" method="post">
		  <div class="form-group">
		    <td><label >Enter product name:</label></td>
		    <td><input type="text" class="form-control" name="p_name" placeholder="Product name"></td>
		  </div>
		</tr>


		<tr>
		  <div class="form-group">
		    <td><label >Enter product Price:</label></td>
		    <td><input type="number" class="form-control" name="price" placeholder="Product Price"></td>
		  </div>
		  </tr>

		  <tr>
		  <div class="form-group">
		    <td><label >Enter product Brand:</label></td>
		    <td><input type="text" class="form-control" name="brand" placeholder="Product Brand"></td>
		  </div>
		  </tr>


		  <tr>
		  <div class="form-group">
		   <td> <label >Choose thumbnail for the product:</label><br>
		    <img src="..." alt="photonotloaded"></td>
		   <td> <input type="file" name="photo" accept=".png, .jpeg, .jpg"></td>

		    <!-- <p class="help-block">Example block-level help text here.</p> -->
		  </div>
		    </tr>

		     

		      <tr>
		  <div class="form-group">
		    <td><label >Choose catagorty of the product:</label></td>
		  <td>  <select class="form-control" name="cat">
		    	<option value="face">Face</option>
		    	<option value="body">Body</option>
		    
		    	
		    	<!--skin options end -->
		    	
		    	<option value="oil">Oil & Shampoo</option>
		    	<option value="hairst">Hair Styling</option>
		    	
		    	
		    	<!-- beauty options end -->

		    	<option value="frag">Fragrance</option>
		    	<option value="tool">Tools & Accessories</option>
		    	
		    	<

		    	<!-- cost options end  -->
		    	
		    	<option value="fm">Face Makeup</option>
		    	<option value="em">Eye Makeup</option>
		    	
		    	<!-- cost options end  -->

		    	

		    </select></td>
		  </div>
		</tr>
		  <tr >
		  <td colspan="2" ><center style="margin-left: -70px"><button type="submit"  name="Insert" class="btn btn-success">Insert</button>&ensp;
		  		<button type="Reset"  name="reset" class="btn btn-danger">Reset</button></center></td>
		</tr>
		</form></table></center>
		

  </div>
</div><br><br><br><br><br><br><br><br>
	</section></section>
		<!-- //market-->





</body>
</html>
<?php
if(isset($_POST['Insert']))
{
extract($_POST);
// $lang = implode(',' ,$_POST['language']);
 $name=$_FILES['photo']['name'];
 $type=$_FILES['photo']['type'];
 $size=$_FILES['photo']['size'];
 $temp=$_FILES['photo']['tmp_name'];
 if($name){

 $upload= "img/";
 $imgExt=strtolower(pathinfo($name,
PATHINFO_EXTENSION));
 $valid_ext= array('jpg','png','jpeg',);
 $photo= rand(1000,1000000).".".$imgExt;
 move_uploaded_file($temp,$upload.$photo);
 }

switch($cat){
	case 'face':
	case 'body':
	
	
	
	$asd = "INSERT INTO `skin`(`name`, `price`,`brand`, `photo`, `cat`) VALUES ('$p_name','$price','$brand','$photo','$cat')" ;
			break;
	// grocery query end 
	case 'oil':
	case 'hairst':
	
	
$asd = "INSERT INTO `hair`(`name`, `price`,`brand`, `photo`, `cat`) VALUES ('$p_name','$price','$brand','$photo','$cat')" ;
			break;
	// packed food query end 
	
	case 'frag':
	case 'tool':
	
	$asd = "INSERT INTO `beauty`(`name`, `price`,`brand`, `photo`, `cat`) VALUES ('$p_name','$price','$brand','$photo','$cat')" ;
			break;
	// beverage query end 

	case 'fm':
	case 'em':
	
	
	$asd = "INSERT INTO `cost`(`name`, `price`,`brand`, `photo`, `cat`) VALUES ('$p_name','$price','$brand','$photo','$cat')" ;
			break;
	
	default: echo "not inserted";
}


$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('Data insert successfully....!');";
echo 'window.location.href = "view_pro.php";';
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

<!-- delete query -->
 <?php
if (isset($_GET['id']))
{
$sel=mysqli_query($connect,"select * from add where
id='".$_GET['id']."' ");
while ($fetch=mysqli_fetch_array($sel))
 {


 $delete = mysqli_query($connect,"delete from add where
id='".$_GET['id']."'");


if ($delete)
{
echo "<script>;";
echo "window.alert('Data delete successfully....!');";
echo 'window.location.href = "add.php";';
echo "</script>";}
else {
echo "<script>;";
echo "alert('registration data error....!');";
echo 'window.location.href = "add.php";';
echo "</script>;";
}
}
}

?>
<!-- end delete query -->

