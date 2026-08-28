<?php

include "../infra/conexao.php";

$id = $_POST["id"];
$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade = $_POST["idade"];
$cliente_id = $_POST["cliente_id"];

$stmt = $conexao->prepare(
    "UPDATE animais
     SET nome = ?, especie = ?, raca = ?, idade = ?, cliente_id = ?
     WHERE id = ?"
);

$stmt->bind_param(
    "ssiiii",
    $nome,
    $especie,
    $raca,
    $idade,
    $cliente_id,
    $id
);

$stmt->execute();
header("Location: ../index.php");