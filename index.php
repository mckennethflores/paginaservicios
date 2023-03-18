
<?php require_once("head.php"); ?>
<<<<<<< HEAD

=======
 <!--
<section class="slider margentopscroll " >
  <div class"row topspace slider-hidden slider ">
          <div class"col-xs-12 col-md-12">
      <div id="amazingslider-1" style="display:block;position:relative;margin:16px auto 56px; width: 100% !important;">    
   
          <ul class="amazingslider-slides" style="display:none;">
              <li><img src="img/slide/slider.png" width="100%" /></li>
              <li><img src="img/slide/slider2.png"   width="100%" /></li>
              <li><img src="img/slide/slider3.png"   width="100%"/></li>
          </ul>
      </div>
      </div>
  </div>
</section>   -->

<!-- Validaciones -->
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
<?php

$mensajeValidacion = '';
$mensajeValidacionSuccess = '';

if(isset($_POST["grabar"]))
<<<<<<< HEAD
{    
=======
{
 

    
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
	if( filter_var( trim($_POST["nombre"] ) ) == false)
	{
	 $mensajeValidacion .= 'El campo nombre es obligatorio <br/>';
	}
 
	if( filter_var( trim($_POST["telefono_fijo"] ) ) == false)
	{
	 $mensajeValidacion .= 'El campo telefono es obligatorio <br/>';
	}  
 
 
	if( filter_var( trim($_POST["comentario"] ) ) == false)
	{
	 $mensajeValidacion .= 'El campo comentario es obligatorio <br/>';
	}  

   if($mensajeValidacion == '')
   {
   
     //
     $nombre = $_REQUEST['nombre'];
 
     $telefono_fijo = $_REQUEST['telefono_fijo'];
 
	 $comentario = $_REQUEST['comentario']; 
	 

     // Varios destinatarios
     $para  = 'oswaldoelflori@gmail.com' . ''; // atención a la coma    ||  'reservas@taxirgmperu.com'
     /*$ConCopiaDos = ', ';
     $para .= $ConCopiaDos;*/
     
     // título del mensaje
<<<<<<< HEAD
     $tituloMensaje = 'Transporte Bella Luz - Pagina Web';
=======
     $tituloMensaje = 'HIDROSERVICE - Pagina Web';
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
     $título = $tituloMensaje;
     
     // mensaje
     $mensaje = '
     <html>
     <head>
<<<<<<< HEAD
       <title>Transporte Bella Luz</title>
     </head>
     <body>
       <p>¡Transporte Bella Luz!</p>
=======
       <title>HIDROSERVICE</title>
     </head>
     <body>
       <p>¡HIDROSERVICE!</p>
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
       <table border="1" cellpadding="1">
         <tr>
           <th>Nombre</th>      
         
		   <th>Telefono</th>
		   		   
		  
		   <th>Comentario</th>
		  

         </tr>
         <tr>
           <td>'. $nombre .'</td>
       
		   <td>'. $telefono_fijo .'</td>
		 
		   <td>'. $comentario .'</td>      
         </tr>
         
       </table>
     </body>
     </html>
     ';
     
     
     // $mensaje =  $nombre;  
// Para enviar un correo HTML, debe establecerse la cabecera Content-type
$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Cabeceras adicionales
//$cabeceras .= 'To: Mckenneth Flores <informes@frsystem.com.pe>, Kelly <kelly@example.com>' . "\r\n";
// Recordatorio <reservas@taxirgmperu.com>
$nombreEmpresa = '';
<<<<<<< HEAD
$correoEmpresa = ' <Transporte Bella Luz123@gmail.com>';
=======
$correoEmpresa = ' <hidroservice123@gmail.com>';
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
$cabeceras .= 'From: '. $nombreEmpresa . $correoEmpresa . "\r\n";
//Enviar con copia a
/*$ConCopia = 'mflores_rivera@hotmail.com';
$cabeceras .= 'Cc: '. $ConCopia .'' . "\r\n";*/
//Copia Oculta
$copiaOculta = 'informes@frsystem.com.pe';
$cabeceras .= 'Bcc: '. $copiaOculta . "\r\n";

// Enviarlo
mail($para, $título, $mensaje, $cabeceras);

$mensajeValidacionSuccess .= 'Solicitud de reserva enviada con éxito <br/>';
     
     //
   }
 
}
?>

<?php
if($mensajeValidacion != ''){
  ?>
 
 <div class="alert alert-danger">
 <button type="button" class="close" data-dismiss="alert" >x</button>
  <?php echo $mensajeValidacion ?> </div>
  <?php
}
if($mensajeValidacionSuccess != ''){
  ?>
 
 <div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert" >x</button>
  <?php echo $mensajeValidacionSuccess ?> </div>
  <?php
}

?>
<!-- / End Validaciones -->
<style>
    section.marginVideoNuevo {
    margin-top: 15%;
}
</style>
<section class="slider margentopscroll " >
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/slide/1.jpg" alt="First slide">
<<<<<<< HEAD

    </div> 
    <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/2.jpg" alt="First slide">

    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/3.jpg" alt="First slide">

    </div>

=======
  <!--    <div class="carousel-caption d-none d-md-block">
  <p >Soluciones en ingenería eléctrica</p>
        <h1 class="tituloSlide animated fadeInRight">HIDROSERVICE</h1>
    </div>-->
    </div> 
    <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/2.jpg" alt="First slide">
  <!--    <div class="carousel-caption d-none d-md-block">
  <p >Soluciones en ingenería eléctrica</p>
        <h1 class="tituloSlide animated fadeInRight">HIDROSERVICE</h1>
    </div>-->
    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/3.jpg" alt="First slide">
  <!--    <div class="carousel-caption d-none d-md-block">
  <p >Soluciones en ingenería eléctrica</p>
        <h1 class="tituloSlide animated fadeInRight">HIDROSERVICE</h1>
    </div>-->
    </div>
 <!--     <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/4.jpg" alt="First slide">
    </div>	-->
  <!--    <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/slider3.png" alt="Third slide">
         <div class="carousel-caption d-none d-md-block">
            
       <h2 class="titulo2Slide animated2 fadeInRight2">
       <p> La confianza de asumir tus<br>
        retos con el mejor equipo</p>
<br>

     </h2>
      <a href="nosotros.php" class="btn btn-primary btnMargen btn2Slide"> <i class="fas fa-chevron-circle-down"></i> Ver más</a>  
      </div>
    </div> -->   

    <!--<div class="carousel-item">
      <img class="d-block w-100" src="img/slide/slider2.png" alt="Second slide">
         <div class="carousel-caption d-none d-md-block">
    <p class="animated fadeInRight">Soluciones en ingenería eléctrica</p>
        <h1 class="tituloSlide animated fadeInRight">HIDROSERVICE</h1>
    </div>
    </div> -->
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>  

<!-- Servicios -->
<<<<<<< HEAD

<section class="quienessomos">
  <div class="espacio"></div>
  <h2  class="text-center titH2">Transporte Terrestre de Carga y Logística</h2>
  <p class="text-center">Contamos con una amplia variedad de opciones de vehículos,<br> desde carga pesada hasta liviana, estamos preparados para realizar entregas nacionales e internacionales.<br>
  Además, nuestros servicios de almacenamiento y distribución en nuestras instalaciones, <br>así como la consolidación y desconsolidación de cargas,<br>
    nos permiten ofrecer soluciones completas para optimizar la cadena de suministro de nuestros clientes.<br>
  </p>
  <div class="espacio"></div>
</section>
  
<section id="nosotros" class="4bloques album fondo fondo_servicios">
  <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
    <h2 class="text-center text-white">¿Qué hacemos?</h2>
  </div>  
  <div class="container">
    <div class="row serviciosEquipos">
        <div class="col">
          <div class="span imgs">
            <a href="servicios.php"><div class="serviciosTitulo">Transporte terrestre</br> de <span class="anim1"></span></div></a>
          </div>
          <div class="text-center pserv">
            <a href="servicios.php"><figure><img class="img-center" src="img/transporte_de_carga/a_transporte_terrestre_de_carga.png" alt="piscina-Transporte Bella Luz"/></figure></a>
          </div>
        </div>
        <div class="col">
          <div class="span imgs">
            <a href="servicios.php"><div class="serviciosTitulo ">Almacenamiento y  <br><span class="anim2"></span></div></a>
          </div>
          <div class="text-center pserv">
            <a href="servicios.php"><figure><img class="img-fluid" src="img/transporte_de_carga/b_almacenamiento_y_distribucion.png" alt="PILETAS ORNAMENTALES"/></figure></a>
          </div>
        </div>

        <div class="col">
          <div class="span imgs">
            <a href="servicios.php"><div class="serviciosTitulo ">Consolidación y  desconsolidación<br> <span class="anim3"></span></div></a>
          </div>
          <div class="text-center pserv">
            <a href="servicios.php"><figure><img class="img-fluid" src="img/transporte_de_carga/c_consolidacion_y_desconsolidacion.png" /></figure></a>
          </div>
        </div>

        <div class="col">
          <div class="span imgs"> 
            <a href="servicios.php"><div class="serviciosTitulo ">Asesoramiento y planificación</br><span class="anim4"></span></div></a>
          </div>
          <div class="text-center pserv">
            <a href="servicios.php"><figure><img class="img-fluid" src="img/transporte_de_carga/d_asesoramiento_y_planificacion.png" /></figure></a>
          </div>
        </div>

        <div class="col">
          <div class="span imgs">       
          <a href="servicios.php"><div class="serviciosTitulo">Seguridad de la</br><span class="anim5"></span></div></a>
          </div>
          <div class="text-center pserv">
          <a href="servicios.php"><figure><img class="img-fluid" src="img/transporte_de_carga/e_seguridad_de_la_carga.png" /></figure></a>
          </div>
        </div>

    </div>
  </div>
 
 </section>

=======
 

 <section class="quienessomos">
 <div class="espacio"></div>
 <h2  class="text-center titH2">Somos especialistas en construcción de Piscinas y Fuentes de Agua</h2>
<p class="text-center">Somos expertos en el diseño y construcción de piscinas y fuentes de agua en Perú. <br>
Nuestro principal objetivo es la plena satisfacción de nuestros clientes<br>
por un trabajo bien realizado, para ello, disponemos de los mejores profesionales, técnicos, productos y servicios. <br>
</p>
<div class="espacio"></div>

<div class="container">
<div class="row">
 	<div class="col-md-12">
		 <h4 class="text-center">SISTEMAS DE ABASTECIMIENTO DE AGUA</h4>
	</div>
</div>
</div>

<div class="espacio"></div>
 </section>
  
 <section id="nosotros" class="4bloques album fondo fondo_servicios">
      <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
      <h2 class="text-center text-white">¿Qué hacemos?</h2>
      </div>
 
<div class="container">
  <div class="row serviciosEquipos">
      <div class="col">
        <div class="span imgs">
        <a href="servicios.php"><h3 class="serviciosTitulo">PISCINAS</h3></a>
        </div>
        <div class="text-center pserv">
        <a href="servicios.php"><figure><img class="img-center" src="img/piscina-hidroservice.png" alt="piscina-hidroservice"/></figure></a>
        </div>
      </div>
      <div class="col">
        <div class="span imgs">
        <a href="servicios.php"><h3 class="serviciosTitulo ">PILETAS <br><span class="anim2"></span></h3></a>
        </div>
        <div class="text-center pserv">
        <a href="servicios.php"><figure><img class="img-fluid" src="img/PILETAS-ORNAMENTALES.png" alt="PILETAS ORNAMENTALES"/></figure></a>
        </div>
      </div>

      <div class="col">
        <div class="span imgs">
        <a href="servicios.php"><h3 class="serviciosTitulo ">ELECTROBOMBAS <br> <span class="anim3"></span></h3></a>
        </div>
        <div class="text-center pserv">
        <a href="servicios.php"><figure><img class="img-fluid" src="img/electrobombas-en-general.png" /></figure></a>
        </div>
      </div>

      <div class="col">
        <div class="span imgs"> 
        <a href="servicios.php"><h3 class="serviciosTitulo ">SISTEMAS CONTRA <br><span class="anim4"></span></h3></a>
        </div>
        <div class="text-center pserv">
        <a href="servicios.php"><figure><img class="img-fluid" src="img/sistemas-contra-incendio.png" /></figure></a>
        </div>
      </div>

      <div class="col">
        <div class="span imgs">       
        <a href="servicios.php"><h3 class="serviciosTitulo anim5">HIDROMASAJES</h3></a>
        </div>
        <div class="text-center pserv">
        <a href="servicios.php"><figure><img class="img-fluid" src="img/HIDROMASAJES.png" /></figure></a>
        </div>
      </div>

  </div>
</div>
 
 </section>
<!--
<section id="nosotros" class="album fondo">
        <div class="container">
         
   <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
     <h1 class="text-center">¿Qué hacemos?</h1>
    <br>
    <br>

   </div>
          <div class="row">

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/servicios/electro-regsa.jpg">
<h3>SERVICIOS</h3>
                <div class="card-body">
                

<figcaption><div class="post-main wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
  <h4 class="descripcion"> 
    El compromiso con nuestros clientes, nos impulsa a brindar servicios de calidad y acorde a las exigencias del mercado. </h4>
    
</div></figcaption>
<center>
<a href="nuestros-servicios.php"class="btn btn-primary btnMargen" > <i class="fas fa-chevron-circle-down"></i> Ver más</a>
</center>
                </div>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top"  src="img/servicios/electro-regsa2.jpg" >
                <h3>PRODUCTOS</h3>

                <div class="card-body">
                  <p class="card-text"></p>
<figcaption><div class="post-main wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
    <h4 class="descripcion"> 
    Contamos con una cartera de productos, sencilla de adoptar por empresas de diversos rubros. </h4>
 
</div></figcaption>
<center>
<a href="servicios.php"class="btn btn-primary btnMargen" > <i class="fas fa-chevron-circle-down"></i> Ver más</a>
</center>
                </div>                
                
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" src="img/servicios/electro-regsa3.jpg" >
                <h3>PROPUESTA DE VALOR</h3>
                <div class="card-body">
                  <p class="card-text"></p>
<figcaption><div class="post-main wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
    <h4 class="descripcion"> 
   Contamos con certificaciones que avalan la calidad de nuestro servicio basadas en normas internacionales.</h4>
 
</div></figcaption>
<center>
<a href="propuesta-de-valor.php"class="btn btn-primary btnMargen" > <i class="fas fa-chevron-circle-down"></i> Ver más</a>
</center>
                </div> 

              
              </div>
            </div>

       
          </div>


        </div>
</section> -->
<!-- /Servicios -->
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
<br>
<section class="vermasservicios ">
    <div class="container">
        <div class="titH1 wow zoomIn">
        <h4 class="text-center tamanotitulo">OTORGAMOS:</h4>
            <br>
            <br>
      </div> 
          <!-- mas -->
          <div class="row">
<<<<<<< HEAD
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 centrarBloque">
              <div class="h1Rip cont wow zoomIn" style="visibility: visible; animation-name: zoomIn;">                                
                <div class=" center botBenef wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                  <a class="titH3 waves-effect waves-light btn-large botonr boti" href="#">
                    <h3><i class="fa fa-check" aria-hidden="true"></i> SERVICIO PERSONALIZADO</h3></a> <br>

                  <a class="titH3 waves-effect waves-light btn-large botonr boti" href="#">
                    <h3><i class="fa fa-check" aria-hidden="true"></i> COMPROMISO CON LA SEGURIDAD</h3></a> <br>

                  <a class="titH3 waves-effect waves-light btn-large botonr boti" href="#">
                    <h3><i class="fa fa-check" aria-hidden="true"></i> ASESORAMIENTO Y PLANIFICACIÓN LOGÍSTICA</h3></a> <br>
                </div>  
              </div>
            </div>
=======
              <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-offset-2 col-lg-offset-2 centrarBloque">
                              <div class="h1Rip cont wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                
                                      <div class=" center botBenef wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
                                          <a class="titH3 waves-effect waves-light btn-large botonr boti" href="#">
      <h3><i class="fa fa-check" aria-hidden="true"></i> Certificado de Garantía</h3></a> <br>

                                          <a class="titH3 waves-effect waves-light btn-large botonr boti" href="#">
      <h3><i class="fa fa-check" aria-hidden="true"></i> Certificado Protocolar</h3></a> <br>

                                          <a class="titH3 waves-effect waves-light btn-large botonr boti" href="#">
      <h3><i class="fa fa-check" aria-hidden="true"></i> Certificado de Operatividad</h3></a> <br>
                                      </div>  
                              </div>
                </div>
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
          </div>          
          <!-- /mas -->
      </div>
</section>

<!-- Galeria de Proyectos -->
<<<<<<< HEAD
<div class="container-fluid">
    <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated animated4 fadeInLeft">
      <div class="project-hover">
        <h2 class="tituloProyectos" >Seguridad</h2>          
          <hr /> 
          <p class="descProyectos">Tu inversión está protegida y tu satisfacción es nuestra prioridad</p>            
      </div>
  </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-2 wow animated animated3 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">Confianza</h2>
            <hr/>
            <p class="descProyectos">Haremos todo lo posible por resolver cualquier problema que puedas tener</p>            
=======
 
<div class="container-fluid">
    <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
     <h4 class="text-center tamanotitulo">PROYECTOS EJECUTADOS</h4>
          <br>
          <br>
    </div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project wow animated animated4 fadeInLeft">
        <div class="project-hover">
          <h2 class="tituloProyectos" >PISCINA</h2>
            
            <hr /> 
            <p class="descProyectos">Urb. El Golf de Huampani</p>
            
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-2 wow animated animated3 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">SISTEMA DE PRESIÓN</h2>
            <hr/>
            <p class="descProyectos">Sistema de presión constante</p>
            
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-3 wow animated animated2 fadeInLeft">
      <div class="project-hover">
<<<<<<< HEAD
          <h2 class="tituloProyectos">Garantía</h2>
            <hr />
            <p class="descProyectos">Te ofrecemos la tranquilidad, calidad y la satisfacción</p>
=======
          <h2 class="tituloProyectos">TABLERO DE PRESIÓN</h2>
            <hr />
            <p class="descProyectos">Tablero de presión constante</p>
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
          
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-4 wow animated animated2 fadeInLeft">
      <div class="project-hover">
<<<<<<< HEAD
          <h2 class="tituloProyectos">Compromiso</h2>
            <hr />
            <p class="descProyectos">Respaldamos con excelencia y la satisfacción del cliente</p>
          
        </div>
    </div>
=======
          <h2 class="tituloProyectos">SURTIDOR DE VELO</h2>
            <hr />
            <p class="descProyectos">Venta e instalación de surtidor de velo</p>
          
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-5 wow animated animated2 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">PILETA ORNAMENTAL 1</h2>
            <hr />
            <p class="descProyectos">Av. Los Quechuas, Salamanca - Ate</p>
          
        </div>
    </div>    
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-6 wow animated animated2 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">PILETA ORNAMENTAL 2</h2>
            <hr />
            <p class="descProyectos">Av. Los Quechuas, Salamanca - Ate</p>
          
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-7 wow animated animated2 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">PILETA ORNAMENTAL 3</h2>
            <hr />
            <p class="descProyectos">Av. Los Quechuas, Salamanca - Ate</p>
          
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-8 wow animated animated2 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">PILETA ORNAMENTAL 4</h2>
            <hr />
            <p class="descProyectos">Av. Los Quechuas, Salamanca - Ate</p>
          
        </div>
    </div>       
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
    <div class="clearfix"></div>
</div>
<!-- /Galeria de Proyectos -->
<br>
<br>
<<<<<<< HEAD
=======
<!-- Clientes -->
<!-- 
<section class="marcas cleaner">

 <div class="container">
   <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
     <h1 class="text-center">Nuestros Clientes</h1>
     <p class="text-center nuestros-clientes">
Entre las principales empresas que han confiado en nuestro trabajo se encuentran
     </p>
   </div>
     <div class="carrMarcas cleaner">
  <div class="slider-area">
    <div class="slider-active owl-carousel">
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/1.png" title="Stark" alt="Stark"></a>
      </div>
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/2.png" title="Stark" alt="Stark"></a>
      </div>      
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" target="_blank" href="http://new.abb.com/south-america"><img src="img/logos/3.png" title="Stark" alt="Stark"></a>
      </div>  
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/4.png" title="Stark" alt="Stark"></a>
      </div>
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/5.png" title="Stark" alt="Stark"></a>
      </div>
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/6.png" title="Stark" alt="Stark"></a>
      </div>
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/7.png" title="Stark" alt="Stark"></a>
      </div>
      <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/8.png" title="Stark" alt="Stark"></a>
      </div>     
     <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/9.png" title="Stark" alt="Stark"></a>
      </div>
     <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/10.png" title="Stark" alt="Stark"></a>
      </div>
     <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/11.png" title="Stark" alt="Stark"></a>
      </div>
     <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/12.png" title="Stark" alt="Stark"></a>
      </div>
     <div class="article wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
        <a title="Stark" href=""><img src="img/logos/13.png" title="Stark" alt="Stark"></a>
      </div>                     
    </div>
  </div>

  <div class="owl-controls">
   <div class="owl-dots" style="margin-top: 2%;">
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
<br>
<p></p>

</section> -->
<!-- /Clientes -->
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0


<!-- Redes Sociales Video -->
<section id="nosotros" class="album fondo">
        <div class="container">
         
   <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
     <h4 class="text-center tamanotitulo">REDES SOCIALES</h4>
    <br>
    <br>

   </div>
        <div class="row">
<<<<<<< HEAD
            <div class="col-md-12">
              <div class="card mb-4 box-shadow">
              <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FTransportesbellaluz&tabs=timeline&width=338&height=374&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=3210602238964926" width="338" height="374" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
           </div>
            </div>
        </div>
    </div>        
</section>  
  <!-- /Redes sociales -->
  <div class="espacio"></div>
  <div class="espacio"></div>

<?php require_once("contact_us.php"); ?>
<?php require_once("footer.php"); ?>

=======
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
 <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FHidroservice-215062545716339&tabs=timeline&width=338&height=374&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="338" height="374" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
              </div>
            </div>

            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
 <a class="twitter-timeline" href="https://twitter.com/Hidroservice2?ref_src=twsrc%5Etfw">Tweets by Hidroservice2</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
              </div>
            </div>

            <div class="col-md-4">
               <div class="card mb-4 box-shadow">
                 <iframe width="338" height="374" src="https://www.youtube.com/embed/D1MX90gAXaA?rel=0&amp;start=3" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>                
               </div>
            </div>
        </div>
    </div>
        
</section>

    <section class="marginVideoNuevo">
        <div class="row">
            <div class="col-md-12">
              <div class="card mb-4 box-shadow">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/mgzLAvRdxLU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
            </div>
        </div>
    </section>
<!-- /Redes sociales -->


<div class="espacio"></div>
<div class="espacio"></div>
 <!-- Contactenos mas -->
<section class="contactenos" >
        <div class="container">
   <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
     <h2 class="text-center2">CONTACTENOS</h2>
 
	<div class="triangulo-equilatero-bottom">
	</div>
 <div id="formularioContacto">

<form action="index.php" method="post">
	  <div class="form-group">
		<label for="exampleInputPassword1">Nombre</label>
		<input type="text" required class="form-control" name="nombre" id="exampleInputPassword1" placeholder="Nombre">
	  </div>	
	  <div class="form-group">
		<label for="exampleInputEmail1">Celular</label>
		<input type="text" required class="form-control" name="telefono_fijo" id="exampleInputEmail1"  placeholder="Celular">
 
	  </div>
	  <div class="form-group">
		<label for="exampleFormControlTextarea1">Mensaje</label>
		<textarea class="form-control" required id="exampleFormControlTextarea1" name="comentario" placeholder="Mensaje" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary btnenviar">Enviar Mensaje</button>
	</form>

 </div>
   </div>
</div>
</section>

<!-- /Contactenos mas -->

<?php require_once("footer.php"); ?>
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
