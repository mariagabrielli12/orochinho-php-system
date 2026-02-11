<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "quiz_orochinho";

$conn = new mysqli($host, $user, $pass, $banco);

if ($conn->connect_error) {
    die("Erro na conexão");
}
?>
