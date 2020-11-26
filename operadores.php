<?php
echo "Operadores Aritméticos";

/*
+$a	Identidade - Conversão de $a para int ou float conforme apropriado.
-$a	Negação - Oposto de $a.
$a + $b	Adição - Soma de $a e $b.
$a - $b	Subtração - Diferença entre $a e $b.
$a * $b	Multiplicação - Produto de $a e $b.
$a / $b	Divisão - Quociente de $a e $b.
$a % $b	Módulo - Resto de $a dividido por $b.
$a ** $b Exponencial - 	Resultado de $a elevado a $b. Introduzido no PHP 5.6.
!$a	NÃO	Verdadeiro se $a não é verdadeiro.
a == b Igualdade - Quando se deseja ter igualdade entre os objetos
a === b Identico -  Quando se deseja objetos identicos
!!a Certeza - Atribuição de certeza dentro de um trecho de codigo
$a and $b - E - Verdadeiro (TRUE) se tanto $a quanto $b são verdadeiros
$a or $b - OU - || - Verdadeiro se $a ou $b são verdadeiros.
$a xor $b - XOR - Verdadeiro se $a ou $b são verdadeiros, mas não ambos.
$a && $b	E	Verdadeiro se tanto $a quanto $b são verdadeiros.
$a || $b	OU	Verdadeiro se $a ou $b são verdadeiros.

*/

// Exemplo 1
$idadeallan = 26;
$idadeizabella = 25;

var_dump ($idadeallan == $idadeizabella);
echo "<br> <hr>";

$formado = true;
$temcertificado = true;

if($formado == !true){
    echo "Parabéns!";
} elseif($temcertificado == !true) {
    echo "Tenho certificado sim";
} else{
    echo "Que pena mais continue estudando";
}
/*Nesse caso não temos um endif para finalizar o looping, e aprece um novo 
elseif onde há uma mensagem de negação caso não haja uma devolutiva verdadeira*/
echo "<br> <hr>";

echo "Ternários <br>";
$cachorro = "Vira-lata";
$gato = "Perça";

$animais = ($gato != 'Vira-lata') ? 'Perça' : 'cachorro';

echo "{$animais} <br> <br>";

/*Obs. olhar depois mais a respeito de ternários PHP */

$_POST = array(
    'nome'=> 'Allan Sousa',
    'sobrenome'=> null
);

$nome = '';
$sobrenome = '';
/*
if($_POST['nome'] <> null ) {
    $nome = $_POST['nome'];
}else {
    $nome = 'não preenchido';
}
if($_POST['sobrenome'] <> null) {
    $sobrenome = $_POST['sobrenome'];
}else {
    $sobrenome = 'não preenchido';
}

echo "{$nome} <br>";
echo "{$sobrenome}";
*/

$nome = $_POST['nome'] ?? 'não preenchido';
$sobrenome = $_POST['sobrenome'] ?? 'não preenchido';

echo "{$nome} <br>";
echo "{$sobrenome} <br>";
