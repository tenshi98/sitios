<section id="about" class="about section-bg">
	<div class="container" data-aos="fade-up">

		<div class="row no-gutters">
			<div class="content col-xl-5 d-flex align-items-stretch">
				<div class="content">
					<h3><?php echo $arrBody['Acerca']['CompromisoTitulo']; ?></h3>
					<p><?php echo $arrBody['Acerca']['CompromisoCuerpo']; ?></p>
				</div>
			</div>
			<div class="col-xl-7 d-flex align-items-stretch">
				<div class="icon-boxes d-flex flex-column justify-content-center">
					<div class="row">
						<?php for ($i = 1; $i <= $arrBody['AcercaFlex'][0]['total']; $i++) { ?>
							<div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="<?php $nvar = 100*$i; echo $nvar; ?>">
								<i class="<?php echo $arrBody['AcercaFlex'][$i]['icon']; ?>"></i>
								<h4><?php echo $arrBody['AcercaFlex'][$i]['titulo']; ?></h4>
								<p><?php echo $arrBody['AcercaFlex'][$i]['cuerpo']; ?></p>
							</div>
						<?php } ?>	
					</div>
				</div>
			</div>
		</div>

	</div>
</section>
