<!-- Header Area wrapper Starts -->
<header id="header-wrap">
	<!-- Navbar Start -->
	<nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<a href="index.html" class="navbar-brand"><img src="assets/img/logo.png" alt="" style="width: 150px;"></a>   
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<i class="lni-menu"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto w-100 justify-content-end clearfix">
					<li class="nav-item active"><a class="nav-link" href="#hero-area"> <?php echo $arrHeader['Menu'][1]; ?></a></li>
					<li class="nav-item">       <a class="nav-link" href="#feature">   <?php echo $arrHeader['Menu'][2]; ?></a></li>
					<li class="nav-item">       <a class="nav-link" href="#services">  <?php echo $arrHeader['Menu'][3]; ?></a></li>
					<li class="nav-item">       <a class="nav-link" href="#team">      <?php echo $arrHeader['Menu'][4]; ?></a></li>
					<!-- <li class="nav-item">       <a class="nav-link" href="#pricing">     <?php echo $arrHeader['Menu'][5]; ?></a></li> -->
					<!-- <li class="nav-item">       <a class="nav-link" href="#portfolios">  <?php echo $arrHeader['Menu'][6]; ?></a></li> -->
					<!-- <li class="nav-item">       <a class="nav-link" href="#testimonial"> <?php echo $arrHeader['Menu'][7]; ?></a></li> -->
					<!-- <li class="nav-item">       <a class="nav-link" href="#blog">        <?php echo $arrHeader['Menu'][8]; ?></a></li> -->
					<li class="nav-item">       <a class="nav-link" href="#contact">   <?php echo $arrHeader['Menu'][9]; ?></a></li>
					<li class="nav-item">       <a class="nav-link" target="_blank" rel="noopener noreferrer" href="<?php echo $arrHeader['Site']['intranet']; ?>"><?php echo $arrHeader['Menu'][10]; ?></a></li>
					<li class="nav-item">       <a class="nav-link" target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=<?php echo $arrHeader['Site']['whatsapp_number_1']; ?>&amp;text=<?php echo $arrHeader['Site']['whatsapp_tittle']; ?>"><div style="width: 30px;height: 30px;"><svg preserveAspectRatio="xMidYMid meet" data-bbox="30 30 140 140" viewBox="30 30 140 140" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><g><path d="M132.7 112c-1.7-.9-10-4.9-11.5-5.4-1.6-.5-2.6-.9-3.8.9-1.1 1.8-4.4 5.4-5.3 6.6-1 1.1-1.9 1.2-3.7.4-1.7-.9-7.2-2.6-13.6-8.2-5.1-4.4-8.4-10-9.4-11.6-1-1.7-.1-2.6.8-3.4.8-.8 1.7-1.9 2.5-3 .9-1 1.1-1.7 1.7-2.8.5-1.1.3-2.1-.2-3s-3.8-9-5.2-12.4c-1.4-3.3-2.8-2.8-3.8-2.8s-2.1-.2-3.2-.2-3 .4-4.5 2.1c-1.6 1.7-5.9 5.8-5.9 13.9 0 8.2 6 16.2 6.8 17.3.9 1.1 11.6 18.5 28.8 25.3 17.2 6.7 17.2 4.5 20.2 4.2 3.1-.3 10-4 11.4-7.9 1.4-3.9 1.4-7.3 1-7.9-.3-.9-1.4-1.3-3.1-2.1z" fill="#0dc143" data-color="1"></path><path d="M101.2 30c-37.9 0-68.7 30.5-68.7 68.2 0 12.9 3.6 24.9 9.9 35.2L30 170l38.1-12.1c9.9 5.4 21.1 8.5 33.2 8.5 37.9 0 68.7-30.5 68.7-68.2-.1-37.7-30.9-68.2-68.8-68.2zm0 125.5c-11.7 0-22.7-3.5-31.8-9.4l-22.1 7.1 7.2-21.3c-6.9-9.4-11-21.1-11-33.6 0-31.7 25.9-57.3 57.8-57.3S159 66.7 159 98.2c0 31.6-25.9 57.3-57.8 57.3z" fill="#0dc143" data-color="1"></path></g></svg></div></a></li>
					<li class="nav-item">       <a class="nav-link" target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone=<?php echo $arrHeader['Site']['whatsapp_number_2']; ?>&amp;text=<?php echo $arrHeader['Site']['whatsapp_tittle']; ?>"><div style="width: 30px;height: 30px;"><svg preserveAspectRatio="xMidYMid meet" data-bbox="30 30 140 140" viewBox="30 30 140 140" xmlns="http://www.w3.org/2000/svg" data-type="color" role="img"><g><path d="M132.7 112c-1.7-.9-10-4.9-11.5-5.4-1.6-.5-2.6-.9-3.8.9-1.1 1.8-4.4 5.4-5.3 6.6-1 1.1-1.9 1.2-3.7.4-1.7-.9-7.2-2.6-13.6-8.2-5.1-4.4-8.4-10-9.4-11.6-1-1.7-.1-2.6.8-3.4.8-.8 1.7-1.9 2.5-3 .9-1 1.1-1.7 1.7-2.8.5-1.1.3-2.1-.2-3s-3.8-9-5.2-12.4c-1.4-3.3-2.8-2.8-3.8-2.8s-2.1-.2-3.2-.2-3 .4-4.5 2.1c-1.6 1.7-5.9 5.8-5.9 13.9 0 8.2 6 16.2 6.8 17.3.9 1.1 11.6 18.5 28.8 25.3 17.2 6.7 17.2 4.5 20.2 4.2 3.1-.3 10-4 11.4-7.9 1.4-3.9 1.4-7.3 1-7.9-.3-.9-1.4-1.3-3.1-2.1z" fill="#0dc143" data-color="1"></path><path d="M101.2 30c-37.9 0-68.7 30.5-68.7 68.2 0 12.9 3.6 24.9 9.9 35.2L30 170l38.1-12.1c9.9 5.4 21.1 8.5 33.2 8.5 37.9 0 68.7-30.5 68.7-68.2-.1-37.7-30.9-68.2-68.8-68.2zm0 125.5c-11.7 0-22.7-3.5-31.8-9.4l-22.1 7.1 7.2-21.3c-6.9-9.4-11-21.1-11-33.6 0-31.7 25.9-57.3 57.8-57.3S159 66.7 159 98.2c0 31.6-25.9 57.3-57.8 57.3z" fill="#0dc143" data-color="1"></path></g></svg></div></a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- Navbar End -->
	<style>
		.cr1{position: absolute;right: 15%;top: 35%;left: 15%;z-index: 10;padding-top: 20px;color: #fff;text-align: left;}
		.cr1 h4, .cr1 h2, .cr1 p{color: #fff;}
		.cr1 h4{font-size: 30px;color: #f85a40;}

		.cr2{position: absolute;right: 15%;top: 65%;left: 15%;z-index: 10;padding-top: 20px;color: #fff;text-align: center;}
		.cr2 h4, .cr2 h2, .cr2 p{color: #fff;}
		.cr2 h4{font-size: 30px;color: #f85a40;}

		.cr3{position: absolute;right: 15%;top: 25%;left: 15%;z-index: 10;padding-top: 20px;color: #fff;text-align: right;}
		.cr3 h4, .cr3 h2, .cr3 p{color: #fff;}
		.cr3 h4{font-size: 30px;color: #f85a40;}
	</style>
	<!-- Hero Area Start -->
	<div id="hero-area" class="">

		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<?php for ($i = 1; $i <= 3; $i++) {?>
					<div class="carousel-item <?php if($i==1){echo 'active';} ?>">
						<img class="d-block w-100" src="assets/img/slider/<?php echo $arrHeader['Carousel'][$i]['img']; ?>" alt="<?php echo $arrHeader['Carousel'][$i]['Tittle']; ?>">
						<div class="carousel-caption <?php echo $arrHeader['Carousel'][$i]['TextStyle']; ?>">
							<h4><?php echo $arrHeader['Carousel'][$i]['Tittle']; ?></h4>
							<h2><?php echo $arrHeader['Carousel'][$i]['Subtittle']; ?></h2>
							<p><?php echo $arrHeader['Carousel'][$i]['Text']; ?></p>
						</div>
					</div>
				<?php } ?>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Anterior</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Siguiente</span>
			</a>
		</div>

	</div>
	<!-- Hero Area End -->

</header>
<!-- Header Area wrapper End -->

