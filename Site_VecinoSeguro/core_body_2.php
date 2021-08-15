<div id="feat_home">
	<div class="container margin_60_25">
		<div class="row">
			<?php for ($i = 1; $i <= $arrBody['Caracteristicas'][0]['total']; $i++) {
				if($i==3){echo '</div><div class="row">';}
				echo '
				<div class="col-md-6">
					<div class="box_feat">
						<span><img src="img/svg_icons/'.$arrBody['Caracteristicas'][$i]['icon'].'" alt="'.$arrBody['Caracteristicas'][$i]['alt_text'].'"></span>
						<h3>'.$arrBody['Caracteristicas'][$i]['titulo'].'</h3>
						<p>'.$arrBody['Caracteristicas'][$i]['data'].'</p>
					</div>
				</div>';
			} ?>
	</div>
</div>
