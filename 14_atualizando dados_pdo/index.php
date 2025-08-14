<?php

$host = "localhost";
$db = "cursophp";
$user = "root";
$pass= "";

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

// ASSUNTO DA AULA

$id = 11;

$nome = "Suporte monitor";
$descricao = "O suporte está novo e na caixa ainda.";

$stmt = $conn->prepare("UPDATE itens SET nome = :nome, descricao = :descricao WHERE id = :id");

$stmt->bindParam(":id", $id);
$stmt->bindParam(":nome", $nome);
$stmt->bindParam(":descricao", $descricao);

$stmt->execute();