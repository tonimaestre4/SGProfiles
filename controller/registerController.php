<?php
    //Incluir el fichero de conexión.
    require_once "../model/connection.php";

    //Añadimos los valores que saldrán en nuestro registro.
        $name     = $_POST['name'];
        $surname = $_POST['surname'];
        $email    = $_POST['email'];
        $password = $_POST['password'];
        $confpswd = $_POST['confpswd'];

        //Comprobar que el email ya existe, si existe, salta error.
        $result = "Select * from users
        where email='$email'";
        $sentencia = $pdo->prepare($result);
        $sentencia->execute();
        if($sentencia->rowCount()!=0){ //Si el email ya está puesto lo redirige al registro.
            header("Location: ../view/register.php");
            }else{ //Si no hay nada repetido te creará un nuevo usuario.
                $query= "INSERT INTO users (name,surname,email,password,status,profile) VALUES (?,?,?,?,?,?)";
                $sentencia= $pdo->prepare($query);
                $sentencia->bindParam(1,$name);
                $sentencia->bindParam(2,$surname);
                $sentencia->bindParam(3,$email);
                $sentencia->bindParam(4,md5($password));
                $sentencia->bindValue(5,"1");
                $sentencia->bindValue(6,"1");
                $sentencia->execute();
                header("Location: ../view/login.php?alerta=2");
                }
 ?>