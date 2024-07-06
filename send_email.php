<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST['nombre']);

    $to = "fcannarozzi@icloud.com"; // Reemplaza con tu dirección de correo
    $subject = "Confirmación de Asistencia";
    $message = "El invitado $nombre ha confirmado su asistencia.";
    $headers = "From: noreply@tusitio.com"; // Reemplaza con un remitente válido

    // Envía el correo
    if (mail($to, $subject, $message, $headers)) {
        header("Location: gracias.html"); // Redirige a una página de agradecimiento si el correo se envió correctamente
        exit();
    } else {
        echo "Error al enviar el correo.";
    }
}
?>