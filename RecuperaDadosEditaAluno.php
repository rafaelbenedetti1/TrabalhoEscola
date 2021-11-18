<?php

	include_once("edicoes.php");
    	$nome = $_POST["nome"];
    	$matricula = $_POST["matricula"];
    	$cpf = $_POST["cpf"];
   	 	$telefone = $_POST["telefone"];

    	editaAluno($nome, $matricula, $cpf, $telefone); 

 ?>