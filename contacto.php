
<?php require_once("head.php"); ?>
<!-- Contenido -->
<!-- Validaciones -->
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
     
     $email = $_REQUEST['$email'];
 
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
       <p> SOLICITUD DESDE SU PAGINA WEB ¡Transporte Bella Luz!</p>
=======
       <title>HIDROSERVICE</title>
     </head>
     <body>
       <p> SOLICITUD DESDE SU PAGINA WEB ¡HIDROSERVICE!</p>
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
       <table border="1" cellpadding="1">
         <tr>
           <th>Nombre</th>      
          <th>Email</th>
		   <th>Telefono</th>
		   		   
		  
		   <th>Comentario</th>
		  

         </tr>
         <tr>
           <td>'. $nombre .'</td>
           <td>'. $email .'</td>
           
       
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
<<<<<<< HEAD
$nombreEmpresa = 'Transporte Bella Luz';
$correoEmpresa = ' <Transporte Bella Luz123@gmail.com>';
=======
$nombreEmpresa = 'Hidroservice';
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

$mensajeValidacionSuccess .= 'Solicitud enviada con éxito <br/>';
     
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
<section class="contenedoHeader">
	<div class="container tituloNavegacion">
		
		<h2>CONTÁCTENOS</h2>
	</div>
	
</section>
 
<section class="container">
  <div class="contInt conConsulta">
   
    <div class="row">
      <div class="col-xs-12 col-sm-7">
        <div class="cont_left">
          <p>Si tiene alguna duda o consulta sobre el manejo de un producto, por favor asegúrese de incluir una descripción detallada.</p>                

          <div role="form" class="wpcf7" id="wpcf7-f161-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>
 
<form action="contacto.php" method="post">
	  <div class="form-group">
		<label for="exampleInputPassword1">Nombre</label>
		<input type="text" required class="form-control" name="nombre" placeholder="Nombre">
	  </div>	
	  <div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" required class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email">
 
	  </div>
	  <div class="form-group">
		<label for="exampleInputPassword1">Telefono</label>
		<input type="text" required class="form-control" name="telefono_fijo" placeholder="Telefono">
	  </div>	  
	  <div class="form-group">
		<label for="exampleFormControlTextarea1">Mensaje</label>
		<textarea class="form-control" required name="comentario" placeholder="Mensaje" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary btnenviar">Enviar Mensaje</button>
	  <input type="hidden"  name="grabar" value="si">	   
	</form>

</div>   
        </div>
      </div>
      <div class="col-xs-12 col-sm-5">
        <div class="conCont esp">
                      <h2 class="phone_n">Números telefónicos</h2>
<ul>
<<<<<<< HEAD
<li>920 610 632</li>
=======
<li>984 288 065</li>
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
 
<!--<li>(51) 988 473 906</li>
<li>(51) 981 376 406</li>-->
</ul>

<h2 class="horario_n">Horario de atención</h2>
<ul>
<li>Lunes a Viernes<br>
9:00 am 5:30 pm</li>
<li>Sábados<br>
9:00 am 12:30 pm</li>
</ul>
<h2 class="dir_n">Dirección</h2>
<ul>
<<<<<<< HEAD
<li>Dirección: Av. Alfredo Mendiola 4148, Independencia 15311, Lima, Perú</li>
</ul>
 
<!-- <h2>Números de cuenta</h2>
<ul>
<li>Detracción - Banco de la Nación Soles: 00-000-638692 CCI. 00219200163834514837
</li>
 
 <li>BCP soles: 000-0000000-0-000</li>
</ul> -->
=======
<li>C.C boulevar ferretero Dansey 354 Tienda H 17 cercado de lima</li>
</ul>
 
<h2>Números de cuenta</h2>
<ul>
<li>Detracción - Banco de la Nación Soles: 00-000-638692 CCI. 00219200163834514837
</li>
<!--<li>BCP soles: 191-1777426-0-326</li> -->
 <li>BCP soles: 000-0000000-0-000</li>
</ul>
>>>>>>> 9041874da2604e6b02830c6ba122e16f972a1fb0
                  </div>        
      </div>
    </div>
  </div>    
</section>
 
<!-- end /Contenido -->

<?php require_once("footer.php"); ?>