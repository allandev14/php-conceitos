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

echo substr("Olá, mundo",0,2); // Nesse caso ele deixou apenas as ultimas duas posicoes
echo "<br>";

echo substr("Agora ele está contando de trás para frente",-30,15); // Nesse caso ele está contando de trás para frente
echo "<br>";

// Continuação ....
// Estudo com Json

$idades = [
    'Amanda' => 13,
    'Juila' => 16  
];

$json = json_encode($idades); //função para decodificar ou consumir no caso de apis código
// var_dump($json);
echo "{$json} <br>";

// Exemplo 2

$sobrenomes = [
    'Carlos' => 'Carlos nasceu em 2002 <br>', 
    'Bernardo' => 'Bernardo é uma bênção'
];

$json1 = json_encode($sobrenomes, JSON_UNESCAPED_UNICODE); // função para acrescentrar acentuação dentro do codigo
echo "{$json1} <br>";
echo "<br>";

// Exemplo 3

$json3 = '{"Carlos":"Carlos nasceu em 2002","Bernardo":"Bernardo é uma bênção"}';
$objeto1 = json_decode($json3);
echo "{$objeto1->Bernardo} <br>"; 
// Exemplo 4

$contagem ='{"Juliana":"Juliana está no 8° ano", "Patrc":"Está cursando faculdade"}';
$status = json_decode($contagem, JSON_UNESCAPED_UNICODE, true); //função decodificar uma parte especifica do código, e nesse caso com a afirmação de true no final temos a formação de uma array
var_dump($status);
echo "<br>";
