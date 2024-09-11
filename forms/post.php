<?php
// Verifica si el formulario ha sido enviado usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge y sanitiza los datos del formulario
    $nombre = htmlspecialchars($_POST['name']);
    $correo = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $telefono = htmlspecialchars($_POST['phone']);
    $mensaje = htmlspecialchars($_POST['message']);

    // Validación básica de los campos
    if ($nombre && $correo && $telefono && $mensaje) {
        // Configuración del correo
        $destinatario = "sonne_29@hotmail.com"; // Cambia a la dirección de correo donde deseas recibir los mensajes
        $asunto = "Nuevo mensaje de contacto de: $nombre";
        
        // Cuerpo del mensaje
        $cuerpo = "Nombre: $nombre\n";
        $cuerpo .= "Correo: $correo\n";
        $cuerpo .= "Teléfono: $telefono\n\n";
        $cuerpo .= "Mensaje:\n$mensaje";

        // Encabezados del correo
        $encabezados = "From: $correo\r\n";
        $encabezados .= "Reply-To: $correo\r\n";
        $encabezados .= "X-Mailer: PHP/" . phpversion();

        // Envío del correo
        if (mail($destinatario, $asunto, $cuerpo, $encabezados)) {
            echo "Tu información ha sido enviada correctamente.";
        } else {
            echo "Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo.";
        }
    } else {
        echo "Por favor, rellena todos los campos correctamente.";
    }
} else {
    echo "Solicitud no válida.";
}
?>