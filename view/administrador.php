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
    <script src="https://kit.fontawesome.com/f327655cc8.js" crossorigin="anonymous"></script>
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
                <h2>Gestión de users</h2>
            </div>
            <div class="modal-body">
                <?php
                    $query="SELECT * FROM users WHERE profile= 1";
                    $result = $pdo->prepare($query);
                    $result->setFetchMode(PDO::FETCH_ASSOC);
                    $result->execute();
                        echo '<div class="usuariosmodal">';
                            echo '<table>';
                            echo '<tr>';
                            echo '<th>Nombre</th>';
                            echo '<th>Apellido</th>';
                            echo '<th>Correo</th>';
                            echo '<th>Tipo de perfil</th>';
                            echo '<th>Opciones</th>';
                            echo '</tr>';
                    if ($result) {
                        while ($fila=$result->fetch()) {
                            echo '<tr>';
                            echo '<td >'.$fila['name'].'</td>';
                            echo '<td >'.$fila['surname'].'</td>';
                            echo '<td>'.$fila['email'].'</td>';
                            echo '<td >'.$fila['profile'].'</td>';
                            echo '<td onclick="blocked()"><i class="fas fa-lock" id="candado"></i></td>';
                            echo '</tr>';
                        }
                    }
                    echo '</table>';
                    echo '</div>';
                ?>
            </div>
        </div>
    </div>
    <!--Galería-->
    <div class="row padding-20"></div>
    <div class="row padding-lat">
            <?php foreach ($imagenes as $img) { ?>
            <div class='three-column'>
                <img src="../<?php echo $img[0]?>" alt=''>
            </div>
            <?php } ?>
    </div>
    <div class="row" id="section-2">
        <div class="one-column">
            <h1>Bienvenido admin, haz lo que quieras con los usuarios.</h1>
        </div>
    </div>
</body>
</html>