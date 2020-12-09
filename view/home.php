<?php
    require_once "../controller/imagenesController.php";
    require_once "../model/connection.php";
    //session_start();
    if (!isset($_SESSION['email'])) {
        header('Location:../view/login.php');
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Social Gallery</title>
    <link rel="stylesheet" href="../css/style.css">
    <script src="../js/code.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
    <!--Menú de navegación-->
    <ul>
    <!-- Darle la bienvenida al usuario recogiendo su nombre de la base de datos -->
        <li><a class="active" href="#home"><?php echo $_SESSION['email']; ?></a></li>
        <li><a onclick="openModal()">+</a></li>
        <!-- Cerrar sesión -->
        <li><a href="../controller/logoutController.php">logout</a></li>
    </ul>
    <!-- The Modal -->
    <div id="myModal" class="modal">
        <!-- Modal content -->
        <div class="modal-content">
            <div class="modal-header">
                <span class="close" onclick="closeModal()">&times;</span>
                <h2>Crear posts</h2>
            </div>
            <div class="modal-body">
                <form action="../controller/postController.php" method="POST" enctype="multipart/form-data">
                    <input type="text" id="title" name="title" placeholder="título de la foto...">
                    <input type="file" id="img" name="img" accept="file_extension|image/.gif, .jpg, .jpeg, .png">
                    <input type="submit" value="Añadir">
                </form>
            </div>
        </div>
    </div>
    <!--Galería-->
    <div class="row padding-20"></div>
    <div class="row padding-lat">
            <?php foreach ($imagenes as $img) { ?>
            <div class='three-column'>
                <img src="../<?php echo $img[0]?>" alt='' width="200" height="247">
            </div>
            <?php } ?>
    </div>
    <div class="row" id="section-2">
        <div class="one-column">
            <h1>Bienvenido a la mejor página de DAW2</h1>
        </div>
    </div>
    
</body>
</html>