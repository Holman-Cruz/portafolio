<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/x-icon" href="img/favicon-holman-cruz.ico">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Conexión a hoja de estilos general -->
  <link rel="stylesheet" href="css/iniciostyle.css">
  <!-- Conexión a hoja de estilos de página de Conoceme -->
  <link rel="stylesheet" href="css/paginastyle.css">
  <!-- Conexión a las hoja de estilos e iconos por CDN de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <title>Holman Cruz - Conóceme</title>
</head>

<body>
  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid container">
      <a class="navbar-brand" href="index.php">
        <img src="img/favicon-holman-cruz.webp" alt="Logo" width="50" height="50"
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
            <a class="nav-link" aria-current="page" href="index.php"><i class="bi bi-house-door-fill"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active fw-bold" href="Conoceme.php"><i class="bi bi-people-fill"></i> Conóceme</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Presentación -->
  <section id="iam" class="container">
    <div class="row p-5 vac">
      <div class="col-md-4 pb-3">
        <img id="imgprofile" class="imgdefault shadow" src="img/holman-cruz.jfif" alt="Holman Cruz">
      </div>
      <div class="col-md-8">
        <p class="text-center display-6 mb-0">¡Hola! soy</p>
        <h3 class="display-5 text-center"><strong>Holman Stiven Cruz Garcia</strong></h3>
        <p class="text-center fw-bold">Te agradezco por tomarte el tiempo de revisar mi portafolio.</p>
      </div>
    </div>
  </section>
  <!-- Títulos académicos -->
  <section id="education" class="container">
    <p class="text-center">Sobre mí, te cuento que estoy ubicado en la ciudad de Bogotá y cuento con la siguiente formación académica:
    </p>
    <ul class="d-md-flex">
      <li class="col-md-4">Técnico en comunicación gráfica publicitaria.</li>
      <li class="col-md-4">Tecnólogo en producción de multimedia.</li>
      <li class="col-md-4">Actualmente soy estudiante de ingeniería de software.</li>
    </ul>
    <p class="text-center pt-3">También cuento con certificación internacional en ciberseguridad y scrum*</p>
  </section>
  <!-- Experiencia laboral -->
  <section id="experience" class="container py-5 table-responsive">
    <h2 class="text-center">Mi Experiencia Laboral</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Empresa</th>
          <th scope="col">Cargo</th>
          <th scope="col">Periodo</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Politécnico Grancolombiano</td>
          <td>Webmaster</td>
          <td>Enero 2021 - Actualmente</td>
        </tr>
        <tr>
          <td>Interservice S.A.</td>
          <td>Diseñador web</td>
          <td>Junio 2020 - Enero 2021</td>
        </tr>
        <tr>
          <td>Politécnico Grancolombiano</td>
          <td>Productor multimedia</td>
          <td>Junio - Diciembre 2019</td>
        </tr>
        <tr>
          <td>Innercia S. A.</td>
          <td>Líder Gráfico</td>
          <td>Noviembre 2016 - Mayo 2019</td>
        </tr>
        <tr>
          <td>Alen Impresores Ltda.</td>
          <td>Diseñador gráfico</td>
          <td>Junio 2015 - Abril 2016</td>
        </tr>
        <tr>
          <td>Acierto Estrategias y Comunicación</td>
          <td>Coordinador de producción</td>
          <td>Febrero 2013 - Diciembre 2014</td>
        </tr>
      </tbody>
    </table>

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