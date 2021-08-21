<header id="header" class="fixed-top">
	<div class="container-fluid">
		<div class="row justify-content-center">
			<div class="col-xl-10 d-flex align-items-center">
				<h1 class="logo mr-auto">
					<img src="assets/img/apple-touch-icon-144x144-precomposed.png" alt="Logo" width="44" height="60"> 
					<a href="index.php"><?php echo $arrHeader['Site']['HtmlName']; ?></a>
				</h1>
				
				<nav class="nav-menu d-none d-lg-block">
					<ul>
						<?php
						for ($i = 1; $i <= $arrHeader['Menu'][0]; $i++) {
							$active = '';
							if(isset($i)&&$i==1){$active = ' class="active"';}
							echo '<li'.$active.'><a href="#'.$arrHeader['Menuid'][$i].'">'.$arrHeader['Menu'][$i].'</a></li>';
						}
						
							echo '<li><a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone='.$arrHeader['Site']['whatsapp_number'].'&amp;text='.$arrHeader['Site']['whatsapp_tittle'].'"><div style="width: 24px;height: 24px;"><svg preserveAspectRatio="xMidYMid meet" data-bbox="30 30 140 140" viewBox="30 30 140 140" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><g><path d="M132.7 112c-1.7-.9-10-4.9-11.5-5.4-1.6-.5-2.6-.9-3.8.9-1.1 1.8-4.4 5.4-5.3 6.6-1 1.1-1.9 1.2-3.7.4-1.7-.9-7.2-2.6-13.6-8.2-5.1-4.4-8.4-10-9.4-11.6-1-1.7-.1-2.6.8-3.4.8-.8 1.7-1.9 2.5-3 .9-1 1.1-1.7 1.7-2.8.5-1.1.3-2.1-.2-3s-3.8-9-5.2-12.4c-1.4-3.3-2.8-2.8-3.8-2.8s-2.1-.2-3.2-.2-3 .4-4.5 2.1c-1.6 1.7-5.9 5.8-5.9 13.9 0 8.2 6 16.2 6.8 17.3.9 1.1 11.6 18.5 28.8 25.3 17.2 6.7 17.2 4.5 20.2 4.2 3.1-.3 10-4 11.4-7.9 1.4-3.9 1.4-7.3 1-7.9-.3-.9-1.4-1.3-3.1-2.1z" fill="#0dc143" data-color="1"></path><path d="M101.2 30c-37.9 0-68.7 30.5-68.7 68.2 0 12.9 3.6 24.9 9.9 35.2L30 170l38.1-12.1c9.9 5.4 21.1 8.5 33.2 8.5 37.9 0 68.7-30.5 68.7-68.2-.1-37.7-30.9-68.2-68.8-68.2zm0 125.5c-11.7 0-22.7-3.5-31.8-9.4l-22.1 7.1 7.2-21.3c-6.9-9.4-11-21.1-11-33.6 0-31.7 25.9-57.3 57.8-57.3S159 66.7 159 98.2c0 31.6-25.9 57.3-57.8 57.3z" fill="#0dc143" data-color="1"></path></g></svg></div></a></li>';
						?>
					</ul>
				</nav>

			</div>
		</div>

	</div>
</header>
