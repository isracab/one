<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibe los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $celular = $_POST["celular"];
    $mensaje = $_POST["mensaje"];

    // Configuración del correo electrónico
    $destinatario = "correoisracab@gmail.com";
    $asunto = "Nuevo mensaje de contacto de $nombre";
    $cuerpoMensaje = "Nombre: $nombre\n";
    $cuerpoMensaje .= "Correo electrónico: $email\n";
    $cuerpoMensaje .= "Celular: $celular\n";
    $cuerpoMensaje .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $cuerpoMensaje)) {
        echo "¡El mensaje se envió correctamente!";
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, intenta de nuevo más tarde.";
    }
} else {
    // Redirecciona si el formulario no se envía por POST
    header("Location: index.html");
}
?>