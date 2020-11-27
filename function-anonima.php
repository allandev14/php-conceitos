<?php

// Functions Anonimas com Lampida

$filtro = ['nome1' => 'Julia', 'nome2' => 'Maria'];

$nomes = ['Julia','Maria','Afonso','Pedro'];

$resultado = array_filter($nomes, function($valor) use ($filtro)
{
    return ($valor === $filtro['nome1']) || ($valor === $filtro['nome2']);
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