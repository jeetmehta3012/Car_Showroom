<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>RS 6</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript"></script>
   
    <script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
    </script>
<script type="text/javascript" src="js/jquery-1.7.2.min.js"></script> 
<link rel="stylesheet" href="css/global.css">
<script src="js/slides.min.jquery.js"></script>
   <script>
		$(function(){
			$('#products').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				effect: 'slide, fade',
				crossfade: true,
				slideSpeed: 350,
				fadeSpeed: 500,
				generateNextPrev: true,
				generatePagination: false
			});
		});
	</script>
</head>
<body>
<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.html"><img src="images/logo3.jpg" alt="" style="width:450px; height: 160px;"></a>
		 </div>
		 <div class="cart">
			
		    <div class="menu-main">
			   <?php
                 if(isset($_SESSION['s_name']))
                 {
			         echo '<ul class="dc_css3_menu">' ;
					 echo '<li class="active"><a href="indexlogin.php">Home</a></li>' ;
					 echo '<li><a href="services.php">Brands</a></li>' ;
					 echo '<li><a href="booking.php">Book</a></li>' ;
                     echo '<li><a href="orders.php">Orders</a></li>';
                     echo '<li><a href="logout.php">logout</a></li>' ;
		     	     echo '</ul>' ;
                 }
                 else
                 {
                     echo '<ul class="dc_css3_menu">';
					 echo '<li class="active"><a href="index.php">Home</a></li>';
					 echo '<li><a href="about.html">About</a></li>';
					 echo '<li><a href="services.php">Brands</a></li>';
					 echo '<li><a href="contact.php">Contact</a></li>';
                     echo '<li><a href="login.php">Login</a></li>';
                     echo '<li><a href="register.php">Signup</a></li>';
                     echo '</ul>' ;
		     	
                 }
              ?>
			 <div class="clear"></div>
			</div>				
		</div>	
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
		<div class="single">
				<div class="box_wrapper"><h1>Audi RS 6 AVANT: (Rs 1.59 Cr*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/RS 6.jpg" alt=" " height=200px width=500px/></a>
									<a href="#" target="_blank"><img src="images/RS 6-1.jpg" alt=" " height=200px width=500px/></a>
									<a href="#" target="_blank"><img src="images/RS 6-2.jpg" alt=" " height=200px width=500px/></a>				
									<a href="#" target="_blank"><img src="images/RS 6-3.jpg" alt=" " height=200px width=500px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/RS 6.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/RS 6-1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/RS 6-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/RS 6-3.jpg" alt=" " /></a></li>
									
								</ul>
							</div>
						</div>
					   </div>
					</div>
						<div class="grid span_2_of_3">
							<table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Economy</th>
                                           <th class="text-center" style="font-family: broadway; ">Performance</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Mileage	10.42 kmpl</td>
                                           <td>Engine	3993 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Petrol</td>
                                           <td>BHP: 560</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 47,334/yr</td>
                                           <td>No. of cylinders : 8</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 75L</td>
                                           <td>No. of Gears : 8 Speed</td>

                                       </tr>
                                   </tbody>
                            </table>
                            
                            <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                                   <thead>
                                       <tr>
                                           <th class="text-center" style="font-family: broadway; ">Comfort</th>
                                           <th class="text-center" style="font-family: broadway; ">Safety</th>
                                       </tr>
                                   </thead>

                                   <tbody class="text-center">
                                       <tr>
                                           <td>Transmission : Automatic</td>
                                           <td>ABS : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Rear AC vents: Yes</td>
                                           <td>Driver Airbag : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Seating capacity: 5</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :565L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">RS6 AVANT highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                     The luggage compartment provides a loading width of 1,050 millimeters and a capacity of 565 liters in the basic configuration, increasing to 1.680 liters, with the bent back. To increase efficiency and reduce fuel consumption, all engines are standard with a light hybrid system. The heart of the MHEV system recovers up to 12 kW with the 48 V system during braking and supplies electricity to a separate lithium-ion battery.


CYLINDERSL4DISPLACEMENT1798 cm3POWER139.7 KW @ 4200-6200 RPM
190 HP @ 4200-6200 RPM
187 BHP @ 4200-6200 RPMTORQUE236 lb-ft @ 4100 RPM
320 Nm @ 4100 RPMFUEL SYSTEMTurbocharged Direct InjectionFUELGasoline
PERFORMANCE SPECS
TOP SPEED140 mph (225 km/h)ACCELERATION 0-62 MPH (0-100 KPH)8.2 s
TRANSMISSION SPECS
DRIVE TYPEFront Wheel DriveGEARBOX7-speed automatic S tronic
BRAKES SPECS
FRONTVentilated DiscsREARDiscs
DIMENSIONS
CARGO VOLUME20 cuFT (566 L)AERODYNAMICS (CD)0.27
WEIGHT SPECS
UNLADEN WEIGHT3770 lbs (1710 kg)GROSS WEIGHT LIMIT4993 lbs (2265 kg)
FUEL ECONOMY (NEDC)
CITY32.7 mpg US (7.2 L/100Km)HIGHWAY44.4 mpg US (5.3 L/100Km)COMBINED39.9 mpg US (5.9 L/100Km)CO2 EMISSIONS142 g/km


                         </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="container">
                          <div class="row"> 

                            <div class="col-sm-4">
                            </div>

                            <div class="col-sm-4">
                               <?php
                                if(isset($_SESSION['s_name']))
                                {
                                echo '<a href="booking.php" class="btn btn-primary" style =" padding-left: 110px;"><h3>BOOK THE CAR</h3> </a>';
                                }else
                                {
                                  echo '<a href="login.php" class="btn btn-primary" style =" padding-left: 110px;"><h3>BOOK THE CAR</h3> </a>';  
                                }
                                ?>
                            </div>

                            <div class="col-sm-4">       
                            </div>

                          </div>
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

    	
    	
