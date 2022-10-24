<?php include("../plantilla.php")?>

<section class="contacto_cont">
    <form action="consulta.php"  method ="post">
    <input type="text" name="nombre" placeholder="Nombre" class="contacto_input" required><br>
    <input type="text" name="apellido" placeholder="Apellido" class="contacto_input" required><br>
    <input type="text" name="direccion" placeholder="Direccion" class="contacto_input" required><br>
    <input type="number" name="telefono" placeholder="Teléfono" class="contacto_input" required><br>
    <input type="email" name="email" placeholder="Email" class="contacto_input" required><br>
    <textarea name="mensaje" class ="mensaje" placeholder="Detalle su pedido" cols="30" rows="10" required></textarea><br>
    <input type="submit" class = "boton" value="Enviar Consulta">

    </form>



</section> 
<?php 

if(isset($_GET['correo'])){
    
echo "Su pedido se esta preparando, en breve le enviaremos.";
}
?>
<?php include("footer.php")?>

   