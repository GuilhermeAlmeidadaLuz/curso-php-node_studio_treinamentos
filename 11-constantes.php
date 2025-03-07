06/03/2025
<hr>
</hr>

<?php
// Constantes (não alteram durante a execução e são globais - podem ser usadas em todo o script)

define("NOME", "José Carlos"); // função 'define'(parâmetro1: nome_da_constante, parâmetro2: valor)
// define("NOME", "Felipe Hug"); // erro, constante <NOME> já definida

// echo NOME;  // identificadores de constantes sempre em letras maiúsculas, por convenção
echo "<hr>";

define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);


var_dump(NOME);
echo "<hr>";
var_dump(IDADE);
echo "<hr>";
var_dump(ALTURA);
echo "<hr>";
var_dump(CASADO);
echo "<hr>";

define("TIMES", ['vasco', 'flamengo', 'santos']);

echo 'Meu nome é' . NOME . ' e minha idade é ' . IDADE . ' e minha altura é ' . ALTURA . '.';
echo "<hr>";

echo TIMES[1];
var_dump(TIMES);
echo "<hr>";

function exibeNome()
{
    echo NOME;
}

exibeNome();
?>