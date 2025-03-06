Data: 27/02/2025

<?php

/*************** Escalares ******************/


// string ----------------------------------

$nome = "Olá mundo";    // acento é contabilizado no length da string
var_dump($nome);  // função var_dump mostra informações sobre uma variável
echo gettype($nome), "<br>";    // gettype captura o tipo e echo imprime o tipo capturado

if (is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";    // tag para linha


// inteiro ----------------------------

$idade = 21;
var_dump($idade);

if (is_int($idade)):
    echo "É um inteiro";
else:
    echo "Não é um inteiro";
endif;
echo "<hr>";


// float ----------------------------
$altura = 1.77;
var_dump($altura);

if (is_float($altura)):
    echo "É um float";

else:
    echo "Não é um float";
endif;
echo "<hr>";


// boolean ---------------------------
$admin = false;
var_dump($admin);

if (is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif;
echo "<hr>";

/*************** Compostos ******************/

// array

$carros = ["Hilux", "Montana", "Corolla", 2008, 75100.90, true];
// $tipos = ("Água", "Óleo");
var_dump($carros);
// var_dump($tipos);
