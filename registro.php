
  <?php
  $conexion = mysqli_connect("localhost", "root", "", "admision") or die("Problemas con la conexión");
  mysqli_query($conexion, "insert into datos(nombres,apellidos,dni,direccion,celular,correo,carrera,monto_prospecto,monto_admision,creado) values ('$_REQUEST[nom]','$_REQUEST[apel]','$_REQUEST[dni]','$_REQUEST[dire]','$_REQUEST[celu]','$_REQUEST[core]','$_REQUEST[car]','$_REQUEST[montop]','$_REQUEST[montoa]', now())") or die("Problemas en el select".mysqli_error($conexion));
  mysqli_close($conexion);
  echo "Tu inscripcion fue exitoso";
  ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Roy Gutierrez</title>
    <link rel="stylesheet" href="css/header.css" type="text/css" />
    <link rel="stylesheet" href="css/body.css" type="text/css" />
    <link rel="stylesheet" href="css/footer.css" type="text/css" />
    <link rel="stylesheet" href="css/sobremi.css" type="text/css" />
    <link rel="shortcut icon" href="img/icono.ico" />
  </head>
  <body>
    <div id="header">
      <div id="logo">
        <h3>
          <a href="index.html"><span>Roy</span> Gutierrez</a>
        </h3>
      </div>
      <nav>
        <a href="index.html">Inicio</a>
        <a href="sobremi.html">Sobre mi</a>
        <a href="proyectos.html">Proyectos</a>
        <a href="tienda/index.html">Tienda</a>
        <a href="ingresar.html">Ingresar</a>
      </nav>
    </div>
    <div id="container">
      <div id="content-container">
        <h1>Registro Exitoso</h1>
        <p>
          Se ha registrado correctamente
        </p>
        <button>Leer más</button>
      </div>
    </div>
    
    <div id="footer-container">
      <footer>
        <div class="correo">
          <p>Autor: Roy Gutierrez Urbano</p>
          <p>
            <a href="mailto:royggutierrez@gmail.com">royggutierrez@gmail.com</a>
          </p>
        </div>
        <div class="redes">
          <a
            href="https://www.facebook.com/royggutierrez/"
            class="facebook"
            target="
          "
          >
            <img src="img/rs/facebook.svg" alt="Facebook" width="35px" />
          </a>
          <a
            href="https://twitter.com/royggutierrez"
            class="twitter"
            target="_blank"
          >
            <img src="img/rs/twitter.svg" alt="Twitter" width="35px" />
          </a>
          <a
            href="https://github.com/royggutierrez"
            class="github"
            target="_blank"
          >
            <img src="img/rs/github.svg" alt="GitHub" width="35px" />
          </a>
          <a
            href="https://www.instagram.com/royggutierrez/"
            class="instagram"
            target="_blank"
          >
            <img src="img/rs/instagram.svg" alt="Instagram" width="35px" />
          </a>
        </div>
      </footer>
    </div>
  </body>
</html>
