<?php

// Functions Anonimas

$nomes = ['Julia','Maria','Afonso','Pedro'];

$resultado = array_filter($nomes, function($valor)
{
    return ($valor === 'Julia') || ($valor === 'Afonso');
});

var_dump($resultado);
// print_r($resultado);