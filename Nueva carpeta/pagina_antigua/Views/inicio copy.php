<!DOCTYPE html>
<html lang="es-PE">
<head>
    <meta charset="UTF-8">
    <title><?= $data['page_title']; ?></title>
    <meta name="description" content="">
    <meta name="robots" content="index,follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="revisit-after" content="1 day" />
    <meta name="theme-color" content="#F48D35">
    <meta name="msapplication-navbutton-color" content="#F48D35">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <link rel="icon" type="image/png" href="<?= media(); ?>/images/favicon.ico">

    <link rel="stylesheet" href="<?= media(); ?>/tienda/main.css">
    <link rel="stylesheet" href="<?= media(); ?>/tienda/node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?= media(); ?>/tienda/files/styles.css">
     
        <!-- Carrusel -->
    <link rel="stylesheet" href="<?= media(); ?>/tienda/files/carrusel/css/carrusel_owl.carousel.min.css">
	<link rel="stylesheet" href="<?= media(); ?>/tienda/files/carrusel/css/carrusel_estilos.css">
    <!-- /Carrusel -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- End WOWSlider.com HEAD section -->
</head>
<body> 
<div id="fondo">
        <!-- Cabecera -->
        <div class="contenedor fondo">
            <div class="menu-btn">
               <!--  <i class="fas fa-bars fa-2x"></i> -->
                <i class="fa fa-bars fa-2x" aria-hidden="true"></i>

            </div>
            <nav class="nav-main">
                <a href="<?= base_url(); ?>"><img src="<?= media(); ?>/tienda/files/img/logo2.png" alt="Mega Equipamiento - LOGO " class="nav-brand"></a>

            
                        <form class="search" action="#">
                            <input type="text" placeholder="Buscar..." name="search2">
                            <button type="submit"><i class="bi bi-search"></i></button>
                        </form>

                
                <div class="nav-menu-right">

                    <ul class="navigation">
                        <li class="servicio"><a href="#">Servicio</a></li>
                        <li class="acceso"><a href="#">Acceso</a></li>
                        <li class="carrito"></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /Cabecera -->
        <!-- Menu -->
        <ul id="menunav">
            <li id="divMenuNav1" ><a href="#">Laboratorio <i class="bi bi-caret-down-fill"></i></a></li>
            <li id="divMenuNav2"><a href="#">Industria <i class="bi bi-caret-down-fill"></i></a></li>
            <li id="divMenuNav3"><a href="#">Medico <i class="bi bi-caret-down-fill"></i></a></li>
            <li id="divMenuNav4"><a href="#">Dental <i class="bi bi-caret-down-fill"></i></a></li>
        </ul>
        <div id="closedPanel" class="">X</div>
        <section id="panel" class="mt-0 pt-0 ">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
        </section>
        <div id="closedPanel2" class="">X</div>
        <section id="panel2" class="mt-0 pt-0 ">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">B</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">C</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">D</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">E</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">F</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">G</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">H</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">I</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">J</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">K</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">L</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">M</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">N</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">O</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">P</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">Q</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">R</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">S</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">T</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
    
        </section>
        <div id="closedPanel3" class="">X</div>
        <section id="panel3" class="mt-0 pt-0 ">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">B</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">C</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">D</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">E</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">F</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">G</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">H</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">I</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">J</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">K</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">L</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">M</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">N</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">O</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">P</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">Q</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">R</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">S</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">T</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
    
        </section>
        <div id="closedPanel4" class="">X</div>
        <section id="panel4" class="mt-0 pt-0 ">
            
            <div class="child-menu">
                <div class="tituloabc">A</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">B</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">C</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">D</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">E</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">F</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">G</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">H</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">I</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">J</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">K</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">L</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">M</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">N</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">O</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
            <div class="child-menu">
                <div class="tituloabc">P</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">Q</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">R</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">S</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
                <div class="tituloabc">T</div>
                <ul>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                    <li> <a href="#"><i class="bi bi-caret-right-fill"></i> Accesorios</a></li>
                </ul>
            </div>
    
        </section>
        <!-- /Menu -->
<!-- Menu responsive -->
<div id="menu_responsive">
    
