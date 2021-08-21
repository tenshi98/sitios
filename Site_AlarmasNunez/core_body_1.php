<section id="clients" class="clients">
	<div class="container-fluid" data-aos="zoom-in">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="owl-carousel clients-carousel">
					<?php for ($i = 1; $i <= $arrBody['Tecnologies'][0]['total']; $i++) {
						echo '<img src="assets/img/equipos/'.$arrBody['Tecnologies'][$i]['image'].'" alt="'.$arrBody['Tecnologies'][$i]['name'].'">';
					} ?>
				</div>
			</div>
		</div>
	</div>
</section>
