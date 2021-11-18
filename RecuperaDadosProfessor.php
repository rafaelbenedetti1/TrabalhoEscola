<?php
    include_once("casdastros.php");

    $cod = $_POST["cod"];
    $nome = $_POST["nome"];

    cadastraProfessor($cod, $nome);

?>