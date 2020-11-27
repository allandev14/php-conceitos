<?php

// Functions Anonimas com Lampida

$filtro = ['nome1' => 'Julia','nome2' => 'Maria']; // Nesse caso os nomes de atribuição e variáveis precisão ser separadas 

$nomes = ['Julia','Maria','Afonso','Pedro']; // array

$resultado = array_filter($nomes, function($valor) use ($filtro) // Use nesse caso é utilizado para atribuir uma variável que não está na function anonima 
{
    return ($valor === $filtro['nome1']) || ($valor === $filtro['nome2']); // nesse caso o variável vem antes do filtro e depois temos o valor da variável
});

var_dump($resultado);

// Function anonima sem a variável $filter

/*
$nomes = ['Julia','Maria','Afonso','Pedro'];

$resultado = array_filter($nomes, function($valor)
{
    return ($valor === 'Julia') || ($valor === 'Afonso');
});

var_dump($resultado);
*/