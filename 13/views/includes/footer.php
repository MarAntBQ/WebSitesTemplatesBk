<script src="views/js/scroll.js"></script>
<?php
if (isset($WritingFile)) {
    echo '<script src="views/js/typed.js"></script>';
    echo '<script src="views/js/'.$WritingFile.'.js"></script>';
}
//<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
?>
<script src="app-settings.js"></script>
<div class="social-links flex-hc">
   <?php
    /*
      <a href="<?php echo $TWLink; ?>" class="fab fa-twitter"></a>
<a href="<?php echo $LKLink; ?>" class="fab fa-linkedin-in"></a>
<a href="<?php echo $YTLink; ?>" class="fab fa-youtube"></a>
<a href="<?php echo $WALink; ?>" class="fab fa-whatsapp"></a>
<a href="<?php echo $IGLink; ?>" class="fab fa-instagram"></a>
    */
    ?>
  
<a href="<?php echo $FBLink; ?>" class="fab fa-facebook-f"></a>

</div>
<span class="wsp-msg"><i class="far fa-comments"></i> ¡Escríbenos!</span>
<a href="<?php echo $WALink;?>" class="wsp-btn" target="_blank"><i class="fab fa-whatsapp"></i></a>
<a href="./" class="w25p maxw230px minw230px dblock"><img src="views/img/footer/logo.png" alt="Logo" class="w100p dblock"></a>
<br>
<p><a href="/webmail" class="copylink"><i class="fas fa-envelope-open-text"></i> Correo Institucional <i class="fas fa-envelope-open-text"></i></a></p>
<p>&copy; <?php echo date("Y");?> <strong>Forever</strong> - All Rights Reserved</p>
<p>Developed by: <a href="https://planet-ec.com/" title="In Colaboration with Marbust Technology Company" class="copylink">PLANET iT&reg;</a></p>