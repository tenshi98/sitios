<!-- Counter Section Start -->

<section id="counter" class="section-padding">
	<div class="overlay"></div>
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-lg-12 col-md-12 col-xs-12">
				<div class="row counter_down">
					<div class="col-md-12 text-center">
						<h1 id="header" style="color: #fff;">Pago Contribuciones</h1>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="clock">
							<div class="well top-section text-center">
								<div id="days" class="num">00</div>
							</div>
							<div class="well bottom-section text-center">
								<div id="days-text" class="text">Dias</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="clock">
							<div class="well top-section text-center">
								<div id="hours" class="num">00</div>
							</div>
							<div class="well bottom-section text-center">
								<div id="hours-text" class="text">Horas</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="clock">
							<div class="well top-section text-center">
								<div id="mins" class="num">00</div>
							</div>
							<div class="well bottom-section text-center">
								<div id="mins-text" class="text">Minutos</div>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="clock">
							<div class="well top-section text-center">
								<div id="secs" class="num">00</div>
							</div>
							<div class="well bottom-section text-center">
								<div id="secs-text" class="text">Segundos</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	// Set the date we're counting down to
	var countDownDate = new Date('<?php echo $arrBody["Counter"]["Fecha_actual"]; ?>').getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

		// Get today's date and time
		var now = new Date().getTime();
		
		// Find the distance between now and the count down date
		var distance = countDownDate - now;
		
		// Time calculations for days, hours, minutes and seconds
		var days    = Math.floor(distance / (1000 * 60 * 60 * 24));
		var hours   = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		
		// Output the result in an element with id="demo"
		document.getElementById("days").innerHTML  = days;
		document.getElementById("hours").innerHTML = hours;
		document.getElementById("mins").innerHTML  = minutes;
		document.getElementById("secs").innerHTML  = seconds;
	  
	}, 1000);

</script>

<!-- Counter Section End -->
