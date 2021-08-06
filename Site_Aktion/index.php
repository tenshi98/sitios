<?php require_once 'config.php'; ?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title><?php echo $arrHeader['Site']['Name']; ?></title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css" >
		<!-- Icon -->
		<link rel="stylesheet" href="assets/fonts/line-icons.css">
		<!-- Slicknav -->
		<link rel="stylesheet" href="assets/css/slicknav.css">
		<!-- Owl carousel -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/owl.theme.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/nivo-lightbox.css">
		<!-- Animate -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- Main Style -->
		<link rel="stylesheet" href="assets/css/main.css">
		<!-- Responsive Style -->
		<link rel="stylesheet" href="assets/css/responsive.css">
		<!-- Favicons -->
		<link href="assets/img/favicon.png" rel="icon">
		<link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
		
	</head>
	<body>

		<?php 
		require_once 'core_header.php'; 
		require_once 'core_section_body_feature.php'; 
		require_once 'core_section_body_services.php'; 
		require_once 'core_section_body_counter.php';
		require_once 'core_section_body_team.php'; 
		require_once 'core_section_body_videopromo.php'; 
		/*require_once 'core_section_body_counter.php'; 
		require_once 'core_section_body_pricing.php'; 
		require_once 'core_section_body_skill.php'; 
		require_once 'core_section_body_portfolios.php'; 
		require_once 'core_section_body_testimonial.php'; 
		require_once 'core_section_body_blog.php'; 
		require_once 'core_section_body_clients.php';*/ 
		require_once 'core_section_body_contact.php'; 
		require_once 'core_footer.php'; 
		
		/***********************************************************/
		//modal
		
		echo "
		<link rel=\"stylesheet\" href=\"js/modal/colorbox.css\" /> 
		<script src=\"js/modal/jquery.colorbox.js\"></script>
		<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(\".iframe\").colorbox({iframe:true, width:\"".$arrBody['Config']['modal_width']."%\", height:\"".$arrBody['Config']['modal_height']."%\"});
				$(\".callbacks\").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

						
				//Example of preserving a JavaScript event for inline calls.
				$(\"#click\").click(function(){ 
					$('#click').css({\"background-color\":\"#f00\", \"color\":\"#fff\", \"cursor\":\"inherit\"}).text(\"Open this window again and this message will still be here.\");
					return false;
				});
			});
		</script>
		";
		?>
		
		
      
	</body>
</html>
