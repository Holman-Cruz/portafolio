<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="img/favicon-holman-cruz.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Conexión a hoja de estilos general -->
    <link rel="stylesheet" href="css/iniciostyle.css">
    <!-- Conexión a las hoja de estilos e iconos por CDN de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="registro.php"></script>
    <title>Holman Cruz</title>
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">
                <img src="img/favicon-holman-cruz.ico" alt="Logo" width="50" height="50"
                    class="d-inline-block align-text-middle">
                Holman Cruz
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse  justify-content-end" id="navbarTogglerDemo02">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" aria-current="page" href="index.php"><i class="bi bi-house-door-fill"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="conoceme.php"><i class="bi bi-people-fill"></i> Conóceme</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Intro y Carrusel -->
    <div class="container">
        <div class="row pt-5 align-items-center">
            <div class="col-md-6 text-center">
                <h2>Desarrollo de sitios web</h2>
                <p>Creación y optimización de sitios web a la medida para pequeñas, medianas empresas y personas naturales.</p>

            </div>
            <div class="col-md-6">
                <div id="carouselExampleAutoplaying" class="carousel slide shadow" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a href="https://www.amcodontologia.com/turismo-dental" title="Ir a conocer el proyecto" target="_blank"><img src="img/ao.webp" class="d-block w-100" alt="Servicios de odontología"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://indata-doc.co/2020" title="Ir a conocer el proyecto" target="_blank"><img src="img/idgd.webp" class="d-block w-100" alt="Servicios de gestión documental"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.interservice.com.co/2020" title="Ir a conocer el proyecto" target="_blank"><img src="img/isms.webp" class="d-block w-100" alt="Servicios de logística"></a>
                        </div>
                        <div class="carousel-item">
                            <a href="https://www.interserviciossas.com/2020" title="Ir a conocer el proyecto" target="_blank"><img src="img/issas.webp" class="d-block w-100"
                                alt="Servicios de manejo de correspondencia"></a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Animación -->
    <section id="animation" class="p-5">
        <hr>
        <h2 class="text-center pt-4">Animación</h2>
        <p class="text-center">Gráficos en movimiento basados en modelos 3D.</p>
        <div class="row">
            <div class="col-md-3">
                <a href="https://www.behance.net/gallery/89393737/Stand-Help-a-Doggy" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/stand-help-a-doggy.webp" alt="Stand Help a Doggy">
                </a><p></p>
            </div>
            <div class="col-md-3">
                <a href="https://www.behance.net/gallery/80289927/NASCAR-47" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/nascar-47.webp" alt="Nascar">
                </a><p></p>
            </div>
            <div class="col-md-3">
                <a href="https://www.behance.net/gallery/79780235/Dream-Catcher" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/dream-catcher.webp" alt="Atrapasueños">
                </a><p></p>
            </div>
            <div class="col-md-3">
                <a href="https://www.behance.net/gallery/70152297/Biker-Deadpool" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/biker-deadpool.webp" alt="Deadpool biker">
                </a><p></p>
            </div>
        </div>
    </section>
    <!-- Modelado 3D -->
    <section id="model" class="container mb-5">
        <h2 class="text-center pt-4">Modelado 3D</h2>
        <p class="text-center">Generación de modelos 3D de objetos y escenarios.</p>
        <div class="row">
            <div class="col-md-4">
                <a href="https://www.behance.net/gallery/72998345/Mechanical-Guitar" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault imgm3 shadow" src="img/mechanical-guitar.webp" alt="Modelado guitarra">
                </a><p></p>
            </div>
            <div class="col-md-4">
                <a href="https://www.behance.net/gallery/70275375/News-Set" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault imgm3 shadow" src="img/news-set.webp" alt="Modelado set de noticias">
                </a><p></p>
            </div>
            <div class="col-md-4">
                <a href="https://www.behance.net/gallery/72184879/I-Stay-or-Go" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault imgm3 shadow" src="img/stay-or-go.webp" alt="Modelado letrero">
                </a><p></p>
            </div>
        </div>
    </section>
    <!-- Efectos Visuales -->
    <section id="vf" class="p-5">
        <h2 class="text-center">Efectos Visuales</h2>
        <p class="text-center">Edición audiovisual 2D y 3D.</p>
        <div class="row">
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/bwE2oFhPWag" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><p></p>                
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/L7uLck2rEXM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><p></p>
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/gy2Z1l8yMQs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><p></p>                
            </div>
            <div class="col-md-6">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/esdg42duZ28" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe><p></p>
            </div>
        </div>
    </div>
    </section>
    <!-- Ilustración Digital -->
    <section id="illustration" class="p-5">
        <h2 class="text-center">Ilustración Digital</h2>
        <p class="text-center">Arte digital con técnicas zentagle y low poly.</p>
        <div class="row">
            <div class="col-md-3">
                <a href="https://www.behance.net/gallery/69222317/Pimienta" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/cat.webp" alt="Gato">
                </a>
                <p></p>
            </div>
            <div class="col-md-3">
                <a href="https://www.behance.net/holmancruzde53" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/eagle.webp" alt="Águila">
                </a>
                <p></p>
            </div>
            <div class="col-md-3">
                <a href="https://www.behance.net/gallery/70573553/Zentangle-Deer" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/deer.webp" alt="Venado">
                </a>
                <p></p>
            </div>
            <div class="col-md-3">
                <a href="https://www.behance.net/gallery/69481451/Mastodon-Low-Poly" title="Ir a conocer el proyecto" target="_blank">
                    <img class="imgdefault shadow" src="img/mastodon.webp" alt="Mastodonte">
                </a>
            </div>

        </div>
    </section>
    <!-- Footer -->
    <footer>
        <section id="footer">
            <div class="container-fluid pt-3">
              <div class="row px-3 pt-3">
                <div class="col-md-4 mb-5">
                  <div class="row">
                    <h3>Certificaciones</h3>
                    <div class="col-5">
                      <a href="https://www.credly.com/badges/81637263-e7ad-424f-abac-e61d1ead1222/public_url" title="Ir conocer la certificación" target="_blank"><img
                          class="imgdefault" src="img/cyber-security-foundation-professional-certificate-csfpc.webp"
                          alt="Certificación CSFPC"></a>
                    </div>
                    <div class="col-5">
                      <a href="https://www.credly.com/badges/12031ed9-e7a1-4d6c-9271-f9336a871e96/public_url" title="Ir conocer la certificación" target="_blank"><img
                          class="imgdefault" src="img/scrum-master-professional-certificate-smpc.webp"
                          alt="Certificación SMPC"></a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 mb-5">    
                  <form class="row g-3" action="registro.php" method="POST" enctype="multipart/form-data">
                    <h3>Formulario de contacto</h3>
                    <div class="col-md-4">
                      <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre completo" required>
                    </div>
                    <div class="col-md-4">
                      <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="col-md-4">
                      <input type="number" class="form-control" id="telefono" name="telefono" placeholder="Teléfono" required>
                    </div>
                    <div class="input-group">
                      <span class="input-group-text">Mensaje</span>
                      <textarea class="form-control" id="mensaje" name="mensaje" required></textarea>
                    </div>
                    <div class="col-8">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck" name="autorizacion" required>
                        <label class="form-check-label" for="gridCheck">
                          <a class="hovw link-light" data-bs-toggle="modal" href="#tdp" role="button">Acepta el tratamiento de datos personales.</a>                  
                        </label>
                      </div>
                    </div>
                    <div class="col-4">
                      <button type="submit" name="submit" class="btn btn-light">Enviar</button>
                    </div>
                  </form>
                </div>
                <div class="col-md-2 ps-3 mb-5">
                  <h3 class="mb-4">Redes</h3>
                  <p class="mb-2 hovw"><a class="link-light" href="https://www.linkedin.com/in/holman-cruz" target="_blank"
                      title="Ir al enlace"><i class="bi bi-linkedin"> /in/holman-cruz/</i></a><br></p>
                  <p class="mb-2 hovw"><a class="link-light" href="https://www.behance.net/holmancruzde53" target="_blank"
                      title="Ir al enlace"><i class="bi bi-behance"> /holmancruzde53</i></a><br></p>
                  <p class="mb-2 hovw"><a class="link-light" href="https://github.com/Holman-Cruz" target="_blank"
                      title="Ir al enlace"><i class="bi bi-github"> /Holman-Cruz</i></a></p>
                </div>
                <hr>
                <p class="text-center">Copyright © 2023</p>
              </div>
            </div>    
          </section>
    </footer>


    <!-- Conexión a script por CDN de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>