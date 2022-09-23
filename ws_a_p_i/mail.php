<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './lib/PHPMailer/Exception.php';
require './lib/PHPMailer/PHPMailer.php';
require './lib/PHPMailer/SMTP.php';

class Mail {
    public function correo($nombre, $apellido, $telefono, $correo, $mensaje){
        $mail = new PHPMailer(true);
            try {
                //Server settings
                //$mail->SMTPDebug = 0; //Opciones LOG: 0, 1, 2
                $mail->isSMTP();
                $mail->Host       = 'smtp.titan.email';
                $mail->SMTPAuth   = true;
                $mail->Username   = 'contacto@crecimientoweb.com';
                $mail->Password   = '^K94X{IC(azb';
                $mail->SMTPSecure = 'SSL';
                $mail->Port       = 587;

                //Recipients
                $mail->setFrom('contacto@crecimientoweb.com', "Crecimiento Web - ".$nombre); //Enviado desde.
                $mail->addAddress('youalevi@gmail.com', 'Alevi'); //Recibe bandeja Admin.

                // Content
                $mail->isHTML(true);  
                $mail->CharSet = 'UTF-8';
                $mail->Subject = 'Nuevo usuario solicitando información';
                $mail->Body    = 'Hola Isaac, Haz recibido un nuevo correo de ' .'<b>'. $nombre .' '.$apellido.'</b>'. ' solicitado la siguiente información: <br><br><br>' . 
                //aqui podemos generar el contenido del mensaje
                $mensaje .  '<br><br><b>Contacto: </b><br>'.
                'Nombre: ' . $nombre .' '.  $apellido . '<br>'.
                'Correo electrónico: '. $correo . '<br>'.
                'Número celular: '.  $telefono;
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();
                return '{"msg": true}';
            } catch (Exception $e) {
                return '{"msg": false}';
            }

    }
}