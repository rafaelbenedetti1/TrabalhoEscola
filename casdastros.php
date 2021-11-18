<?php
    include_once("conexao.php");

    function cadastraAluno($nome, $matricula, $cpf, $telefone) {
        $conexao = conectaBD();
        $dados = "INSERT INTO aluno(nome, matricula, cpf, telefone) VALUES ('{$nome}', {$matricula}, {$cpf}, {$telefone})";
        mysqli_query($conexao,$dados) or die(mysqli_error());

        echo "Aluno Cadastrado com Sucesso!";

        desconectaBD($conexao);
    }

    function cadastraDisciplina($cod, $carga, $nome) {
        $conexao = conectaBD();
        $dados = "INSERT INTO disciplina(codDisciplina, cargaHoraria, nome) VALUES ({$cod}, '{$carga}', '{$nome}')";
        mysqli_query($conexao,$dados) or die(mysqli_error());
        
        echo "Disciplina Cadastrada com Sucesso";

        desconectaBD($conexao);
    }

    function cadastraProfessor($cod, $nome) {
        $conexao = conectaBD();
        $dados = "INSERT INTO professor(codProfessor, nome) VALUES ({$cod},'{$nome}')";
        mysqli_query($conexao,$dados) or die(mysqli_error());
        
        echo "Professor Cadastrado com Sucesso";

        desconectaBD($conexao);
    }

    function cadastraProfessorD($id, $codP, $codD) {
        $conexao = conectaBD();
        $dados = "INSERT INTO professor_disciplina(IdProfessor, codProfessor, codDisciplina) VALUES ({$id},{$codP},{$codD})";
        mysqli_query($conexao,$dados) or die(mysqli_error());
        
        echo "Disciplina do Professor Cadastrada com Sucesso";

        desconectaBD($conexao);
    }

    function cadastraTurma($id, $nome, $sala, $qtd) {
        $conexao = conectaBD();
        $dados = "INSERT INTO turma(codTurma, nome, sala, qtdAlunos) VALUES ({$id},'{$nome}',{$sala},{$qtd})";
        mysqli_query($conexao,$dados) or die(mysqli_error());
        
        echo "Turma Cadastrada com Sucesso";

        desconectaBD($conexao);
    }

    function cadastraTurmaD($dias, $codD, $codT) {
        $conexao = conectaBD();
        $dados = "INSERT INTO turma_disciplina(dia, codDisciplina, codTurma) VALUES ('{$dias}',{$codD},{$codT})";
        mysqli_query($conexao,$dados) or die(mysqli_error());
        
        echo "Disciplina da Turma Cadastrada com Sucesso";

        desconectaBD($conexao);
    }






?>