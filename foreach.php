<?php

// Estudos com Foreach continuação
$nomes = ['juliana','diego','luana','bruna'];
$resultado = [];

foreach ($nomes as $key => $value) {
if(!($key % 2)){
    continue;
} 
    array_push($resultado, $value);   
}
var_dump($resultado);
echo "<br> <hr>";
 
// Exemplo 2

$soma = ['1','2','3','4','5'];
$somatoria = [0];

foreach ($soma as $key => $value) {
    if(!($key * 2)) {
        continue;
    }
    array_push($oma,$somatoria);
}
var_dump($somatoria);
