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
		
			
		<section class="parallax_window_in short" data-parallax="scroll" data-image-src="img/<?php echo $arrBody['Contact']['img']; ?>" data-natural-width="1400" data-natural-height="350">
			<div id="sub_content_in">
				<div class="container">
					<h1><?php echo $arrBody['Contact']['titulo']; ?></h1>
				</div>
			</div>
		</section>
		
		<main>	
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-md-12">
						<?php 
						//Alertas
						if(isset($_GET['sended'])&&$_GET['sended']!=''){
							echo '<div class="alert alert-success" role="alert">Mensaje correctamente enviado</div>';
						}
						if(isset($_GET['error'])&&$_GET['error']!=''){
							echo '<div class="alert alert-danger" role="alert">Mensaje no pudo ser enviado</div>';
						}
						if(isset($_GET['dataerror'])&&$_GET['dataerror']!=''){
							echo '<div class="alert alert-warning" role="alert">Revise los campos obligatorios</div>';
						}
						?>
					</div>
					<div class="col-md-9">
						<div id="message-contact"></div>
						
						<form method="post" action="forms/contact.php" id="contactform">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Nombre</label>
										<input type="text" class="form-control" id="De_nombre" name="De_nombre" placeholder="Nombre" required data-rule="minlen:4" data-error="Por Favor ingrese el nombre">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Email</label>
										<input type="text" class="form-control" id="De_correo" name="De_correo" placeholder="Email" required data-rule="minlen:4" data-error="Por Favor ingrese el correo">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="form-group">
										<label>Asunto</label>
										<input type="text" class="form-control" id="Asunto" name="Asunto" placeholder="Asunto"  required data-rule="minlen:4" data-error="Por Favor ingrese el asunto">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Mensaje</label>
										<textarea class="form-control" id="CuerpoHTML" name="CuerpoHTML" placeholder="Mensaje" required data-rule="minlen:4" data-error="Por Favor ingrese el mensaje" rows="5"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<input type="submit" value="Enviar Mensaje" class="btn_1 green medium add_bottom_30" id="submit-contact"/>
								</div>
							</div>
							
						</form>                    
					</div>
					
					<div class="col-md-3">
						<div class="box_style_2">
							<h5>Datos de contacto</h5>
							<ul>
								<?php if(isset($arrBody['Contact']['data_direction'])&&$arrBody['Contact']['data_direction']!=''){ ?>  <li><strong>Direccion</strong><p class="nopadding"><?php echo $arrBody['Contact']['data_direction']; ?></p></li><?php } ?>
								<?php if(isset($arrBody['Contact']['data_phone'])&&$arrBody['Contact']['data_phone']!=''){ ?>          <li><strong>Fono Contacto</strong><br><a href="tel://<?php echo $arrBody['Contact']['data_phone']; ?>"><?php echo $arrBody['Contact']['data_phone']; ?></a></li><?php } ?>
								<?php if(isset($arrBody['Contact']['data_email'])&&$arrBody['Contact']['data_email']!=''){ ?>          <li><strong>Email Contacto</strong><br><a href="mailto:<?php echo $arrBody['Contact']['data_email']; ?>"><?php echo $arrBody['Contact']['data_email']; ?></a></li><?php } ?>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</main>
		
		<?php require_once 'core_footer.php'; ?>
		
		<div id="toTop"></div>

	</body>

</html>
