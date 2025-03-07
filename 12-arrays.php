06/03/2025
<hr></hr>

<?php 
// Arrays

// $carro1 = "BMW";
// $carro2 = "Veloster";
// $carro3 = "Hilux";

// ideal é criar um array para isso:
$carros = array("BMW", "Veloster", "Hilux");

// echo $carros;   // erro
print_r($carros);   // função específica para exibir na tela o array
echo "<hr>";
// índices automáticos:
echo $carros[0], "<hr>"; // com especificação de índice a exibição funciona
echo $carros[1], "<hr>";
echo $carros[2], "<hr>";

// índices criados:
echo "<br>Segundo array de carros: <br></br>";
$carros2 = array(1=> "Mustang", 2=> "Ferrari", 3=>"Corolla");
print_r($carros2);
echo "<hr>";

echo $carros2[1], "<hr>";
echo $carros2[2], "<hr>";
echo $carros2[3], "<hr>";

// inserção no array:
?>