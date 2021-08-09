<section id="services" class="services section-bg ">
	<div class="container" data-aos="fade-up">
		<div class="section-title">
			<h2><?php echo $arrBody['Servicios']['Titulo']; ?></h2>
			<p><?php echo $arrBody['Servicios']['Cuerpo']; ?></p>
		</div>
		<div class="row">
			<?php for ($i = 1; $i <= $arrBody['ServiciosFlex'][0]['total']; $i++) { ?>
				<div class="col-md-6">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="<?php $nvar = 100*$i; echo $nvar; ?>">
						<i class="<?php echo $arrBody['ServiciosFlex'][$i]['icon']; ?>"></i>
						<h4><a href="#"><?php echo $arrBody['ServiciosFlex'][$i]['titulo']; ?></a></h4>
						<p><?php echo $arrBody['ServiciosFlex'][$i]['cuerpo']; ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>
