<?php 
session_start();
if(!isset($_SESSION["s_name"]))
{
    header("location: login.php");
}


$db=mysqli_connect("localhost","root","","car_showroom");

// REGISTER USER
if(isset($_POST['book'])) 
{   // receive all input values from the form
    $cmodel = $_POST['model'];   
    $user = $_SESSION["s_name"];

   $getmodelno= mysqli_query($db, "SELECT model from model where name = '".$cmodel."'");
    $numrows1 =mysqli_num_rows($getmodelno);
	if($numrows1 !=0)
	{
        while($row1=mysqli_fetch_assoc($getmodelno))
        {
            $dbmodelno=$row1['model'];         
	    }
    }
    
    $checkcar= mysqli_query($db, "SELECT * from car where model = '".$dbmodelno."'");
    $numrows3 =mysqli_num_rows($checkcar);
   
    if($numrows3 !=0)
    {
              $getuserid= mysqli_query($db, "SELECT c_id from customer where name = '".$user."'");
                $numrows2 =mysqli_num_rows($getuserid);
                if($numrows2 !=0)
                {
                    while($row2=mysqli_fetch_assoc($getuserid))
                    {
                        $dbuserid=$row2['c_id'];
                    }
                }
                 $carupdate = " DELETE from car where model = '".$dbmodelno."' LIMIT 1 ";
                mysqli_query($db, $carupdate);
                $orderupdate = " INSERT into sale2 (customer_id,carmodel) VALUES ('$dbuserid', '$dbmodelno')";
                mysqli_query($db, $orderupdate);
            $message = "Booking succesfull! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }
    else
    {
       $message = "Oops ! the car you searching for is currently not available ! ";
         echo "<script type='text/javascript'>alert('$message');</script>";
    }	
}
?>






<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.html"><img src="images/logo3.jpg" alt="" style="width:450px; height: 160px;"></a>
		 </div>
		 
		 
		 <div class="cart">
			
           <div>
             <h3> Welcome <?=$_SESSION['s_name'];?> !! </h3>
		 </div>
            
		    <div class="menu-main">
		    
			   <ul class="dc_css3_menu">
					 <li class="active"><a href="indexlogin.php">Home</a></li>
                    <li><a href="services.php">Brands</a></li>
                     <li><a href="booking.php">Book</a></li>
                     <li><a href="orders.php">Orders</a></li>
                     <li><a href="logout.php">Logout</a></li>
		     	</ul>
                
			 <div class="clear"></div>
			</div>	
						
		</div>	
		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="page-not-found">
			<div class="text-center">
          <h2>BOOK YOUR CAR !
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
          
        <form class="text-center" action="booking.php" method="post" >
                    
           <div>
               <label>Select Your Car Model</label><br>
               
              <select name = "model" style="width:575px; height: 40px;" >
                <option value = "">|--select car--|</option>
                <option value = ""> </option>
                
                
		<option value = "Land Cruiser Prado">Toyota Land Cruiser Prado</option>
				<option value = "Fortuner"> Toyota Fortuner </option>
				<option value = "Camry"> Toyota Camry </option>
				<option value = "Innova Crysta"> Toyota Innova Crysta </option>
				<option value = "Etios Cross">Toyota Etios Cross</option>
				<option value = "Vellfire">Toyota Vellfire</option>
				<option value = "Yaris">Toyota Yaris</option>
				<option value = "Glanza">Toyota Glanza</option>
				
				
				<option value = ""> </option>
				
				<option value = "R8"> Audi R8</option>
				<option value = "R8"> Audi Q7 </option>
				<option value = "RS7"> Audi RS7 </option>
				<option value = "A8">Audi A8</option>
				<option value = "TT"> Audi TT</option>
				<option value = "R10"> Audi R10</option>
				<option value = "RS Q8"> Audi RS Q8</option>
				<option value = "RS 6 Avant"> Audi RS 6 Avant</option>
				
				<option value = ""> </option>
				
				<option value = "M4"> BMW M4 </option>
				<option value = "X6"> BMW X6 </option>
				<option value = "i8">BMW i8</option>
				<option value = "M3"> BMW M3</option>
				<option value = "X3"> BMW X3 </option>
				<option value = "M8"> BMW M8 </option>
				<option value = "Z4"> BMW Z4 </option>
				<option value = "X7"> BMW X7 </option>
		

				<option value = ""> </option>
				
				<option value = "Trailblazer"> Chervolet Trailblazer </option>
				<option value = "Cruze">Chervolet Cruze</option>
				<option value = "Sail"> Chervolet Sail</option>
				<option value = "Beat"> Chervolet Beat </option>
				<option value = "Volt"> Chervolet Volt</option>
				<option value = "Corvette"> Chervolet Corvette</option>
				<option value = "Camaro"> Chervolet Camaro</option>
				<option value = "Tavera"> Chervolet Tavera</option>

								
				<option value = ""> </option>
				
				<option value = "Db11"> Aston Martin Db11 </option>
				<option value = "Rapide">Aston Martin Rapide</option>
				<option value = "Vanquish"> Aston Martin Vanquish</option>
				<option value = "Vantage"> Aston Martin Vantage </option>
				<option value = "Vulcan"> Aston Martin Vulcan</option>
				<option value = "DBX"> Aston Martin DBX</option>
				<option value = "DBS"> Aston Martin DBS</option>
				<option value = "Vantage AMR"> Aston Martin VAntage AMR</option>				
				<option value = ""> </option>
				
				<option value = "Mustang"> Ford Mustang </option>
				<option value = "Ecosport"> Ford Ecosport </option>
				<option value = "Figo"> Ford Figo </option>
				<option value = "Aspire"> Ford Aspire </option>
				<option value = "Freestyle"> Ford Freestyle </option>
				<option value = "Fiesta"> Ford Fiesta </option>
				<option value = "Mondeo"> Ford Mondeo </option>
				<option value = "Endeavour"> Ford Endeavour </option>

			</select>
             </div>
             
             <div><br>
                <button type="submit" name="book" class="btn btn-warning" value="book">Book the car</button>
             </div>
             
         </form>     
          </div>
          
         
          
            <div class="col-md-3"></div>
        
        </div>   
		</div>
	</div>
</div>








<div class="footer">
	<div class="wrap">
	   <div class="footer-top">				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						          <li>This is a CAR selling dealer</li>
						     	  <li>Please read our Terms and Conditions </li>
						     </ul>
						</div>
				   </div>
				</div>
				
				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+91 9409078145</p>
						<p>+91 7990554788</p>						
						<span>carshowroom@gmail.com</span>
					</div>
				</div>
				<div class="clear"></div>
		</div>
	</div>
</div>		

</body>
</html>






        
        
       
    	
    	
            