<?php 
$titulo = "Rack en Peru - Paladdin del Rack ";
$nosotros = "active";

require_once('conexion.php'); 
require_once("header.php");
?>

 
 <div class="container">
	<ul class="breadcrumb">
		<li><a href="./">Inicio</a></li>
		<li> <a href="#">Productos</a></li>
		<li class="active"> Rack </li>
	</ul>
 	 <br>
 
	<div class="row">  
    
				<div class="col-md-12">				
								 
<!-- Categoria -->
<div class="container divProductos">
		<div class="row">
			<h3>RACK ARTICULADO <br><span>PARA TV PLASMA, LCD Y LED </span></h3>
			<p>RACK-ART530</p>
		</div>
		<br>

	<div class="container-fluid" id="inventory">
		<div class="row">
		<?php 
			$conexion = mysqli_connect($sv,$us,$ps,$db);
			mysqli_set_charset($conexion, "utf8");

			$peticion = "SELECT * FROM productos WHERE prod_filtro = 'ARTICULADO'  ORDER BY  prod_id   ASC ";	  	

			$resultado = mysqli_query($conexion, $peticion);

			while($fila = mysqli_fetch_array($resultado)){ ?>

	<!-- Repite producto -->		
	<div class="col-md-3">
				<div class="card">
					<div class="ribbon">
						<span>Nuevo</span>
					</div>

		<!-- Imagen -->    
				<div class="flex-items"> 
					<a href="<?php echo "img-productos/".$fila['prod_image']."?w=700"; ?>" data-lightbox="galeria" data-title="Imagen">
						<img class="img-fluid"  width="100%" src="<?php echo "img-productos/".$fila['prod_image']."?w=400"; ?>" alt="">
					</a>
				</div>
		<!-- Imagen -->  
		<a href="<?php echo "detalle-producto.php?id=".$fila['prod_id']; ?>"><h3 class="titulo_producto" ><?php $_N=substr($fila['prod_nom'],0,102).' '; echo $_N;?></h3></a>
						<p><?php $_D=substr($fila['prod_resumen'],0,110).' [...]'; echo $_D;?></p>
						
						<a href="#"><button class="btn view-btn">Solicitar</button>
				</div>
			</div>
	<!-- Repite producto -->
	<?php } ?>
		</div>
	</div>

 
</div>
<!-- Categoria -->
				</div>
				<!-- CIERRA LAS 12 COLUMNAS-->
	</div>
</div>
<div class="divisor"></div>
<?php require_once("footer.php"); ?>