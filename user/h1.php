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
        
              <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 20px;color: white;" ><br>Cart</a>&emsp;
            <a class="glyphicon  glyphicon-log-out" href="login.php" style="font-size: 20px;color: white;" ><br>LogOut</a>
        </div>
        <!-- <div><h1><center>MH13 Street Food</center></h1></div> -->
</div>
  <div >
</div>
</div>
 <h2 style="margin-top: -10px; margin-bottom: 25px">Hair Care Products</strong></h2>
<!-- product inserted -->
<div class="container" style="border: solid;  ">
  <!-- Thumbnail 1 -->


<div class="row" style="margin-top:20px;">
  <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `hair` WHERE cat='oil'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail" style="height:350px; width:300px;">
               <img src="../img/<?php echo $row['photo'];?>" alt="loading"height="150px" width="150px">
              <div class="caption">
                <h4><?php echo $row['name']?> </h4>
                <p>Price:<?php echo $row['price']?></p>
                <p>Brand:<?php echo $row['brand']?></p>
           
                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

     
    
  </div>



</center><!-- footer1 -->

<div class="footer" style="background-image: url('../img/fbg.jpg');  height: 290px">
    <div class="container" >
      <div class="w3_footer_grids">
        <div class="col-md-6 w3_footer_grid" style="margin-top: 50px;color: white;">
          <h3 class="foot">Contact</h3>
          
          <ul class="address" style="color: white">
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Government Polytechnic , Solapur. <br>

                <span>
              Akkalkot Road, Shanti Chowk, Solapur-413006</span></li>
              <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0217-2653922<br>0217-2653925</li>
            <li><i aria-hidden="true"></i><a href="mailto:office.gpsolapur@dtemaharashtra.gov.in">office.gpsolapur@dtemaharashtra.gov.in</a></li>
            
            <li><i aria-hidden="true"></i><a href="http://www.gpsolapur.ac.in/">http://www.gpsolapur.ac.in/</a></li>

          </ul>
        </div>

        <div class="col-md-6 w3_footer_grid" style="margin-top: 50px; color: white;">
          <h3 class="foot">Information</h3>
          <ul class="info"> 
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html"> About Us</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="cnt.php">  Contact Us</a></li>
             <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="../admin/index.php">  Admin</a></li>
            
            
            
          </ul>
        </div>
        
       
       
       
      </div><!---footer grid-->
    </div> <!----container--->
    
    <div class="footer-copy">
    </div>
    
</div>
<!-- </div>   -->
<!-- end -->
</body>
</head>
</html>
