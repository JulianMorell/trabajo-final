
<?php include("../plantilla.php")?>
    
    <section class = "pizzeria_contenido">
    
    <h2 class="variedades">Variedades</h2>
    
    <div class="lista">
    <ul>
        <li> <a href="../paginas/productos.php?producto=pn">Pizza Napolitana</a></li>
        <li> <a href="../paginas/productos.php?producto=pm">Pizza Margarita</a></li>
        <li> <a href="../paginas/productos.php?producto=p4">Pizza 4 quesos</a></li>
    </ul>
    </div>
    </section>
    
    <?php
    if(isset($_GET['producto']))
    {
        switch($_GET['producto']){
            case 'pn':
                $nombre = 'Pizza Napolitana';
                $porcion1 = '8 Porciones';
                $precio1 = "$1400";
                $porcion2 = '4 Porciones';
                $precio2 = "$800";
                $img = '../../img/pizza_napolitana.png';
                break;
            case 'pm':
                $nombre = 'Pizza Margarita';
                $porcion1 = '8 Porciones';
                $precio1 = "$1200";
                $porcion2 = '4 Porciones';
                $precio2 = "$700";
                $img = '../../img/pizza_margarita.png';
                break;
            case 'p4':
                $nombre = 'Pizza 4 quesos';
                $porcion1 = '8 Porciones';
                $precio1 = "$1600";
                $porcion2 = '4 Porciones';
                $precio2 = "$900";
                $img = '../../img/pizza_4quesos.png';
                break;
                }
    }
    
    ?>
    <div class = "producto_descripcion">
        <p><?php echo $nombre; ?></p>
        <p><?php echo $porcion1; ?></p>
        <p><?php echo $precio1; ?></p>
        <p><?php echo $porcion2; ?></p>
        <p><?php echo $precio2; ?></p>
        </div>
    
        <div class = "contenedor_img"><img src = "<?php echo $img; ?>"></div>
    
    
    <?php include("../footer.php")?>
    