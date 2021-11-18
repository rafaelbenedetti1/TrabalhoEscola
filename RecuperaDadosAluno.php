<?php
    include_once("casdastros.php");

    $nome = $_POST["nome"];
    $matricula = $_POST["matricula"];
    $cpf = $_POST["cpf"];
    $telefone = $_POST["telefone"];

    cadastraAluno($nome, $matricula, $cpf, $telefone);

?>