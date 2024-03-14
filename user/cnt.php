<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="pro.js"></script>
	<link href="style.css" rel='stylesheet' type='text/css' >
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Form validation -->
<script type="text/javascript">
  function validateForm() {
  let f = document.forms["myForm"]["fname"].value;
  let l = document.forms["myForm"]["lname"].value;
  let e = document.forms["myForm"]["email"].value;
  let fb = document.forms["myForm"]["fb"].value;
  var reg=/[\d]/;
  if (f == ""  || f.match(reg) )
   {
    alert("Plz fill only letters in Fisrt name");
    return false;
  }
    if (l == "" || l.match(reg)) 
    {
    alert("Plz fill only letters in last name");
    return false;
  }
  if (e == "" ) 
  {
    alert("email must be filled out");
    return false;
  }
  if (fb == "" ) 
  {
    alert("Feedback must be filled out");
    return false;
  }
}
</script>
</head>

<body class="b">
<center>
	<div> 


      <div class="contact row"  onmouseover="MH()">
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
        
            <a class="fa fa-info" href="about.html" style="font-size: 20px;color: white;" ><br>About</a>&emsp;
            <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 20px;color: white;" ><br>Cart</a>&emsp;
            <a class="glyphicon  glyphicon-log-out" href="login.php" style="font-size: 20px;color: white;" ><br>LogOut</a>
        </div>
       
</div>
		<!--  contact us form -->
<center>
		<h3>Contact Us</h3>
		  <div   style="border:solid; width:400px;height: 325px; ">
		  	
		  <form method="post" onsubmit="return validateForm()" name="myForm">
		  	<br><br>
		    <label for="fname">First Name</label>
		    <input type="text" id="fname" name="fname" placeholder="Your name.."><br><br>

		    <label for="lname">Last Name</label>
		    <input type="text" id="lname" name="lname" placeholder="Your last name.."><br><br>

         <label for="email">Email-Id</label>
        <input type="email" id="email" name="email" placeholder="Your email.."><br><br>

		    <label for="subject">Feedback</label>
		    <textarea id="fb" cols="22" rows="3" name="fb" placeholder="Write something.." ></textarea><br><br>

		    <input type="submit" value="Submit" name="submit">
		     <input type="reset" value="Reset"><br>
		  </form>
		</div>

</center>
</div>
</center>
		<!-- footer1 -->
<br>
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
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="about.html">About Us</a></li>
            <li><i class="fa fa-arrow-right" aria-hidden="true"></i><a href="cnt.php">  Contact Us</a></li>

            
            
          </ul>
        </div>
        
       
       
       
      </div><!---footer grid-->
    </div> <!----container--->
    
</div>

<?php
include 'connection.php';

if(isset($_POST['submit']))
{
extract($_POST);


    $asd = "INSERT INTO `cnt`( `fname`, `lname`, `email`, `feed`)  VALUES ('$fname','$lname','$email','$fb')" ;
    $add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('Feedback sent successfully....!');";
echo 'window.location.href = "cnt.php";';
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

</body>
</html>
