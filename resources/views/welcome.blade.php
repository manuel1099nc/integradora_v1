<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">


<head>
    <meta charset="utf-8">
    <title>Cocinas Integrales Mónica</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="" />

    <!-- css -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../estilos/materialize/css/materialize.min.css" media="screen,projection" />
    <link href="../estilos/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../estilos/css/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="../estilos/css/flexslider.css" rel="stylesheet" />
    <link href="../estilos/css/style.css" rel="stylesheet" />
    <link href="../estilos/imagenes/cocinasIntegrales.png" rel="shortcut icon" type="image/">
    <link href="../estilos/css/estilosPropios.css" rel="stylesheet">
    <!-- <link href="../estilos/css/carousel.css" rel="stylesheet">-->
    <link href="../estilos/css/estiloCarusel.css" rel="stylesheet">


    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]
    
COLOCAR VALIDACION DE CERRAR SESION, 
AL DARLE CLICK EN LA FECHA DE LA ESQUINA SUOPERIOR IZD ME CARGUE A LA MISMA PAGINA
OSEA QUE NO ME DEJE    
    
-->

</head>

<body>
    <div id="wrapper" class="home-page">
        <!-- start header -->
        <header>
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('welcome')}}"><img src="../estilos/imagenes/icon.png" alt=""> Cocinas
                            <div class="logoCaption">Integrales Mónica</div>
                        </a>
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class="nav navbar-nav">
                            <li><a class="waves-effect waves-dark" href="index.html">Inicio</a></li>
                            <li><a class="waves-effect waves-dark" href="#QuienesSomos">¿Quiénes somos?</a></li>
                            <!--<li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">About Us <b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a class="waves-effect waves-dark" href="about.html">Company</a></li>
                                    <li><a class="waves-effect waves-dark" href="#">Our Team</a></li>
                                    <li><a class="waves-effect waves-dark" href="#">News</a></li>
                                    <li><a class="waves-effect waves-dark" href="#">Investors</a></li>
                                </ul>
                            </li>-->
                            <li><a class="waves-effect waves-dark" href="#Estilos">Estilos</a></li>
                            <li><a class="waves-effect waves-dark" href="#Accesorios">Accesorios y Equipo</a></li>
                            <li><a class="waves-effect waves-dark" href="pricing.html">¿Dondé estamos?</a></li>
                            <li><a class="waves-effect waves-dark" href="contact.html">Contacto</a></li>
                            @if (Route::has('login'))
                            @auth
                            <li> <a href="{{ url('/dashboard') }}" class="nav-link active">Perfil</a></li>
                            @else
                            <li><a class="color_animation" href="{{ route('login') }}" class="nav-link active">INICIAR SESIÓN</a></li>
                            @if (Route::has('register'))
                            <li><a class="color_animation" href="{{ route('register') }}" class="nav-link active">REGISTRARSE</a></li>
                            @endif
                            @endauth
                            @endif
                    </div>
                    </ul>
                </div>
            </div>
    </div>
    </header>
    <!-- end header -->
    <section id="banner">

        <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                <li>
                    <img src="../estilos/imagenes/img10.jpg" alt="" height="400px" />
                    <div class="flex-caption">
                        <h3 class="estilo1">Diseño De Interiores</h3>
                        <p>Amueblando tu hogar</p>
                    </div>
                </li>
                <li>
                    <img src="../estilos/imagenes/img5.jpg" alt="" height="400px" />
                    <div class="flex-caption">
                        <h3 class="estilo1">Ideas para tu decoración</h3>
                        <p>Ideas e Inspiración</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- end slider -->

    </section>
    <section class="dishes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter">
                        <h2 id="QuienesSomos" class="estiloQuienesSomos aligncenter">¿Quiénes somos?</h2>
                        <p class="justificarTexto">Durante 40 años, Cocinas Integrales Mónica se ha dedicado a crear todo tipo de muebles de interiores
                            brindando el excelente servicio,
                            tomando en cuenta que nuestros productos sean de alta calidad para el cliente,
                            es por ello que nosotros siempre nos preocupamos mucho por las decisiones del comprador, por lo tanto,
                            en todas las ocaciones le brindamos asesoria al cliente de tal forma que el pueda elegir el diseño, colores,
                            tamaños y que se amolde a su pripio presupuesto.</p>
                        <h2 class="estilo2">VISIÓN-MISIÓN</h2>
                        <p class="justificarTexto"><strong>NUESTRA MISIÓN:</strong> COMPLACER LAS EXIGENCIAS Y GUSTOS DE NUESTROS CLIENTES PARA BRINDARLE
                            LA ASESORÍA CORRECTA EN SUS DISEÑOS, ESPACIOS Y DARLES LA MEJOR COMODIDAD EN EL HOGAR.
                            <br /><br />
                            <strong>NUESTRA VISIÓN:</strong> CONSOLIDARNOS COMO LA PRIMERA OPCIÓN DE COMPRA,OFRECIENDO EL MAS ALTO NIVEL DE ATENCIÓN,
                            SERVICIO Y ORIENTACIÓN A LOS CLIENTES PARA CUMPLIR CON SUS EXIGENCIAS Y EXPECTATIVAS.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter">
                        <h2 id="Estilos" class="estiloDeEstilos aligncenter">Estilos</h2>
                    </div>
                </div>
            </div>
            <div class="row service-v1 margin-bottom-40">
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="../estilos/imagenes/img5.jpg" alt="">
                            <span class="card-title">Msinimalista</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <br>
                            <p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="../estilos/imagenes/img5.jpg" alt="">
                            <span class="card-title">Msinimalista</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <br>
                            <p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="../estilos/imagenes/img5.jpg" alt="">
                            <span class="card-title">Msinimalista</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <br>
                            <p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="../estilos/imagenes/img5.jpg" alt="">
                            <span class="card-title">Msinimalista</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <br>
                            <p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="../estilos/imagenes/img5.jpg" alt="">
                            <span class="card-title">Msinimalista</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <br>
                            <p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 md-margin-bottom-40">
                    <div class="card small">
                        <div class="card-image">
                            <img class="img-responsive" src="../estilos/imagenes/img5.jpg" alt="">
                            <span class="card-title">Msinimalista</span>
                        </div>
                        <div class="card-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores quae porro consequatur aliquam, incidunt
                            </p>
                            <br>
                            <p>
                                <a href="#" class="btn btn-primary">Ver más</a>
                            </p>
                        </div>
                    </div>
                </div>
                <br><br>

            </div>

        </div>

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img class="first-slide" src="../estilos/imagenes/img2.jpg" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Example headline.</h1>
                            <p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="second-slide" src="../estilos/imagenes/img9.jpg" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Another example headline.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img class="third-slide" src="../estilos/imagenes/img1.jpg" alt="Third slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>One more for good measure.</h1>
                            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class=" carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><!-- /.carousel -->


        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aligncenter">
                        <h2 id="Accesorios" class="estiloDeAccesorios aligncenter">Accesorios y Equipos</h2>
                        <br />
                        <p class="justificarTexto">Sabemos que los mejores momentos de un hogar inician
                            en la cocina.
                            Por lo tanto te ofrecemos las mejores soluciones de accesorios
                            para el diseño y equipamiento de tu cocina:
                        </p>
                    </div>
                </div>
                <button class="btn btn-success">Equipamiento De Cocina</button>
                <button class="btn btn-success">Sistema de Iluminacón</button>
                <button class="btn btn-success">Herrajes</button>
                <button class="btn btn-success">Extraibles</button>

            </div>


    </section>
    <section id="co0ntent" class="services">
        <h2>puede servir esta seccion</h2>
    </section>

    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Our Interior design & decoration</h2>
                        <p>Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada Pellentesque <br>ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <p>Grids is a responsive Multipurpose Template. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Vivamus suscipit tortor eget felis porttitor volutpat.</p>

                        <ul class="withArrow">
                            <li><span class="fa fa-angle-right"></span> Lorem ipsum dolor sit amet</li>
                            <li><span class="fa fa-angle-right"></span> consectetur adipiscing elit</li>
                            <li><span class="fa fa-angle-right"></span> Curabitur aliquet quam id dui</li>
                            <li><span class="fa fa-angle-right"></span> Donec sollicitudin molestie malesuada.</li>
                        </ul>
                        <a href="#" class="btn btn-primary waves-effect waves-dark">Learn More</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-image">
                        <img src="img/about.jpg" alt="About Images">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Our Contact</h5>
                        <address>
                            <strong>Bootstrap company Inc</strong><br>
                            JC Main Road, Near Silnile tower<br>
                            Pin-21542 NewYork US.
                        </address>
                        <p>
                            <i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
                            <i class="icon-envelope-alt"></i> email@domainname.com
                        </p>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Quick Links</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="#">Latest Events</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Terms and conditions</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Privacy policy</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Career</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Latest posts</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="widget">
                        <h5 class="widgetheading">Recent News</h5>
                        <ul class="link-list">
                            <li><a class="waves-effect waves-dark" href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                            <li><a class="waves-effect waves-dark" href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="sub-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="copyright">
                            <p>
                                &copy; 2019 Company Name. <a href="https://webthemez.com/free-bootstrap-templates/" target="_blank" title="Free Bootstrap Templates">Free Bootstrap Templates</a> by WebThemez.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ul class="social-network">
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                            <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    </div>
    <a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
    <!-- javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../estilos/js/jquery.js"></script>
    <script src="../estilos/js/jquery.easing.1.3.js"></script>
    <script src="../estilos/materialize/js/materialize.min.js"></script>
    <script src="../estilos/js/bootstrap.min.js"></script>
    <script src="../estilos/js/jquery.fancybox.pack.js"></script>
    <script src="../estilos/js/jquery.fancybox-media.js"></script>
    <script src="../estilos/js/jquery.flexslider.js"></script>
    <script src="../estilos/js/animate.js"></script>
    <!-- Vendor Scripts -->
    <script src="../estilos/js/modernizr.custom.js"></script>
    <script src="../estilos/js/jquery.isotope.min.js"></script>
    <script src="../estilos/js/jquery.magnific-popup.min.js"></script>
    <script src="../estilos/js/animate.js"></script>
    <script src="../estilos/js/custom.js"></script>
</body>

</html>