<!DOCTYPE html>
<html>
<head>
  <title></title>
  <head>
  <title></title>
  <script type="text/javascript" src="pro.js"></script>
  <link href="style.css" rel='stylesheet' type='text/css' >
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php 
include 'connection.php';
?>

<!-- about section -->
<body class="b">
<center>

  <div> 


      <div class="contact row">
        <div><h1 style="color: white;font-family: 'Lucdia Handwriting',cursive;"><center>The Beauty Palace</center></h1></div>
        <div class="col-md-1 margin" >
          <a class="glyphicon glyphicon-home" href="index.php" style="font-size: 20px;color: white;"><br>Home</a>

        </div>
         <div class="col-md-3 margin" >
          
           <form action="search.php" method="GET"> <input type="text" name="query" style="height: 40px;width: 230px; margin-top: -10px;border-radius: 25px;" placeholder="Search">&nbsp;
                          <button class="btn" type="submit" >Search</button></form>
        </div>

       <div class="col-md-5 margin" onload="document.Form1.MenuChoice.selectedIndex=0">
          <form name="Form1">
          <select name = "MenuChoice" style="height:30px"  onchange="DisplayPage(this)" >  
          
          <option >Skin Care</option>
          <option value="s1.php">Face</option>  
          <option value="s2.php">Body </option>  
          </select> &nbsp;

          <select name = "MenuChoice" style="height:30px" onchange="DisplayPage(this)" >  
          
          <option>Hair Care</option>  
          <option value="h1.php">Oil & Shampoo </option>  
          <option value="h2.php">Hair Styling</option>  
      
          </select>&nbsp;
          
          <select name= "MenuChoice" style="height:30px" onchange="DisplayPage(this)" >  
          
          <option> Beauty & Grooming</option>  
          <option value="b1.php">Fragrance</option>  
          <option value="b2.php">Tools & Accessories</option> 
          
          </select>&nbsp;

          <select name = "MenuChoice" style="height:30px" onchange="DisplayPage(this)" >  
          
          <option>Cosmetics</option>  
          <option value="c1.php">Face Makeup</option>  
          <option value="c2.php">Eye Makeup</option>  
      
          </select> &nbsp;

          
          </form>
        </div>

        <div class="col-md-3 margin" >
          <a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 20px;color: white;" ><br>Contact</a>&emsp;
        
              <a class="glyphicon glyphicon-shopping-cart" href="cart.php" style="font-size: 20px;color: white;" ><br>Cart</a>&emsp;
            <a class="glyphicon  glyphicon-log-out" href="login.php" style="font-size: 20px;color: white;" ><br>LogOut</a>
        </div>
        <!-- <div><h1><center>MH13 Street Food</center></h1></div> -->
</div>
  <div >
</div><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<?php
include "connection.php";
$row=0;
switch ($_GET['cat']) {
  case 'face':
  case 'body':
 
 
    $update = mysqli_query($connect,"select * from skin where id='".$_GET['id']."'") or die(mysqli_error($connect));
    $row = mysqli_fetch_array($update);

    break;


    // grocery query end 
  case 'oil':
  case 'hairst':

    $update = mysqli_query($connect,"select * from hair where id='".$_GET['id']."'") or die(mysqli_error($connect));
$row = mysqli_fetch_array($update);

    break;

// packed food query end 
    case 'frag':
  case 'tool':

           $update = mysqli_query($connect,"select * from beauty where id='".$_GET['id']."'") or die(mysqli_error($connect));
$row = mysqli_fetch_array($update);

    break;





// beverage query end 

  case 'fm':
  case 'em':

           $update = mysqli_query($connect,"select * from cost where id='".$_GET['id']."'") or die(mysqli_error($connect));
$row = mysqli_fetch_array($update);

    break;




  // household query end 
 


  default:
    echo "";
    break;
}

$name=$row['name'];
$price=$row['price'];
$brand=$row['brand'];






if($_GET['id']){
$asd = "INSERT INTO `add_c`(`name`, `price`,`brand`, `qty`) VALUES ('$name','$price','$brand',1)" ;
$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('Added to cart successfully....!');";
// echo 'window.location.href = "view.php";';
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





<!DOCTYPE html>
<html>
<head>
	<title>nav</title>



<!-- navbar end -->
<style type="text/css">
  td,th {
    border:1px solid #dddddd;
    text-align: left;
    padding: 9px;
  }
tr:nth-child(even){
  background-color: #dddddd;

}



</style>

<center><table style="border-collapse: collapse;width: 60%;"></center>

   
  <tr>
    <th>Sr.No</th>
    <th>Name</th>
    <th>Price</th>
    <th>Brand</th>


    <th><center>Quantity</center></th>
    <th>Action</th>
    </tr>
    <?php
        $pri=0;
        $count=0;
        $fetch1=mysqli_query($connect,"SELECT * FROM `add_c` ") or die(mysqli_error($connect));
        while ($row1 = mysqli_fetch_array($fetch1)) 
        {
          extract($row1);
        
      ?>



    <tr>
     <td><?php echo ++$count;?></td>
    <td><?php echo $row1['name']?></td>
   

    <td><?php echo $row1['price']?><?php $pri=$pri+($row1['price']*$row1['qty']); ?></td>
     <td><?php echo $row1['brand']?></td>
       <td>
        <center>
          <a href="qtyd.php?id=<?php echo $id;?>" title="Decrease Quantity">
            <i class="glyphicon glyphicon-minus"></i>
          </a>
          <?php echo $row1['qty']?>
          <a href="qtyi.php?id=<?php echo $id;?>" title="Increase Quantity">
            <i class="glyphicon glyphicon-plus"></i>
          </a>
        </center>
      </td> 
      <td>
        <a class="text-danger" onClick="return confirm('Are you sure you want to delete this registration details ?);" href="del.php?id=<?php echo $id;?>" title="Delete item from cart"><i class="glyphicon glyphicon-trash"></i></a></td>
    </tr><?php } ?>
  
 
 <tr>
  <td colspan="2"><center>Total:</center></td>
<td colspan="3"><?php echo "$pri" ;?>/-</td>
</tr>



  </table><br>

  <a href="or.php" type="button" name="Buy_now" class="btn btn-lg btn-warning">Buy Now!</a>






<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}


</style>
</head>

<body>




</body>








</html>