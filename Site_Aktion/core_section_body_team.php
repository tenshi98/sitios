<!-- Team Section Start -->
<section id="team" class="section-padding text-center">
	<div class="container">
		<div class="section-header text-center">
			<?php echo $arrBody['Team']['Tittle']; ?>
		</div>
		<div class="row">
			<?php for ($i = 1; $i <= 2; $i++) {?>
				<div class="<?php echo $arrBody['Team'][$i]['class']; ?>">
					<!-- Team Item Starts -->
					<div class="team-item text-center wow fadeInRight" data-wow-delay="<?php echo $arrBody['Team'][$i]['time']; ?>">
						<div class="team-img">
							<img class="img-fluid" src="assets/img/team/<?php echo $arrBody['Team'][$i]['img_name']; ?>" alt="">
							<?php if($arrBody['Team'][$i]['social_icon']!=2){ ?>
								<div class="team-overlay">
									<div class="overlay-social-icon text-center">
										<ul class="social-icons">
											<?php if($arrBody['Team'][$i]['social_icon_facebook'] !=''){ ?>  <li><a href="<?php echo $arrBody['Team'][$i]['social_icon_facebook']; ?>"><i class="lni-facebook-filled" aria-hidden="true"></i></a></li><?php } ?>
											<?php if($arrBody['Team'][$i]['social_icon_twitter'] !=''){ ?>   <li><a href="<?php echo $arrBody['Team'][$i]['social_icon_twitter']; ?>"><i class="lni-twitter-filled" aria-hidden="true"></i></a></li><?php } ?>
											<?php if($arrBody['Team'][$i]['social_icon_instagram'] !=''){ ?> <li><a href="<?php echo $arrBody['Team'][$i]['social_icon_instagram']; ?>"><i class="lni-instagram-filled" aria-hidden="true"></i></a></li><?php } ?>
										</ul>
									</div>
								</div>
							<?php } ?>
						</div>
						<div class="info-text">
							<h3><a href="#"><?php echo $arrBody['Team'][$i]['Nombre']; ?></a></h3>
							<p><?php echo $arrBody['Team'][$i]['Area']; ?></p>
						</div>
					</div>
					<!-- Team Item Ends -->
				</div>
			<?php } ?>

		</div>
	</div>
</section>
<!-- Team Section End -->
