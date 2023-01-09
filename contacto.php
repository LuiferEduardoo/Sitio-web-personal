<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'contacto@luifereduardoo.com';
$titulo = 'Nuevo correo de la web';
 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
 
if ($_POST['submit'])
{
    if (mail ($para, $titulo, $msjCorreo)) {
        ?>
        <div class="message">
            <p>¡El mensaje se ha enviado con exito! Muy pronto respondere su mensaje.</p>
            <img class = "message_img" src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png" alt="cerrar" srcset="">
        </div>
        <?php
    } 
    else {
        ?>
        <div class="message_error">
            <p>Se ha producido un error a la hora de enviar el mensaje. Intente de nuevo, o comuniquese directamente a el siguiente correo: <br><a href="mailto:contacto@luifereduardoo.com">contacto@luifereduardoo.com</a></p>
            <img class = "message_error_img" src="https://cdn-icons-png.flaticon.com/512/1828/1828778.png" alt="cerrar" srcset="">
        </div>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactame</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/Contacto/contacto.css">
    <link rel="stylesheet" href="Css/Menu/menu.css">
    <link rel="stylesheet" href="Css/Footer/footer.css">
    <link rel="icon" type="image/png" href="https://i.ibb.co/pnb03Fv/Likepng.png"/>
  </head>
  <body>
    <nav class="menu">
      <div class="menu_MobileIcon">
        <img src="https://i.ibb.co/B2HNMRx/icons8-men-redondeado-32.png" alt="">
      </div>
        <a href="index" class="menu_logo">
          <img src="https://i.ibb.co/mJQxt3j/Logotipo-white.png"class="logo" alt="Logo" srcset="">
        </a>
      <ul class="menu_Desktop">
        <li>
          <a href="index">HOME</a>
        </li>
        <li>
          <a href="sobre-mi">SOBRE MÍ</a>
        </li>
        <li>
          <a href="portaforio">PORTAFORIO</a>
        </li>
        <li>
          <a href="blog.php">BLOG</a>
        </li>
        <li>
          <a href="contacto">CONTACTO</a>
        </li>
      </ul>
      <div class="menu_Mobile" >
        <ul>
          <li>
            <a href="index"><img src="https://img.icons8.com/wired/64/null/home-page.png" alt="" srcset="">HOME </a>
          </li>
          <li>
            <a href="sobre-mi"><img src="https://cdn-icons-png.flaticon.com/512/1443/1443781.png" alt="" srcset="">SOBRE MÍ</a>
          </li>
          <li>
            <a href="portaforio"><img src="https://cdn-icons-png.flaticon.com/512/943/943329.png" alt="" srcset="">PORTAFORIO</a>
          </li>
          <li>
            <a href="blog.php"><img src="https://cdn-icons-png.flaticon.com/512/4922/4922073.png" alt="">BLOG</a>
          </li>
          <li>
            <a href="contacto"><img src="https://cdn-icons-png.flaticon.com/512/2590/2590818.png" alt="" srcset="">CONTACTO</a>
          </li>
        </ul>
      </div>
    </nav>
      <section class="principal">
        <h1>CONTACTAME</h1>
        <form class="principal--formulario-contacto" method="post" action="#" onsubmit="return validarFormulario()">
            <label for="nombre">Nombre:</label>
            <input id="nombre" name="nombre" placeholder="Nombre completo" required>
            <label for="email">Email:</label>
            <input id="email" name="email" type="email" placeholder="ejemplo@email.com" required>
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" placeholder="Escriba su mensaje aquí" required></textarea>
            <input id="submit" name="submit" type="submit" value="Enviar">
        </form>
      </section>
      <footer>
        <div class="footer--conteiner">
          <section class="footer--conteiner__correo">
            <p>CORREO</p>
            <img src="https://i.ibb.co/8609h4Y/correo.png" alt="Correo">
            <a href="mailto:contacto@luifereduardoo.com">contacto@luifereduardoo.com</a>
          </section>
          <section class="footer--conteiner__enlaces">
            <p>ENLACES</p>
            <ul>
              <li>
                <a href="sobre-mi"> SOBRE MÍ</a>
              </li>
              <li>
                <a href="portaforio">PORTAFORIO</a>
              </li>
              <li>
                <a href="blog.php">BLOG</a>
              </li>
              <li>
                <a href="contacto">CONTACTO</a>
              </li>
            </ul>
          </section>
          <section class="footer--conteiner__redes-sociales">
            <p>REDES SOCIALES</p>
            <a href="https://www.twitter.com/luifereduardoo"><img src="https://i.ibb.co/kXbdQmC/twitter.png" alt="Twitter"></a>
            <a href="https://www.instagram.com/luifereduardoo"><img src="https://i.ibb.co/F812NGB/instagram.png" alt="Instagram"></a>
            <a href="https://www.facebook.com/luifereduardoo"><img src="https://i.ibb.co/fn6TjWL/facebook.png" alt="Facebook"></a>
            <a href="https://www.linkedin.com/in/luifereduardoo/"><img src="https://i.ibb.co/kxtgH68/linkedin.png" alt="Linkedin"></a>
            <a href="https://github.com/LuiferEduardoo"><img src="https://i.ibb.co/M9dYPNB/github.png" alt="Github"></a>
          </section>
        </div>
        <p class="footer--creditos">Luifer Eduardo Ortega © 2022</p>
      </footer>
    <script src="Scripts\Contacto/contacto.js"></script>
    <script src="Scripts/nav/nav.js"></script>
  </body>
  </html>