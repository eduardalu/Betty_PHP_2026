<?php
echo "<h1>While</h1>";
$i=4;

while ($i>=0){
    echo " $i";
    $i--;
}

echo "<h1> Do While </h1>";

$i = 0;

do{
    echo " $i";
    $i++;
} while ($i < 5);


echo "<h1> For </h1>";

for ($i = 0; $i <= 5; $i++)
    echo "O valor de i é: $i <br>";

echo "<h1> Looping aninhado </h1>";
for ($i=4; $i<7; $i++){
    for($j=0; $j<3; $j++){
        echo "$i $j<br>";
    }
}

/* o Looping externo fica parado enquanto o 
looping interno repete várias vezes*/









    ?>