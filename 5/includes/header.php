     <div class="menu-btn" onclick="menudisplayer()" id="menubtn">
     	<i class="fas fa-bars"></i>
     </div>
     <nav id="nav">
     	<i class="far fa-window-close close-menu-btn" onclick="menudisplayer()"></i>
     	<ul>
     		<li><a href="/" onclick="destroymenu()">Inicio</a></li>
     		<li><a href="about" onclick="destroymenu()">¿Quiénes Somos?</a></li>
     		<li><a href="services" onclick="destroymenu()">Servicios</a></li>
     		<li><a href="contact" onclick="destroymenu()">Contacto</a></li>
     	</ul>
     	<p class="social-media"><a href="<?php echo $GLOBALS["Facebook-Link"];?>"><i class="fab fa-facebook-f"></i></a> <a href="<?php echo $GLOBALS["Twitter-Link"];?>"><i class="fab fa-twitter"></i></a> <a href="<?php echo $GLOBALS["Instagram-Link"];?>"><i class="fab fa-instagram"></i></a> <a href="<?php echo $GLOBALS["Youtube-Link"];?>"><i class="fab fa-youtube"></i></a></p>
     </nav>
