<?php

$money = $_GET["money"];
$method = $_GET["metodo"];

$conversionRate = [
	"COP->MXN" => [0.0055, "COP", "MXN"],
	"USD->EUR" => [0.82, "USD", "EUR"],
	"MXN->USD" => [0.051, "MXN", "USD"],
	"BIT->COP" => [124547977.20, "BIT", "COP"]
];

$from = $conversionRate[$method][1];
$to = $conversionRate[$method][2];
$result = $money * $conversionRate[$method][0];

echo("<h1 class=\"resultado\">$money $from = $result $to</h1>");
