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
          
           <form action="search.php" method="GET"> <input type="text" name="query" style="height: 40px;width: 230px;border-radius:20px;  margin-top: -10px;" placeholder="Search">&nbsp;
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

        <div class="col-md-2 margin" >
          <a class="glyphicon glyphicon-user" href="cnt.php" style="font-size: 20px;color: white;" ><br>Contact</a>&emsp;
           <a class="glyphicon glyphicon-shopping-cart" href="add.php?id=&cat=" style="font-size: 20px;color: white;" ><br>Cart</a>&emsp;
            <a class="fa fa-info" href="about.html" style="font-size: 20px;color: white;" ><br>About</a>
        </div>
        <!-- <div><h1><center>MH13 Street Food</center></h1></div> -->
</div></div>
<h1>Search Results</h1><br>
<?php
include 'connection.php';
	$query = $_GET['query']; 
	// gets value sent over search form
	
	$min_length = 3;
	// you can set minimum length of the query if you want
	
	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
		
		$query = htmlspecialchars($query); 
		// changes characters used in html to their equivalents, for example: < to &gt;
		
		$query = mysqli_real_escape_string($connect,$query);
		// makes sure nobody uses SQL injection


$row=0;
switch ($_GET['cat']) {
  case 'face':
  case 'body':
 
 
   $raw_results = mysqli_query($connect,"SELECT * FROM skin
      WHERE (`name` LIKE '%".$query."%') OR (`brand` LIKE '%".$query."%')") or die(mysql_error());

    break;


    // grocery query end 
  case 'oil':
  case 'hairst':

   $raw_results = mysqli_query($connect,"SELECT * FROM search
      WHERE (`pname` LIKE '%".$query."%') OR (`dname` LIKE '%".$query."%')") or die(mysql_error());
    break;

// packed food query end 
    case 'frag':
  case 'tool':

          $raw_results = mysqli_query($connect,"SELECT * FROM search
      WHERE (`pname` LIKE '%".$query."%') OR (`dname` LIKE '%".$query."%')") or die(mysql_error());
    break;





// beverage query end 

  case 'fm':
  case 'em':

          $raw_results = mysqli_query($connect,"SELECT * FROM search
      WHERE (`pname` LIKE '%".$query."%') OR (`dname` LIKE '%".$query."%')") or die(mysql_error());
    break;




  // household query end 
 


  default:
    echo "";
    break;
}

















		
		

			
		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table
		
		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
		
		if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
?>			
<div class="row"><div class="col-md-12"><?php
			while($results = mysqli_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
?>	
	<div class="col-md-3" style="border:solid; ">
	<!--  Fectching all the details of search items-->
			<h3><?php echo $results['pname']?> </h3>
			<h4>&emsp;&#128204; Location: <?php echo $results['lc']?></h4>
			<h4>&emsp;&#127869; Timing for dine-in: <?php echo $results['t']?></h4>
	        <h4>&emsp;&#9742; Contact for more details : <?php echo $results['cnt']?></h4>
		    <h4>&emsp;&#11088; Review : <?php echo $results['rv']?>/5</h4><br>
           <div class="thumbnail" style="height:350px; width:300px; background-color: #61507A; ">
          
            <img src="../img/<?php echo $results['ph'];?>" alt="loading"style="width: 250px;height: 200px;">
              <div class="caption" style=" color: white;">
                <h3><?php echo $results['dname']?> </h3>
                <p>Price:&#8377;<?php echo $results['dp']?></p>
                 <p>Rating:(<?php echo $results['dr']?>/5)</p>
                
                
              </div><!-- end caption-->
          
         </div><!-- end thumbnail-->
    </div><!-- end clm-->
<?php 
}   ?>
</div><!-- end row-->     
</div><!-- end row-->
    
    <?php
			
			
		}
		else{ // if there is no matching rows do following
			echo "No results Found";
		}
		
	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
	}
?>

</center><br>
 <!-- footer1 -->

<div class="footer" style="background-image: url('../img/ft.jpg');  height: 290px">
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
    
    <div class="footer-copy">
    </div>
    
</div>
	</center>
	
</body>
</html>

  
