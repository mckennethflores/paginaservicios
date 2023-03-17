<!DOCTYPE html>
<html lang="es-PE">
 <head>
	<meta charset="UTF-8">
	<title><?= NOMBRE_EMPRESA ?> &#8211; Venta de Productos Organicos, Frutas deshidratadas, Harinas </title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	

<link rel="icon" type="image/png" sizes="32x32" href="<?= media(); ?>/tienda/img/favicon.png">
<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#128c7e">
<meta name="msapplication-TileImage" content="<?= media(); ?>/tienda/img/ms-icon-144x144.png">
<meta name="theme-color" content="#128c7e">

<!--estilos bextlan--> 
<meta name="description" content="Empresa peruana dedica al cultivo, procesamiento y comercialización de superalimentos de gran biodiversidad, Frutas deshidratadas, Harinas, etc."/>
	<!-- Facebook Tags -->
	<meta property="fb:admins" content="1694154767535867" />
	<meta property="fb:page_id" content="1694154767535867" />
	<meta property="og:title" itemprop="name" content="Empresa peruana dedica al cultivo, procesamiento y comercialización de superalimentos de gran biodiversidad, Frutas deshidratadas, Harinas, etc." />
	<meta property="og:description" content="Empresa peruana dedica al cultivo, procesamiento y comercialización de superalimentos de gran biodiversidad, Frutas deshidratadas, Harinas, etc." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?= base_url(); ?>" />

	<link rel="shortcut icon" type="image/png" href="<?= media(); ?>/tienda/img/logo-hidden.png" />
	<link rel="apple-touch-icon" href="<?= media(); ?>/tienda/img/logo-hidden.png" />
	<link rel="author" type="text/plain" href="humans.txt" />
	<link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
	<link rel="canonical" href="<?= base_url(); ?>">

<!-- /estilos bextlan-->

<!--  Iconos -->
 
<link rel="stylesheet" href="<?= media(); ?>/tienda/css/bootstrap.min.css">

<!-- / Iconos -->

<!-- lightbox -->
<link rel="stylesheet" href="<?= media(); ?>/tienda/css/lightbox.min.css">
<!-- lightbox -->

<link href="<?= media(); ?>/tienda/css/custom.css" rel="stylesheet">

</head>

<body onunload="myStopFunction();" >

 <div class="container-fluid" id="background_header">
	<div class="row">
		<div class="col-md-4">
			<div class="ae_contact">
			 	<ul>
					 <li> <a target="_blank" href="https://api.whatsapp.com/send?phone=51918515262&amp;text=Quiero%20informacion%20sobre%20los%20productos%20naturales,%20mi%20nombre%20es:"> <img src="<?= media(); ?>/tienda/img/whatsapp.png" width="32" alt=""> <?= CELULAR1 ?></a></li>
					 <li> <a target="_blank" href="https://api.whatsapp.com/send?phone=51930189065&amp;text=Quiero%20informacion%20sobre%20los%20productos%20naturales,%20mi%20nombre%20es:"> <img src="<?= media(); ?>/tienda/img/whatsapp.png" width="32" alt=""> <?= CELULAR2 ?></a></li>
					 <li> <a target="_blank" href="mailto:<?= EMAIL ?>"> <i class="fa fa-envelope" aria-hidden="true"></i> <?= EMAIL ?></a></li>
				 </ul>
			</div>
		</div>
		<div class="col-md-4">
				<p class="text-center">
					<a href="<?= base_url(); ?>"><img class="imagen" src="<?= media(); ?>/tienda/img/logo-hidden.png" width="245"  alt="<?= NOMBRE_EMPRESA ?>" title="<?= NOMBRE_EMPRESA ?>"></a>
				</p>
			
		</div>
		<div class="col-md-4">
		
			
				<!-- Iconos Redes -->            
                <div class="socials">
                        <ul>
                            <li class="redes_">
                            <a target="_blank" href="<?= FACEBOOK ?>">
                            <i class="ico-facebook"></i>
                            </a>
                            </li>
                            <li class="redes_">
                            <a target="_blank" href="<?= TWITTER ?>">
                            <i class="ico-twitter"></i>
                            </a>
                            </li>
                            <li class="redes_">
                            <a target="_blank" href="<?= INSTAGRAM ?>">
                            <i class="ico-instagram"></i>
                            </a>
                            </li>
                            <li class="redes_">
                            <a target="_blank" href="<?= YOUTUBE ?>">
                            <i class="ico-youtube"></i>
                            </a>
                            </li>
                        </ul>
		        </div>
				<!-- Iconos Redes -->            

			<!-- Traductor  -->  
			<div class="traductor">
				<div id="google_translate_element" ></div>
				<script type="text/javascript">
				function googleTranslateElementInit(){
				new google.translate.TranslateElement({pageLanguage: 'es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
				}
				</script>
				<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
			</div>
			<!-- Traductor --> 
		</div>
 
	</div>
 </div>
 
 <!--/header-->

	<!--nav-->
		<div id="divNavegation" class="container azul">
				<a class="toggleMenu" href="<?= base_url(); ?>"><img src="<?= media(); ?>/tienda/img/menu/menu.png" width="40"alt="">Menu Principal</a>
				<ul class="nav">
					<li  class="test"><a href="<?= base_url(); ?>"><i class="fa fa-home" aria-hidden="true"></i></a></li>
					<li><a href="<?= base_url(); ?>/nosotros">NOSOTROS</a></li>
					<li><a  class="clsProducto">PRODUCTOS</a></li>
					<li><a href="<?= base_url(); ?>/tienda/categoria/harinas">Harinas</a></li>
					<li><a href="<?= base_url(); ?>/tienda/categoria/frutas-deshidratadas">Frutas Deshidratadas</a></li>
					<li><a href="<?= base_url(); ?>/contacto">CONTACTO</a></li>
				</ul>
		</div>
	<!--/nav-->	