</div>
<!-- /Menu responsive -->
        <h1>Mega equipamiento  - Taller de trabajo</h1>
        <h2>Laboratorio       Industria        Medicina        Dental</h2>
    </div>

    <!-- Slider -->
   
    <!-- /Slider -->
<!--     onmouseout="outBox()" onmouseover="openBox()" -->
    <!-- MENU CATEGORIA FLOTANTE -->
        <!--   Categoria Flotante -->
        <div class="category-float" id="category-float"  onmouseover="openBox()"  onmouseout="outBox()" >
            <div class="category_float_left">
                <div>SUBCATEGORÍAS</div>
                <nav>
                    <ul id="categoryFloat">
                        <!-- Rubro -->
                        <li id="divCategory1"><a href="#home">Laboratorio 1</a>
                            <!-- Categorias -->
                            <ul id="ulCategory1">
                                <!-- SubCategorias -->
                                <li id="divSubCategory1"><a href="#">Categoria 01</a> 
                                    <ul id="ulSubCategory1">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                <!-- /SubCategorias -->
                                 <!-- SubCategorias -->
                                 <li id="divSubCategory2"><a href="#">Categoria 2</a>
                                    <ul id="ulSubCategory2">
                                        <li><a href="#">Subcategoria 2.1</a> </li>
                                        <li><a href="#">Subcategoria 2.2</a> </li>
                                        <li><a href="#">Subcategoria 2.3</a> </li>
                                     </ul>
                                </li>
                                <!-- /SubCategorias -->
                                 <!-- SubCategorias -->
                                <li id="divSubCategory3"><a href="#">Categoria 03</a> 
                                    <ul id="ulSubCategory3">
                                        <li><a href="#">Subcategoria 3.1</a> </li>
                                        <li><a href="#">Subcategoria 3.2</a> </li>
                                        <li><a href="#">Subcategoria 3.3</a> </li>
                                    </ul>
                                </li>
                                <!-- /SubCategorias -->
                                 <!-- SubCategorias -->
                                <li id="divSubCategory4"><a href="#">Categoria 04</a>
                                    <ul id="ulSubCategory4">
                                        <li><a href="#">Subcategoria 1</a> </li>
                                        <li><a href="#">Subcategoria 1</a> </li>
                                        <li><a href="#">Subcategoria 1</a> </li>
                                     </ul>
                                </li>
                                <!-- /SubCategorias -->
                            </ul>
                            <!-- /Categorias -->
                        </li>
                        <!-- /Rubro -->
                        <!-- Rubro -->
                        <li id="divCategory2"><a href="#news">Industria</a>
                            <!-- Categorias -->
                            <ul id="ulCategory2">
                               <!-- SubCategorias -->
                                <li id="divSubCategory5"><a href="#">Categoria Ind 01</a> 
                                    <ul id="ulSubCategory5">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                 <!-- /SubCategorias -->
                               <!-- SubCategorias -->
                                <li id="divSubCategory6"><a href="#">Categoria Ind 02</a> 
                                    <ul id="ulSubCategory6">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                 <!-- /SubCategorias -->
                               <!-- SubCategorias -->
                                <li id="divSubCategory7"><a href="#">Categoria Ind 03</a> 
                                    <ul id="ulSubCategory7">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                 <!-- /SubCategorias -->
                               <!-- SubCategorias -->
                                <li id="divSubCategory8"><a href="#">Categoria Ind 03</a> 
                                    <ul id="ulSubCategory8">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                 <!-- /SubCategorias -->
                                
                            </ul>
                            <!-- /Categorias -->
                        </li>
                        <!-- /Rubro -->
                        <!-- Rubro -->
                        <li id="divCategory3"><a href="#contact">Medico</a>
                            <!-- Categorias -->
                            <ul id="ulCategory3">
                                    <!-- SubCategorias -->
                                    <li id="divSubCategory9"><a href="#">Categoria Ind 01</a> 
                                        <ul id="ulSubCategory9">
                                            <li><a href="#">Subcategoria 1.1</a> </li>
                                            <li><a href="#">Subcategoria 1.2</a> </li>
                                            <li><a href="#">Subcategoria 1.3</a> </li>
                                        </ul>
                                    </li>
                                    <!-- /SubCategorias -->
                                <!-- SubCategorias -->
                                    <li id="divSubCategory10"><a href="#">Categoria Ind 02</a> 
                                        <ul id="ulSubCategory10">
                                            <li><a href="#">Subcategoria 1.1</a> </li>
                                            <li><a href="#">Subcategoria 1.2</a> </li>
                                            <li><a href="#">Subcategoria 1.3</a> </li>
                                        </ul>
                                    </li>
                                    <!-- /SubCategorias -->
                                <!-- SubCategorias -->
                                    <li id="divSubCategory11"><a href="#">Categoria Ind 03</a> 
                                        <ul id="ulSubCategory11">
                                            <li><a href="#">Subcategoria 1.1</a> </li>
                                            <li><a href="#">Subcategoria 1.2</a> </li>
                                            <li><a href="#">Subcategoria 1.3</a> </li>
                                        </ul>
                                    </li>
                                    <!-- /SubCategorias -->
                                <!-- SubCategorias -->
                                    <li id="divSubCategory12"><a href="#">Categoria Ind 03</a> 
                                        <ul id="ulSubCategory12">
                                            <li><a href="#">Subcategoria 1.1</a> </li>
                                            <li><a href="#">Subcategoria 1.2</a> </li>
                                            <li><a href="#">Subcategoria 1.3</a> </li>
                                        </ul>
                                    </li>
                                <!-- /SubCategorias -->
                            </ul>
                            <!-- /Categorias -->
                        </li>
                        <!-- /Rubro -->
                        <!-- Rubro -->
                        <li id="divCategory4"><a href="#about">Dental</a>
                            <!-- Categorias -->
                            <ul id="ulCategory4">
                                <!-- SubCategorias -->
                                <li id="divSubCategory13"><a href="#">Categoria Ind 01</a> 
                                    <ul id="ulSubCategory13">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                <!-- /SubCategorias -->
                                <!-- SubCategorias -->
                                <li id="divSubCategory14"><a href="#">Categoria Ind 01</a> 
                                    <ul id="ulSubCategory14">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                <!-- /SubCategorias -->
                                <!-- SubCategorias -->
                                <li id="divSubCategory15"><a href="#">Categoria Ind 01</a> 
                                    <ul id="ulSubCategory15">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                <!-- /SubCategorias -->
                                <!-- SubCategorias -->
                                <li id="divSubCategory16"><a href="#">Categoria Ind 01</a> 
                                    <ul id="ulSubCategory16">
                                        <li><a href="#">Subcategoria 1.1</a> </li>
                                        <li><a href="#">Subcategoria 1.2</a> </li>
                                        <li><a href="#">Subcategoria 1.3</a> </li>
                                    </ul>
                                </li>
                                <!-- /SubCategorias -->
                            </ul>
                            <!-- /Categorias -->
                        </li>
                        <!-- /Rubro -->
                    </ul>
    
                </nav>
            </div>
            <div class="category_float_right">
                <img src="<?= media(); ?>/tienda/files/img/categoriasdemegaequipamiento.png" alt="Categorias Mega Equipamiento">
            </div>
        </div>
    <!-- MENU CATEGORIA FLOTANTE -->
