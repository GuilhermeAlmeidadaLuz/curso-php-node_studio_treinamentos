Data: 27/02/2025

<?php

/*************** Escalares ******************/


// string ------------------------------

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


// array -----------------------------------------------

$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true);
// $carros = ["Hilux", "Montana", "Corolla", 2008, 75100.90, true];

var_dump($carros);

if (is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";


// object -------------------------------------

class Cliente {
    public $name;
    public function atribuirNome($name) {
        $this->$name = $name;
    }
}

$cliente = new Cliente();   // cliente é um objeto
$cliente->atribuirNome('Godofredo');

var_dump($cliente);

if (is_object($cliente)):
    echo "É um objeto";
else:
    echo "Não é um objeto";
endif;
echo "<hr>";


/*************** Especiais ******************/

// NULL
$cidade = NULL; // não tem valor atribuído a ela
var_dump($cidade);

// Resource (para fazer referência a recursos externos: fazer conexão com banco de dados ou manipulação de arquivos)
