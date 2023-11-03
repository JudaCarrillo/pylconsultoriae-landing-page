<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre_completo"];
    $correo = $_POST["Correo_electrónico"];
    $telefono = $_POST["Número_de_teléfono"];
    $asunto = $_POST["Asunto"];
    $mensaje = $_POST["Mensaje"];

    if (!empty($nombre) && !empty($correo) && strlen($telefono) == 0 && !empty($asunto) && !empty($mensaje)) {

        $destinatario = "carrillo18.pacherres@gmail.com";
        $encabezado = "From: $correo";

        // Envía el correo electrónico
        $success = @mail($destinatario, $asunto, $mensaje, $encabezado);

        if ($success) {
            $response = [
                'success' => true,
                'message' => 'Correo envíado con éxito.',
            ];
            echo json_encode($response);
            exit;
        } else {
            $error_message = error_get_last();
            $response = [
                'success' => false,
                'message' => 'Error al envíar el mensaje.',
                'error' => $error_message['message']
            ];
            echo json_encode($response);
            exit;
        }
    } else {
        $response = [
            'success' => false,
            'message' => 'Campos obligatorios incompletos o vacíos.'
        ];

        echo json_encode($response);
        exit;
    }
}
