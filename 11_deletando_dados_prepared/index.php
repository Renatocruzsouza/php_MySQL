<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA

$nome = "caneta";

$stmt = $conn->prepare("DELETE FROM itens WHERE nome = ?");

$stmt->bind_param("s", $nome);

$stmt->execute();

$stmt->close();


