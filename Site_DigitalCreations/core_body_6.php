<section id="pricing" class="pricing section-bg">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2><?php echo $arrBody['Pricing']['Titulo']; ?></h2>
			<p><?php echo $arrBody['Pricing']['Cuerpo']; ?></p>
		</div>

		<div class="row">
			<?php for ($i = 1; $i <= $arrBody['PricingFlex'][0]['total']; $i++) { ?>
				<div class="col-lg-4 col-md-6">
					<div class="box" data-aos="fade-up" data-aos-delay="<?php $nvar = 100*$i; echo $nvar; ?>">
						<h3><?php echo $arrBody['PricingFlex'][$i]['titulo']; ?></h3>
						<h4><sup>$</sup><?php echo $arrBody['PricingFlex'][$i]['Valor']; ?><span></span></h4>
						<ul><?php echo $arrBody['PricingFlex'][$i]['Lista']; ?></ul>
						<div class="btn-wrap">
							<a href="<?php echo $arrBody['PricingFlex'][$i]['enlace']; ?>" class="btn-buy">Cotizar</a>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>

	</div>
</section>
