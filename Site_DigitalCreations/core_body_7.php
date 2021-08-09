<section id="contact" class="contact">
	<div class="container" data-aos="fade-up">

		<div class="section-title">
		<h2>Contacto</h2>
		</div>

		<div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">

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
