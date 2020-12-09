<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Proyecto Toni Maestre  | LOGIN</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="../css/style.css">
      <script type="text/javascript" src="../js/code.js"></script>
   </head>
   <body>
      <div class="page">
         <div class="container">
            <div class="left">
               <div class="login">REGISTRO</div>
               <div class="eula">¡Bienvenido! Será un placer darte de alta en SGProfiles de Toni Maestre Bayo. Esperemos que disfrutes. </div>
            </div>
            <div class="right">
               <div class="form form-register">
                  <form action="../controller/registerController.php" method="POST" onsubmit="return registrarForm()">
                     <label for="name">Nombre</label>
                     <input type="name" id="name" name="name">
                     <label for="surname">Apellido</label>
                     <input type="name" id="surname" name="surname">
                     <label for="email">Correo</label>
                     <input type="email" id="email" name="email">
                     <label for="password">Contraseña</label>
                     <input type="password" id="password" name="password">
                     <label for="password">Confirmar Contraseña</label>
                     <input type="password" id="confpswd" name="confpswd">
                     <input type="submit" name="submit" value="Registrate">
                  </form>
                  <div class="input-group">
                     <p>¿Ya tienes cuenta? <a href="login.php">Entra</a></p>
                     <br>
                     <div id="msg"></div>
                     <div id="msg2"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>