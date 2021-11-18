<?php

    function conectaBD() {
        $servername = "localhost";
        $database = "escola";
        $username = "root";
        $password = "";

        $conn = mysqli_connect($servername, $username, $password, $database);
        if(!$conn){
            die("Conexão falhou! ".mysqli_connect_error());
        }else{
            echo "Sucesso!";
        }

        return ($conn);
    }

    function desconectaBD($conn){
        mysqli_close($conn);
    }

?>