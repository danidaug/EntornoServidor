<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donde estamos</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<header>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php')
    ?>
</header>
<body>
    <section class="map">
        <h3>Encuentranos en C/ de José María Haro, 63</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!4v1757953200278!6m8!1m7!1sCAoSF0NJSE0wb2dLRUlDQWdJRHEzSkdhNmdF!2m2!1d25.40476036416657!2d8.424761826457091!3f354.5829795967443!4f-14.066843518743326!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
  
    <form action="form">
         <h1>Contacta con nosotros</h1>
        <label for="name"><strong>Name:</strong></label>
        <input type="text" id="name" required><br>
        <label for="mail"><strong>Email</strong></label>
        <input type="email" id="mail" required><br>
        <label for="numphone"><strong>Número Teléfono:</strong></label>
        <input type="tel" name="numphone" id="numphone" required><br>
        <label for="comentario"><strong>Comentario:</strong></label><br>
        <textarea name="comentario" id="comentario"></textarea>
        <input type="submit" value="Comentar" ><input type="reset" value="Borrar" >
    </form>
    <footer>
        <?php
            require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php')
        ?>
    </footer>
</body>

</html>