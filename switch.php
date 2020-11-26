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

echo "<br> <hr>";

//Obs os loops podem ser realizados com qualquer variável seguindo o padrão já existentes 

//  While
/*
Ele dirá ao PHP para executar as declarações aninhadas repetidamente, 
enquanto a expressão do while forem avaliadas como TRUE.
*/

$ab = 0; //Obs no caso do while a variável precisa ser declada antes do loop

while ($ab <= 7) {
    echo "O número atual é igual há : $ab <br>";
    $ab++;
}