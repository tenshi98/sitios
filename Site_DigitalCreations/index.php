<?php require_once 'config.php'; ?> 
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<title><?php echo $arrHeader['Site']['Name']; ?></title>
		<meta name="description" content="<?php echo $arrHeader['Site']['description']; ?>">
		<meta name="keywords"    content="<?php echo $arrHeader['Site']['keywords']; ?>">

		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

		<!-- Vendor CSS Files -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/vendor/icofont/icofont.min.css">
		<link rel="stylesheet" href="assets/vendor/boxicons/css/boxicons.min.css">
		<link rel="stylesheet" href="assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/vendor/remixicon/remixicon.css">
		<link rel="stylesheet" href="assets/vendor/venobox/venobox.css">
		<link rel="stylesheet" href="assets/vendor/aos/aos.css">

		<!-- Template Main CSS File -->
		<link rel="stylesheet" href="assets/css/style.css">

	</head>

	<body>

		<?php require_once 'core_header.php'; ?>
		<?php require_once 'core_header_slider.php'; ?>

		<main id="main">
			<?php 
			require_once 'core_body_1.php';  //Tecnologias
			require_once 'core_body_2.php';  //Acerca
			require_once 'core_body_3.php';  //Contadores
			require_once 'core_body_4.php';  //Servicios
			require_once 'core_body_5.php';  //Portafolio
			require_once 'core_body_6.php';  //Precios
			require_once 'core_body_7.php';  //Contacto
			?>
		</main>

	  
		<?php require_once 'core_footer.php'; ?>

		<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

		<!-- Vendor JS Files -->
		<script src="assets/vendor/jquery/jquery.min.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="assets/vendor/php-email-form/validate.js"></script>
		<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
		<script src="assets/vendor/counterup/counterup.min.js"></script>
		<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
		<script src="assets/vendor/venobox/venobox.min.js"></script>
		<script src="assets/vendor/aos/aos.js"></script>

		<!-- Template Main JS File -->
		<script src="assets/js/main.js"></script>

	</body>

</html>

