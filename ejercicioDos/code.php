<?php
# Almaceno los  datos recibidos
$money = $_GET["money"];
$method = $_GET["metodo"];

# Creo on arreglo nombrado conversionRate con la información a usar
$conversionRate = [
	"COP->MXN" => [0.0055, "COP", "MXN"],
	"USD->EUR" => [0.82, "USD", "EUR"],
	"MXN->USD" => [0.051, "MXN", "USD"],
	"BIT->COP" => [124547977.20, "BIT", "COP"]
];

# Estas variables almacenan la divisa actual a la que se va a convertir
$from = $conversionRate[$method][1];
$to = $conversionRate[$method][2];

# El resultado es la moneda actual por el rango de conversion
# En este caso obtiene el rango dependiendo del metodo que se este usando
$result = $money * $conversionRate[$method][0];

# Por ultimo muestra el resultado como un h1
echo("<h1 class=\"resultado\">$money $from = $result $to</h1>");
