 <?php
   include('admin/include/connection.php');
 ?>

  <head>

    <base href="" />

	<!-- Basic Page Needs
     ================================================= -->
	 <meta charset="utf-8">
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <title>Paramount Counsultant</title>
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">

	 
	 <!-- Mobile Specific Metas
     ==================================================-->
     <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
     <meta name="format-detection" content="telephone=no">
	 
     
     <!-- Favicons
     ================================================== -->
     <link rel="icon" type="image/jpg" href="images/logo21.jpg">
     
	 
     <!-- Fonts
     ================================================== -->
     <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700%7COpen+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
     
    <!-- CSS
     ================================================== -->
	
	<!-- bootstrap -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- advisor -->
	<link rel="stylesheet" href="css/advisor.css">

	<!-- plugins -->
	<link rel="stylesheet" href="css/plugins.css">	

	<!-- advisor color -->
	<link rel="stylesheet" href="css/color-default.css">

	<!-- hero slider -->
	<link rel="stylesheet" href="css/hero-slider.css">
	
	<!-- responsive -->
	<link rel="stylesheet" href="css/responsive.css">

    
    
   
	
	<!-- HEADER SCRIPTS
    
    ================================================== -->
	<script src="js/modernizr.js"></script>
	
	<style>
	.blink_me {
    -webkit-animation-name: blinker;
    -webkit-animation-duration: 1s;
    -webkit-animation-timing-function: linear;
    -webkit-animation-iteration-count: infinite;
    
    -moz-animation-name: blinker;
    -moz-animation-duration: 10s;
    -moz-animation-timing-function: linear;
    -moz-animation-iteration-count: infinite;
    
    animation-name: blinker;
    animation-duration: 1s;
    animation-timing-function: linear;
    animation-iteration-count: infinite;
}

@-moz-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@-webkit-keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}

@keyframes blinker {  
    0% { opacity: 1.0; }
    50% { opacity: 0.0; }
    100% { opacity: 1.0; }
}
	</style>
	<style>

body
{
    padding-top: 20px;
}
#myCarousel .nav a small
{
    display: block;
}
#myCarousel .nav
{
    background: #eee;
}
.nav-justified > li > a
{
    border-radius: 0px;
}
.nav-pills>li[data-slide-to="0"].active a { background-color: #16a085; }
.nav-pills>li[data-slide-to="1"].active a { background-color: #e67e22; }
.nav-pills>li[data-slide-to="2"].active a { background-color: #2980b9; }
.nav-pills>li[data-slide-to="3"].active a { background-color: #8e44ad; }

</style>
	
	
</head>
    <body class="fixed-header">
	    	
			
			
			
			<!-- LOADER -->
			<div id="loader" class="loader">
				<div class="spinner">
				  <div class="double-bounce1"></div>
				  <div class="double-bounce2"></div>
				</div>
			</div>
			
			
			
			
 
 <!--header start here-->
 <header id="header">
            	
				<div class="container">
						
					<!-- TOP BAR -->
					
					<div class="top-bar clearfix">
						<!--<p class="blink_me">Mount Through Paramount</p>-->
						<ul>
						
							<li><i class="icon-telephone114"></i>9796070756</li>
							<li><i class="icon-icons74"></i> Paramount Consultant</li>
							<!--<li><i class="icon-icons20"></i> Mon to Sat 09:00AM - 6:00PM</li>-->
						</ul>
					</div>
					<!-- / TOP BAR -->
					
					<!-- HEADER INNER -->
					
					<div class="header clearfix">
						
						<a href="index.php" class="logo" style="margin-top:-19px;"><img src="images/logo11.jpg" alt=""><p><b>Mount Through Paramount</b></p></a>
						
						
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#primary-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					<!--<div class="search-btn">
							<a href="javascript:void(0);" class="search-trigger"><i class="icon-icons185"></i></a>
						</div>-->
						
						 <div class="search-container">
							<i class="fa fa-times header-search-close"></i>
							<div class="search-overlay"></div>
							<div class="search">
								<form>
									<label>Search:</label>
									<input type="text" placeholder="">
									<button><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div> 
						
						<nav class="main-nav navbar-collapse collapse" id="primary-nav">
							<ul class="nav nav-pills">
								
											
							
								<li class="dropdown active"><a href="index.php">Home</a>
									</li>
								<?php 
										$query="select * from pages where parent='0'";
										$run=mysql_query($query)or die(mysql_error());
										while($row=mysql_fetch_array($run))
										{
											
										$sql = 	"select * from pages where parent='".$row['id']."'";
										$run1=mysql_query($sql)or die(mysql_error());

										$count = mysql_num_rows($run1);
										if($count>0){?>
										<li class="dropdown"><a href=""><?php echo $row['title'];?><i class="fa fa-caret-down"></i></a>
									<ul class="dropdown-menu">
									  <?php
									  while($result=mysql_fetch_array($run1)){?>
									  
									  <li><a href="page.php?id=<?php echo $result['slug'];?>"><?php echo $result['title'];?></a></li>
										  
									 <?php }
									  ?>
										
										
									</ul>
								</li>
											
										<?php }else{?>
											
											<li><a href="page.php?id=<?php echo $row['slug'];?>"><?php echo $row['title'];?></a></li>
										<?php }	
										}
										
										?>	
									
								
								

								<li class="dropdown"><a href="contact_us.php">Contact Us</a>
								</li>
							</ul>
						</nav>
						
					</div><!-- / HEADER INNER -->
					
                </div><!-- / CONTAINER -->
				
            </header>
			<!--header end here-->