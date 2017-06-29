<section class="bg-blue">
				<div class="container">
					<div class="heading text-center animate bounceIn">
						<h2>Happy Customers</h2>
						<p>Customers may forget what you said but they'll never forget how you made them feel.</p>
					</div>
					<div class="row">
					<?php
					$query="select * from hap_customer";
					$run=mysql_query($query);
					while($row=mysql_fetch_array($run))
					{?>
						<div class="col-md-6">
							<div class="testimonial animate fadeInUp">
								<div class="testimonial-content">
									<p><?php echo $row['content'];?></p>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="testimonials-author">
											<img class="img-circle" src="images/<?php echo $row['image'];?>" width="100" alt="">
											<p><?php echo $row['title'];?></p>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					<?php }?>
					</div>
					
				</div>
				
				
			</section>