<!--     Personal de llamadas Callcenter -->
<div id="callcenter" class="" onmouseover="openBoxCallcenter()"  onmouseout="outBoxCallcenter()">
    <div class="lvisPerman">
    VENDEDOR
    </div>
    <div class="lvisTemp">
        <div class="foto">
            <img src="<?= media(); ?>/tienda/files/img/user.jpg" alt="">
        </div>
        <div class="descripcion">
            <a href="tel:51938222552"><p>938 222 552</p></a>
        </div>
    </div>
   
</div>

<!--     /Personal de llamadas Callcenter -->   
    
    <h2 class="titulodiv text-center fs14">Instrumentos de Laboratorio</h2>
    <!-- Productos -->
        <section class="contenedor products">
                <div class="title"><span>Balanzas y equipos de laboratorio</span></div>
                <div class="clearfix"></div>
                <div class="product-contenedor">
                    <div class="product-item">
                <img src="<?= media(); ?>/tienda/files/img/product.jpg" alt="">
                <div class="brandAndFlag">
                   <img class="brand" src="<?= media(); ?>/tienda/files/img/brand/brand.png" width="10" alt=""> 
                     <img class="flag" src="<?= media(); ?>/tienda/files/img/flag/flag.png" width="10" alt=""> 
                </div>
                <div class="description">
                    <div class="direction-product">
                        BALANZA DE LABORATORIO /
                        MICRO / DIGITAL / CON INDICADOR
                        SEPARADO
                        <span> MYA 4Y SERIES</span>
                    </div>
                    <div class="price-product">S/ 799.90</div>
                    <div class="before-product">
                        Antes: S/ 1,029.90
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, distinctio?</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                        repellat quidem. Enim consequatur rem ea quia! Est minus atque exercitationem eum incidunt,
                        asperiores quia accusantium ex at!</p>
                       <a class="btn btn-info" href="detalle">VER PRODUCTO</a>
                </div>
            </div>
            <div class="product-item">
                <img src="<?= media(); ?>/tienda/files/img/product.jpg" alt="">
                <div class="brandAndFlag">
                    <img class="brand" src="<?= media(); ?>/tienda/files/img/brand/brand.png" width="10" alt=""> 
                      <img class="flag" src="<?= media(); ?>/tienda/files/img/flag/flag.png" width="10" alt=""> 
                 </div>
                <div class="description">
                    <div class="direction-product">
                        BALANZA DE LABORATORIO /
                        MICRO / DIGITAL / CON INDICADOR
                        SEPARADO
                        <span> MYA 4Y SERIES</span>
                    </div>
                    <div class="price-product">S/ 799.90</div>
                    <div class="before-product">
                        Antes: S/ 1,029.90
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, distinctio?</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                        repellat quidem. Enim consequatur rem ea quia! Est minus atque exercitationem eum incidunt,
                        asperiores quia accusantium ex at!</p>
                         
                         <a class="btn btn-warning" href="detalle">VER PRODUCTO</a>
                </div>
            </div>
            <div class="product-item">
                <img src="<?= media(); ?>/tienda/files/img/product.jpg" alt="">
                <div class="brandAndFlag">
                    <img class="brand" src="<?= media(); ?>/tienda/files/img/brand/brand.png" width="10" alt=""> 
                      <img class="flag" src="<?= media(); ?>/tienda/files/img/flag/flag.png" width="10" alt=""> 
                 </div>
                <div class="description">
                    <div class="direction-product">
                        BALANZA DE LABORATORIO /
                        MICRO / DIGITAL / CON INDICADOR
                        SEPARADO
                        <span> MYA 4Y SERIES</span>
                    </div>
                    <div class="price-product">S/ 799.90</div>
                    <div class="before-product">
                        Antes: S/ 1,029.90
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, distinctio?</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                        repellat quidem. Enim consequatur rem ea quia! Est minus atque exercitationem eum incidunt,
                        asperiores quia accusantium ex at!</p>
                        
                         <a class="btn btn-warning" href="detalle">VER PRODUCTO</a>
                </div>
            </div>
            <div class="product-item">
                <img src="<?= media(); ?>/tienda/files/img/product.jpg" alt="">
                <div class="brandAndFlag">
                    <img class="brand" src="<?= media(); ?>/tienda/files/img/brand/brand.png" width="10" alt=""> 
                      <img class="flag" src="<?= media(); ?>/tienda/files/img/flag/flag.png" width="10" alt=""> 
                 </div>
                <div class="description">
                    <div class="direction-product">
                        BALANZA DE LABORATORIO /
                        MICRO / DIGITAL / CON INDICADOR
                        SEPARADO
                        <span> MYA 4Y SERIES</span>
                    </div>
                    <div class="price-product">S/ 799.90</div>
                    <div class="before-product">
                        Antes: S/ 1,029.90
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, distinctio?</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                        repellat quidem. Enim consequatur rem ea quia! Est minus atque exercitationem eum incidunt,
                        asperiores quia accusantium ex at!</p>
                         
                         <a class="btn btn-warning" href="detalle">VER PRODUCTO</a>
                </div>
            </div>
            <div class="product-item">
                <img src="<?= media(); ?>/tienda/files/img/product.jpg" alt="">
                <div class="brandAndFlag">
                    <img class="brand" src="<?= media(); ?>/tienda/files/img/brand/brand.png" width="10" alt=""> 
                      <img class="flag" src="<?= media(); ?>/tienda/files/img/flag/flag.png" width="10" alt=""> 
                 </div>
                <div class="description">
                    <div class="direction-product">
                        BALANZA DE LABORATORIO /
                        MICRO / DIGITAL / CON INDICADOR
                        SEPARADO
                        <span> MYA 4Y SERIES</span>
                    </div>
                    <div class="price-product">S/ 799.90</div>
                    <div class="before-product">
                        Antes: S/ 1,029.90
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, distinctio?</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                        repellat quidem. Enim consequatur rem ea quia! Est minus atque exercitationem eum incidunt,
                        asperiores quia accusantium ex at!</p>
                         
                         <a class="btn btn-warning" href="detalle">VER PRODUCTO</a>
                </div>
            </div>
            <div class="product-item">
                <img src="<?= media(); ?>/tienda/files/img/product.jpg" alt="">
                <div class="brandAndFlag">
                    <img class="brand" src="<?= media(); ?>/tienda/files/img/brand/brand.png" width="10" alt=""> 
                      <img class="flag" src="<?= media(); ?>/tienda/files/img/flag/flag.png" width="10" alt=""> 
                 </div>
                <div class="description">
                    <div class="direction-product">
                        BALANZA DE LABORATORIO /
                        MICRO / DIGITAL / CON INDICADOR
                        SEPARADO
                        <span> MYA 4Y SERIES</span>
                    </div>
                    <div class="price-product">S/ 799.90</div>
                    <div class="before-product">
                        Antes: S/ 1,029.90
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, distinctio?</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                        repellat quidem. Enim consequatur rem ea quia! Est minus atque exercitationem eum incidunt,
                        asperiores quia accusantium ex at!</p>
                         
                         <a class="btn btn-warning" href="detalle">VER PRODUCTO</a>
                </div>
            </div>
            <div class="product-item">
                <img src="<?= media(); ?>/tienda/files/img/product.jpg" alt="">
                <div class="description">
                    <div class="direction-product">
                        BALANZA DE LABORATORIO /
                        MICRO / DIGITAL / CON INDICADOR
                        SEPARADO
                        <span> MYA 4Y SERIES</span>
                    </div>
                    <div class="price-product">S/ 799.90</div>
                    <div class="before-product">
                        Antes: S/ 1,029.90
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, distinctio?</h2>
                    <hr>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Temporibus fugit quam distinctio
                        repellat quidem. Enim consequatur rem ea quia! Est minus atque exercitationem eum incidunt,
                        asperiores quia accusantium ex at!</p>
                         Ver Producto 
                         <a class="btn btn-warning" href="detalle">VER PRODUCTO</a>
                </div>
            </div>
            
        </section>
        <section id="logos">

            <h3 class="text-center text-white">Muchos fabricantes conocidos de equipo de laboratorio</h3>
            <div class="container-logos d-flex flex-wrap  justify-content-center">
                <div class="item-logos">
                    <img src="<?= media(); ?>/tienda/files/marcas/brand1.jpg" alt="">
                    <h4 class="text-white">ASECOS</h4>
                </div>
                <div class="item-logos ">
                    <img src="<?= media(); ?>/tienda/files/marcas/brand2.jpg" alt="">
                    <h4 class="text-white">ASECOS</h4>
                </div>
                <div class="item-logos ">
                    <img src="<?= media(); ?>/tienda/files/marcas/brand1.jpg" alt="">
                    <h4 class="text-white">ASECOS</h4>
                </div>
                <div class="item-logos ">
                    <img src="<?= media(); ?>/tienda/files/marcas/brand2.jpg" alt="">
                    <h4 class="text-white">ASECOS</h4>
                </div>
                <div class="item-logos ">
                    <img src="<?= media(); ?>/tienda/files/marcas/brand2.jpg" alt="">
                    <h4 class="text-white">ASECOS</h4>
                </div>
                <div class="item-logos ">
                    <img src="<?= media(); ?>/tienda/files/marcas/brand2.jpg" alt="">
                    <h4 class="text-white">ASECOS</h4>
                </div>
            </div>

        </section>     
            <div class="clearfix"></div>
            <!-- Abcedarios categorias -->
            <!-- Carrusel -->
            <section class="marcas cleaner">
                <div class="container">
                    <div class="titH2 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                        <h2 class="text-center">MARCAS</h2>
                        <p></p>
                       <!--  <p>A lo largo de nuestra carrera hemos obtenido clientes agradecidos y satisfechos
                            por nuestros trabajos y desempeño, estás son algunas empresas:</p> -->
                    </div>
                    <div class="carrMarcas cleaner">
                        <div class="slider-area">
                            <div class="slider-active owl-carousel">
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/1.jpg" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/2.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/3.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/4.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/5.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/6.png" title="Stark" alt="Stark"></a>
                                </div>
                                <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                    <a title="Stark" href=""><img src="<?= media(); ?>/tienda/files/marcas/carrusel/7.png" title="Stark" alt="Stark"></a>
                                </div>
                            </div>
                        </div>
        
                        <div class="owl-controls">
                            <div class="owl-dots">
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot "><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
        
                            </div>
                        </div>
                    </div>
        
                </div>
            </section>
            <!-- /Carrusel -->
            <!-- Footer -->
            <div class="black">
                <footer class="footer-top">
        
                    <div class=" item-footer">
                        <h4><i class="fa fa-truck green" aria-hidden="true"></i>  Envíos a todo el Perú</h4>
                        <ul class="direccion">
                            <li><i class="fa fa-map-marker" aria-hidden="true"></i>
                                 Dirección</li>
                        </ul>
                        <p>Av Universitaria 2786 Mz G lote 43 <br>
                            LOS OLIVOS LIMA-PERU.</p>
                        <div class="phone">
                            <i class="fa fa-mobile " aria-hidden="true"></i>  8979856456
                        </div>
        
                        <div class="email">
                            <i class="fa fa-envelope" aria-hidden="true"></i> informes@equinlab.com</div>
                    </div>
                    <div class="item-footer telefono">
                        <h4><i class="fa fa-mobile green" aria-hidden="true"></i> Teléfonos</h4>
                        <ul>
                            <li><a href="tel:013364583">(01) 3364583</a></li>
                            <li><a href="tel:51946480783">(+51)946480783</a> </li>
                            <li> <a href="tel:51939294882">(+51)939294882</a></li>
                            <li> <a href="tel:016776611"> (01) 6776611</a></li>
                        </ul>
                    </div>
        
                    <div class="item-footer">
        
                        <h5><i class="fa fa-envelope green" aria-hidden="true"></i>        MEGAEQUIPAMIENTO S.A.C </h5>
                        <p> Es una empresa joven en el mercado peruano, <br> participando activamente en el desarrollo
                            científico de
                            <br>
                            nuestro pais con tecnologia de ultima generación.
                        </p>
                    </div>
                </footer>
                <hr>
                <div class="span">CopyRight - Mega Equipamiento</div>
            </div>


            <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="node_modules/@popperjs/core/dist/umd/popper.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="<?= media(); ?>/tienda/files/main.js"></script>

    <!-- Carrusel -->
    <script src="<?= media(); ?>/tienda/files/carrusel/js/carrusel_owl-jquery.min.js"></script>
    <script src="<?= media(); ?>/tienda/files/carrusel/js/carrusel_owl.carousel.min.js"></script>
    <!-- /Carrusel -->

	<script type="text/javascript">
		$(document).ready(function () {
			
			$('.slider-active').owlCarousel({
				loop: true,
				margin: 10,
				nav: false,
				dots: true,
				autoplay: true,
				autoplayTimeout: 1000,
				autoplayHoverPause: true,
				autoplaySpeed: false,
				smartSpeed: 250,
				navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
				responsive: {
					0: {
						items: 1
					},

					960: {
						items: 4
					}
				}
			});

		});
	</script>
</body>
</html>