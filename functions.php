<?php
function generaPsw()
{
    $password = "";

    $lettere = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'z',];

    $lettereUpperCase = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'Z',];

    $numeri = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '0',];

    $simboli = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '+', '=', '{', '}', '[', ']', '|', ';', ':', '\'', '\"', '<', '>', ',', '.', '/', '?'];

    for ($i = 0; $i < $_GET["lunghezzaPsw"]; $i++) {
        $numero = rand(0, 3);
        if ($numero === 0) {
            $arrayScelto = $lettere;
        } elseif ($numero === 1) {
            $arrayScelto = $lettereUpperCase;
        } elseif ($numero === 2) {
            $arrayScelto = $numeri;
        } else {
            $arrayScelto = $simboli;
        }
        $password = $password . $arrayScelto[array_rand($arrayScelto)];
    }
    return $password;
}
$password = generaPsw();
