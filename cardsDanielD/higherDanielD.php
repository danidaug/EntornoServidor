<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/getDeck.inc.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Higher</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php')
    ?>
    <h1>Higher</h1>
    <?php
    
        $deck = getDeck();
        shuffle($deck);
        for($i = 0; $i<10;$i++){
            $p1deck[$i] = array_pop($deck);
            $p2deck[$i] = array_pop($deck);
        
        }
        $p1points=0;
        $p2points=0;
        foreach($p1deck as $key => $card){
            if($p1deck[$key]['value']>$p2deck[$key]['value']){
                $p1points++;
            }
            if($p1deck[$key]['value']<$p2deck[$key]['value']){
                $p2points++;
            }
            if($p1deck[$key]['value']==$p2deck[$key]['value']){
                $p2points;
                $p1points;
            }
        }
        echo '<h1>JUGADOR 1:</h1> <div class="card">';
        foreach($p1deck as $card){
            echo '<img src="/baraja/'. $card['image'] .'" alt="card">';
        }
        echo '</div>';
    
        
        echo '<h2>Puntos : '. $p1points .'<h2></br>';

        echo '<h1>JUGADOR 2:</h1> <div class="card">';
        foreach($p2deck as $card){
            echo '<img src="/baraja/'. $card['image'] .'" alt="card"> ';
        }
        echo '</div>';
        
        
        echo '<h2>Puntos : '.$p2points.'</h2>';
        if($p1points==0%%$p2points==0){
            echo '<h1> Gana Jugador 1</h1>';
        }
        if($p1points<$p2points){
            echo '<h1> Gana Jugador 2</h1>';
        }
        if($p1points==$p2points){
            echo '<h1> EMPATE!!</h1>';
        }
    
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php')
    ?>
</body>
</html>