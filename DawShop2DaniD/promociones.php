<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <header>
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php')
        ?>
    </header>
    <section class="promotion">
        <img src="img/caribean.png" alt="caribean">
        <p>
            Llega el verano y es hora de ir de vacaciones, viaja al caribe con nuestro producto <strong> CARIBBEAN </strong> por tan solo <span class="sale">€29.99</span>
           <br> Aprovecha esta oferta limitada y descubre por qué <strong>CARIBBEAN</strong> se ha convertido en uno de nuestros productos más populares. 
            ¡Haz tu pedido hoy mismo y disfruta de un viaje de sabor sin salir de casa!
        </p>
     <footer>
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php')
        ?>
    </footer>
    </section>
</body>

</html>