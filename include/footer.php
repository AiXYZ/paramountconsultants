<footer id="footer">
				<div class="container">
					<div class="footer-top clearfix">
						
						<div class="row">
							<div class="col-md-3 col-sm-3">
								<div class="footer-logo animate fadeInLeft"><a href="index.php"><img src="images/logo2.jpg" width="350" height="100" alt=""></a></div>
							</div>
							<div class="col-md-9 col-sm-9">
								<p align="justify">Paramount Consultants are group of professionals worked in abroad and in India in banks and many corporate houses.With our vision “to be the choice of customer as Strategic partner in expertise seek and of Candidate in profession development” we offer talent management answers that provide fine human capital to our clients and people with precious employment possibilities. We help people to explore their quality and excel of their industry.</p>
							</div>
						</div>
					
						<div class="height-50"></div>
						
						<div class="footer-left">
							<div class="footer-address-widget clearfix">
								<ul>
							<li><i class="icon-telephone114"></i>9796070756<a href="mailto:info@paramountconsultants.net">info@paramountconsultants.Net</a></li>
									<li><i class="icon-icons74"></i>Behama chowk,<span>Gandarbal,Jammu & Kashmir near J&k bank  : pin code 191201</span></li>
								</ul>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="usefull-links-widget clearfix" style="width: 500px;">
										<h4>Usefull Links</h4>
										<ul>
										<?php
										$query3="select * from pages where parent='15'";
										//echo $query3
										$run3=mysql_query($query3);
										while($row3=mysql_fetch_array($run3))
										{?>
											<li><a href="page.php?id=<?php echo $row3['id'];?>"><?php echo $row3['title'];?></a></li>
											
										<?php } ?>
										</ul>
										
									</div>
								</div>
								<div class="col-md-6">
									<!--map-->
									
				
				
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.255442307235!2d74.76975441484029!3d34.21649548056146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e182b72729b827%3A0x36115238bff28861!2sGanderbal+191201!5e0!3m2!1sen!2sin!4v1497687642440" width="110%" height="320" frameborder="0" style="border:0; padding-right:70px;" allowfullscreen></iframe>				
									
									
									
									
									<!--map-->
								</div>
							</div>
						</div>
						<div class="footer-right">
							<div class="newsletter-widget">
								<h4>Our Newsletter</h4>
								
								<div class="form">
								<?php
								if(isset($_POST['Subscribe']))
								{
									$name=$_POST['subscribe_name'];
									$email=$_POST['subscribe_email'];
									$query5="insert into subsribe_user(name,email)values('$name','$email')";
									$run5=mysql_query($query5);
								}
								?>
									<p class="subscribe_success" id="subscribe_success" style="display:none;"></p>
									<p class="subscribe_error" id="subscribe_error" style="display:none;"></p>
									<form name="subscribe_form" id="subscribe_form" method="post" action="#">
										<input type="text" data-delay="300" placeholder="Your Name" name="subscribe_name" id="subscribe_name" onKeyPress="removeChecks();" class="input" >
										<input type="text" data-delay="300" placeholder="Email Address" name="subscribe_email" id="subscribe_email" onKeyPress="removeChecks();" class="input" >
										<button class="btn btn-primary" name="Subscribe" type="submit" data-text="Subscribe" onClick="validateSubscription();">Subscribe</button>
									</form>
								</div>
								<ul class="social">
									<li class="animate bounceIn"><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
									<li class="animate bounceIn" data-delay="100"><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
									<li class="animate bounceIn" data-delay="200"><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
									<li class="animate bounceIn" data-delay="300"><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-md-6 col-sm-6"><p></p></div>
							<div class="col-md-6 col-sm-6"><p class="text-right">Designed and Developed by <a href="http://www.seoxprts.com/"target=_blank>SeoXprts</a></p></div>
						</div>
					</div>
				</div>
				
			</footer>
			
			
			
            
		<!-- FOOTER SCRIPTS
		================================================== -->
		<script src="js/jquery-2.2.0.js"></script>
		<script src="js/smooth-scroll.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/counter.js"></script>
		<script src="js/common.js"></script>
		<script src="js/scripts.js"></script>
		<script src="js/hero-slider.js"></script>