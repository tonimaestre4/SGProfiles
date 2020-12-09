<?php
//Inicia sesión y la mantiene encendida para después destruirla y que te mande de vuelta al login para volver a iniciar sesión.
    session_start();
    session_destroy();
    header("location: ../view/login.php");
?>