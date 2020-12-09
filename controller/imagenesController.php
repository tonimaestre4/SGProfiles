<?php
   require_once "../model/connection.php";
   //Iniciamos la sesión y hacemos una query para recoger los datos del usuario y así salga su email. 
   session_start();
           $email=$_SESSION['email'];
           $query="SELECT id FROM users WHERE email = '$email'";
           $sentencia2=$pdo->prepare($query);
           $sentencia2->execute(); 
           $result=$sentencia2->fetchAll(PDO::FETCH_ASSOC);
           foreach ($result as $id) {
               $iduser=implode($id);
           }
   // Hacemos una query para recoger las rutas de los posts que suben los usuarios. 
   $query = "SELECT path FROM posts where user=$iduser";
   $sentencia = $pdo->prepare($query);
   $sentencia->execute();
   $imagenes = $sentencia->fetchAll();
   ?>