<?php

// Switch Case

// A declaração switch é similar a uma série de declarações IF na mesma expressão.
$corfavorita = "azul"; // azul, verde, amarelo.......
switch($corfavorita) {
    case "azul":  //condicionante com o if
        echo "Selecionou a cor azul";
    break; // È basicamente com o endif, mas aqui finaliza apenas um bloco da aplicação
    case "vermelho";
        echo "Selecionou a cor vermelha";
    break;
    case "amarelo":
        echo "Selecionoua cor amarela";
    break;
    default: // seria igual ao else com condicionante negativa 
        echo "Não selecionou nehuma cor dispónivel";
    }
    echo "<br> <hr>";
// Loop 
// Setença de repetição dentro do PHP

for($numero = 0; $numero <= 10; $numero++) { //nesse caso a separação será realizada com ; e não com ,
    echo "O número atual é igual há : $numero <br>";
}
echo "<br> <hr>";
for($i = 20; $i <= 25; $i++) {
    echo "O número atual é igual há : $i <br>";
}
