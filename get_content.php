<?php

// Estudo de get_content

$texto = file_get_contents('ola.txt'); //para importação de documentos externos ao codigo
echo $texto;

// Exemplo de escrita de um documento

$escreva = file_put_contents('escreva.txt', 'Olá eu estou bem graças a Deus e você?');
echo "{$escreva} <br>";

