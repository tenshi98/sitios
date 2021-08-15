<div class="container margin_60_35">	
	<div class="row">
		<?php for ($i = 1; $i <= $arrBody['widget'][0]['total']; $i++) {
			echo '
			<div class="col-sm-3">
				<figure class="animated"><a href=""><img src="img/'.$arrBody['widget'][$i]['icon'].'" alt="'.$arrBody['widget'][$i]['alt_text'].'" class="img-responsive" style="padding: 15px;"></a></figure>
				<h3>'.$arrBody['widget'][$i]['titulo'].'</h3>
				<p>'.$arrBody['widget'][$i]['data'].'</p>
			</div>
			';
		} ?>
	</div>
</div>
