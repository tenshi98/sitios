<header id="header" class="fixed-top">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-10 d-flex align-items-center">
				<h1 class="logo mr-auto"><a href="index.html"><?php echo $arrHeader['Site']['HtmlName']; ?></a></h1>
				
				<nav class="nav-menu d-none d-lg-block">
					<ul>
						<?php
						for ($i = 1; $i <= $arrHeader['Menu'][0]; $i++) {
							$active = '';
							if(isset($i)&&$i==1){$active = ' class="active"';}
							echo '<li'.$active.'><a href="#'.$arrHeader['Menuid'][$i].'">'.$arrHeader['Menu'][$i].'</a></li>';
						}
						?>
					</ul>
				</nav>

			</div>
		</div>

	</div>
</header>
