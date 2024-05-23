<?php
                SendMailctr::mailController("General-Support");
             ?>
   <div class="home-presentation">
    <div class="left">

    </div>
    <div class="right">
        <h1 class="fs70px fs-i-60px fs-m-40px fs-p-35px">MEGA<br>ECUAFARMA<br>NATURAL</h1>
        <a href="#nosotros" class="fs70px fs-i-60px fs-m-50px fs-p-40px"><i class="fas fa-chevron-circle-down"></i></a>
    </div>
</div>
<div class="site-container" id="nosotros" data-aos="fade-up">
    <h2 class="">Nosotros</h2>
    <span class="botton-line maxw100px mauto mb25px"></span>
    <div class="flex-s-a">
        <div class="box-6  box-i-5 box-m-12 flex-vc">
            <img src="img/about/logo-ecuafarma.png" alt="MegaEcuafarma Logo" class="dblock mauto w80p shadow mb15px">
        </div>
        <div class="box-6  box-i-5 box-m-12">
            <p class="lh2em tac tbold">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum, quae itaque, rem mollitia qui deleniti? Ipsam alias voluptatibus corporis provident dolore facilis praesentium voluptate doloremque hic distinctio! Sint, accusantium, totam!</p>
        </div>
    </div>
</div>
<div class="laboratorio-home" data-aos="fade-up">
    <h2 class="">Nuestro Laboratorio</h2>
    <span class="botton-line maxw100px mauto mb25px"></span>
    <div class="flex-s-a">
        <div class="left flex-vc">
            <p class="w95p mauto mb15px tac lh2em">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum, commodi debitis consequuntur nisi illo voluptatum laborum obcaecati veniam iste quasi, hic quo sapiente fugit similique? Facere, excepturi obcaecati! Pariatur, reiciendis!</p>
        </div>
        <div class="right">
            <img src="img/laboratorio/outsite.jpg" alt="Laboratorio Picture" class="w100p">
        </div>
    </div>
</div>
<div class="site-container" data-aos="fade-up">
    <h2 class="">Nuestros Mejores Productos</h2>
    <span class="botton-line maxw100px mauto mb25px"></span>
    <div class="flex-hc">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-products/Diente-de-leon.jpg" alt="Product Picture" class="m5px">
    </div>
    <a href="#" class="btn">Catálogo Completo</a>
</div>
<div class="site-container" data-aos="fade-up">
    <h2 class="">Nuestros Distribuidores</h2>
    <span class="botton-line maxw100px mauto mb25px"></span>
    <div class="flex-hc distribuidores-flex">
        <img src="img/home-partners/d1.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-partners/d1.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-partners/d1.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-partners/d1.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-partners/d1.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-partners/d1.jpg" alt="Product Picture" class="m5px">
        <img src="img/home-partners/d1.jpg" alt="Product Picture" class="m5px">
    </div>
    <a href="#" class="btn">Más Información</a>
</div>
<div class="site-container" data-aos="fade-up" id="contactenos">
    <h2 class="">Contáctenos</h2>
    <span class="botton-line maxw100px mauto mb25px"></span>
    <div class="flex-s-a">
        <div class="box-4 box-i-12 tac lh2em">
            <h3 class="">Dirección</h3>
            <p class="fs18px"><strong>Lorem ipsum dolor.</strong></p>
            <p class="fs16px">Tambillo - Ecuador</p>
            <h3 class="">Teléfono</h3>
            <p class="fs18px"><a href="tel:+59399999999">09-9999-999</a></p>
            <p class="fs18px"><a href="tel:+59399999999">09-9999-999</a></p>
            <h3 class="">Horario de atención</h3>
            <p class="fs18px"><strong>Lunes a Viernes</strong></p>
            <p class="fs17px">8:00 AM - 6:00 PM</p>
            <p class="fs18px"><strong>Sábados</strong></p>
            <p class="fs17px">9:00 AM - 3:00 PM</p>
        </div>
        <div class="box-4 box-i-8 box-m-10 box-p-11" id="contact">
            
            <h3>Escríbanos</h3>
            <?php
                    if (isset($_SESSION["MailerAnswer"])) {
                        echo $_SESSION["MailerAnswer"];
                    }
                    unset($_SESSION["MailerAnswer"]);
                    ?>
            <form class="contactform" method="post">
                <label for="name" class="tac w100p dblock">Tu nombre:</label>
                <input id="name" class="input dblock w100p mauto mt5px mb5px fs18px br5px" name="name" type="text" value="" size="30" required placeholder="Escribe tu nombre">
                <label for="email" class="tac w100p dblock">Tu E-mail:</label>
                <input id="email" class="input dblock w100p mauto mt5px mb5px fs18px br5px" name="email" type="email" value="" placeholder="name@example.com" size="30" required />
                <label for="tel" class="tac w100p dblock">Tu teléfono:</label>
                <input id="phone" class="input dblock w100p mauto mt5px mb5px fs18px br5px" name="phone" type="tel" value="" placeholder="0999999999" size="30" required maxlength="10" pattern="[0-9]{10}">
                <label for="message" class="tac w100p dblock"><strong>Escribe tu Mensaje:</strong></label>
                <textarea id="message" class="input dblock w100p mauto mt10px fs18px br5px" name="message" rows="7" cols="30" style="max-width: 100%; min-width: 100%; max-height: 150px;" placeholder="Escribe todas tus preguntas, dudas, sugerencias o inquietudes." required></textarea>

                <input id="submit_button" type="submit" class="btn" value="Enviar Mensaje">
                <input type="hidden" name="controller-action" value="SendMessage">
            </form>
        </div>
        <div class="box-4 box-i-12">
            <h3>Encuéntrenos en el Mapa</h3>
            <iframe style="width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1993.4579552428422!2d-79.9098843421013!3d-2.18558031934187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMsKwMTEnMDguMSJTIDc5wrA1NCczMS42Ilc!5e0!3m2!1ses-419!2sec!4v1583431879943!5m2!1ses-419!2sec" frameborder="0" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
