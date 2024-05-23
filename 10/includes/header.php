<div id="menu-btn" onclick="menudisplayer()">
	<p><span></span></p>
	<p><span></span></p>
	<p><span></span></p>
</div>
<!--<i class="fas fa-ellipsis-v" id="menu-btn"></i>-->
<a href="#" class="logo-container fs18px fs-i-17px fs-m-16px fs-p-14px">Marbust Framework PHP</a>
<nav>
	<ul id="ul">
		<i class="fas fa-times" id="close-btn" onclick="destroymenu()"></i>
		<li><a href="#" id="HomeLink" onclick="destroymenu()"><i class="fas fa-home"></i> Home</a></li>
		<li><a href="#about" id="AboutLink" onclick="destroymenu()"><i class="fas fa-building"></i> About</a></li>
		<li><a href="#services" id="ServicesLink" onclick="destroymenu()"><i class="fas fa-briefcase"></i> Services</a></li>
		<li><a href="#contact" id="ContactLink" onclick="destroymenu()"><i class="fas fa-location-arrow"></i> Contact</a></li>
	</ul>
	<div class="contact-links">
		<a href="<?php echo $GLOBALS["Email-Link"]; ?>"><i class="far fa-envelope"></i></a>
		<a href="<?php echo $GLOBALS["Phone-Link"]; ?>"><i class="fas fa-phone-volume"></i></a>
	</div>
</nav>
