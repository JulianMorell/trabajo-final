
<?php include("../plantilla.php")?>
<?php

$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

$contenido = "Nombre: ".$nombre_form. "\r\n" . "Apellido: ".$apellido_form . "\r\n" . "Correo electronico: ".$email_form. "\r\n" . "Mensaje: ".$mensaje_form . "\r\n";

mail("julianmorell3@gmail.com", "Mensaje enviado de misitio.com", $contenido);

header("Location: pedido.php?correo=ok"); 

?>

<?php include("../footer.php")?>

