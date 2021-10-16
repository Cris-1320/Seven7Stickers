<?php
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;
	

	require 'PHPMailer/Exception.php';
	require 'PHPMailer/PHPMailer.php';
	require 'PHPMailer/SMTP.php';


	$mail = new PHPMailer(true);

try {

    //Recuperar los datos del formulario
    $f_type = $_POST['tipo'];
    $f_name = $_POST['nombre'];
    $f_email = $_POST['email'];
    $f_message = $_POST['consulta'];

    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'seven7stickers@hotmail.com';                     //SMTP username
    $mail->Password   = 'MeTomo2Bielas';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587; //587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($mail->Username, $f_name);
    $mail->addAddress('seven7stikers@gmail.com');     
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Permitir que se envíen archivos adjuntos 
    
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contacto desde Web';
    $mail->Body    = 'De: '.$f_email."<br>".
                     'Nombre: '.$f_name."<br>".
                     'Tipo: ' .$f_type."<br>".
                     'Mensaje: '.$f_message;
 

    $mail->send();
    echo "<h1>Hemos recibido su email y nos pondremos en contacto a la brevedad</h1>";
    echo "<input type=\"button\" onclick=\"location.href='".(isset($_SERVER['HTTPS']) ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']."'\" value=\"Volver\"></button>";
} catch (Exception $e) {
    echo "Error, el mensaje no se envió: {$mail->ErrorInfo}";
}


?>
