<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';

    //Criar PDO dbname
    try{
    $pdo = new PDO("mysql:host=$host", $username, $password);
    //Config PDO modo erro
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE MEUBDNEW";
    $pdo->exec($sql);
    echo "Criado com sucesso meu BD<br>";

    
    echo 'conectado com sucesso!';
    } catch (PDOException $e){
        echo $sql . "<br>" . $e->getMessage();
    }
    //Fechar porta de acesso
    //mysql $conn0<close();
    $pdo = null;
?>