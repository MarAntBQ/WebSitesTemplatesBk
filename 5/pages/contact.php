<?php
Mailer::SendM();
?>
<div class="container" id="contact">
	<h1>Contacto</h1>
	<p class="taj lh2em fs24px fs-i-23px fs-m-22px fs-p-20px"><strong>Hablemos</strong><br>Gracias por tu interés en nuestros servicios. Por favor, llena el formulario déjanos saber tus inquietudes y te responderemos enseguida:</p>
	<br>
	<div class="flex-s-a flex-wrap-reverse">
		<div class="box-6 flex-vc box-i-7 box-m-10 box-p-12">
			<div class="form-container">
				<?php
         
        			if (isset($_SESSION["MSGFM"])) {
            		echo $_SESSION["MSGFM"];
					}
        			unset($_SESSION["MSGFM"]);
        			?>
				<form method="post">
					<p>Your name:</p>
					<input type="text" name="name" required placeholder="Ingrese su nombre" value="<?php if(isset($_SESSION["NAME"])){echo $_SESSION["NAME"];} ?>">
					<p>Email:</p>
					<input type="email" name="mail" required placeholder="Ingrese su email" value="<?php if(isset($_SESSION["EMAIL"])){echo $_SESSION["EMAIL"];} ?>">
					<p>Phone:</p>
					<input type="tel" name="phone" required maxlength="10" pattern="[0-9]{10}" placeholder="Ingrese su teléfono" value="<?php if(isset($_SESSION["PHONE"])){echo $_SESSION["PHONE"];} ?>">
					<p>Message:</p>
					<textarea name="message" required placeholder="Ingrese su mensaje"><?php if(isset($_SESSION["MESSAGE"])){echo $_SESSION["MESSAGE"];} ?></textarea>
					<button type="submit" class="">Enviar Mensaje <i class="fas fa-paper-plane"></i></button>
					<input type="hidden" name="contactForm">
				</form>
				<?php
    			unset($_SESSION["NAME"]);
    			unset($_SESSION["EMAIL"]);
    			unset($_SESSION["PHONE"]);
    			unset($_SESSION["MESSAGE"]);
    			?>
			</div>
		</div>
		<div class="box-6 box-i-5 box-m-7 box-p-12 flex-vcc fs18px">
			<p class="w100p gray"><i class="fas fa-map-pin"></i> Valle de San Rafael Av. General Gribaldo Miño No. E8-381 y Av. Ilalo primer piso, Sector San José del Valle<br>Conocoto - Ecuador</p>
			<p class="w100p gray"><i class="fas fa-phone"></i> <a href="tel:+59322349595">+593 (22) 349 - 595</a></p>
			<p class="w100p gray"><i class="fas fa-envelope"></i> <a href="mailto:soporte@planet-ec.com">Soporte</a></p>
			<p class="w100p gray mb15px"><i class="far fa-clock"></i> 9am - 5pm / Lunes - Viernes</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7614064901077!2d-78.47280668572954!3d-0.3060346354274207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMMKwMTgnMjEuNyJTIDc4wrAyOCcxNC4yIlc!5e0!3m2!1sen!2sus!4v1608167034614!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="place-map"></iframe>
		</div>
	</div>


</div>
