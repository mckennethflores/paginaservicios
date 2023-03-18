
<?php require_once("head.php"); ?>

<?php

$mensajeValidacion = '';
$mensajeValidacionSuccess = '';

if(isset($_POST["grabar"]))
{    
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
     $tituloMensaje = 'Transporte Bella Luz - Pagina Web';
     $título = $tituloMensaje;
     
     // mensaje
     $mensaje = '
     <html>
     <head>
       <title>Transporte Bella Luz</title>
     </head>
     <body>
       <p>¡Transporte Bella Luz!</p>
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
$correoEmpresa = ' <Transporte Bella Luz123@gmail.com>';
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

    </div> 
    <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/2.jpg" alt="First slide">

    </div>
    <div class="carousel-item ">
      <img class="d-block w-100" src="img/slide/3.jpg" alt="First slide">

    </div>


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
          </div>          
          <!-- /mas -->
      </div>
</section>

<!-- Galeria de Proyectos -->
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
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-3 wow animated animated2 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">Garantía</h2>
            <hr />
            <p class="descProyectos">Te ofrecemos la tranquilidad, calidad y la satisfacción</p>
          
        </div>
    </div>
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 project project-4 wow animated animated2 fadeInLeft">
      <div class="project-hover">
          <h2 class="tituloProyectos">Compromiso</h2>
            <hr />
            <p class="descProyectos">Respaldamos con excelencia y la satisfacción del cliente</p>
          
        </div>
    </div>
    <div class="clearfix"></div>
</div>
<!-- /Galeria de Proyectos -->
<br>
<br>


<!-- Redes Sociales Video -->
<section id="nosotros" class="album fondo">
        <div class="container">
         
   <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
     <h4 class="text-center tamanotitulo">REDES SOCIALES</h4>
    <br>
    <br>

   </div>
        <div class="row">
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

