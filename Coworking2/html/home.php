<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/home.css">

</head>

<body>

    <nav class="navbarfixed-top navbar-expand-lg pieshome navbar ">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> <a class="navbar-brand" href="index.php"><img src="../img/logo.png"
                        alt="" class="logohome"></a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarCollapse">
            <ul class="navbar-nav me-auto">
                    <li class="nav-item p-3">
                        <a class="nav-link active element-to" href="#"><p> Booked </p></a>
                    </li>
                    <li class="nav-item  p-3">
                        <a class="nav-link active element-to " href="Favorite.html"><p> Favorite </p></a>
                    </li>
                    <li class="nav-item  p-3">
                        <a class="nav-link active element-to" aria-current="page" href="#"><p> Plan </p></a>
                    </li>
                </ul>
                <ul class="navbar-nav me-4 ">
                    <li class="nav-item  p-3 ">
                        <a class="nav-link active text-decoration-none element-to" aria-current="page" href="perfil.html"><p> Perfil </p>
                            <?php
                            session_start(); // Iniciar la sesión PHP
                            if (isset($_SESSION['email'])) { // Verificar si el usuario está autenticado
                                // Mostrar el nombre y apellido del usuario si está autenticado
                                echo $_SESSION['firstName'] . " " . $_SESSION['lastName'];
                            } else {
                                // Mostrar un enlace a la página de inicio de sesión si el usuario no está autenticado
                                header("Location: ");
                            }
                            ?>
                         </a>
                             <?php if (isset($_SESSION['email'])) : // Mostrar el menú desplegable solo si el usuario está autenticado ?>
                                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                         <li><a class="dropdown-item" href="#">Editar Perfil</a></li>
                                         <li><a class="dropdown-item" href="#">Opción 2</a></li>
                                 </ul>
                             <?php endif; ?>
                    </li>
                    <li class="nav-item  p-3 ">
                        <a class="nav-link active element-to " aria-current="page" href="../../../singUp/singUp.html"><p>Registrarme</p></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="m-3">
        <img src="../img/imgprincipal.jpg" alt="" class="bgimg">
    </div>

    <div class="container text-center rounded nav navs">
        <div class="container d-flex flex-row justify-content-evenly ">
            <a href=""><img src="../img/calendar.png" class="imgSmall m-3">
                <p>Reserva tu dia</p>
            </a>
            <a href=""><img src="../img/lupa.png" alt="" class="imgSmall m-3">
                <p>Buscar espacio de trabajo</p>
            </a>
            <a href=""><img src="../img/mapa.png" alt="" class="imgSmall m-3">
                <p>Descubrir lugares</p>
            </a>

        </div>
    </div>

    <section class="container-fluid py-5 text-center ">
        <div class="row">
            <div class="col-md-6">
                <h2>Coworking para todos</h2>
                <p>Un espacio de trabajo compartido donde puedes trabajar en lo que te apasiona, rodeado de una
                    comunidad creativa y motivadora.</p>
                <ul class="list-unstyled">
                    <li><i class="fas fa-wifi"></i> Wi-Fi de alta velocidad</li>
                    <li><i class="fas fa-coffee"></i> Café y té ilimitados</li>
                    <li><i class="fas fa-users"></i> Eventos y networking</li>
                    <li><i class="fas fa-lock"></i> Espacios seguros y privados</li>
                    <li><i class="fas fa-concierge-bell"></i> Recepción y atención personalizada</li>
                </ul>
                <a href="#" class="btn btn-primary m-3">Más información</a>
            </div>
            <div class="col-md-6">
                <img src="../img/cwr.jpeg" alt="Coworking space" class="img-fluid">
            </div>
        </div>
    </section>

    <div class="wid p-3 m-3">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d124052.63513212804!2d-89.24269251194045!3d13.679346669160905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2ssv!4v1712541484644!5m2!1ses-419!2ssv"
            width="85%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>

    <div class="pt-3">
        <div>
            <div class="">
                <div class="collage-container p-3">
                    <div class="collage-item"><img src="../img/salones binaes.jpg" alt="Imagen 1"></div>
                    <div class="collage-item"><img src="../img/desktop.inicio.jpg" alt="Imagen 2"></div>
                    <div class="collage-item"><img src="../img/esc.jpg" alt="Imagen 4"></div>
                    <h1 class="textco">Flexibilidad, comunidad, ahorro y profesionalismo. Un espacio ideal para
                        emprendedores y empresas que buscan crecer. Conoce a otros profesionales, multiplica tus
                        contactos y lleva tu negocio al siguiente nivel. ¡Únete a la revolución del trabajo!
                    </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="deb p-3">
        <div class="deb1 p-3 ">
            <h4>Encuentra tu espacio <br> Favorito <br>
                En tu lugar <br> Favorito</h4>
            <a href="#" class="btn btn-primary mt-3 pl-3">Más información</a>

        </div>
        <div>
            <img src="../img/gift1.gif" alt="" class="gift">
        </div>
    </div>

    <footer class=" text-white py-5 mt-3 pieshome">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h4>Sobre nosotros</h4>
                    <p>Somos más que un espacio de trabajo, somos una comunidad vibrante de emprendedores, freelancers y
                        empresas que buscan impulsar sus proyectos en un entorno dinámico y colaborativo. En
                        SivarCoworking, creemos en el poder del trabajo en equipo y la sinergia para alcanzar
                        el éxito.</p>
                </div>

                <div class="col-md-3">
                    <h4>Enlaces</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Acerca de</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Servicios</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                </div>

                <div class="col-md-3">
                    <h4>Suscríbete</h4>
                    <form class="form-inline">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="email" class="sr-only">Dirección de correo electrónico:</label>
                            <input type="email" class="form-control" id="email" placeholder="Introduce tu email">
                        </div>
                        <button type="submit" class="btn btn-primary m-3">Suscribirse</button>
                    </form>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col text-center">
                    <p>&copy; Coworking. Todos los derechos reservados.</p>
                </div>
            </div>
        </div>
    </footer>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>


    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>