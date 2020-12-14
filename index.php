<?php include 'k.php'; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="author" content="Antony Brayan" />
    <meta name="description" content="Cachorro Yorkshire Terrier-Shih Tzu-Somos un criadero especializado en la raza Yorkshire Terrier y Shih Tzu
      con una trayectoria de 22 años de experiencia. " />
    <meta name="robots" content="index" />
    <!-- noindex -->
    <meta name="copyright" content="Developer Antony Brayan" />
    <title>Hatchery</title>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DDC3LB43XL"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag("js", new Date());

        gtag("config", "G-DDC3LB43XL");
    </script>
    <!-- Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="shortcut icon" type="image/x-icon" href="/img/yorkshire.ico" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Rozha+One&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css/sweetalert2.min.css" />
    <script src="https://kit.fontawesome.com/e1903dccf0.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- Ménu de navegación -->
    <nav class="navbar navbar-expand-md navbar-light bg-logo fixed-top">
        <div class="container">
            <a href="#inicio" class="navbar-brand"><i class="pata fas fa-paw"> <span class="logo">HATCHERY</span> </i>
            </a>
            <!------------------------Esta parte es cuando aparece el MENU HAMBURGUESA----------------------------->
            <!--data-target="#navbar": Es nuestro ID   
                              aria-controls="navbar": Tiene que ir con el mismo nombre de ID-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de navegacion">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!---------------------------------EL MENU------------------------------------->
            <div class="collapse navbar-collapse" id="navbar">
                <!-- ml-auto-> alinea a la izquierda -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#inicio" class="nav-link text-white">INICIO</a>
                    </li>
                    <li class="nav-item">
                        <a href="#quienes" class="nav-link text-white">QUIÉNES SOMOS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#yorkshire" class="nav-link text-white">YORKSHIRE</a>
                    </li>
                    <li class="nav-item">
                        <a href="#shihtzu" class="nav-link text-white">SHIH TZU</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacto" class="nav-link text-white">CONTACTO</a>
                    </li>
                </ul>
                <!------------------------------------------------------------------------------------------------------>
            </div>
        </div>
    </nav>
    <!-- HEADER -->
    <header class="jumbotron fondo" id="inicio">
        <section class="row">
            <section class="col-12">
                <article class="container">
                    <div class="textos">
                        <h1 class="mt-5 text-white monse text-center">YORKSHIRE</h1>
                        <p class="text-center text-white open">
                            La raza muestra una gama de personalidades, los suelen ser
                            afectuosos, inteligentes y seguros de sí mismos.
                        </p>
                    </div>
                    <div class="textos2">
                        <h1 class="mt-5 text-white monse text-center">SHIH TZU</h1>
                        <p class="text-center text-white open">
                            Entre sus cualidades destaca su inteligencia, su amabilidad y
                            ternura, su independencia y seguridad.
                        </p>
                    </div>
                </article>
            </section>
        </section>
    </header>
    <!-- SECTION QUIENES SOMOS -->
    <section class="jumbotron bg-gris arriba" id="quienes">
        <section class="container">
            <section class="row">
                <section class="col-12">
                    <article class="titulo">
                        <h3 class="quienes text-center">Quiénes somos</h3>
                    </article>
                    <article class="parrafo mt-4">
                        <p class="text-center">
                            Somos un criadero especializado, enfocado y conocedor en esta
                            área de crianza, ya que contamos con recomendaciones de nuestros
                            clientes y una trayectoria de 22 años que nos respalda de
                            experiencia en este entorno.
                        </p>
                        <p class="text-center mt-4">
                            Nos especializamos en la raza Yorkshire Terrier y Shih Tzu ya
                            que son razas pequeñas aptos para cualquier tipo de vivienda
                            (Viviendas de mayor amplitud y Apartamentos).
                        </p>
                    </article>
                    <article class="titulo2">
                        <h3 class="quienes text-center">Misión</h3>
                    </article>
                    <article class="parrafo mt-4">
                        <p class="text-center">
                            Proporcionar confiabilidad a nuestros clientes por medio de
                            nuestra reputación y calidad de un nuevo integrante a la
                            familia.
                        </p>
                    </article>
                    <article class="pata text-center">
                        <i class="fas fa-paw"></i>
                    </article>
                </section>
            </section>
        </section>
    </section>
    <!-- BOTON FLOTANTE WHATSAPP -->
    <a href="https://wa.link/gzetj3" class="btn-whatsapp" target="_blank">
        <i class="fab fa-whatsapp"></i>
    </a>
    <!-- SECTION YORKSHIRE -->
    <section class="jumbotron bg-azul arriba" id="yorkshire">
        <section class="container">
            <section class="row">
                <section class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <article class="perro">
                        <h3 class="text-white text-center titulo">YORKSHIRE TERRIER</h3>
                        <p class="text-white text-center info">
                            El Yorkshire terrier es uno de los perros más comunes en los
                            hogares, pues su carácter cariñoso y juguetón le hace perfecto a
                            las familias.
                        </p>
                        <div class="boton text-center">
                            <a href="Yorkshire-Terrier.html">Más información</a>
                        </div>
                    </article>
                </section>
                <section class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <article class="foto text-center">
                        <img class="img-fluid rounded" src="img/Yorkshire Mini Terrier-13.jpg" alt="cachorro yorkshire terrier mini" />
                    </article>
                </section>
            </section>
        </section>
    </section>
    <!-- SECTION GALERIA -->
    <section class="jumbotron bg-gris arriba" id="galeria">
        <section class="container">
            <section class="row">
                <section class="col-12">
                    <h3 class="titulo-galeria text-center">GALERÍA</h3>
                </section>
            </section>
        </section>
        <!-- SECTION SLIDER -->
        <section class="container ver mt-4">
            <section class="row">
                <div class="col-lg-12 col-sm-12 col-12">
                    <div class="imagenes">
                        <div class="carousel slide" id="principial-carousel" data-ride="carousel">
                            <!--------------Insertar cuantas imagenes tienes-------------->
                            <ol class="carousel-indicators">
                                <!--Estos li depende de cuantas IMAGENES TENGAS-->
                                <!--Puedes presionar dentro de las lineas que aparecen-->
                                <li data-target="#principial-carousel" data-slide-to="0"></li>
                                <li data-target="#principial-carousel" data-slide-to="1"></li>
                                <li data-target="#principial-carousel" data-slide-to="2"></li>
                                <li data-target="#principial-carousel" data-slide-to="3"></li>
                                <li data-target="#principial-carousel" data-slide-to="4"></li>
                                <li data-target="#principial-carousel" data-slide-to="5"></li>
                                <li data-target="#principial-carousel" data-slide-to="6"></li>
                                <li data-target="#principial-carousel" data-slide-to="7"></li>
                                <li data-target="#principial-carousel" data-slide-to="8"></li>
                                <li data-target="#principial-carousel" data-slide-to="9"></li>
                            </ol>
                            <!-------------------------------------------------------------->

                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-3.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-10.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-16.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-19.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Yorkshire Mini Terrier-11.jpg" alt="Cachorrito-Yorkshire-Mini-Terrier" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-25.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-28.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Yorkshire Mini Terrier-13.jpg" alt="Cachorrito-Yorkshire-Mini-Terrier" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-30.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                                <div class="carousel-item">
                                    <img class="slider img-fluid" src="/img/Shi Tzu-26.jpg" alt="Cachorrito-Shi-Tzu" />
                                </div>
                            </div>
                            <!-------------------------------------------------------------->

                            <!-----------Poner unos ICONOS para dar click a la siguiente imagen-------------->
                            <a href="#principial-carousel" class="carousel-control-prev" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Anterior</span>
                            </a>
                            <a href="#principial-carousel" class="carousel-control-next" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Siguiente</span>
                            </a>
                            <!-------------------------------------------------------------->
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- SECTION IMAGENES -->
        <section class="imagen mt-3">
            <section class="row text-center">
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Shi Tzu-26.jpg" alt="Cachorrito-Shi-Tzu" />
                </section>
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Shi Tzu-17.jpg" alt="Cachorrito-Shi-Tzu" />
                </section>
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Shi Tzu-10.jpg" alt="Cachorrito-Shi-Tzu" />
                </section>
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Yorkshire Mini Terrier-13.jpg" alt="Cachorrito-Yorkshire-Mini-Terrier" />
                </section>
            </section>
            <section class="row mt-3 text-center">
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Shi Tzu-8.jpg" alt="Cachorrito-Shi-Tzu" />
                </section>
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Shi Tzu-25.jpg" alt="Cachorrito-Shi-Tzu" />
                </section>
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Shi Tzu-30.jpg" alt="Cachorrito-Shi-Tzu" />
                </section>
                <section class="col-lg-3 col-sm-3">
                    <img class="diseño img-fluid" src="/img/Shi Tzu-28.jpg" alt="Cachorrito-Shi-Tzu" />
                </section>
            </section>
        </section>
    </section>
    <!-- SECTION SHIH TZU -->
    <section class="jumbotron bg-azul arriba" id="shihtzu">
        <section class="container">
            <section class="row">
                <section class="col-lg-6 col-md-6 col-sm-12 col-12 order-1">
                    <article class="perro">
                        <h3 class="text-white text-center titulo">SHIH TZU</h3>
                        <p class="text-white text-center info">
                            Entre sus cualidades destaca su inteligencia, su amabilidad y
                            ternura, su independencia y seguridad, así como su gran astucia.
                        </p>
                        <div class="boton text-center">
                            <a href="Shih-Tzu.html">Más información</a>
                        </div>
                    </article>
                </section>
                <section class="col-lg-6 col-md-6 col-sm-12 col-12 order-0">
                    <article class="foto text-center">
                        <img class="img-fluid rounded mb-2" src="img/Shi Tzu-4.jpg" alt="Cachorrito-Shi-Tzu" />
                    </article>
                </section>
            </section>
        </section>
    </section>
    <!-- SECTION CONTACTO -->
    <section class="container mb-5 mt-5" id="contacto">
        <section class="row">
            <section class="col-lg-6 col-md-6 col-12 mt-5">
                <div class="whatsap text-center">
                    <h3 class="titulo mb-4">Vía Whatsapp</h3>
                    <a href="#"><i class="fab fa-whatsapp"></i></a>
                    <p class="texto mt-4">
                        *Puede contactarnos por ambos lados ya sea vía WhatsApp o por
                        medio de correo electrónico.
                    </p>
                </div>
            </section>
            <section class="col-lg-6 col-md-6 col-12 mt-5 mb-5">
                <div class="formulario text-center">
                    <h3 class="titulo mb-4">CONTACTO</h3>
                    <form id="form1" method="POST" onsubmit="return enviar();">
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" required />
                        <input type="email" name="correo" id="correo" placeholder="Correo" required />
                        <textarea name="msj" id="msj" placeholder="Mensaje" required></textarea>
                        <br />
                        <div class="r text-center">
                            <div class="g-recaptcha" id="gwd-reCAPTCHA_2 rc-imageselect" aria-required="Selecciona la casilla" data-sitekey=<?php echo SITE_KEY; ?>></div>
                        </div>
                        <input type="submit" value="Enviar" name="submit" />
                    </form>

                </div>
            </section>
        </section>
    </section>
    <!-- FOOTER -->
    <footer class="page-footer bg-footer arriba">
        <section class="container">
            <!-- LOGO -->
            <section class="row mb-5">
                <section class="col-lg-4 col-md-4 col-sm-12 col-12 mt-5 align-self-center">
                    <a href="#inicio"><i class="pata2 fas fa-paw">
                            <span class="logo2">HATCHERY</span>
                        </i>
                    </a>
                </section>
                <!-- CONTACTO -->
                <section class="col-lg-4 col-md-4 col-sm-6 col-12 mt-5">
                    <article class="cont">
                        <h3 class="text-left text-white">Contacto</h3>
                        <div class="foter2 text-left">
                            <i class="icono fab fa-whatsapp"></i><span class="tex ml-1">55 2719 9589</span>
                        </div>
                        <div class="foter2 text-left mt-1">
                            <a href="mailto:hatchery@ventacachorros.com.mx?Subject=Información%20sobre%20los%20cachorritos" class="text-gris">
                                <i class="icono far fa-envelope"></i><span class="tex ml-1">hatchery@ventacachorros.com.mx</span></a>
                        </div>
                    </article>
                </section>
                <!-- INFORMACION -->
                <section class="col-lg-4 col-md-4 col-sm-6 col-12 mt-5">
                    <article class="cont">
                        <h3 class="text-left text-white">Información</h3>
                        <div class="foter2 text-left">
                            <a href="Yorkshire-Terrier.html" class="text-gris">
                                <i class="icono fas fa-dog"></i><span class="tex ml-1">Yorkshire Terrier</span></a>
                        </div>
                        <div class="foter2 text-left mt-1">
                            <a href="Shih-Tzu.html" class="text-gris">
                                <i class="icono fas fa-dog"></i><span class="tex ml-1">Shih Tzu</span></a>
                        </div>
                        <div class="foter2 text-left mt-1">
                            <a href="#galeria" class="text-gris"><i class="icono far fa-images"></i><span class="tex ml-1">Galería</span></a>
                        </div>
                    </article>
                </section>
            </section>
            <!--  LINEA SEPARADORA -->
            <section class="row">
                <section class="col-12">
                    <hr class="linea" />
                </section>
            </section>
            <!--  COPYRIGHT -->
            <section class="row">
                <section class="col-12">
                    <section class="copy footer-copyright text-center text-white py-3">
                        <span>Copyright <i class="far fa-copyright"></i> HATCHERY 2020.</span>
                        <br />
                        <span>Developer By Antony <i class="fas fa-code"></i></span>
                    </section>
                </section>
            </section>
        </section>
    </footer>
    <!-- Cookies -->
    <!-- <div class="aviso col-12">
        <div class="aviso2 alert">
            <p class="mb-0">
                Este sitio web utiliza cookies
                <span class="recortado2">
                    para obtener datos estadísticos sobre la navegación de sus
                    usuarios.</span><span class="recortado">
                    Si continúa navegando, consideramos que acepta su uso.</span>
                <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar">
                    <span arial-hidden="true"><i class="c far fa-times-circle"></i></span>
                </button>
            </p>
        </div>
    </div> -->

    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/contacto.js"></script>
    <script src="js/terminos.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>