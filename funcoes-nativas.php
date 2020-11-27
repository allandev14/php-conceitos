<?php


// Funções Nativas PHP

// phpinfo(); Comando para informações do ambiente php instalado

$nome = "andre";
echo strtoupper($nome); // função strtoupper - Transforma a variável em caixa alta
echo "<br>";

$nome2 = "Ana";
echo strtolower($nome2); // função strtolower - Transforma a variável em letras minusculas
echo "<br>";

$ajuste = "    *       Espaço em Branco       *       ";
echo trim($ajuste); // função retira espaços em branco dentro da variável
echo "<br>";

$barranome = "Allan\ \ \ \ Sousa";
echo stripslashes($barranome); // função retira a barra invertida dentro da variável
echo "<br>";

$nomenegrito = '<b>Nome:</b> Allan Sousa';
echo htmlspecialchars($nomenegrito); // função de escape para o html dentro da variável
echo "<br>";

$pizzas = 'musarela, moda, napolitana'; //nesse caso o item de seperação é a , por isso ela está declarada na array
$arrayDePizzas = explode(',','$pizzas'); //função de explosão dentro de uma array

var_dump($arrayDePizzas);
echo "<br>";

$doces = ['bolo','chocolate','bala'];
$stringDeDoces = implode(',', $doces); //função inversa basicamente ela transforma uma array em string também pode ser chamada com sinomimo de join

echo $stringDeDoces;
echo "<br>";

/*
$mensagem = "Olá meu nome é Allan";
$nome3 = substr($mensagem, 5); //nesse caso ele irá retirar todo conteúdo antes da quinta posição contanto os espaços

echo $nome3;
echo "<br>";
*/

/*
$mensagem = "Olá meu nome é Allan";
$nome3 = substr($mensagem, -4); //nesse caso ele irá retirar todo conteúdo inicial deixando apenas os ultimos 4 caracteres da declarados

echo $nome3;
echo "<br>";
*/

/*
$mensagem = "Olá meu nome é Allan";
$nome3 = substr($mensagem,0, 2); //nesse caso ele irá retirar todo conteúdo inicial deixanod apenas os duas primeiras posições declaradas

echo $nome3;
echo "<br>";
*/

$mensagem = "Olá meu nome é Allan";
$nome3 = substr($mensagem, 15, 5); //nesse caso ele irá retirar todo conteúdo inicial começando pela 15 posição, mostrando apenas as últimas 5 posições.

echo $nome3;
echo "<br>";