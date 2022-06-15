<?php

$result = "2";
echo "Resultado exemplo um: " . $result . "<br>";
var_dump($result);

echo "<br>";

$result_dois = $result + 1;
echo "Resultado exemplo dois: " . $result_dois . "<br>";
var_dump($result_dois);

echo "<br>";

$result_tres = $result_dois + 3.5;
echo "Resultado exemplo três: " . $result_tres . "<br>";
var_dump($result_tres);

echo "<br>";

$result_quatro = 11;
var_dump($result_quatro);

echo "<br>";

$result_cinco = (double) $result_quatro;
echo "Resultado exemplo cinco: " . $result_cinco . "<br>";
var_dump($result_cinco);

echo "<br>";

$result_seis = 8.9;
var_dump($result_seis);

echo "<br>";

$result_sete = (int) $result_seis;
echo "Resultado exemplo sete: $result_sete <br>";
var_dump($result_sete);