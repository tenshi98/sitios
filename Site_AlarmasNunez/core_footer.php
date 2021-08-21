<footer id="footer">
	
	
	<div class="footer-top">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 col-md-6 footer-contact">
					<h3><?php echo $arrHeader['Site']['Name']; ?><span>.</span></h3>
					<p>
						A108 Adam Street <br>
						New York, NY 535022<br>
						United States <br><br>
						<strong>Phone:</strong> +1 5589 55488 55<br>
						<strong>Email:</strong> info@example.com<br>
					</p>
				</div>

				<div class="col-lg-2 col-md-6 footer-links">
					<h4>Useful Links</h4>
					<ul>
						<?php
						for ($i = 1; $i <= $arrHeader['Menu'][0]; $i++) {
							echo '<li><i class="bx bx-chevron-right"></i> <a href="#'.$arrHeader['Menuid'][$i].'">'.$arrHeader['Menu'][$i].'</a></li>';
						}
						?>
					</ul>
				</div>

				<div class="col-lg-3 col-md-6 footer-links">
					<h4>Our Services</h4>
					<ul>
						<li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
						<li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
					</ul>
				</div>

				<div class="col-lg-4 col-md-6 footer-newsletter">
					<h4>Join Our Newsletter</h4>
					<p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
					<form action="" method="post">
						<input type="email" name="email"><input type="submit" value="Subscribe">
					</form>
				</div>

			</div>
		</div>
	</div>
    
    
	<div class="container d-md-flex py-4">
		<div class="mr-md-auto text-center text-md-left">
			<div class="copyright">
				<?php echo $arrHeader['Site']['LinkName']; ?>. Todos los derechos reservados
			</div>
			<div class="credits">
			</div>
		</div>
		<div class="social-links text-center text-md-right pt-3 pt-md-0">
			<?php if(isset($arrHeader['SiteSocial']['twitter'])&&$arrHeader['SiteSocial']['twitter']!=''){ ?><a href="#" class="twitter"><i class="bx bxl-twitter"></i></a><?php } ?>
			<?php if(isset($arrHeader['SiteSocial']['facebook'])&&$arrHeader['SiteSocial']['facebook']!=''){ ?><a href="#" class="facebook"><i class="bx bxl-facebook"></i></a><?php } ?>
			<?php if(isset($arrHeader['SiteSocial']['instagram'])&&$arrHeader['SiteSocial']['instagram']!=''){ ?><a href="#" class="instagram"><i class="bx bxl-instagram"></i></a><?php } ?>
			<?php if(isset($arrHeader['google-plus']['google-plus'])&&$arrHeader['SiteSocial']['twitter']!=''){ ?><a href="#" class="google-plus"><i class="bx bxl-skype"></i></a><?php } ?>
			<?php if(isset($arrHeader['SiteSocial']['linkedin'])&&$arrHeader['SiteSocial']['linkedin']!=''){ ?><a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a><?php } ?>
		</div>
	</div>
</footer>
