<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPmailer/Exception.php';
require './PHPmailer/PHPMailer.php';
require './PHPmailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST["nombre"];
    $correo = $_POST["email"];
    $telefono = $_POST["telefono"];
    $asunto = $_POST["asunto"];
    $mensaje = $_POST["mensaje"];

    $mail = new PHPMailer(true);

    if (!empty($nombre) && !empty($correo) && !(strlen($telefono) == 0) && !empty($asunto) && !empty($mensaje)) {

        $body = "Nombre: " . $nombre . "<br>Correo: " . $correo . "<br>Nro. de Teléfono: " . $telefono . "<br>Asunto: " . $asunto . "<br>Mensaje: " . $mensaje;

        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'mail.pylconsultoriae.com';
            $mail->SMTPAuth = true;
            $mail->Username  = 'comercial@pylconsultoriae.com';
            $mail->Password  = 'PYLcomercial23';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom($correo, $nombre);
            $mail->addAddress('comercial@pylconsultoriae.com');

            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body = $body;

            if ($mail->send()) {
                $response = [
                    'success' => false,
                    'message' => 'Mensaje enviado correctamente.',
                ];
                echo json_encode($response);
                exit;
            } else {
                $response = [
                    'success' => false,
                    'message' => 'Error al envíar el mensaje.'
                ];
                echo json_encode($response);
                exit;
            }
        } catch (Exception $ex) {
            echo 'Hubo un error al enviar el mensaje: ', $mail->ErrorInfo;
        }
    } else {
        $response = [
            'success' => false,
            'message' => 'Campos obligatorios incompletos o vacíos.',
            'error' => $error_message['message']
        ];
        echo json_encode($response);
        exit;
    }
}
