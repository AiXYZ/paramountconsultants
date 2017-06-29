

 <!DOCTYPE html>
<html lang="en" class="no-js">


			<?php
			include("include/header.php");
			?>
			          
            
            <section class="subpage-header">
				<div class="container">
					<div class="site-title clearfix">
						<h2>Services</h2>
						<ul class="breadcrumbs">
							<li><a href="#.">Home</a></li>
							<li>Services</li>
						</ul>
					</div>
					<a href="contact-us.php" class="btn btn-primary get-in-touch" data-text="Contact us"><i class="icon-telephone114"></i>Contact us</a>
				</div>
			</section>
            
            
			
			<!-- COMPANY OVERVIEW -->
            <section>
				<div class="container">
					<div class="row">
						<div class="col-md-6 animate fadeInLeft" style="text-align:justify;">
						<?php
						$id=$_GET['id'];
						//echo $id; die;
						$query="select * from pages where slug='$id'";
						$run=mysql_query($query);
						$row=mysql_fetch_array($run);
						
							?>
							<h2><?php echo $row['title'];?></h2>
							<div class="height-10"></div>
							<p><?php echo $row['content'];?></p>
						</div>
						<div class="col-md-6 animate fadeInRight">
							<div class="image-widget">
								<img src="images/<?php echo $row['image'];?>" class="img-shadow" alt="">
							</div>
						</div>
						
					</div>
				</div>
			</section><!-- / COMPANY OVERVIEW -->
			
			
			
			
			
			
			
      		<!--footer start here-->
			
			<?php
			include("include/footer.php");
			?>
			
		<!--footer end here-->
		
    </body>
</html>