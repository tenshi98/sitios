<section id="services" class="services section-bg ">
	<div class="container" data-aos="fade-up">
		
		<div class="section-title">
			<h2><?php echo $arrBody['Servicios']['Titulo']; ?></h2>
			<p><?php echo $arrBody['Servicios']['Cuerpo_1']; ?></p>
		</div>
		<div class="row">
			<?php for ($i = 1; $i <= $arrBody['ServiciosFlex_1'][0]['total']; $i++) { ?>
				<div class="col-md-6">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="<?php $nvar = 100*$i; echo $nvar; ?>">
						<i class="<?php echo $arrBody['ServiciosFlex_1'][$i]['icon']; ?>"></i>
						<h4><a href="#"><?php echo $arrBody['ServiciosFlex_1'][$i]['titulo']; ?></a></h4>
						<p><?php echo $arrBody['ServiciosFlex_1'][$i]['cuerpo']; ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
		
		<div class="section-title">
			<p><?php echo $arrBody['Servicios']['Cuerpo_2']; ?></p>
		</div>
		<div class="row">
			<?php for ($i = 1; $i <= $arrBody['ServiciosFlex_2'][0]['total']; $i++) { ?>
				<div class="col-md-6">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="<?php $nvar = 100*$i; echo $nvar; ?>">
						<i class="<?php echo $arrBody['ServiciosFlex_2'][$i]['icon']; ?>"></i>
						<h4><a href="#"><?php echo $arrBody['ServiciosFlex_2'][$i]['titulo']; ?></a></h4>
						<p><?php echo $arrBody['ServiciosFlex_2'][$i]['cuerpo']; ?></p>
					</div>
				</div>
			<?php } ?>
		</div>
		
	</div>
</section>
