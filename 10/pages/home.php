<!--Banner-->
<?php
Mailer::SendM();
include "includes/banner.php";
?>
<!--About-->
<div class="page-section" id="about">
	<h1 class="tac">Welcome to Marbust Framework PHP</h1>
	<div class="flex-s-a">
		<div class="w50p maxw500px">
			<lottie-player src="https://assets9.lottiefiles.com/packages/lf20_ZNmWRs.json" background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
		</div>
	</div>
	<p class="fs18px lh2em tac gray">Here you can begin your project in an easiest way with the powerful of <strong>Marbust Framework CSS</strong></p>
	<div class="fs18px lh2em tac gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem assumenda qui itaque. Incidunt ea dolorem, asperiores, adipisci nesciunt earum debitis hic similique in perferendis. In numquam consequuntur expedita commodi minima.</div>
	<a href="about" class="btn-center">More <i class="fas fa-info-circle"></i></a>
	<p class="mt15px mb15px"><a class="scroll-down-blue" href="#services"><span></span></a></p>
</div>
<!--Services-->
<div class="page-section" id="services">
	<h1 class="tac mb15px">Services</h1>
	<p class="fs18px lh2em taj gray-bright">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil illum reiciendis id ex. Aliquam illum, natus debitis quisquam sint. Maxime modi, sint error. Impedit provident distinctio blanditiis reiciendis! Maxime atque nisi unde non. Quidem reprehenderit quas ab cum. Perferendis pariatur non, eos id. Provident dolor explicabo temporibus accusantium, velit enim.</p>
	<div class="flex-s-a flex-vc service-flex">
		<a class="box-3 box-i-4 box-m-5 box-p-8" href="service#first">
			<div>
				<lottie-player src="https://assets4.lottiefiles.com/packages/lf20_zjRltW.json" background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
			</div>
			<h2>First</h2>
		</a>
		<a class="box-3 box-i-4 box-m-5 box-p-8" href="service#second">
			<div>
				<lottie-player src="https://assets7.lottiefiles.com/datafiles/HN7OcWNnoqje6iXIiZdWzKxvLIbfeCGTmvXmEm1h/data.json" background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
			</div>
			<h2>Second</h2>
		</a>
		<a class="box-3 box-i-4 box-m-5 box-p-8" href="service#third">
			<div>
				<lottie-player src="https://assets5.lottiefiles.com/packages/lf20_EEU4nQ.json" background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
			</div>
			<h2>Third</h2>
		</a>
		<a class="box-3 box-i-4 box-m-5 box-p-8" href="service#fourth">
			<div>
				<lottie-player src="https://assets3.lottiefiles.com/private_files/lf30_foTsmM.json" background="transparent" speed="1" style="width: 100%;" loop autoplay></lottie-player>
			</div>
			<h2>Fourth</h2>
		</a>
	</div>
	<p class="mt15px mb15px"><a class="scroll-down" href="#contact"><span></span></a></p>
</div>
<!--Contact-->
<div class="page-section" id="contact">
	<h1 class="tac mb15px">Contact</h1>
	<p class="fs18px lh2em taj gray">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste quibusdam velit, eveniet, obcaecati, assumenda ipsa nisi dolorem enim quis consectetur ab facilis doloremque! Adipisci soluta quod ipsum ipsa quaerat maiores rerum porro fugit accusantium eius velit magni, aspernatur neque doloribus.</p>
	<div class="flex-s-a contact-flex flex-wrap-reverse">
		<div class="box-6 flex-vc box-i-7 box-m-11 box-p-12">
			<div class="form-container">
			<?php
         
        			if (isset($_SESSION["MSGFM"])) {
            		echo $_SESSION["MSGFM"];
					}
        			unset($_SESSION["MSGFM"]);
        			?>
				<form method="post">
					<input type="text" name="name" required placeholder="Ingrese su nombre" value="<?php if(isset($_SESSION["NAME"])){echo $_SESSION["NAME"];} ?>">
					<input type="email" name="mail" required placeholder="Ingrese su email" value="<?php if(isset($_SESSION["EMAIL"])){echo $_SESSION["EMAIL"];} ?>">
					<input type="tel" name="phone" required maxlength="10" pattern="[0-9]{10}" placeholder="Ingrese su teléfono" value="<?php if(isset($_SESSION["PHONE"])){echo $_SESSION["PHONE"];} ?>">
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
		<div class="box-6 box-i-5 box-m-11 box-p-12 flex-vcc fs18px taj lh2em">
			<p class="w100p gray mb15px"><i class="fas fa-map-pin"></i> <strong>Principal: </strong> Lorem ipsum dolor sit amet.<br>City - Country</p>
			<p class="w100p gray"><i class="fas fa-phone"></i> <a href="<?php echo $GLOBALS["Phone-Link"]; ?>">+593 (99) 999 - 9999</a></p>
			<p class="w100p gray"><i class="fas fa-envelope"></i> <a href="<?php echo $GLOBALS["Email-Link"]; ?>">Servicio al Cliente</a></p>
			<p class="w100p gray mb15px"><i class="far fa-clock"></i> 9am - 6pm / Lunes - Viernes</p>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4464777089174!2d-79.17917947083738!3d-0.23093915889536845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d54649b6204e0d%3A0xed0c96cffb8542dd!2sMarbust%20Technology%20Company!5e0!3m2!1sen!2sec!4v1606164108311!5m2!1sen!2sec" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="place-map"></iframe>
		</div>
	</div>
</div>

<!--Particles JS-->
<script src="lib/particles/particles.js"></script>
<script src="lib/particles/about.js"></script>
<script src="lib/particles/contact.js"></script>
<script src="js/scroll.js"></script>
