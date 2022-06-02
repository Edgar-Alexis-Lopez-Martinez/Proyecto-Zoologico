<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mapa</title>
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
    </header>

    <div id="contenido" class="row">
      <div class="col">
        <section id="sectionmapa">
          <h4>Mapa de Ubicación</h4>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2139.00391344353!2d-101.19536261460833!3d19.685770947871465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842d0d609cf675dd%3A0x427bbdf5dd07bb5f!2sZool%C3%B3gico%20de%20Morelia!5e0!3m2!1ses-419!2smx!4v1646074891096!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </section>
      </div>
      <div class="col-1"></div>
      <div class="col">
        <aside>
          <div class="row">
            <div class="card" style="width: 18rem;">
              <img src="images/img_contacto.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">CONTACTO</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">
                  <h4>Número de telefóno</h4>
                  <h5><a href="https://wa.me/4432993522"><img src="images/whatsapp.png" id="imgmapawhats" alt="iconowhatsapp" /> 443 299 3522</a></h5>
                </li>
                <li class="list-group-item">
                  <h4>Avenida Quinceo 181, 58240 Morelia, Michoacán de Ocampo</h4>
                </li>
              </ul>
            </div>
          </div>
        </aside>
      </div>
    </div>

    <div class="row">
      <footer class="footer-03">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="row">
                <div class="col">
                  <nav id="menu_inferior">
                    <h3>Enlaces</h3>
                    <ul class="list-unstyled">
                      <li><a href="atencion.php">Acerca Del Zoológico</a></li>
                      <li><a href="facturacion.php">Facturación</a></li>
                      <li><a href="reglamento.php">Transparencia</a></li>
                    </ul>
                  </nav>
                </div>
                <div class="col">
                  <h3 class="footer-heading">Dirección</h3>
                  <ul class="list-unstyled">
                    <li>Avenida Quinceo 181, 58240 Morelia, Michoacán de Ocampo</li>
                  </ul>
                </div>
                <div class="col">
                  <h3 class="footer-heading">Teléfono</h3>
                  <ul class="list-unstyled">
                    <li>443 299 3522</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="col">
                <h3 class="footer-heading">Redes Sociales</h3>
                <ul id="navlist">
                  <li id="iconofb"><a href="https://m.facebook.com/login/?locale=es_ES"></a></li>
                  <li id="iconoyt"><a href="https://youtube.com.mx"></a></li>
                  <li id="iconotw"><a href="https://twitter.com/?lang=es"></a></li>
                </ul>
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