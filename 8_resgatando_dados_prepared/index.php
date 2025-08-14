<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "cursophp";

$conn = new mysqli($host, $user, $pass, $db);

// ASSUNTO DA AULA 
$id = 4;

$stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

$stmt->bind_param("i", $id); // s = string, i = integer, d = double

$stmt->execute();

$result = $stmt->get_result();

$data = $result->fetch_all();

print_r($data);