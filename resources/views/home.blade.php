<!--@extends('layouts.app2')-->
<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AppSalud</title>

    <!-- Bootstrap core CSS -->
    <link href="plugins/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="plugins/bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="plugins/bootstrap/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="plugins/bootstrap/css/freelancer.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">AppSALUD</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Tu Rutina</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Progreso</a>
            </li>
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contacto</a>
            </li>
            <!--li class="nav-item mx-0 mx-lg-1">
                <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}">Salir</a>
              </li-->
            <li class="nav-item mx-0 mx-lg-1">
                    <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Cerrar sesión') }}
                
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                </form>
                </a>
            </li>

          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="plugins/bootstrap/img/profile.png" alt="">
        <h1 class="text-uppercase mb-0">Hola Miguel</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Comienza tu rutina de Pausas Activas</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Tu Rutina</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-1">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-arrow-circle-o-right fa-3x"></i>
                  <h2>Empezar<h2>
                </div>
              </div>
              <!--<img class="img-fluid" src="img/portfolio/cabin.png" alt="">-->
              <img class="img-fluid" src="plugins/bootstrap/img/portfolio/LUNES.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-2">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-arrow-circle-o-right fa-3x"></i>
                  <h2>Empezar<h2>
                </div>
              </div>
              <!--<img class="img-fluid" src="img/portfolio/cake.png" alt="">-->
              <img class="img-fluid" src="plugins/bootstrap/img/portfolio/MARTES.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-3">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-arrow-circle-o-right fa-3x"></i>
                  <h2>Empezar<h2>
                </div>
              </div>
              <!--<img class="img-fluid" src="img/portfolio/circus.png" alt="">-->
              <img class="img-fluid" src="plugins/bootstrap/img/portfolio/MIERCOLES.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-4">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-arrow-circle-o-right fa-3x"></i>
                  <h2>Empezar<h2>
                </div>
              </div>
              <!--<img class="img-fluid" src="img/portfolio/game.png" alt="">-->
              <img class="img-fluid" src="plugins/bootstrap/img/portfolio/JUEVES.png" alt="">
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-5">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-arrow-circle-o-right fa-3x"></i>
                  <h2>Empezar<h2>
                </div>
              </div>
              <!--<img class="img-fluid" src="img/portfolio/safe.png" alt="">-->
              <img class="img-fluid" src="plugins/bootstrap/img/portfolio/VIERNES.png" alt="">
            </a>
          </div>
          <!--<div class="col-md-6 col-lg-4">
            <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-6">
              <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
                <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                  <i class="fa fa-arrow-circle-o-right fa-3x"></i>
                  <h2>Empezar<h2>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/submarine.png" alt="">
            </a>
          </div>-->
        </div>
      </div>
    </section> 

    <!-- About Section -->
    <section class="bg-primary text-white mb-0" id="about">
      <div class="container">
        <h2 class="text-center text-uppercase text-white">Tu Progreso</h2>
        <hr class="star-light mb-5">
        <div class="row">
          <div class="col-lg-4 ml-auto">
            <p class="lead">Aquí puedes ver tu progreso, el incentivo de la semana es: Un Helado Popsy.</p>
            <p>[Aquí se presentaría la gráfica y los puntos que se tienen]</p>
          </div>
          <div class="col-lg-4 mr-auto">
            <p class="lead">Ranking de la semana</p>
            <p>1. Miguel Angel - Puntos: 120</p>
            <p>2. Laura Camila - Puntos: 110</p>
            <p>3. Juan Sebastian - Puntos: 110</p>
            
            <h5>Manten la posición, ¡vas ganando! :D</h5>
          </div>
        </div>
        <div class="text-center mt-4">
          <a class="btn btn-xl btn-outline-light disabled"  href="#">
            <i class="fa fa-trophy mr-2"></i>
            Obtén Tu Premio
          </a>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Contacto</h2>
        <hr class="star-dark mb-5">
        <h4 class="text-center mb-0">Cuentanos tu experiencia en AppSALUD</h4>
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="sentMessage" id="contactForm" novalidate="novalidate">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Name</label>
                  <input class="form-control" id="name" type="text" placeholder="Nombre" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Email Address</label>
                  <input class="form-control" id="email" type="email" placeholder="Correo" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Phone Number</label>
                  <input class="form-control" id="phone" type="tel" placeholder="Numero Telefonico (Opcional)" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Message</label>
                  <textarea class="form-control" id="message" rows="5" placeholder="Mensaje" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Contactar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Ubicación</h4>
            <p class="lead mb-0">(2) 823424 - Ext. 125 Diego Illera
              <br>Universidad del Cauca - Cra 3 # 23-34 Edificio CAMPUS</p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Acerca de la APP</h4>
            <p class="lead mb-0">Versión 1.0
              <br>Grupo TechSystem</p>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">Acerca de los desarrolladores</h4>
            <p class="lead mb-0">Desarrollado por TechSystem con la tecnología
              <a href="http://startbootstrap.com">Start Bootstrap</a>.</p>
          </div>
        </div>
      </div>
    </footer>

    <div class="copyright py-4 text-center text-white">
      <div class="container">
        <small>Copyright &copy; TechSystem 2018</small>
      </div>
    </div>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Portfolio Modals -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-1">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Rutina del Lunes</h2>
              <hr class="star-dark mb-5">
              <button class="btn btn-success btn-lg" onClick="iniciarRutina();" id="btn_inicio">Iniciar Rutina</button>
              <div id="bloque_rutina">
                <h5 id="tiempo_ejercicio" class="text-secondary">
                  Ejercicio de 5 segundos
                </h5>
                <h6 id="temporizador" class="text-secondary">
                  <i class="fa fa-clock-o" aria-hidden="true"></i> 
                  <note id="reloj"> 0 segundos. </note>
                </h6>
                <img class="img-fluid mb-5" src="plugins/bootstrap/img/ejercicios/ejercicio1.gif" alt="" name="Diapositiva" id="Diapositiva">
                
                <!-- Espacio de navegación por los ejercicios -->
                <div>
                  <!--<button class="btn btn-info btn-lg rounded-pill" onClick="anterior()" id="boton_1">Anterior</button>-->
                  <button class="btn btn-success btn-lg" onClick="siguiente()" id="boton_2" disabled="disabled">Siguiente</button>
                </div>
                <!-- Fin espacio navegacion ejercicios -->
                <br>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped active" id="progress-bar" name="progress-bar" role="progressbar" aria-valuenow="0"
                      aria-valuemin="0" aria-valuemax="100" style="width:1%">
                      <span class="sr-only">0% Complete</span>
                    </div>
                </div><br>
                <a name="terminar_rutina" id="terminar_rutina" class="btn btn-success btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                  <i class="fa fa-close"></i>
                  Terminar Rutina</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-2">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Rutina del Martes</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="plugins/bootstrap/img/portfolio/cake.png" alt="">
              <p class="mb-5">Barra de Progreso</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  <span class="sr-only">70% Complete</span>
                </div>
              </div><br><br>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Terminar Rutina</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-3">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Rutina del Miercoles</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="plugins/bootstrap/img/portfolio/circus.png" alt="">
              <p class="mb-5">Barra de Progreso</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  <span class="sr-only">70% Complete</span>
                </div>
              </div><br><br>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Terminar Rutina</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Rutina del Jueves</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="plugins/bootstrap/img/portfolio/game.png" alt="">
              <p class="mb-5">Barra de Progreso</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  <span class="sr-only">70% Complete</span>
                </div>
              </div><br><br>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Terminar Rutina</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">Rutina del Viernes</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="plugins/bootstrap/img/portfolio/safe.png" alt="">
              <p class="mb-5">Barra de Progreso</p>
              <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="70"
                  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                  <span class="sr-only">70% Complete</span>
                </div>
              </div><br><br>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Terminar Rutina</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Portfolio Modal 6 
    <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
      <div class="portfolio-modal-dialog bg-white">
        <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
          <i class="fa fa-3x fa-times"></i>
        </a>
        <div class="container text-center">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h2 class="text-secondary text-uppercase mb-0">TechSystem | AppSalud</h2>
              <hr class="star-dark mb-5">
              <img class="img-fluid mb-5" src="img/portfolio/submarine.png" alt="">
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
              <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#">
                <i class="fa fa-close"></i>
                Close Project</a>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <!-- Bootstrap core JavaScript -->
    <script src="plugins/bootstrap/vendor/jquery/jquery.min.js"></script>
    <script src="plugins/bootstrap/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="plugins/bootstrap/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="plugins/bootstrap/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="plugins/bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="plugins/bootstrap/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="plugins/bootstrap/js/freelancer.min.js"></script>

    <!-- Script utilizado para la presentación de los ejercicios -->
    <script src="plugins/bootstrap/js/presentacionEjercicios.js"></script>

  </body>

</html>
