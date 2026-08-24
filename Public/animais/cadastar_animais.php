<?php

include "../infra/conexao.php";

$nome = $_POST["nome"];
$especie = $_POST["especie"];
$raca = $_POST["raca"];
$idade= $_POST ["IDADE"];
$cliente_id= $_POST ["cliente_id"];

$stmt = $conexao->prepare(
    "INSERT INTO animais (nome, especie, raca, idade, cliente_id) VALUES (?,?,?,?,?)"
);
$stmt-> bind_param ("sssii", $nome, $especie, $raca, $idade, $cliente_id);
$stmt-> execute();
header("Location: ../../index.php");
?>