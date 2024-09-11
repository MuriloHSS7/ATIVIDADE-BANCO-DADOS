<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "MEUBDNEW";

    //Criar PDO dbname
    try{
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        //Config PDO modo erro
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE MINHATABELA (id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        lastname VARCHAR(50) NOT NULL, cpf VARCHAR(11), firstname VARCHAR(50),
        endereco VARCHAR(80), cidade VARCHAR(80))";
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