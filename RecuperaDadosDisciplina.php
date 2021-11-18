<?php
    include_once("casdastros.php");

    $cod = $_POST["cod"];
    $carga = $_POST["carga"];
    $nome = $_POST["nome"];

    cadastraDisciplina($cod, $carga, $nome);

?>