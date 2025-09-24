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
            $p2deck[$i] = array_pop($deck);
            $p3deck[$i] = array_pop($deck);
            $p4deck[$i] = array_pop($deck);
            $p5deck[$i] = array_pop($deck);
            $bankDeck[$i] = array_pop($deck);
        }
        $p1points=0;
        $p2points=0;
        $p3points=0;
        $p4points=0;
        $p5points=0;
        $bankPoints=0;
        foreach($p1deck as $card){
           $p1points+=intval($card['value']);
        }
        foreach($p2deck as $card){
           $p2points+=intval($card['value']);
        }
        foreach($p3deck as $card){
           $p3points+=intval($card['value']);
        }
        foreach($p4deck as $card){
           $p4points+=intval($card['value']);
        }
        foreach($p5deck as $card){
           $p5points+=intval($card['value']) ;
        }
        foreach($bankDeck as $card){
           $bankPoints+=intval($card['value']) ;
        }
        if($p1points<=14){
            $p1deck[2] = array_pop($deck);
            $p1points+=intval($p1deck[2]);
        }
        echo $p1points;
        echo'<pre>';
        echo var_dump($p1deck);
        echo'</pre>';
        require_once($_SERVER['DOCUMENT_ROOT'].'/includes/footer.inc.php');
    ?>
</body>
</html>