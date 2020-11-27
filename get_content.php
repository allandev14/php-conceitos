<?php

// Estudo de get_content

$texto = file_get_contents('ola.txt'); //para importação de documentos externos ao codigo
echo $texto;

// Exemplo de escrita de um documento

$escreva = file_put_contents('escreva.txt', 'Olá eu estou bem graças a Deus e você?');
echo "{$escreva} <br>"; // A funcao file_put_contents cria e escreve um arquivo no meu caso eu não foi impresso pois o vs-code não tem permissão de gravar na pasta opt 

// Comando rand 

echo (rand(). "<br>"); //gera números aleatórios 
echo (rand(). "<br>");
echo (rand(0,25). "<br>"); //gera números aleatóros de nesse de caso de 0 até 25 uma vez que eles foram inseridos anteriormente

$nomesfemininos = ['Amanda','Beatriz','Odete'];
echo count($nomesfemininos);
echo "<br> <hr>";

// ceil
//a função ciel gera o arredondamento sempre para cima

echo (ceil(0.45) ."<br>"); //arrendondamento para 1 
echo (ceil(1.23) ."<br>"); //arredondamento para 2
echo (ceil(5.33). "<br> <hr>"); //arredondamento para 6

// round
// Função round gera o arredondamento 
echo (round(3.23). "<br>"); //arrendondamento para 3
echo (round(5.77). "<br>"); //arredondamento para 6
echo (round(10.99). "<br>"); // arradondamento para 11

// strlen
// Conta quantos caracteres exitem dentro do valor da variável
$primeironome = "Allan";
echo strlen($primeironome)."<br>";

$apelido = "Joao Carlos";
$novonome =str_replace('Joao','Junvenil',$apelido); // Exite a necesidade de serem dois argumentos antes variável

echo $apelido ."<br>";
echo $novonome . "<br>";



