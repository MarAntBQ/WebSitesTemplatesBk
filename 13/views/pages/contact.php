<?php
Mailer::SendM();
?>
   <div class="page-section contact-page">
    <h1 class="fs40px">Contáctanos</h1>
    <br>
    <br>
    <div class="flex-hc">
        <div class="box-4 box-m-6 box-p-12 contact-box tac" data-aos="zoom-in" data-aos-duration="800">
            <div class="icon-ctnr">
                <i class="fas fa-map-marker-alt"></i>
            </div>
            <h2>Dirección</h2>
            <p class="service-about">FOREVER E8-381 Av. Ilaló.<br><strong>Quito - Ecuador, CA 94158</strong></p>
        </div>
        <div class="box-4 box-m-6 box-p-12 contact-box tac" data-aos="zoom-in" data-aos-duration="800">
            <div class="icon-ctnr">
                <i class="fas fa-envelope-open-text"></i>
            </div>
            <h2>E-mail</h2>
            <a href="<?php echo $ELink;?>"><strong>Información</strong></a>
        </div>
        <div class="box-4 box-m-6 box-p-12 contact-box tac" data-aos="zoom-in" data-aos-duration="800">
            <div class="icon-ctnr">
                <i class="fas fa-phone"></i>
            </div>
            <h2>Teléfono</h2>
            <a href="<?php echo $PHLink;?>"><strong>+593 (99) 972 - 5813</strong></a>
            <a href="<?php echo $PHLink2;?>"><strong>+593 (97) 977 - 0189</strong></a>
        </div>
    </div>
</div>
<div class="page-section contact-form" id="contact">
    <h1 class="fs40px">Déjanos tu mensaje</h1>
    <br>
    <div class="flex-s-a">
        <div class="box-6 box-i-8 box-m-10 box-p-12">
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
</div>
