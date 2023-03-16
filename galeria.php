<?php require_once("head.php"); ?>
<!-- Contenido -->
<!--<section class="inicioBan parallax" style="background-image: url(img/nosotros.png); background-position: 50% 0; " >
 </section>-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/galeria-fluid-gallery.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

<section class="container anexar">
  <div class="contInt">
 <div class="row ">
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <div class="blox_element tt_text_content  ">
      <a href="./" target="_self">
        <i class="fas fa-undo-alt"></i> 
      <strong>REGRESAR </strong></a></div>
  </div>
 </div>

 <br>
 <div class=" gallery-container">

   <h1>Galeria de Imagenes</h1>
 	 <br>
 
	<img src="img/zandia.gif" alt="">
   
</div>





      </div>    
</section>
<!-- end /Contenido --> 
 





 <!-- Contactenos mas -->
<section class="contactenos" >
        <div class="container">
   <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
     <h2 class="text-center2">CONTACTENOS</h2>
 
	<div class="triangulo-equilatero-bottom">
	</div>
 <div id="formularioContacto">

	<form>
	  <div class="form-group">
		<label for="exampleInputPassword1">Nombre</label>
		<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nombre">
	  </div>	
	  <div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
 
	  </div>
	  <div class="form-group">
		<label for="exampleFormControlTextarea1">Mensaje</label>
		<textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="3"></textarea>
	  </div>
	  <button type="submit" class="btn btn-primary btnenviar">Enviar Mensaje</button>
	</form>

 </div>
   </div>
</div>
</section>

<!-- /Contactenos mas -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

<?php require_once("footer.php"); ?>