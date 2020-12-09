<?php
    require_once "../model/connection.php";
        $email    = $_POST['email'];
        $password = md5($_POST['password']);
    //Darle la bienvenida al usuario recogiendo su nombre de la base de datos con una query.
    //Cerciorarse de si algún usuario ya está con ese email.
    $result = "Select * from users
    where email='$email' and password='$password'";
    $sentencia = $pdo->prepare($result);
    $sentencia->execute();
        if($sentencia->rowCount()!=0){ //Si existe el usuario entra el if.
            $query= "SELECT status from users where email='$email' and password='$password'";
            $sentencia= $pdo->prepare($query);
            $sentencia->execute();
            $status= $sentencia->fetch();
        if ($status[0]==1) { //Si el usuario no esta bloqueado se ejecuta.
            $query= "SELECT profile from users where email='$email' and password='$password'";
            $sentencia= $pdo->prepare($query);
            $sentencia->execute();
            $profile= $sentencia->fetch();
            session_start();
            $_SESSION["email"] = $email;
            switch ($profile[0]) { //Entran los 3 casos, el primero es para sin privilegios(1), el segundo para el moderador(2), y el tercero al admin(3).
                case '1':
                header("Location: ../view/home.php");
                break;
                case '2':
                header("Location: ../view/moderador.php");
                break;
                case '3':
                header("Location: ../view/administrador.php");
                break;
                }
                } else { //Entra en el else si el usuario está bloqueado.
                header("Location: ../view/login.php?alerta=1");
                }
                }else{
                header("Location: ../view/login.php");
                }
?>
