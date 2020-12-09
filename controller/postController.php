<?php
//Iniciamos la sesión del usuario y le añadimos el fichero de conexión.
    require_once "../model/connection.php";
    session_start();
    if (!isset($_SESSION['email'])) {
        header('Location:../view/login.php');
        }
        $email=$_SESSION['email'];
        $title = $_POST['title'];
        $path = 'public/'.$_FILES['img']['name'];
        //Entramos en el if con una query que seleccione el id de la tabla users con el email que se ha registrado previamente.
    if(move_uploaded_file($_FILES['img']['tmp_name'],'../'.$path)){
        $query="SELECT id FROM users WHERE email = '$email'";
        $sentencia2=$pdo->prepare($query);
        $sentencia2->execute(); 
        $result=$sentencia2->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $id) {
        $iduser=implode($id);
        }
        //Realizamos una query para insertar los datos de las publicaciones en la base de datos.
        $query="INSERT INTO posts (title, path, user) values(?,?,?)";
        $sentencia= $pdo->prepare($query);
        $sentencia->bindParam(1,$title);
        $sentencia->bindParam(2,$path);
        $sentencia->bindValue(3,$iduser);
        $sentencia->execute();
        header('Location: ../view/home.php');
        }
?>