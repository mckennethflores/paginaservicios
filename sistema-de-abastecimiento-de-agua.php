<?php require_once("head.php"); ?>
<!-- Contenido -->

<section class="contenedoHeader">
	<div class="container tituloNavegacion">
		
		<h2>PRODUCTOS</h2>
	</div>
	
</section>
 
<section class="container anexar">
  <div class="contInt">

<div class="row justify-content-start">

 <div class="col-md-4 esp-top">
	<?php require_once("menu-productos.php"); ?>
 </div>
 <div class="col-md-8 esp-left esp-top">
 	<h4 class="esp-top">SISTEMAS DE ABASTECIMIENTO DE AGUA</h4>
 	<p>Les ofrecemos una amplia variedad en:</p>


	 <ul class="esp-top" >
	 	<li>Electrobombas de todo tipo.</li>
	 	<li>Tanques hidroneumáticos convencionales y de membrana.</li>
	 	<li>Tableros eléctricos simples, para trabajo alternado y de presión constante.</li>
	 	<li>Todos estos equipos seleccionados para satisfacer los requerimientos de su proyecto</li>
	 </ul>
<br>

 	<img   src="img/sistema-de-abastecimiento-de-agua1.png" alt=""> 


 	<img  src="img/sistema-de-abastecimiento-de-agua2.png" alt=""> 

	
	


 </div>
</div>


<br>



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
<?php require_once("footer.php"); ?>