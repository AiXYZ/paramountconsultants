
 <!DOCTYPE html>
<html lang="en" class="no-js">
            <!-- HERDER -->
			
			
			<?php
			include("include/header.php");
			?>
			
			
           <!-- / HERDER -->
            
            
            
            <!-- MAIN BANNER -->
           <section class="cd-hero">
			<!DOCTYPE html>
<html lang="en">
<body>

<div class="container1">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
	
	
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
	<?php
	$i=0;
	$query="select * from banner";
			$run=mysql_query($query);
			while($row=mysql_fetch_array($run))
			{
				?>

      <div class="item <?php if($i==0){echo 'active';}?>">
        <img src="images/<?php echo $row['image'];?>" alt="Los Angeles" style="width:100%; height:600px;">
        <div class="carousel-caption">
          <h3><?php echo $row['name'];?></h3>
          <p><?php echo $row['content'];?></p>
        </div>
      </div>
			<?php $i++; }?>

     
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</body>
</html>


			 <!-- / MAIN BANNER -->
            
			</section>
			
			
			<!-- WELCOME -->
            <section class="bg-blue">
				<div class="container">
					<div class="row">
					
						<div class="col-md-6 animate fadeInLeft" style="text-align:justify;">
						<?php
						$query1="select * from welcome";
						$run1=mysql_query($query1);
						$row1=mysql_fetch_array($run1);?>
						
							<h2><?php echo $row1['title'];?></h2>
							<div class="height-10"></div>
							<p align="justify"><?php echo substr($row1['content'],0,800);?></p>
							
							<div class="height-20"></div>
							<a href="fullwelcome.php" class="btn btn-bordered-dark" data-text="read more">read more</a>
							<div class="height-40"></div>
							
						</div>
						<div class="col-md-6 animate fadeInRight">
							<div class="video-widget">
								<img src="images/<?php echo $row1['image'];?>" class="img-shadow" alt="">
								
							</div>
						</div>
						
					</div>
				</div>
			</section><!-- / WELCOME -->
			
			
			
			
			
			
			<!-- TESTIMONIALS -->
			
			<?php
			include("include/testimonial.php");
			?>
			
			
            <!-- / TESTIMONIALS -->
			
			
			
			<!-- REQUEST A CALLBACK -->
            <section>
				<div class="container">
					<div class="request-a-callback clearfix animate fadeInUp">
						<div class="request-a-callback-content">
							<h3>Request a Call Back</h3>
							<p>We are always ready to help our customers</p>
							<p><strong>For Investment:</strong>If you are interested with our service, please let's know that. Kindly fill up the enquiry form given below along with your contact number. When you submit the details, our representatives will get in touch with you.</p>
						</div>
						<div class="request-a-callback-form">
							<form action="mail2.php">
								<input type="text"  name="name" placeholder="Your Name">
								<input type="text" name="email" placeholder="Email Address">
								<input type="text" name="mobile" placeholder="Phone Number">
								<div class="styled-select">
									<select name="consult">
										<option>I would like to discuss:</option>
										<option>Personal Finance</option>
										<option>Education consultancy</option>
										<option>Tally software</option>
										<option>Job consultancy</option>
									</select>
								</div>
								<input type="submit"  name="submit" data-text="submit" class="btn btn-primary"></button>
							</form>
						</div>
					</div>
				</div>
			</section>
			<!-- / REQUEST A CALLBACK -->
			
			
      		<!--footer start here-->
			
			<?php
			include("include/footer.php");
			?>
			
		<!--footer end here-->
    </body>
</html>