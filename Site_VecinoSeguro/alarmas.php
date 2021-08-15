<?php require_once 'config.php'; ?> 
<!DOCTYPE html>
<html lang="en">

	<head>
		<!-- Info-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport"              content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type"    content="text/html; charset=UTF-8">
		
		<!-- Informacion del sitio-->
		<title><?php echo $arrHeader['Site']['Name']; ?></title>
		<meta name="description" content="<?php echo $arrHeader['Site']['description']; ?>">
		<meta name="keywords"    content="<?php echo $arrHeader['Site']['keywords']; ?>">
		<meta name="author"      content="<?php echo $arrHeader['Site']['author']; ?>">
		
		<!-- Favicons-->
		<link rel="icon"             type="image/png"                    href="img/favicon.png" >
		<link rel="shortcut icon"    type="image/x-icon"                 href="img/favicon.png" >
		<link rel="apple-touch-icon" type="image/x-icon"                 href="img/apple-touch-icon-57x57-precomposed.png">
		<link rel="apple-touch-icon" type="image/x-icon" sizes="72x72"   href="img/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
		
		<!-- GOOGLE WEB FONT -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

		<!-- CSS Base -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/menu.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link rel="stylesheet" href="css/elegant_font/elegant_font.min.css">
		<link rel="stylesheet" href="css/fontello/css/fontello.min.css">
		<link rel="stylesheet" href="css/magnific-popup.min.css">

		<!-- LayerSlider stylesheet -->
		<link rel="stylesheet" href="layerslider/css/layerslider.css">
		
		<!-- CSS Especifico -->
		<link rel="stylesheet" href="css/skins/square/grey.css">
		
		<!-- Correcciones CSS -->
		<style>
			#full-slider-wrapper {margin-top: 0px;}
		</style>
	</head>

	<body>
		<?php require_once 'core_header.php'; ?>
		
		<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/<?php echo $arrBody['alarmas']['img']; ?>" data-natural-width="1400" data-natural-height="350">
			<div id="sub_content_in">
				<div class="container">
					<h1><?php echo $arrBody['alarmas']['titulo']; ?></h1>
				</div>
			</div>
		</section>

		<main>
			<div class="container margin_60">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div id="intro">
							<p class="lead">
								<?php echo $arrBody['alarmas']['data']; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</main>

		
		<?php require_once 'core_footer.php'; ?>
		
		<div id="toTop"></div>

	</body>
</html>
