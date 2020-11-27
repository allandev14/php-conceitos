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
echo "<br>";
