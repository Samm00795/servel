<?php
include ('../serv.php');
 
?>

<?php

    require_once '../producto.entidad.php';
    require_once '../producto.model.php';

    // Logica
    $alm = new Producto();
    $model = new ProductoModel();
    if(isset($_REQUEST['action']))
    {
        switch($_REQUEST['action'])
        {
            case 'actualizar':
            $alm->__SET('cod', $_REQUEST['cod']);
            $alm->__SET('nom', $_REQUEST['nom']);
            $alm->__SET('mar', $_REQUEST['mar']);
            $alm->__SET('pre', $_REQUEST['pre']);
            $model->Actualizar($alm);
            header('Location: ../producto.php');
            break;
            case 'registrar':
            $alm->__SET('cod', $_REQUEST['cod']);
            $alm->__SET('nom', $_REQUEST['nom']);
            $alm->__SET('mar', $_REQUEST['mar']);
            $alm->__SET('pre', $_REQUEST['pre']);
            $model->Registrar($alm);
            header('Location: ../producto.php');
            break;
            case 'eliminar':
            $model->Eliminar($_REQUEST['cod']);
            header('Location: ../producto.php');
            break;
            case 'editar':
            $alm = $model->Obtener($_REQUEST['cod']);
            break;
        }
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/stye-inicio.css"> 
     <link rel="stylesheet" href="css/style-header.css"> 
    <link rel="stylesheet" href="css/style-footer.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap');
      </style>
    <link rel="icon" type="image/jpg" href="img/img-header/icon electric.png">
    <title>Servel Electric & Ingenieria Eirl</title>
</head>

<body>
    
    <!-- HEADER -->
    <!-- BARRA DE NAVEGACIÓN TOP -->
    <nav class="navbar-blue">
        <div class="navbar-blue-container">
            <!-- FORMAS TOP -->
            <div class="orange-forms-top">
                <div class="orange-forms-top-left">
                    <div class="rectangule-top-left">

                    </div>
                    <div class="rectangule-top-left">

                    </div>
                    <div class="rectangule-top-left">

                    </div>
                </div>
                <!-- FORMAS TOP -->
                <div class="orange-forms-top-right">
                    <div class="rectangule-top-right">

                    </div>
                    <div class="rectangule-top-right">

                    </div>
                    <div class="rectangule-top-right">

                    </div>
                </div>
            </div>

            <div class="navbar-info" id="navbarNav">
                <ul class="navbar-info-nav">
                    <li class=" info-item-left">
                        <a class="info-link" href="#">
                            <span class="phone"><img class="info-logo-nav-link" src="img/img-header/icon_telefono.png" alt=""> +51 923
                                907
                                418</span>
                        </a>
                    </li>
                    <li class="info-item-right">
                        <a class="info-link" href="#">
                            <img class="info-logo-nav-link" src="img/img-header/icon_correo.webp" alt="">
                            planeamiento.operaciones@servelectric.com
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--DIV REDES SOCIALES -->
    <div class="redes">

        <!--DIV FIGURA REDES SOCIALES -->
        <div class="redes-figura">
            <!--ICONOS REDES SOCIALES-->
            <div class="contenedor-figura">
                <a href="" class="social-media-icons"><img class="red-logo1" src="img/img-header/icon_facebook.png" alt=""></a>
                <a href="" class="social-media-icons"><img class="red-logo2" src="img/img-header/icon_instagram.png" alt=""></a>
                <a href="" class="social-media-icons"><img class="red-logo3" src="img/img-header/icon_twitter.png" alt=""></a>
            </div>
        </div>
    </div>

    <!--BANNER LOGO-->
    <div class="logo-header">
        <img src="img/img-header/logo-servel-electric.png" alt="">
    </div>

    <!--NAV BAR-->


<!-- nueba barra de navegacion -->

<!-- final barra de navegacion -->

    <div>
        <div class="puente-nav1"></div>
        <div class="container-trapecio-barra-nav">
            <nav class="trapecio-barra-nav1">

                <li><a href="index.php">INICIO</a></li>
                <li><a href="paginas/nosotros.php">SOBRE NOSOTROS</a></li>
                <li>
                    <a href="#">SERVICIOS</a>
                    <ul class="tr-sub-menu">
                        <li><a href="paginas/servicio_mantenimiento.php">Mantenimiento</a></li>
                        <li><a href="paginas/servicio_instalacion.php">Instalaciones</a></li>
                    </ul>
                </li>
                <li><a href="../iniciar.php">LOGIN</a></li>
                </ul>
            </nav>
        </div>

        <div class="puente-nav2"></div>
    </div>
    
    <!-- carrusel -->
    <div class="carousel-header">
        <div class="carousel-header-list">
            <div class="carousel-header-item">
                <button type="button" class="btncontactenos">Contactanos</button>

                <img src="img/img-header/banner1.webp" alt="Imagen 1">
                <div class="figura2">
                    <h1 class="text-figura2">NOSOTROS</h1>
                </div>
                <div class="figura3">
                    <h1 class="text-figura3">SOMOS</h1>
                </div>
            </div>
        </div>
        </div>
    </div>


    <script>
        const carousel = document.querySelector('.carousel-header');
        const carouselList = carousel.querySelector('.carousel-header-list');
        const carouselItems = carousel.querySelectorAll('.carousel-header-item');
        const images = carousel.querySelectorAll('img');
        const contactButton = document.querySelector('.btncontactenos');
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        let currentIndex = 0;


        function showImage(index) {
            images.forEach((image, i) => {
                if (i === index) {
                    image.style.display = 'block';
                    if (i === 0) {
                        contactButton.style.display = 'block';
                        document.querySelector('.figura2').style.display = 'block';
                        document.querySelector('.figura3').style.display = 'block';
                    } else {
                        contactButton.style.display = 'none';
                        document.querySelector('.figura2').style.display = 'none';
                        document.querySelector('.figura3').style.display = 'none';
                    }
                } else {
                    image.style.display = 'none';
                }
            });
        }

        function goToPrevImage() {
            currentIndex = (currentIndex - 1 + images.length) % images.length;
            showImage(currentIndex);
        }

        function goToNextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        }

        prevBtn.addEventListener('click', goToPrevImage);
        nextBtn.addEventListener('click', goToNextImage);

        // Opcional: Desplazamiento automático cada 8 segundos
        setInterval(goToNextImage, 200000);
    </script>

    <!-- SERVICIOS CARD TOP -->
    <h1 class="card_title"><b class="color-1">Productos</b><b class="color-2">Disponibles</b></h1>

    <div class=" contenedor-tarjeta">

    <?php foreach($model->Listar() as $r): ?>

    <div class="contenedor_detalle ">
    <?php
                    //codigo de la ruta de la imagen 
                    $id = $r->codpro;
                    //variable imagen creada 
                    $imagen = "img/productos/" . $id . "/1.png";
                    //condición /imagen predeterminada 
                    if (!file_exists($imagen)) {
                        $imagen = "img/logo.png";
                    }
                    ?>
  
   
        <div class="">
            <figure>
                <img  src="<?php echo $imagen; ?>" alt="tablero-electrico" class="tarjeta_imagen">
            </figure>
        </div>
        <!-- ..jalamos datos a mostrar -->
        <div class="tarjeta_color" style="background-color: #28348b" >
            <div class="contenedor-color" 
    >
            <figure>
                <img src="img/img-inicio/icon-tablero-electrico.png" alt="icon-pozo-tierra" class="tarjeta_icono">
            </figure>
            <h3 class=""><?php echo $r->__GET('nom'); ?></h3>
            <h3 class="">Precio $.<?php echo $r->__GET('pre'); ?></h3><br>
            <a href="paginas/servicio_instalacion.php" class="boton-estilo">Ver Más ⮞</a>
           

            </div>
           
        </div>
       
        </div>
    <?php endforeach; ?>
    </div>

        <!-- <div class="card__container-top-card">
            <div class="image">
                <figure>
                    <img src="img/img-servicio/Instalacion-y-mantenimiento-pozo-a-tierra-fyh.jpg" alt="tablero-electrico">
                </figure>
            </div>
            <div class="container-content" style="background-color: #F39200;">
                <figure>
                    <img src="img/img-inicio/icon-pozo-tierra.png" alt="icon-pozo-tierra" class="card-top-icons">
                </figure>
                <h3 class="service-title">Pozo a Tierra</h3>
                <a href="paginas/servicio_instalacion.php">Ver Más ⮞</a>
            </div>
        </div>  -->

         <!-- <div class="card__container-top-card">
            <div class="image">
                <figure>
                    <img src="img/img-servicio/sensores.jpg" alt="tablero-electrico">
                </figure>
            </div>
            <div class="container-content" style="background-color: #28348B;">
                <figure>
                    <img src="img/img-inicio/icon-sensor.png" alt="icon-pozo-tierra" class="card-top-icons">
                </figure>
                <h3 class="service-title">Sensores de humo, vibración</h3>
                <a href="paginas/servicio_instalacion.php">Ver Más ⮞</a>
            </div>
        </div> 

   </div> -->
    <!-- <div class="card-button">
        <a href="paginas/servicio_instalacion.php" class="card-button-ver-mas">Ver Más ⮞</a>
    </div>  -->


  <!-- <h1 class="card_title2"><b class="color-1">Servicios de</b><b class="color-2"> Mantenimiento</b><br><b
            class="color-1">Preventivo</b><b class="color-2"> y Correctivo</b></h1>

    <div class="card__container-top">

        <div class="card__container-top-card">
            <div class="image">
                <figure>
                    <img src="img/img-servicio/redes electricas.jpg" alt="tablero-electrico">
                </figure>
            </div>
            <div class="container-content" style="background-color: #28348B;">
                <figure>
                    <img src="img/img-inicio/icon-redes-electricas.png" alt="icon-pozo-tierra" class="card-top-icons">
                </figure>
                <h3 class="service-title">Redes Eléctricas</h3>
                <a href="paginas/servicio_mantenimiento.php">Ver Más ⮞</a>
            </div>
        </div>

        <div class="card__container-top-card">
            <div class="image">
                <figure>
                    <img src="img/img-servicio/iluminacion.jpg" alt="tablero-electrico">
                </figure>
            </div>
            <div class="container-content" style="background-color: #F39200;">
                <figure>
                    <img src="img/img-inicio/icon-luminaria.png" alt="icon-pozo-tierra" class="card-top-icons">
                </figure>
                <h3 class="service-title">Luminaria Industrial</h3>
                <a href="paginas/servicio_mantenimiento.php">Ver Más ⮞</a>
            </div>
        </div>

        <div class="card__container-top-card">
            <div class="image">
                <figure>
                    <img src="img/img-servicio/grupos-electrogenos.jpg" alt="tablero-electrico">
                </figure>
            </div>
            <div class="container-content" style="background-color: #28348B;">
                <figure>
                    <img src="img/img-inicio/icon-grupo-electrogeno.png" alt="icon-pozo-tierra" class="card-top-icons">
                </figure>
                <h3 class="service-title">Grupos Electrógenos</h3>
                <a href="paginas/servicio_mantenimiento.php">Ver Más ⮞</a>
            </div>
        </div>
    </div>

    <div class="card-button">
        <a href="paginas/servicio_mantenimiento.php" class="card-button-ver-mas">Ver Más ⮞</a>
    </div>  -->

    <!-- ENGRANAJES CARTAS -->
    <!-- <div class="card-gear">
        <div class="card-gear__title">
            <h1 class="gear__title"><span class="gear__title-top">SERVICIOS</span> D<span class="gear__title-gradient">E
                    INST<span class="gear__title-button">ALACIONES</span></span></h1>
        </div>
        <div class="gear-container">
            <div id="link1" class="gear-container-square">
                <img src="img/img-inicio/door.png" alt="">
                <p>Bombas de Agua para Edificaciones con Sistema de Presión Constante</p>
            </div>
            <div id="link2" class="gear-container-square">
                <img src="img/img-inicio/door.png" alt="">
                <p>Sistema de Iluminación Interior y Exterior de Plantas Industriales.</p>
            </div>
            <div id="link3" class="gear-container-square">
                <img src="img/img-inicio/door.png" alt="">
                <p>Automatización de Maquinaria y Procesos Industriales.</p>
            </div>
            <div id="link4" class="gear-container-square">
                <img src="img/img-inicio/door.png" alt="">
                <p>Tableros Eléctricos en General, Control, Etc.</p>
            </div>
            <div id="link5" class="gear-container-square">
                <img src="img/img-inicio/door.png" alt="">
                <p>Sensores de Humo, Movimiento Y Vibración.</p>
            </div>
            <div id="link6" class="gear-container-square">
                <img src="img/img-inicio/door.png" alt="">
                <p>Pozo a tierra.</p>
            </div>
        </div>
        <div class="card-gear__title-2">
            <h1 class="gear__title2">
                <span class="gear__title-firts">SERVICIOS DE</span>
                <span class="gear__title-half1"> MANTENIMIENTO</span>
            </h1>
            <h1 class="gear__title3">
                <span class="gear__title-half2">PREVENTIVO Y</span>
                <span class="gear__title-end"> CORRECTIVO</span>
            </h1>
        </div>
        <div class="gear-container2">
            <div id="link7" class="gear-container-square2">
                <img src="img/img-inicio/door.png" alt="">
                <p>Grupos Electrógenos de Todas las Marcas y Potencias.</p>
            </div>
            <div id="link8" class="gear-container-square2">
                <img src="img/img-inicio/door.png" alt="">
                <p>Motores Eléctricos Industriales Trifásico y Monofásicos.</p>
            </div>
            <div id="link9" class="gear-container-square2">
                <img src="img/img-inicio/door.png" alt="">
                <p>Motores Eléctricos Industriales Trifásico y Monofásicos.</p>
            </div>
            <div id="link10" class="gear-container-square2">
                <img src="img/img-inicio/door.png" alt="">
                <p>Tanques Cisternas de Alta y Baja Para Edificios</p>
            </div>
            <div id="link11" class="gear-container-square2">
                <img src="img/img-inicio/door.png" alt="">
                <p>Redes Eléctricas</p>
            </div>
            <div id="link12" class="gear-container-square2">
                <img src="img/img-inicio/door.png" alt="">
                <p>Tableros Eléctricos para Edificaciones</p>
            </div>
            <div id="link12" class="gear-container-square2">
                <img src="img/img-inicio/door.png" alt="">
                <p>Luminarias Industriales</p>
            </div>
        </div>
    </div> -->

    <!-- SLIDER INFERIOR -->
    <div class="container">
        <img class="container__img" src="img/img-inicio/flayer.jpg" alt="" />
        <div class="container__shadow"></div>
        <div class="container__content">
            <h1>PROFESIONALES A TU SERVICIO</h1>
            <p>Somos un grupo de profesionales especializados que buscamos superarnos día a día.</p>
            <a href="https://www.youtube.com/watch?v=rmS1Poz0NQc" class="container__btncontact">Contáctanos</a>
        </div>
    </div>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="footer__group-1">
            <div class="footer__group-1-1">
                <div class="footer__box">
                    <figure>
                        <a href="#">
                            <img src="img/img-footer/logo-servel-electric-blanco.png" alt="Logo">
                        </a>
                    </figure>
                    <p>HIDROSVEL SERVICE es una empresa peruana especializada en sistemas de servicio de mantenimiento
                        integral. Nuestra sólida propuesta se adapta a las necesidades específicas de nuestros clientes,
                        capaces de brindarles y desarrollar soluciones óptimas para aumentar la operatividad de equipos
                        y máquinas eléctricas.</p>
                </div>
            </div>
            <div class="footer__group-1-2">
                <div class="footer__box">
                    <h2>Servicios</h2>
                    <a href="paginas/servicio_instalacion.php">
                        <li>Servicio de instalación</li>
                        <br>
                    </a>
                    <a href="paginas/servicio_mantenimiento.php">
                        <li>Servicio de mantenimiento &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; preventivo y correctivo</li>
                        <br>
                    </a>
                </div>
                <div class="footer__box">
                    <h2>Menus</h2>
                    <a href="index.php">
                        <li>Inicio</li>
                        <br>
                    </a>
                    <a href="paginas/nosotros.php">
                        <li>Nosotros</li>
                        <br>
                    </a>
                    <a href="paginas/servicio_instalacion.php">
                        <li>Servicios</li>
                        <br>
                    </a>
                    <a href="paginas/contacto.php">
                        <li>Contacto</li>
                        <br>
                    </a>
                </div>
                <div class="footer__box">
                    <h2>Contacto</h2>
                    <p>999-999-999</p>
                    <p>Direccion</p>
                </div>
            </div>
        </div>
        <div class="footer__group-copy">
            <small>SERVER ELECTRIC Y INGENIERIA EIRL &copy; 2023</small>
        </div>
    </footer>
</body>

</html>
