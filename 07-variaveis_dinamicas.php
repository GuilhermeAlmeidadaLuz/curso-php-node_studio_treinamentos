<?php
// Variáveis Dinâmicas (Variáveis Variáveis)
$bebida = "refrigerante";

$$bebida = "Guaraná";   // A string atribuída anteriormente na variável $bebida = "refrigerante" vai
                        // ser o nome da variável $$bebida, logo, $refrigerante = "Guaraná"

echo $refrigerante, "<br>";

///////////////////////////////////

$destino = "cidade";

$$destino = "Ilhéus"; // o nome dessa variável vem dinamicamente, depende da string na variável $destino

echo "$-destino = $destino <br>
        $-$-destino = $-cidade = $cidade";
