<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Vellfire</title>
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
			 <a href="index.html"><img src="images/logo3.jpg" alt="" style ="width:450px; height: 160px;"></a>
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
				<div class="box_wrapper"><h1>Toyota Vellfire : (Rs  83.50 Lakh*)</h1></div>
				    <div class="single-top"> 	
		  				<div class="lsidebar span_1_of_s">
					   		<div id="container">
						   	  <div id="products_example">
							   <div id="products">
								<div class="slides_container">
									<a href="#" target="_blank"><img src="images/tv.webp" alt=" " height=210px width=600px/></a>
									<a href="#" target="_blank"><img src="images/tv-1.webp" alt=" " height=210px width=560px/></a>
									<a href="#" target="_blank"><img src="images/tv-2.jpg" alt=" " height=210px width=560px/></a>					
									<a href="#" target="_blank"><img src="images/tv-3.jpg" alt=" " height=210px width=560px/></a>
									
								</div>
								<ul class="pagination">
									<li><a href="#"><img src="images/tv.webp" alt=" " /></a></li>
									<li><a href="#"><img src="images/tv-1.webp" alt=" " /></a></li>
									<li><a href="#"><img src="images/tv-2.jpg" alt=" " /></a></li>
									<li><a href="#"><img src="images/c-4.jpg" alt=" " /></a></li>
									
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
                                           <td>Mileage	63.35 kmpl</td>
                                           <td>Engine	2494 cc</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Type: Petrol</td>
                                           <td>BHP: 115.3</td>

                                       </tr>
                                       <tr>
                                           <td>Service Cost: Rs 14,894/yr</td>
                                           <td>No. of cylinders : 4</td>

                                       </tr>
                                       <tr>
                                           <td>Fuel Tank: 58L</td>
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
                                           <td>Seating capacity: 7</td>
                                           <td>Parking Sensor : Yes</td>

                                       </tr>
                                       <tr>
                                           <td>Bootspace :616L</td>
                                           <td>Air Bag: Yes</td>

                                       </tr>
                                   </tbody>
                            </table>
						</div><div class="clear"></div> 
					</div>
				
                    <table class="table table-bordered table-responsive table-striped table-hover table-condensed">
                        <thead>
                            <tr>
                                <th class="text-center" style="font-family: broadway; ">VELLFIRE highlights</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <td>
                                     The Toyota Vellfire is 4,935 mm long, 1,850 mm wide and 1,935 mm/1,950 mm tall. It has a 3,000 mm wheelbase and a 160 mm/165 mm/170 mm ground clearance. Internationally, it is available with the choices of a 2.5-litre petrol engine (182 PS/235 Nm) paired to a CVT, a 3.5-litre petrol engine (301 PS/361 Nm) linked to an 8-speed AT and a petrol-electric hybrid powertrain, which consists of a 2.5-litre petrol engine (152 PS/206 Nm), the 2JM electric motor (143 PS/270 Nm) and the 2FM electric motor (68 PS/139 Nm). India will get it with only with the hybrid powertrain. This hybrid powertrain is coupled to a CVT, has four-wheel drive as standard, and promises a fuel economy (JC08) between 18.4-19.4 km/l.


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

    	
    	
            