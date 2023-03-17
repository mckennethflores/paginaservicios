<?php

$arrModulo = $data['slider'];
/* dep( $arrSlider); */


$arrBane = $data['banner'];
$arrCate = $data['categoria'];


$arrCateTres = $data['categoriatres'];
$arrProductos = $data['productos'];

$arrProductosDesi = $data['productos_desi'];

headerTienda($data); 


?>


      <!-- Slide -->
      <section id="divSlider" class="container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="3" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
			</ol>
			<!-- Wrapper for slides -->
			<div class="carousel-inner">
                <div class="item active">
                    <img src="<?= media(); ?>/tienda/img/slide3.jpg" width="100%" height="285" alt="<?= NOMBRE_EMPRESA ?>" title="<?= NOMBRE_EMPRESA ?>" />
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item ">
                    <img src="<?= media(); ?>/tienda/img/slide1.jpg" width="100%" height="285" alt="<?= NOMBRE_EMPRESA ?>" title="<?= NOMBRE_EMPRESA ?>" />
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="<?= media(); ?>/tienda/img/slide2.jpg" width="100%" height="285" alt="<?= NOMBRE_EMPRESA ?>" title="<?= NOMBRE_EMPRESA ?>" />
                    <div class="carousel-caption">
                    </div>
                </div>
			</div>
			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>	
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
    </section>
 <!-- /Slide -->

 <div class="container-fluid fondoBackground paddinbBienvenida">
	<div class="row ">
		<div class="col-md-12 contenidoBienvenida">
			<h1 class="text-white text-center">Bienvenido a Agroenergy Foods Perú</h1>
			<p class="text-white text-center">Somos una empresa peruana dedica al cultivo, procesamiento y comercialización de superalimentos de gran biodiversidad de nuestro territorio peruano. Seguimos la cadena alimentaria desde la cosecha del fruto hasta la transformación final del producto, cuidando así la inocuidad alimentaria y calidad para nuestros consumidores finales.</p>
			
			
			<ul class="redesSocialesBienvenida">
					 <li> <a href="https://api.whatsapp.com/send?phone=51918515262&amp;text=Quiero%20informacion%20sobre%20los%20productos%20naturales,%20mi%20nombre%20es:"> <img src="<?= media(); ?>/tienda/img/whatsapp.png" width="32" alt="<?= NOMBRE_EMPRESA ?>"> 918 515 262</a></li>
					 <li> <a href="https://api.whatsapp.com/send?phone=51930189065&amp;text=Quiero%20informacion%20sobre%20los%20productos%20naturales,%20mi%20nombre%20es:"> <img src="<?= media(); ?>/tienda/img/whatsapp.png" width="32" alt="<?= NOMBRE_EMPRESA ?>"> 930 189 065</a></li>
					 <li> <a href="mailto:ventas@agroenergyfoods.com"> <i class="fa fa-envelope mailBienvenida" aria-hidden="true"></i> ventas@agroenergyfoods.com</a></li>
			</ul>
		</div>
	</div>
	<div class="row contenidoDos">
		<div class="col-md-3"></div>
		<div class="col-md-4">
		<ul style="list-style:none">
		<li class="contacto " > <a class=" btn btn-warning" href="<?= base_url(); ?>/contacto"> <img src="img/whatsapp.png" width="32" alt="">Contacto</a></li>
		<li class="consultaXWsp"> <a class=" btn btn-success" target="_blank" href="https://api.whatsapp.com/send?phone=51930189065&amp;text=Quiero%20informacion%20sobre%20los%20productos%20naturales,%20mi%20nombre%20es:"> <img src="img/whatsapp.png" width="32" alt="">Consultar por WhatsApp</a></li>
		</ul>
		</div>
		<div class="col-md-2"></div>
		<div class="col-md-3"></div>
	</div>
</div>
<!-- Bienvenida -->

