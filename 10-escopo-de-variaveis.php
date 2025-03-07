06/03/2025
<hr>

<?php
// escopo é o contexto onde a variável foi definida

// ESCOPO GLOBAL
$nome = "Rodrigo Oliveira";
$a = 1;
$b = 3;
$c = 7;

function exibeNome()
{
    // ESCOPO LOCAL
    global $nome;
    echo $nome;
}

exibeNome();
echo "<hr>";
///////////////////////////

function exibeCidade()
{
    // ESCOPO LOCAL
    global $cidade;
    $cidade = "Rio de Janeiro";
}

exibeCidade();
echo $cidade;
echo "<hr>";
/////////////////////////////

function soma()
{
    // ESCOPO LOCAL
    // echo $a + $b + $c; // erro
    /* definir as variáveis como globais utilizando o array especial GLOBALS 
    definido pelo próprio php, GLOBALS é um array associativo onde o nome da variável global é a chave do array */
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();