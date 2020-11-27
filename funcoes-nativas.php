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
