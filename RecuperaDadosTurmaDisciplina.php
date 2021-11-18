<?php
    include_once("casdastros.php");

    $dias = $_POST["dias"];
    $codD = $_POST["disciplinas"];
    $codT = $_POST["turmas"];

    cadastraTurmaD($dias, $codD, $codT);

?>