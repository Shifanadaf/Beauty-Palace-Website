<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link href="style.css" rel='stylesheet' type='text/css' >
   <script type="text/javascript" src="pro.js"></script>
	<title></title>

<script type="text/javascript">
//Deop down menu linking script end

//Script for marquee < >
function mar()
{
document.getElementById('m').stop();


}
function out()
{

document.getElementById('m').start();

}
// function set_i()
// {
//   i=0;
// }
</script>



</head>
<body onload="ShowBanners()" style="background-color: #C6C5C5;">
<center>

<div> 

    	<div class="header row"  onmouseover="MH()" >
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
            <a class="fa fa-info" href="about.html" style="font-size: 20px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 20px;color: white;" ><br>Cart</a>&emsp;
            <a class="glyphicon  glyphicon-log-out" href="login.php" style="font-size: 20px;color: white;" ><br>LogOut</a>
    		</div>

				<div >
	    		 	<h1 id="h1"><strong></strong></h1>
	    		 	<p style="color: white;">Discover the best  <strong>Personal Care  </strong> Product</p>
	    		 	
	    		</div>
         
		</div>
	 
 
    <!-- Slider start -->
    	<img   id="img"  src="../img/s1.jpg" width="1350" height="550" name="ChangeBanner">
	<!-- Slider end -->
</div>

<div style="border: outset; background-image: url('../img/16.jpg');" >
  <br>
      <div class="row"  >
      <center><strong><i> <h1 style="color:white;">What are you <strong>looking  </strong>for ??</h1></i></strong></center>



          <div class="col-md-4 anchor" >
        
               <div style="margin-top: 20px;">
                  <a style="color:white;" href="s1.php">
                    <input type="image" src="../img/sc.jpeg" name="submit" class="img-circle" width="250" height="200" alt="Chinise Corner"/> 
                    <h4>Skin Care</h4>
                    
                  </a>
                </div>
          </div>



          <div class="col-md-4" >
        
               
          </div>
          <div class="col-md-4" >
        
               <div style="margin-top: 20px;">
                  <a style="color: white;" href="h1.php">
                   <input type="image" src="../img/hc.jpeg" name="submit" class="img-circle" width="250" height="200" alt="submit"/> 
                   <h4>Hair Care</h4> 
                  </a>
                </div>
          </div>



        

      </div>




      <div class="row" >


          <div class="col-md-4">
            
                   <div style="margin-top: 20px;">
                      <a style="color: white;"  href="b1.php">
                        <input type="image" src="../img/bc.jpeg" name="submit" class="img-circle" width="250" height="200"  alt="submit"/> <h4>Beauty & Grooming</h4>   
                      </a>
                    </div>
              </div>

              <div class="col-md-4">
            
                   <div style="margin-top: -100px;">
                      <a style="color: white; " href="#">
                        <input type="image" src="../img/logo.jpeg" name="submit" class="img-circle" width="260" height="210"  alt="submit"/>  
                      </a>
                    </div>
              </div>

              <div class="col-md-4" >
        
               <div style="margin-top: 20px;">
                  <a style="color: white;" href="c1.php">
                   <input type="image" src="../img/c.jpeg" name="submit" class="img-circle" width="250" height="200" alt="submit"/> 
                   <h4>Costmetics</h4> 
                  </a>
                </div>
          </div>

      </div></center>
</div>


  

<br>

<!-- <center> <input type="button" value="<"  onclick="previousImage()"/> -->

<center><h1><strong> Suggested For You!!  </h1></center></strong>

  

   
</center>

<br><br>
</div>


<!-- deal of theday -->
<div class="container">
<div class="panel panel-primary" >
  <div class="panel-heading"><center><h4><strong>Special Offers</strong></h4></center></div>
  <div class="panel-body" style="margin-left: 60px; margin-top: 30px;">
    

    <div class="row">
      <!-- 1st start  -->
      <div class="col-md-6 col-md-4">
          <!-- Thumbnails -->
    <div class="row">
      <?php
      include 'connection.php';
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `skin` WHERE id='6'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h4><?php echo $row['name']?> </h4>
                <p>Price:<?php echo $row['price']?></p>
                 <p>Brand:<?php echo $row['brand']?></p>

                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->



 <!-- 1st start  -->
      <div class="col-md-6 col-md-4">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `hair` WHERE id='2'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h4><?php echo $row['name']?> </h4>
                <p>Price:<?php echo $row['price']?></p>
                 <p>Brand:<?php echo $row['brand']?></p>

                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->



      <!-- 3rd start  -->
      <div class="col-md-6 col-md-4">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `skin` WHERE id='13'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h4><?php echo $row['name']?> </h4>
                <p>Price:<?php echo $row['price']?></p>
                 <p>Brand:<?php echo $row['brand']?></p>

                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->









 <!--4th start  -->
     
      <!-- end -->



 <!-- 5th start  -->
      <div class="col-md-6 col-md-4">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `skin` WHERE id='12'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h4><?php echo $row['name']?> </h4>
                <p>Price:<?php echo $row['price']?></p>
                 <p>Brand:<?php echo $row['brand']?></p>

                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->







 <!-- 6th start  -->
      <div class="col-md-6 col-md-4">
          <!-- Thumbnails -->
    <div class="row">
      <?php
         $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `beauty` WHERE id='9'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h4><?php echo $row['name']?> </h4>
                <p>Price:<?php echo $row['price']?></p>
                 <p>Brand:<?php echo $row['brand']?></p>

                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->

     


 <!-- 7th start  -->
      <div class="col-xs-6 col-md-3">
          <!-- Thumbnails -->
    <div class="row">
      <?php
        $count=0;
        $fetch=mysqli_query($connect,"SELECT * FROM `cost` WHERE id='9'") or die(mysqli_error($connect));
        while ($row = mysqli_fetch_array($fetch)) 
        {
          extract($row);
        
      ?>
        <div class="col-sm-6 col-md-4">
         <div class="thumbnail" style="height:300px; width:250px;">
             <img src="../img/<?php echo $row['photo'];?>" alt="loading" height="150px" width="150px">
              <div class="caption">
                <center>
                <h4><?php echo $row['name']?> </h4>
                <p>Price:<?php echo $row['price']?></p>
                 <p>Brand:<?php echo $row['brand']?></p>

                <p><a href="add.php?id=<?php echo $id;?>&cat=<?php echo $cat;?>" class="btn btn-primary" role="button">Add to cart</a> </p></center>
              </div>
          
        </div>

    </div>
      <?php  
        }
      ?>  
    </div>
    <!-- end thumbnails -->

      </div>
      <!-- end -->




 


    </div>
  
  </div> <!--panel body--->
</div><!---panel-->
</div><!---container----><br><br>

<!-- end panel -->



<!-- //footer -->

<!-- footer1 -->

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
</html>
</body>
</html>
