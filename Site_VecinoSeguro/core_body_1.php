<div id="full-slider-wrapper">
	<div id="layerslider" style="width:100%;height:650px;">
		<?php for ($i = 1; $i <= $arrBody['slider'][0]['total']; $i++) {
			echo '
			<div class="ls-slide" data-ls="slidedelay: 5000; transition2d:5;">
				<img src="img/slides/'.$arrBody['slider'][$i]['image'].'" class="ls-bg" alt="'.$arrBody['slider'][$i]['alt_text'].'">
				<h3 class="ls-l" style="top: 45%; left: 60px; font-size: 60px; white-space:nowrap; color:#fff; text-transform:uppercase; font-weight:900;" data-ls="offsetxin:0;durationin:2000;delayin:1000;easingin:easeOutElastic;rotatexin:90;transformoriginin:50% bottom 0;offsetxout:0;rotatexout:90;transformoriginout:50% bottom 0;">'.$arrBody['slider'][$i]['titulo'].'</h3>
				<p class="ls-l" style="top:53%; left:60px; color:#fff; font-size:28px; white-space:nowrap;" data-ls="durationin:2000;delayin:1000;easingin:easeOutElastic;">'.$arrBody['slider'][$i]['data'].'</p>
			</div>';
		} ?>
	</div>
</div>
