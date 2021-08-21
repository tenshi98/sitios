<section id="contact" class="contact">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
			<h2><?php echo $arrBody['Contact']['Titulo']; ?></h2>
			 <p><?php echo $arrBody['Contact']['Cuerpo']; ?></p>
		</div>

		<div class="row" data-aos="fade-up" data-aos-delay="100">
			
			<div class="col-lg-6">

				<div class="row">
					<div class="col-md-12">
						<div class="info-box">
							<i class="bx bx-map"></i>
							<h3><?php echo $arrBody['Contact']['DireccionTitulo']; ?></h3>
							<p><?php echo '<a target="_blank" rel="noopener noreferrer" href="'.$arrBody['Contact']['DireccionMapa'].'">'.$arrBody['Contact']['DireccionCalle'].'</a>'; ?></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="info-box mt-4">
							<i class="bx bx-envelope"></i>
							<h3><?php echo $arrBody['Contact']['MailTitulo']; ?></h3>
							<p>
								<?php
								for ($i = 1; $i <= $arrBody['ContactMail'][0]['total']; $i++) {
									echo '<a href="mailto:'.$arrBody['ContactMail'][$i]['Mail'].'">'.$arrBody['ContactMail'][$i]['Mail'].'</a><br/>';
								}
								?>
							</p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="info-box mt-4">
							<i class="bx bx-phone-call"></i>
							<h3><?php echo $arrBody['Contact']['PhoneTitulo']; ?></h3>
							<p>
								<?php
								for ($i = 1; $i <= $arrBody['ContactPhone'][0]['total']; $i++) {
									//si tiene whatsapp
									if(isset($arrBody['ContactPhone'][$i]['PhoneInt'])&&$arrBody['ContactPhone'][$i]['PhoneInt']!=''){
										echo '<a target="_blank" rel="noopener noreferrer" href="https://api.whatsapp.com/send?phone='.$arrBody['ContactPhone'][$i]['PhoneInt'].'&amp;text='.$arrBody['Contact']['whatsapp_tittle'].'">'.$arrBody['ContactPhone'][$i]['Phone'].'</a><br/>';
									//si es un numero normal	
									}else{
										echo '<a>'.$arrBody['ContactPhone'][$i]['Phone'].'</a><br/>';
									}
									
								}
								?>
							</p>
						</div>
					</div>
				</div>

			</div>
          
          
			<div class="col-lg-6">
				<form action="forms/contact.php" method="post" role="form" class="php-email-form">
					<div class="form-group">
						<input type="text" class="form-control" name="De_nombre" id="De_nombre" placeholder="Nombre" data-rule="minlen:4" data-msg="Por Favor ingrese el nombre" />
						<div class="validate"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="De_correo" id="De_correo" placeholder="Email" data-rule="minlen:4" data-msg="Por Favor ingrese el correo" />
						<div class="validate"></div>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="Asunto" id="Asunto" placeholder="Asunto" data-rule="minlen:4" data-msg="Por Favor ingrese el asunto" />
						<div class="validate"></div>
					</div>
					<div class="form-group">
						<textarea class="form-control" name="CuerpoHTML" id="CuerpoHTML" placeholder="Mensaje" data-rule="minlen:4" data-msg="Por Favor ingrese el mensaje" rows="5"></textarea>
						<div class="validate"></div>
					</div>
					<div class="mb-3">
						<div class="loading">Loading</div>
						<div class="error-message">Mensaje no pudo ser enviado</div>
						<div class="sent-message">Mensaje correctamente enviado</div>
					</div>
					<div class="text-center"><button type="submit">Enviar Mensaje</button></div>
				</form>
			</div>

		</div>

	</div>
</section>
