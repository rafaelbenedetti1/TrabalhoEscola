<?php
    include_once("casdastros.php");

    $id = $_POST["cod"];
    $nome = $_POST["nome"];
    $sala = $_POST["sala"];
    $qtd = $_POST["quantidade"];

    cadastraTurma($id, $nome, $sala, $qtd);

?>