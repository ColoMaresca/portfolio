<?php
$nombre = $ _POST['nombre'];
$email = $ _POST['email'];
$text = $ _POST['text'];
$mensaje = $ _POST['mensaje'];
$para = 'flucasales@gmail.com';
$titulo = 'Crack';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Text: $text\n Mensaje: $mensaje\n";
 
if ($ _POST['submit']) {
if (mail ($para, $titulo, $msjCorreo)) {
echo 'El mensaje se ha enviado';
} else {
echo 'Falló el envio';
}
}
?>
