<?php

// Switch

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