<div class="container divProductos">
		<div class="row">
			<h2 class="text-center"><?= $arrProductos[0]['nombrecategoriatres']?></h2>
			<h3 class="text-center"> <?= $arrProductos[0]['nombrecategoriatres']?></h3>
		</div>
		<br>
	<div class="container-fluid" id="inventory">
		<div class="row">
            <?php

            for($p=0; $p < count($arrProductos); $p++){

                if(count($arrProductos[$p]['images']) > 0 ){
                    $portada = $arrProductos[$p]['images'][0]['url_image'];
                }else{
                    $portada = media().'/images/uploads/product.png';
                }
            ?>
			<div class="col-md-3 productoOrganico">
				<div class="card">
            		<div class="ribbon"><span>Nuevo</span></div>
					<div class="flex-items">
						<a href="<?= $portada ?>?w=700" data-lightbox="<?= $arrProductos[$p]['nombre'] ?>" data-title="<?= $arrProductos[$p]['nombre'] ?>"><img class="img-fluid"  width="100%" src="<?= $portada ?>?w=400"  alt="<?= $arrProductos[$p]['nombre'] ?>" ></a>
					</div>
						<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"><h3 class="titulo_producto" ><?= $arrProductos[$p]['nombre'] ?></h3></a>
						<p><?= $arrProductos[$p]['resumen'] ?></p>
						<a href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>"><button class="btn view-btn">Ver Producto</button></a>
				</div>
			</div>
		<?php
		}
		?>
		</div>
	</div>
</div>
<!-- Categorias -->

<div class="container divProductos">
		<div class="row">
			<h2 class="text-center"><?= $arrProductosDesi[0]['nombrecategoriatres']?></h2>
			<h3 class="text-center"> <?= $arrProductosDesi[0]['nombrecategoriatres']?></h3>
		</div>
		<br>
	<div class="container-fluid" id="inventory">
		<div class="row">
            <?php

            for($p=0; $p < count($arrProductosDesi); $p++){

                if(count($arrProductosDesi[$p]['images']) > 0 ){
                    $portada = $arrProductosDesi[$p]['images'][0]['url_image'];
                }else{
                    $portada = media().'/images/uploads/product.png';
                }
            ?>
			<div class="col-md-3 productoOrganico">
				<div class="card">
            		<div class="ribbon"><span>Nuevo</span></div>
					<div class="flex-items">
						<a href="<?= $portada ?>?w=700" data-lightbox="<?= $arrProductosDesi[$p]['nombre'] ?>" data-title="<?= $arrProductosDesi[$p]['nombre'] ?>"><img class="img-fluid"  width="100%" src="<?= $portada ?>?w=400"  alt="<?= $arrProductosDesi[$p]['nombre'] ?>" ></a>
					</div>
						<a href="<?= base_url().'/tienda/producto/'.$arrProductosDesi[$p]['ruta']; ?>"><h3 class="titulo_producto" ><?= $arrProductosDesi[$p]['nombre'] ?></h3></a>
						<p><?= $arrProductosDesi[$p]['resumen'] ?></p>
						<a href="<?= base_url().'/tienda/producto/'.$arrProductosDesi[$p]['ruta']; ?>"><button class="btn view-btn">Ver Producto</button></a>
				</div>
			</div>
		<?php
		}
		?>
		</div>
	</div>
</div>
<!-- Categorias -->

<div class="container">
      <div class="row">
        <div class="sombra col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="form-contact bg_blanco clearfix">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <span class="titulos tit-int">FORMULARIO DE CONTACTO</span>
            </div>

          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 clearfix">
              <ul class="dats">
            
                <li class="c-tel"><br>Celular: <a href="tel:<?= PAIS.CELULAR1 ?>"><?= PAIS.' '.CELULAR1 ?></a>  | <a href="tel:<?= PAIS.CELULAR2 ?>"><?= PAIS.' '.CELULAR2 ?></a> </li>
                <li class="c-mail">Correo electrónico<br><a href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></li> 

              </ul>            
          </div>
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12 agotado">
                  <span class="pull-left"></span>
                </div>
              <form class=" contacto " id="fcontacto"   method="post">		  
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bot20">
                    <input name="nombres"  placeholder="NOMBRE*" type="text"required>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 bot20">
                    <input name="telefono_movil" aria-describedby="Telefono"  placeholder="TELEFONO*" type="text"required>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bot20">
                    <input  name="email"  aria-describedby="emailHelp"  placeholder="E-MAIL*" type="text" required>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 bot20">
                    <textarea   name="mensaje"  placeholder="MENSAJE*" rows="8" required></textarea>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group">
                  <div id="estado"></div> <br>
                  <button type="button" class="btn btn-success enviar">ENVIAR CONSULTA</button>    
                  </div>  		
              </form>
            </div>
          </div>
        </div>
      </div>
  </div>
<!-- Contacto -->
 <?php

footerTienda($data); 

?>