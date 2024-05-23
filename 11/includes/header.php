<i class="fas fa-bars menu-btn" onclick="menudisplayer()"></i>
<a href="./" class="logo-container fs40px fs-i-30px fs-m-25px fs-p-16px">Marbust Framework</a>
<div class="social-media-header-links">
    <a href="<?php echo $IGLink; ?>" class="fab fa-instagram"></a>
    <a href="<?php echo $WALink; ?>" class="fab fa-whatsapp"></a>
</div>
<nav id="nav">
   <p class="close-btn-ctnr"><i class="fas fa-arrow-left close-btn" onclick="destroymenu()"></i></p>
    <ul id="ul">
        <li><a href="./" class="link-active"><i class="fas fa-home"></i> Home</a></li>
        <li><a href="about"><i class="fas fa-building"></i> About</a></li>
        <li><a href="services"><i class="fas fa-briefcase"></i> Services</a></li>
        <li><a href="contact"><i class="fas fa-location-arrow"></i> Contact</a></li>
    </ul>
</nav>
<script>
    getCurrentLink();

</script>
