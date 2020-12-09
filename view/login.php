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
            <div class="login">ACCESO</div>
            <?php         
            $alerta = "";         
            if(isset($_GET['alerta'])){             
              if ($_GET['alerta']==1) {                 
                $alerta = "El usuiario está bloqueado";             
                }elseif ($_GET['alerta']==2) {                 
                  $alerta = "El usuiario se ha registrado con éxito";             
                }         
              }     
            ?>
            <div class="eula">Iniciando sesión, se da por hecho que el usuario acepta las Condiciones del servicio y la Política de privacidad de Google. </div>
          </div>
          <div class="right">

            <div class="form form-login">
            <form action="../controller/loginController.php" method="post" onsubmit="return validarForm()">
        <div class="input-group">
            <label>Correo electrónico</label>
            <input type="text" id="email" name="email">
        </div>
        <div class="input-group">
            <label>Contraseña</label>
            <input type="password" id="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login" value="Login">Acceder</button>
        </div>
        <div class="input-group">
            <p>Aún no tienes cuenta? <a href="register.php">Regístrate</a></p><br>
            <div class="msg" id="msg">
                <?php echo $alerta; ?>
            </div>
            <div id="msg"></div>
        </div>
    </form>
          </div>
        </div>
      </div>
  </body>
</html>