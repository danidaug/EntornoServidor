<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php
            $num = 1;
            while ($num < 5){
                echo' <li><a href="#sec' . $num . '">section ' . $num . ' </a></li>';
                $num++;
            }
        ?>
    </ul>
    <article id="sec1">
        <h1>Negativo - Cero - Positivo</h1>
        <?php
            $ranNum = rand(-200,200);
            if($ranNum<=0){
                echo 'El número ' . $ranNum . ' es negativo';
            }
            if($ranNum==0){
                echo 'El número ' . $ranNum . ' es cero';
            }
            if($ranNum>0){
                echo 'El número '. $ranNum . ' es positivo';
            }
            
        ?>
    </article>
    <article id="sec2">
        <h1>Nota</h1>
        <?php
            $note = rand(0,10);
            echo 'Dani DAuria tiene una nota media de:';
            switch($note){
                case 0:
                case 1:
                case 2: echo 'insuficiente';
                    break;
                case 3:
                case 4: echo 'insuficiente';
                    break;
                case 5: echo 'aprobado jistito';
                    break;
                case 6: echo 'aprobado';
                    break;
                case 7: echo 'notable bajo';
                    break;
                case 8: echo 'notable';
                break;
                case 9: 
                case 10:echo 'sobresaliente';
                    break;
                default: echo 'valor no valido.';
            }
        ?>
    </article>
</body>
</html>