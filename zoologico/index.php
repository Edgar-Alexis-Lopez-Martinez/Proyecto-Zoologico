<?php
require_once('class/zoologico.class.php');
$sliders = $Zoologico->getAllSlider();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zoológico</title>
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
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="admin/login.php">Login</a>
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
              <?php foreach ($sliders as $slider) : ?>
                <div class="carousel-item <?php if ($slider['prioridad'] == 1) : echo "active";
                                          endif; ?>">
                  <a href="<?php echo $slider['url']; ?>" target="_blank"><img src="<?php echo $slider['imagen']; ?>" class="d-block w-100" alt="..."></a>
                </div>
              <?php endforeach; ?>
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
        <aside>
          <div class="row mt-5 pt-4 border-top">
            <div class="col">
              <h3>Reserva</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-3 margileft">
              <div class="card" style="width: 18rem;">
                <img src="images/koala.jpg" class="card-img-top" alt="koala">
                <div class="card-body">
                  <h5 class="card-title">Koala</h5>
                  <p class="card-text">El koala (Phascolarctos cinereus) es una especie de marsupial diprotodonto de la familia Phascolarctidae, endémico de Australia.
                    Es el único representante existente de la familia Phascolarctidae y sus parientes vivos más cercanos son los wombats. Vive en las zonas costeras de las regiones este y sur australianas.</p>
                  <a href="#" class="btn btn-primary">Explorar</a>
                </div>
              </div>
            </div>
            <div class="col-3 margileft">
              <div class="card" style="width: 18rem;">
                <img src="images/mono.jpg" class="card-img-top" alt="mono">
                <div class="card-body">
                  <h5 class="card-title">Mono</h5>
                  <p class="card-text">El macaco de Berbería (Macaca sylvanus), también llamado mono de Gibraltar y mona rabona, es una especie de primate catarrino de la familia Cercopithecidae que se encuentra actualmente en algunas zonas reducidas de los Montes Atlas del norte de África y en el peñón de Gibraltar, en el sur de la península ibérica. </p>
                  <a href="explorar.php" class="btn btn-primary">Explorar</a>
                </div>
              </div>
            </div>
            <div class="col-3 margileft">
              <div class="card" style="width: 18rem;">
                <img src="images/animal1.jpg" class="card-img-top" alt="mono">
                <div class="card-body">
                  <h5 class="card-title">Mapache</h5>
                  <p class="card-text">Procyon (del griego: pro 'antes de'; κῠων [cyon] 'perro') es un género de mamíferos carnívoros de la familia Procyonidae1​ conocidos comúnmente como mapaches u osos lavadores. Son propios de América.</p>
                  <a href="#" class="btn btn-primary">Explorar</a>
                </div>
              </div>
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