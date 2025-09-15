<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogo</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<header>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php')
    ?>
</header>
<body>
    <h1>Bienvenido a nuestro catalogo</h1>
    <section class="products">
        <div class="bag">
            <img src="img/diabolical.png" alt="diabolical"><br>
            <h4>DIABOLICAL</h4><br>
            <span class="price">€34.99</span>
        </div>
        <div class="bag">
            <img src="img/angelical.png" alt="angelical"><br>
            <h4>ANGELICAL</h4><br>
            <span class="price">€34.99</span>
        </div>
        <div class="bag">
            <img src="img/caribean.png" alt="caribean"><br>
            <h4>CARIBBEAN</h4><br>
            <span class="sale"><s>€34.99</s> </span>
            <span class="price">€29.99</span>
        </div>
        <div class="bag">
            <img src="img/alieno.png" alt="caribean"><br>
            <h4>ALIENO</h4><br>
            <span class="price">€34.99</span>
        </div>
        <div class="bag">
            <img src="img/shoormatic.png" alt="shroom"><br>
            <h4>SHROOMATIC</h4><br>
            <span class="price">€39.99</span>
        </div>
    </section>
    <footer>
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php')
        ?>
    </footer>
    
</body>

</html>