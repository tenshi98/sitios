<!-- Copyright Section Start -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3 col-xs-12">
				<div class="footer-logo">
					<img src="assets/img/logo-white.png" alt="">
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-xs-12"> 
				<div class="social-icon text-center">
					<?php if(isset($arrBody['Footer']['Social_facebook'])&&$arrBody['Footer']['Social_facebook']!=''){ ?>   <a class="facebook"   href="<?php echo $arrBody['Footer']['Social_facebook']; ?>"><i class="lni-facebook-filled"></i></a><?php } ?>
					<?php if(isset($arrBody['Footer']['Social_twitter'])&&$arrBody['Footer']['Social_twitter']!=''){ ?>     <a class="twitter"    href="<?php echo $arrBody['Footer']['Social_twitter']; ?>"><i class="lni-twitter-filled"></i></a><?php } ?>
					<?php if(isset($arrBody['Footer']['Social_instagram'])&&$arrBody['Footer']['Social_instagram']!=''){ ?> <a class="instagram"  href="<?php echo $arrBody['Footer']['Social_instagram']; ?>"><i class="lni-instagram-filled"></i></a><?php } ?>
					<?php if(isset($arrBody['Footer']['Social_linkedin'])&&$arrBody['Footer']['Social_linkedin']!=''){ ?>   <a class="linkedin"   href="<?php echo $arrBody['Footer']['Social_linkedin']; ?>"><i class="lni-linkedin-filled"></i></a><?php } ?>
				</div>
			</div>
			<div class="col-lg-4 col-md-5 col-xs-12">
				<p class="float-right"><?php echo $arrHeader['Site']['Name'].' - Todos los derechos reservados'; ?></p>
			</div> 
		</div>
	</div>
</div>
<!-- Copyright Section End -->

<!-- Go to Top Link -->
<a href="#" class="back-to-top">
	<i class="lni-arrow-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
	<div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="assets/js/jquery-min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/jquery.nav.js"></script>
<script src="assets/js/scrolling-nav.js"></script>
<script src="assets/js/jquery.easing.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>  
<script src="assets/js/waypoints.min.js"></script>   
<script src="assets/js/jquery.slicknav.js"></script>
<script src="assets/js/main.js"></script>
