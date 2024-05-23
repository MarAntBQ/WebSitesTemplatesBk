<?php
//Web Site General Settings
$WebSiteName = "Forever";
$WebSiteSEODescription = "Nadie sabe el valor de los momentos hasta que se convierte en recuerdos; ¡Conoce nuestros servicios!";
$WebSiteSEOKeywords = "servicios, exequiales, planet, it, forever, muerte, como, recordar, recuerdos, misas, fallecimiento, fallecido, muerte, muerto, familiar, amigo, socio, pariente, reunion, conmemorar, recordar a una persona, honrar, honorar, dolor, llevar, ocasionado, perdida, necesidades, preferencias, planificacion, forever, ecua, ecuador, quito, servicio, delux, plan, planes, platinium, diamond, future, arbol, de, la vida, videos, recuerdos, serenata, mortuorio, mortuoria, misas, online, plataforma, retrato, lienzo, retrato 3d, ceniza, cenizas, placa, conmemorativa, difunto, ";


if ( isset( $_GET["path"] ) ) {

    switch ( $_GET["path"] ) {
        case "home":
        $PageName = "Inicio";
        $PageLocation = "views/pages/home.php";
        $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
        $WritingFile = "home";
        break;
        case "about":
        $PageName = "¿Quiénes Somos?";
        $PageLocation = "views/pages/about.php";
        $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
        break;
        case "services":
        $PageName = "Nuestros Servicios";
        $PageLocation = "views/pages/services.php";
        $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
        break;
        case "contact":
        $PageName = "Contacto";
        $PageLocation = "views/pages/contact.php";
        $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
        break;
        default:
        $PageName = "Página no encontrada";
        $PageLocation = "views/pages/404.php";
        $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
    }
} else {
    $PageName = "Inicio";
    $PageLocation = "views/pages/home.php";
    $WebSiteSEOKeywords = $WebSiteSEOKeywords.'';
    $WritingFile = "home";
}
$FBLink = "https://www.facebook.com/PlanetCoorp";
$TWLink = "https://twitter.com/";
$WALink = "https://api.whatsapp.com/send?phone=593999725813";
$PHLink = "tel:+593999725813";
$PHLink2 = "tel:+593979770189";
$IGLink = "https://www.instagram.com/";
$YTLink  = "https://www.youtube.com/";
$ELink = "mailto:info@ecuaforever.com";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {
    public static function SendM() {
        if ( isset( $_POST["contactForm"] ) ) {
            $name = filter_input( INPUT_POST, 'name', FILTER_SANITIZE_STRING );
            if ( empty( $name ) ) {
                $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingrese su nombre</p>";
                header( "Location: contact#contact" );
                exit;
            }
            $_SESSION["NAME"] = $name;
            $email = filter_input( INPUT_POST, 'mail', FILTER_SANITIZE_STRING );
            if ( empty( $email ) ) {
                $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingrese su email</p>";
                header( "Location: contact#contact" );
                exit;
            }
            $_SESSION["EMAIL"] = $email;
            $phone = filter_input( INPUT_POST, 'phone', FILTER_SANITIZE_STRING );
            if ( empty( $phone ) ) {
                $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingrese su teléfono</p>";
                header( "Location: contact#contact" );
                exit;
            }
            $_SESSION["PHONE"] = $phone;
            $message = filter_input( INPUT_POST, 'message', FILTER_SANITIZE_STRING );
            if ( empty( $message ) ) {
                $_SESSION["MSGFM"] = "<p class='fm-msg'>Por favor ingrese su mensaje</p>";
                header( "Location: contact#contact" );
                exit;
            }
            $_SESSION["MESSAGE"] = $message;
            $EmailTittle = "Formulario de Contacto";
            $DestinoEmail = "info@ecuaforever.com";
            $DestinoName = "FOREVER";
            $body = "<h1 style='text-align: center;'>Contact Form</h1>";
            $body = $body."<p><strong>Name: </strong> $name</p>";
            $body = $body."<p><strong>Email: </strong> <a href='mailto:$email'>$email</a></p>";
            $body = $body."<p><strong>Phone: </strong> $phone</p>";
            $body = $body."<p><strong>Message: </strong> $message</p>";
            $body = $body."<p style='text-align: center;'><strong>Form made with Marbust Websites&reg;'s Technology under the Marbust Technology Company License</strong></p>";
            unset( $_SESSION["NAME"] );
            unset( $_SESSION["EMAIL"] );
            unset( $_SESSION["PHONE"] );
            unset( $_SESSION["MESSAGE"] );

            require( 'phpmailer/PHPMailerAutoload.php' );
            $mail = new PHPMailer( true );
            $mail->IsSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->SMTPAuth = true;
            $mail->Port = 587;
            $mail->SMTPSecure = 'tls';

            //Aqui viene la magia
            $mail->Host = "SERVER";
            // Enter "mail.my-domain.com"
            $mail->Username = "EMAIL";
            // Enter an email address created through cPanel
            $mail->Password = "PASSWORD";
            // Enter the email password created through cPanel
            $mail->AddAddress( $DestinoEmail, $DestinoName );
            $mail->Subject = $EmailTittle;

            //No editar
            $mail->From = $email;
            $mail->FromName = $name;
            $mail->WordWrap = 50;
            $mail->IsHTML( true );
            $mail->Body = $body;
            //insert the message body
            $mail->AltBody = "Name    : {$name}\n\nEmail   : {$email}\n\nMessage : {$message}";
            $mail->SMTPDebug  = 0;
            // Change to "2" to see full SMTP connection output

            if ( !$mail->Send() ) {
                $_SESSION["MSGFM"] = "<p class='fm-msg'>Lo sentimos, pero el mensaje no pudo ser enviado</p>";
                header( "Location: contact#contact" );
                exit;
            }
            $_SESSION["MSGFM"] = "<p class='fm-msg'>Gracias $name, tu mensaje ha sido enviado.</p>";
            header( "Location: contact#contact" );
            exit;

        }

    }
}

?>