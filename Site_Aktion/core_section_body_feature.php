<!-- Feature Section Start -->
<div id="feature">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="text-wrapper">
					<div>
						<!-- <h2 class="title-hl wow fadeInLeft" data-wow-delay="0.3s">We are helping to grow <br> your business.</h2> -->
						<p class="mb-4">
							<?php echo $arrBody['Feature']['text']; ?> 
						</p>
						<!-- <a href="#" class="btn btn-common">More About Us</a> -->
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12 padding-none feature-bg">
				<div class="feature-thumb">
					<?php for ($i = 1; $i <= 3; $i++) {?>
						<div class="feature-item wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="<?php echo $arrBody['Feature'][$i]['time']; ?>">
							<div class="icon">
								<i class="<?php echo $arrBody['Feature'][$i]['icon']; ?>"></i>
							</div>
							<div class="feature-content">
								<?php echo $arrBody['Feature'][$i]['content']; ?>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Feature Section End -->
