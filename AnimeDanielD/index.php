<?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/Character.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $doraemon = new Character('doraemon','hombre',-23,'gato cosmico');
        echo $doraemon->data().'<br>';
        $doraemon->age=4;
        $doraemon->species='ashdk23';
        echo $doraemon->data().'<br>';
        
    ?>

</body>
</html>