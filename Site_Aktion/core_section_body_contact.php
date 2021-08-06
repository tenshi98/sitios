<!-- Contact Section Start -->
<section id="contact" class="section-padding">
	<div class="container">
		<div class="row contact-form-area wow fadeInUp" data-wow-delay="0.4s">
			<div class="col-md-6 col-lg-6 col-sm-12">
				<div class="contact-block">
					<form id="contactForm" action="forms/contact.php" method="post">
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
								
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="De_nombre" name="De_nombre" placeholder="Nombre" required data-rule="minlen:4" data-error="Por Favor ingrese el nombre">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input type="text" class="form-control" id="De_correo" name="De_correo" placeholder="Email" required data-rule="minlen:4" data-error="Por Favor ingrese el correo">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" class="form-control" id="Asunto" name="Asunto" placeholder="Asunto"  required data-rule="minlen:4" data-error="Por Favor ingrese el asunto">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="CuerpoHTML" name="CuerpoHTML" placeholder="Mensaje" required data-rule="minlen:4" data-error="Por Favor ingrese el mensaje" rows="5"></textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button">
									<button class="btn btn-common" id="form-submit" type="submit">Enviar Mensaje</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-md-6 col-lg-6 col-sm-12">
				<div class="contact-right-area wow fadeIn">
					<div class="contact-title">
						<h1><?php echo $arrBody['Contact']['tittle']; ?></h1>
						<p><?php echo $arrBody['Contact']['text'] ; ?></p>
					</div>
					<div class="contact-right">
						<div class="single-contact">
							<div class="contact-icon">
								<i class="lni-map-marker"></i>
							</div>
							<p>Direccion: <?php echo $arrBody['Contact']['address']; ?></p>
						</div>
						<div class="single-contact">
							<div class="contact-icon">
								<i class="lni-envelope"></i>
							</div>
							<p><a href="mailto:<?php echo $arrBody['Contact']['email']; ?>">Email: <?php echo $arrBody['Contact']['email']; ?></a></p>
						</div>
						<div class="single-contact">
							<div class="contact-icon">
								<i class="lni-phone-handset"></i>
							</div>
							<p><a href="#">Fono:<?php echo $arrBody['Contact']['phone']; ?></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
</section>
<!-- Contact Section End -->
