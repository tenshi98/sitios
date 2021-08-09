<section id="portfolio" class="portfolio">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2><?php echo $arrBody['Portafolio']['Titulo']; ?></h2>
			<p><?php echo $arrBody['Portafolio']['Cuerpo']; ?></p>
		</div>

		<div class="row" data-aos="fade-up" data-aos-delay="100">
			<div class="col-lg-12 d-flex justify-content-center">
				<ul id="portfolio-flters">
					<li data-filter="*" class="filter-active">Todos</li>
					<li data-filter=".filter-web">Web</li>
					<li data-filter=".filter-app">App</li> 
					<li data-filter=".filter-intranet">Intranets</li> 
					<li data-filter=".filter-otros">Otros</li>           
				</ul>
			</div>
		</div>

		<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
			
			<?php for ($i = 1; $i <= $arrBody['PortafolioFlex'][0]['total']; $i++) { ?>
				<div class="col-lg-4 col-md-6 portfolio-item <?php echo $arrBody['PortafolioFlex'][$i]['filtro']; ?>">
					<div class="portfolio-wrap">
						<img src="assets/img/portfolio/<?php echo $arrBody['PortafolioFlex'][$i]['imagen']; ?>" class="img-fluid" alt="<?php echo $arrBody['PortafolioFlex'][$i]['titulo']; ?>">
						<div class="portfolio-info">
							<h4><?php echo $arrBody['PortafolioFlex'][$i]['titulo']; ?></h4>
							<p><?php echo $arrBody['PortafolioFlex'][$i]['tipo']; ?></p>
							<?php if(isset($arrBody['PortafolioFlex'][$i]['enlace'])&&$arrBody['PortafolioFlex'][$i]['enlace']!=''){ ?>
								<div class="portfolio-links">
									<a href="<?php echo $arrBody['PortafolioFlex'][$i]['enlace']; ?>" title="Visitar"><i class="bx bx-link"></i></a>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			<?php } ?>	
				
		</div>

	</div>
</section>
