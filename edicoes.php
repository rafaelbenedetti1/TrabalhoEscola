<?php

	include_once("conexao.php");

	function editaAluno($nome, $matricula, $cpf, $telefone) {
        $conexao = conectaBD();
        $dados = "UPDATE aluno 
        		  SET nome = ('{$nome}'),cpf = ({$cpf}),telefone = ('{$telefone}')
       			  WHERE matricula = '{$matricula}'";
        mysqli_query($conexao,$dados) or die(mysqli_error());
        
        echo "Aluno Editado com sucesso!";

        desconectaBD($conexao);
    }

?>