06/03/2025
<hr></hr>

<?php
$nome = 'Josué Oliveira';
echo 'Meu nome é '.$nome.' e minha idade é \'23\''; // aspas simples são literais (as variáveis não são interpretadas dentro das aspas), tudo entre aspas simples é considerado como texto
echo '<hr>';
echo "Meu nome é \"$nome\" e minha idade é \"23\"";    // aspas duplas são interpretativas com relação a variáveis e não requer concatenação como em aspas simples
