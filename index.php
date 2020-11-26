<?php
// Variáveis mudam e acordo com o valor inserido no codigo 

$nome = "Juliana";
$idade = 23;
$formacao = array();
$ultimaVisualizacao = null;


echo $nome ."<br>"; // Juliana
echo $idade ."<br>"; // 23


echo isset($formacao) ."<br>"; //valor de saida verdadeiro ou true ou 1
echo isset($ultimaVisualizacacao); //retrona o valor de false 

echo empty($formacao) ."<br>"; //valor de saida verdadeir ou true ou 1
echo empty($ultimaVisualzacao) ."<br>"; //valor de saida verdadeir ou true ou 1

// Constantes não variam dentro do código

define('MEU_NOME', 'Allan sousa');
    echo MEU_NOME;
        echo "<br>";

define('MINHA_IDADE', 26); // Exemplo 2
        echo MINHA_IDADE;
        echo "<br>";

// Tipos primitivos São os tipos básicos usados dentro do PHP
$nome01 = "Andressa". "<br>"; // string 
$idade01 = "23". "<br>"; // int / integer
$altura = "1.65". "<br>"; // float / double
$mulher = true . "<br>"; // boolean
// $cursos = array('PHP', 'LARAVEL', 'MYSQL'). "<br>"; //array matriz de vetor dentro da sintaxe php
    // print_r($cursos). "<br>";
// $cursos01 = ["PHP", "LARAVEL", "MYSQL"]. "<br>"; //Outra forma de inserir arrays dentro do código
    // echo $cursos01;