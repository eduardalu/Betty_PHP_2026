<?php

$a = 30;
$a = 10;
$a = 5;
echo "<br> $a";

$arr = [30, 10, 5];
$arr[0] += 5;
echo "<br> arr = ".$arr[0];
echo "<br> arr = ".$arr[1];
echo "<br> arr = ".$arr[2];
echo "<hr>";

$uf = ["SP", "RJ", "MG", "ES"];
echo "<br> Estado = ".$uf[2];
echo "<pre>"; print_r($uf); echo "</pre>";

$estudante = [
    "id" => 1,
    "ra" => 123456,
    "nome" => "Bete",
    "curso" => "TADS"
];

echo "<br> id: ".$estudante["id"];
echo "<br> ra: ".$estudante["ra"];
echo "<br> nome: ".$estudante["nome"];
echo "<br> curso: ".$estudante["curso"];
echo "<pre>"; print_r($estudante); echo "</pre>";

echo "<hr>";
$multi = [
    [10, "aviao", 30],
    [40, 50, "ilha"],
    ["agua", 80, "barco"]
];

echo "<br>".$multi[2][0], "<br>".$multi[0][1], "<br>".$multi[1][2], "<br>".$multi[2][2];

echo "<hr>";

$bd=[
    ["id" => 1, "nome" => "Scylla", "curso" => "TADS"],
    ["id" => 2, "nome" => "Penelope", "curso" => "TBD"],
    ["id" => 3, "nome" => "Hermes", "curso" => "TJD"]
];

echo "<br>".$bd[2]["nome"];
echo "<br>".$bd[0]["curso"];
echo "<br>".$bd[1]["id"];

?>