<?php
    // CONEXIÓN A LA BASE DE DATOS MEDIANTE PDO
    include 'config.php';
    try {
        $dsn = "mysql:host=".SERVIDOR.";dbname=".BD;
        $pdo = new PDO($dsn, USUARIO, PASSWORD);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    }
?>