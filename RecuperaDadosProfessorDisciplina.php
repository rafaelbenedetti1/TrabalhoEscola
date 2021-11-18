<?php
    include_once("casdastros.php");

    $id = $_POST["cod"];
    $codP = $_POST["professores"];
    $codD = $_POST["disciplinas"];

    cadastraProfessorD($id, $codP, $codD);

?>