<!-- Services Section Start -->
<section id="services" class="section-padding bg-gray">
	<div class="container">
		<div class="section-header text-center">
			<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s">Nuestros Servicios</h2>
			<p>
				<?php echo $arrBody['Services']['title']; ?>
			</p>
		</div>
		<div class="row">
			<!-- Tittle item -->
			<div class="col-md-12 col-lg-12 col-xs-12 text-center">
				<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $arrBody['Services']['subtitle_1']; ?></h2>
			</div>
			<?php for ($i = 1; $i <= 3; $i++) {?>
			<!-- Services item -->
				<div class="<?php echo $arrBody['Services'][$i]['class']; ?>">
					<div class="services-item wow fadeInRight" data-wow-delay="<?php echo $arrBody['Services'][$i]['time']; ?>">
						<div class="icon">
							<i class="<?php echo $arrBody['Services'][$i]['icon']; ?>"></i>
						</div>
						<div class="services-content">
							<?php echo $arrBody['Services'][$i]['content']; ?>
						</div>
					</div>
				</div>
			<?php } ?>
			<!-- Tittle item -->
			<div class="col-md-12 col-lg-12 col-xs-12 text-center">
				<h2 class="section-title wow fadeInDown" data-wow-delay="0.3s"><?php echo $arrBody['Services']['subtitle_2']; ?></h2>
			</div>
			<?php for ($i = 4; $i <= 5; $i++) {?>
			<!-- Services item -->
				<div class="<?php echo $arrBody['Services'][$i]['class']; ?>">
					<div class="services-item wow fadeInRight" data-wow-delay="<?php echo $arrBody['Services'][$i]['time']; ?>">
						<div class="icon">
							<i class="<?php echo $arrBody['Services'][$i]['icon']; ?>"></i>
						</div>
						<div class="services-content">
							<?php echo $arrBody['Services'][$i]['content']; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
<!-- Services Section End -->
