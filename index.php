<?php
// Variáveis mudam e acordo com o valor inserido no codigo 
echo "Variáveis". "<br>";
$nome = "Juliana";
$idade = 23;
$formacao = array();
$ultimaVisualizacao = null;


echo $nome ."<br>"; // Juliana
echo $idade ."<br>"; // 23


echo isset($formacao) ."<br>"; //valor de saida verdadeiro ou true ou 1
echo isset($ultimaVisualizacacao); //retrona o valor de false 

echo empty($formacao) ."<br>"; //valor de saida verdadeir ou true ou 1
echo empty($ultimaVisualzacao) ."<br> <hr>"; //valor de saida verdadeir ou true ou 1

echo "Constantes". "<br>";
// Constantes não variam dentro do código

define('MEU_NOME', 'Allan sousa');
    echo MEU_NOME;
        echo "<br>";

define('MINHA_IDADE', 26); // Exemplo 2
        echo MINHA_IDADE;
        echo "<br> <hr>";
echo "Tipos primitivos"."<br>";
// Tipos primitivos São os tipos básicos usados dentro do PHP
$nome01 = "Andressa". "<br>"; // string 
echo $nome;
echo "<br>";
$idade01 = "23"; // int / integer
echo $idade01;
echo "<br>";
$altura = "1.65"; // float / double
echo $altura;
echo "<br>";
$mulher = true . "<br>"; // boolean
echo $mulher;
echo "<br>";
$cursos = array('PHP', 'LARAVEL', 'MYSQL'); //array matriz de vetor dentro da sintaxe php
    print_r($cursos);
echo "<br>";
$cursos01 = ["PHP", "LARAVEL", "MYSQL"]; //Outra forma de inserir arrays dentro do código
    print_r($cursos01);
echo "<br> <hr>";

echo "Arrays"."<br>";
// Arrays Matrizes de vetores dentro do PHP
// Exemplo 1
$carros = array('Gol', 'Camaro', 'ferrari');
    print_r($carros);
    echo "<br>";
// Exemplo 2
$frutas = array(1=>'maça', 2=>'abacaxi', 3=>'pera');
    print_r($frutas);
    echo "<br>";
// Exemplo 3 Arrays Associativa
$sobrenome = array(
    "Allan" => "sousa", //conceito chave-valor onde o nome é chave ou identificador e sobrenome é o valor atribuido no interior da array
    "Bruna" => "Olly" //obs. dentro de qualaquer expressão em php deve-se usar a , para separação dos dados
);
print_r($sobrenome);
echo "<br>";
// Exemplo 4 Arrays Associativas
$animes = array(
    "sasuke" => "naruto",
    "Goku" => "Dragonball"
);
print_r($animes);
