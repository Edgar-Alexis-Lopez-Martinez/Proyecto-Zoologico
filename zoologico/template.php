<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>
  <div id="wrapper" class="container-fluid">
    <header>
      <div class="row" id="idtoprowheader">
        <div class="col" id="idnavcontent">
          <nav class="navbar navbar-expand-lg navbar-dark" id="navheader">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Zoológico</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="costos.php">Costos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="mapa.php">Mapa</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="atracciones.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Atracciones
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="acuario.php">Acuario</a></li>
                      <li><a class="dropdown-item" href="safari.php">Safari</a></li>
                      <li><a class="dropdown-item" href="amazonia.php">Amazonia</a></li>
                      <li><a class="dropdown-item" href="herpetario.php">Herpetario</a></li>
                      <li><a class="dropdown-item" href="rancho.php">Rancho</a></li>
                      <li><a class="dropdown-item" href="selva.php">Selva</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/header.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/carousel.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="images/carousel2.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <div id="contenido" class="row">
      <div class="col">
        <section>
          <h2>contenido</h2>
        </section>
      </div>
    </div>

    <div class="row">
      <footer class="footer-03">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-4 mb-md-0 mb-4">
                  <nav id="menu_inferior">
                    <h3>Enlaces rápidos</h3>
                    <ul>
                      <li><a href="atencion.php">Atención a grupos</a></li>
                      <li><a href="facturacion.php">Facturación</a></li>
                      <li><a href="reglamento.php">Reglamento</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                  <h3 class="footer-heading">Dirección</h3>
                  <ul class="list-unstyled">
                    <li>Avenida Quinceo 181, 58240 Morelia, Michoacán de Ocampo</li>
                  </ul>
                </div>
                <div class="col-md-4 mb-md-0 mb-4">
                  <h3 class="footer-heading">Número</h3>
                  <ul class="list-unstyled">
                    <li>443 299 3522</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row justify-content-end">
                <div class="col-md-12 col-lg-11 mb-md-0 mb-4">
                  <h3 class="footer-heading">Redes Sociales</h3>
                  <ul id="navlist">
                    <li id="iconofb"><a href="https://m.facebook.com/login/?locale=es_ES"></a></li>
                    <li id="iconoyt"><a href="https://youtube.com.mx"></a></li>
                    <li id="iconotw"><a href="https://twitter.com/?lang=es"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt-5 pt-4 border-top">
            <div class="col-md-6 col-lg-8">
              <p class="copyright">
                Copyright All rights reserved | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by Zoologico.com
              </p>
            </div>
            <div class="col-md-6 col-lg-4 text-md-right">
              <p class="mb-0 list-unstyled">
                Condiciones
                Privacidad
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>