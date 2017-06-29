<!DOCTYPE html>
<html lang="en" class="no-js">
 
    
			<?php
			include("include/header.php");
			?>        
            
            <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Contact Us</h2>
						<ul class="breadcrumbs">
							<li><a href="#.">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
					<a href="contact-us.php" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
			
            
			
			<!-- CONTACT US -->
            <section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6 animate fadeInLeft">
							<h3>Address</h3>
							<div class="row">
								
								<div class="col-md-8 col-sm-8">
									<p> Behama chowk,Gandarbal,Jammu& Kashmir,
									    near J& k bank<br/> 
										pin code:-191201<br/>
										ph:-9796070756 <br/>
									    mail:- info@ paramountconsultants.net
									</p>
									
								</div>
							</div>
							<div class="height-20"></div>
							<h3>Follow Us</h3>
							<ul class="social">
								<li class="animate bounceIn"><a href="#." class="facebook"><i class="icon-facebook-1"></i></a></li>
								<li class="animate bounceIn" data-delay="100"><a href="#." class="twitter"><i class="icon-twitter-1"></i></a></li>
								<li class="animate bounceIn" data-delay="200"><a href="#." class="google-plus"><i class="icon-google"></i></a></li>
								<li class="animate bounceIn" data-delay="300"><a href="#." class="linkedin"><i class="icon-linkedin3"></i></a></li>
							</ul>
							<div class="height-50"></div>
						</div>
						<div class="col-md-6 col-sm-6 animate fadeInRight">
							<p class="success" id="success" style="display:none;"></p>
							<p class="error" id="error" style="display:none;"></p>
							
							<center>
                        <?php
                           if(isset($_GET['msg'])){

                            if($_GET['msg']==1){?>

                            <p style="color: green;">Message send</p>

                            <?php }
                            

                            

                          else{?>
                          <p style="color: red;">Message not send </p>

                         <?php

                           }
                         }
                        ?>
                      </center>
							<form class="contact-form" name="contact_form" id="contact_form" method="post" action="mail.php">
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="Your full name" name="contact_name" id="contact_name" class="input">
									</div>
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="E-mail Address" name="contact_email" id="contact_email" class="input">
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<input type="text" data-delay="300" placeholder="Phone No" name="contact_phone" id="contact_phone" class="input">
									</div>
								</div>
								<textarea data-delay="500" class="required valid" placeholder="Message" name="message" id="message"></textarea>
								<input class="btn btn-primary" name="send" type="submit" value="Send Message">
							</form>
						</div>
					</div>
				</div>
			</section><!-- / COMPANY OVERVIEW -->
			
			
			<!--map-->
			
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3299.255442307235!2d74.76975441484029!3d34.21649548056146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38e182b72729b827%3A0x36115238bff28861!2sGanderbal+191201!5e0!3m2!1sen!2sin!4v1497687642440" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			
			
			<!--map-->
      		
		<!--footer start here-->
			
			<?php
			include("include/footer.php");
			?>
			
		<!--footer end here-->
		
    </body>
</html>