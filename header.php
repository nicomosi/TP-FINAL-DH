<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="¡ACÁ escribir máximo 160 caracteres!">
    <meta name="author" content="Nicolas Mosi">
    <!-- Aca abajo estan los links para font-awesom, bootstrap , el archivo css y google fonts-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <title>HOME</title>
  </head>
  <body>
      <header>
        <section class="contenedor-header-prim"><!-- El header va a estar divido en 2, uno arriba del otro, en version mobile solo se muestra el header principal, en version desktop va a mostrar ambos-->
          <article class="contenedor-logo">
            <h4>LOGO</h4>
          </article>
          <article class="contenedor-menu-btn"><!--Este es el contenedor de los botones del carrito y del menu desplegable -->
            <div class="dropdown contenedor-hamburguesa">
              <button class="btn btn-secondary btn-hamburguesa" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bars"></i></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="index.php"><button class="dropdown-item" type="button">Home</button></a>
                <a href="faq.php"><button class="dropdown-item" type="button">Ayuda</button></a>
                <div class="dropdown-divider"></div>
                <a href="registro.php"><button class="dropdown-item" type="button">Registrarme</button></a>
                <a href="login.php"><button class="dropdown-item" type="button">Ingresar</button></a>
              </div>
            </div>
            <div class="carrito">
              <a href="index.php"><i class="fas fa-shopping-cart"></a></i>
            </div>
          </article>
        </section>
        <section class="contenedor-header-sec"><!-- Éste es el header secundario que se va a mostrar en la versión desktop y va a contener la navegación. En la versión mobile está en "display:none"-->
          <nav class="nav-principal">
            <ul>
              <li><a href="index.php">Home</a></li>
              <li><a href="faq.php">Ayuda</a></li>
            </ul>
          </nav>
          <nav class="nav-secundario">
            <ul>
              <li><a href="registro.php">Registrarme</a></li>
              <li><a href="login.php">Ingresar</a></li>
            </ul>
          </nav>
        </section>
      </header>