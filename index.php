<?php

function romanotoInt($nromano){
    $nromano = strtoupper($nromano);
    $n = 0;

    $numeros = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];

    $letras = strlen($nromano);

    for($i=0;$i<$letras;$i++) {
        $letraatual = $nromano[$i];

        // Verifica se tem prox. letra
        $prox = (isset($nromano[$i+1])) ? $nromano[$i+1] :false;

        // Verifica se o próximo existe e se o número atual < que o próximo
        if($prox && $numeros[$letraatual] < $numeros[$prox]) {
            $n -= $numeros[$letraatual];
        } else {
            $n += $numeros[$letraatual];
        }
    }

    return $n;
}

$num = 'X';
echo $num.' = '.romanotoInt($num);
?>

