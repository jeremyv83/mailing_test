<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(($_POST["envoyer"] == true) && (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))){
    $email = $_POST["email"];

    require '../vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    //-------------------------------------------------------------------------
    // Configuration serveur SMTP :
    $host = 'sandbox.smtp.mailtrap.io';    // Hôte du serveur SMTP
    $SMTPAuth = true;                      // Si il y a une authentification 
    $username = '4d4d8783151120';
    $password = 'f1237dffdad7c7';
    $port = 2525;                          // Port du serveur SMTP

    //--------------------------------------------------------------------------

    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $host;
        if($SMTPAuth) {
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = $username;                     //SMTP username
            $mail->Password   = $password;
        }else $mail->SMTPAuth = false;                     //Set the SMTP server to send through
                                    
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = $port;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('from@example.com', 'Mailer');
        $mail->addAddress($email);    

        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Vaccin\' & Vous - Population adolescente : comment les protéger ?';
        $mail->Body    = file_get_contents('mail_tableau.html');
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo '<script> alert("E-mail envoyé !");</script>';
    } catch (Exception $e) {
        echo "Le mail n'a pas réussi à s'envoyer... Erreur : {$mail->ErrorInfo}";
    }

}else{
    echo '<script>alert("E-mail non conforme !")</script>';
}