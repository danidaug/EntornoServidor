<?php
function getDeck() {
    $baraja = [];
    
    // Palos normales (excluyendo comodines)
    $palos = [
        'corazones' => 'cor',
        'rombos' => 'rom', 
        'treboles' => 'tre',
        'picas' => 'pic'
    ];
    
    // Valores de las cartas (1-10, J, Q, K)
    $valores = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13'];
    
    // Generar cartas para cada palo
    foreach ($palos as $paloNombre => $paloAbrev) {
        foreach ($valores as $valor) {
            $baraja[] = [
                'suit' => $paloNombre,
                'value' => $valor,
                'image' => $paloAbrev . '_' . strtolower($valor) . '.png'
            ];
        }
    }
    
    // Añadir los dos comodines
    $baraja[] = [
        'suit' => 'comodin',
        'value' => '0',
        'image' => 'jok_1.png'
    ];
    
    $baraja[] = [
        'suit' => 'comodin',
        'value' => '0', 
        'image' => 'jok_2.png'
    ];
    
    return $baraja;
}

?>
