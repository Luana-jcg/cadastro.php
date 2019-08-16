<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $estadocivil = $_POST["estadocivil"];
    $sexo = $_POST["sexo"];

    $con = mysqli_connect("localhost", "root", "", "well"); //1 - onde o banco está, 2 - usuário, 3 - senha, 4 - nome do banco 
        
    $sql = "INSERT INTO cliente VALUES(null, '{$nome}', '{$email}', '{$estadocivil}', '{$sexo}')";

    if(mysqli_query($con, $sql)){
        echo "Gravado com sucesso";
    } else {
        echo "Erro ao gravar";
    }

?>