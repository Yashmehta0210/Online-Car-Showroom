<?php
session_start();
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Car Showroom</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
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



<div class="main">
	<div class="content-box1">
		<div class="wrap">
			<div class="banner2">
		                
	      			</div>
			</div>
	</div>
</div>




<div class="main-content">
	<div class="wrap">
		<div class="main-box">
		   <div class="box_wrapper"><h1>TOYOTA</h1></div>
		   
			<div class="section group">
			
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/fm.webp" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD MUSTANG</p>
					</div>
					<div class="Details">
				     <a href="ford mustang.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				
				
				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/fe.jpg" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD ECOSPORT</p>
					</div>
					<div class="Details">
				     <a href="ford ecosport.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				
				
				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/ff.jpg" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD FIGO</p>
					</div>
					<div class="Details">
				     <a href="ford figo.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				
				
				 <div class="col_1_of_4 span_1_of_4">
					<img src="images/fa.jpg" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD ASPIRE</p>
					</div>
					<div class="Details">
				     <a href="ford aspire.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>
				
				
				<div class="clear"></div>
			</div>
			
			<div class="section group">
			
				<div class="col_1_of_4 span_1_of_4">
					<img src="images/f-f.jpg" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD FREESTYLE</p>
					</div>
					<div class="Details">
				     <a href="ford freestyle.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>	

                                        <div class="col_1_of_4 span_1_of_4">
					<img src="images/ffi.jpg" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD FIESTA</p>
					</div>
					<div class="Details">
				     <a href="ford fiesta.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>

                                        <div class="col_1_of_4 span_1_of_4">
					<img src="images/fmon.jpg" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD MONDEO</p>
					</div>
					<div class="Details">
				     <a href="ford mondeo.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>

					<div class="col_1_of_4 span_1_of_4">
					<img src="images/f-e.jpg" alt="" style="width: 287px; height : 150px;"/>
					<div class="grid_desc">
						<p class="title">FORD ENDEAVOUR</p>
					</div>
					<div class="Details">
				     <a href="ford endeavour.php" title="Lorem ipsum dolor sit amet, consect etuer" class="button">Details<span></span></a></div>
				</div>

								
				<div class="clear"></div>
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

    	
    	
            