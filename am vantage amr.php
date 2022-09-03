 <?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>vantage amr</title>
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
				<div class="box_wrapper"><h1>Aston Martin Vantage AMR : (Rs  3.50 Cr*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/amr0.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/amr1.jpg" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/amr2.jpg" alt=" " height=210px width=560px/></a>					
									<a href="#" target="_blank"><img src="images/amr3.webp" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/amr0.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/amr1.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/amr2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/amr3.webp" alt=" " /></a></li>
									
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
                                           <td>Mileage	24 mpg</td>
                                           <td>Engine	5935 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Petrol</td>
                                           <td>BHP: 510.5</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 65,973/yr</td>
                                           <td>No. of cylinders : 12</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 82L</td>
                                           <td>No. of Gears : 6 Speed</td>

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
                                           <td>Seating capacity: 2</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :300L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">VANTAGE AMR highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                    Engine: 4.0L Twin-Turbo V8
Transmission: 7-Speed Manual -inc: classic dog-leg first gear position
Engine Auto Stop-Start Feature
Rear-Wheel Drive
Battery w/Run Down Protection
Gas-Pressurized Shock Absorbers
4-Corner Auto-Leveling Suspension
Front And Rear Anti-Roll Bars
Automatic w/Driver Control Height Adjustable Automatic w/Driver Control Ride Control Touring Adaptive Suspension
Electric Power-Assist Speed-Sensing Steering
19.3 Gal. Fuel Tank
Dual Stainless Steel Exhaust w/Black Tailpipe Finisher
Double Wishbone Front Suspension w/Coil Springs
Multi-Link Rear Suspension w/Coil Springs
4-Wheel Disc Brakes w/4-Wheel ABS, Front And Rear Vented Discs, Brake Assist, Hill Hold Control, Ceramic Discs and Electric Parking Brake
Mechanical Limited Slip Differential
Wheels: 20" Textured Black
Tires: 20"
Forged Aluminum Wheels
Spare Tire Mobility Kit
Aluminum Spare Wheel
Compact Spare Tire Mounted Inside
Clearcoat Paint
Body-Colored Front Bumper w/Carbon Fiber Rub Strip/Fascia Accent
Body-Colored Rear Bumper w/Carbon Fiber Rub Strip/Fascia Accent
Rocker Panel Extensions
Body-Colored Door Handles
Black Side Windows Trim
Carbon Fiber Power Heated Side Mirrors w/Power Folding
Fixed Rear Window w/Defroster
Light Tinted Glass
Rain Detecting Variable Intermittent Wipers w/Heated Jets
Galvanized Steel/Aluminum/Composite Panels
Black Grille
Liftgate Rear Cargo Access
Tailgate/Rear Door Lock Included w/Power Door Locks
Cornering Lights
LED Brakelights
Fully Automatic Projector Beam Led Low/High Beam Daytime Running Auto-Leveling Headlamps w/Delay-Off
Rear Fog Lamps

Interior
Front Sports Plus Seats w/Memory Settings
Driver Seat
Passenger Seat
Power Tilt/Telescoping Steering Column
Gauges -inc: Speedometer, Odometer, Engine Coolant Temp, Tachometer, Oil Temperature, Trip Odometer and Trip Computer
Fixed Rear Windows
Sport Leather Steering Wheel
Front Cupholder
Compass
Proximity Key For Push Button Start Only
Valet Function
Power Fuel Flap Locking Type
Remote Keyless Entry w/Integrated Key Transmitter, 2 Door Curb/Courtesy, Illuminated Entry, Illuminated Ignition Switch and Panic Button
Remote Releases -Inc: Power Cargo Access and Power Fuel
Garage Door Transmitter
Cruise Control w/Steering Wheel Controls
Dual Zone Front Automatic Air Conditioning
HVAC -inc: Residual Heat Recirculation
Illuminated Locking Glove Box
Driver Foot Rest
Alcantara Simulated Suede Door Trim Insert
Leather Gear Shifter Material
Interior Trim -inc: Metal-Look Instrument Panel Insert, Carbon Fiber Door Panel Insert, Carbon Fiber Console Insert, Carbon Fiber Interior Accents and Leather Upholstered Dashboard
Full Alcantara Simulated Suede Headliner
Leather/Alcantara Seat Trim w/Lime Stitch
Day-Night Auto-Dimming Rearview Mirror
Full Floor Console w/Covered Storage and 2 12V DC Power Outlets
Front Map Lights
Fade-To-Off Interior Lighting
Full Carpet Floor Covering -inc: Carpet Front Floor Mats
Carpet Floor Trim and Carpet Trunk Lid/Rear Cargo Door Trim
Rigid Cargo Cover
Cargo Features -inc: Spare Tire Mobility Kit
Memory Settings -inc: Door Mirrors
FOB Controls -inc: Cargo Access and Windows
Driver And Passenger Door Bins
Power 1st Row Windows w/Driver And Passenger 1-Touch Down
Power Door Locks w/Autolock Feature
Systems Monitor
Redundant Digital Speedometer
Trip Computer
Outside Temp Gauge
Digital Display
Fixed Front Head Restraints
Seats w/Leather Back Material
Front Center Armrest
8-Way Adjust Electric Seats
Perimeter Alarm
Engine Immobilizer
2 12V DC Power Outlets
Air Filtration



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

    	
    	
            