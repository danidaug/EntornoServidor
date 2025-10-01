<?php require_once($_SERVER['DOCUMENT_ROOT'].'/includes/getDeck.inc.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BlackJack</title>
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <?php
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/header.inc.php')
    ?>
    <h1>Black Jack</h1>
    <?php
        $deck = getDeck();
        array_pop($deck);
        array_pop($deck);
        shuffle($deck);
        for($i = 0; $i<2;$i++){
            $p1deck[$i] = array_pop($deck);
            
            $bankDeck[$i] = array_pop($deck);
        }
        $p1points=0;
       
        $bankPoints=0;
        //Contar puntos. 
        for($i =0; $i <count($p1deck); $i++){
            if($p1deck[$i]['value']>10){ //Si la carta vale mas que 10 la cambiamos a 10
                $p1deck[$i]['value']=10;
            }
            if($p1deck[$i]['value']==1 && $p1points<22){
                $p1deck[$i]['value']=11;
            }
            $p1points+=intval($p1deck[$i]['value']);
            if($p1points<14){
                $p1deck[$i+1] = array_pop($deck);
            }
        } 

        for($i =0; $i <count($bankDeck); $i++){
            if($bankDeck[$i]['value']>10){
                $bankDeck[$i]['value']=10;
            }
            if($bankDeck[$i]['value']==1&&$bankPoints<22){
                $bankDeck[$i]['value']=11;
            }
            $bankPoints+=intval($bankDeck[$i]['value']);
            if($bankPoints<14){
                $bankDeck[$i+1] = array_pop($deck);
            }
        }
        echo '<h1>Banca: </h1>';
        foreach($bankDeck as $card){
            echo '<img src="/baraja/'. $card['image'] .'" alt="card"> ';
        }
        echo'Puntos: '. $bankPoints;
        echo '<h1>Jugador 1: </h1>';
        foreach($p1deck as $card){
            echo '<img src="/baraja/'. $card['image'] .'" alt="card"> ';
        }

        echo'Puntos: '. $p1points;
        foreach($bankDeck as $card){
           $bankPoints+=intval($card['value']) ;
        }
        if($p1points<=14){
            $p1deck[2] = array_pop($deck);
            $p1points+=intval($p1deck[2]);
        }
        
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php');
    ?>
</body>
</html>