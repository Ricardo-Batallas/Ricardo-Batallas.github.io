<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PULSO LOGICO</title>
    <link
      rel="shortcut icon"
      href="./images/LOGO_PULSO_LOGICO.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="./css/normalize.css" />
    <link rel="stylesheet" href="./css/estilos.css" />
    <link rel="stylesheet" href="./css/estilos_menu.css" />
    <link rel="stylesheet" href="./css/estilos_about.css" />
    <link rel="stylesheet" href="./css/estilos_product.css" />

    <meta name="theme-color" content="#2091F9" />
    <meta name="title" content="PULSO LÓGICO" />
  </head>
  <body>

      <!-- MENU -->  
      <nav class="menu">
        <section class="menu__container">
          <img
            class="img__logo"
            src="./images/LOGO_PULSO_LOGICO.png"
            alt="PULSO LÓGICO"
          />
          <h1 class="menu__logo">PULSO LÓGICO</h1>

          <ul class="menu__links">
            <li class="menu__item">
              <a href="index.php" class="menu__link">INICIO</a>
            </li>

            <li class="menu__item menu__item--show">
              <a href="#" class="menu__link"
                >EMPRESA <img src="images/arrow.svg" class="menu__arrow"
              /></a>

              <ul class="menu__nesting">
                <li class="menu__inside">
                  <a href="about.php" class="menu__link menu__link--inside">QUIENES SOMOS</a>
                </li>
                <li class="menu__inside">
                  <a href="client.php" class="menu__link menu__link--inside">NUESTROS CLIENTES </a>
                </li>
              </ul>
            </li>

            <li class="menu__item menu__item--show">
              <a href="product.php" class="menu__link"
                >PRODUCTOS <img src="images/arrow.svg" class="menu__arrow"
              /></a>

              <ul class="menu__nesting">
                <li class="menu__inside">
                  <a href="product.php" class="menu__link menu__link--inside">SISTEMA CONTABLE</a>
                </li>
                <li class="menu__inside">
                  <a href="#" class="menu__link menu__link--inside">SISTEMA DE INVENTARIOS</a>
                </li>
                <li class="menu__inside">
                  <a href="#" class="menu__link menu__link--inside">SISTEMA ERP PULSO LOGICO</a>
                </li>
              </ul>
            </li>

            <li class="menu__item menu__item--show">
              <a href="#" class="menu__link"
                >SERVICIOS <img src="images/arrow.svg" class="menu__arrow"
              /></a>

              <ul class="menu__nesting">
                <li class="menu__inside">
                  <a href="#" class="menu__link menu__link--inside">SERVIDORES VIRTUALES</a>
                </li>
                <li class="menu__inside">
                  <a href="#" class="menu__link menu__link--inside">DOMINIOS Y HOSTING</a>
                </li>
                <li class="menu__inside">
                  <a href="#" class="menu__link menu__link--inside">PAGINAS WEB</a>
                </li>
                <li class="menu__inside">
                    <a href="#" class="menu__link menu__link--inside">ANTIVIRUS</a>
                  </li>
              </ul>
            </li>

            <li class="menu__item">
              <a href="contact.php" class="menu__link">CONTACTOS</a>
            </li>

            <li class="menu__item menu__item--show">
              <a href="#" class="menu__link"
                >ACCESO A PORTALES<img
                  src="images/arrow.svg"
                  class="menu__arrow"
              /></a>

              <ul class="menu__nesting">
                <li class="menu__inside">
                  <a href="p_client.php" class="menu__link menu__link--inside"
                    >PORTAL DEL CLIENTE</a
                  >
                </li>
                <li class="menu__inside">
                  <a href="p_colaborate.php" class="menu__link menu__link--inside"
                    >PORTAL DEL COLABORADOR</a
                  >
                </li>
              </ul>
            </li>
          </ul>

          <div class="menu__hamburguer">
            <img src="images/menu.svg" class="menu__img" />
          </div>
        </section>
      </nav>
