<?php
session_start();

echo "Você acertou ".$_SESSION['pontos']." perguntas!";

session_destroy();
?>

