<?php

// Functions PHP

function imprimir() { // Obs aqui as functions precisam ter () após a variável
    echo "Olá, mundo!";
}

imprimir(); // forma de chamar as functions
echo "<br>";

// Exemplo 2
function escreva() {
    echo "Aprendendo sobre funções";
}

escreva();
echo "<br>";


// dump and die
/*function dd1($variavel) {
    echo "<pre>";
    var_dump($variavel);
    echo "</pre>";
    die();
}

$nomes =['allan','aline','bianca','sara'];

dd1($nomes);
echo "<br>";
*/
// Exemplo 2 com dump and die

/*function dd($personagens) {
    echo "<pre>";
    print_r($personagens);
    echo "</pre>";
    die();

}

$animes = ['naruto','sasuke','itachi'];


dd($animes);
echo "<br>";
*/
// Obs por enquanto a dump and die, só reflete um looping por vez

$resultado = mostrarIdade(26);

echo $resultado;

function mostrarIdade(int $idade) : int
{
    //echo "Sua idade atual é {$idade}"; Comando para realizar a impressão na tela
    // return "Sua idade é {$idade}";
    return $idade;
}
