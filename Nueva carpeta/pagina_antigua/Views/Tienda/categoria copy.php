<?php

headerTienda($data); 
$arrProductos = $data['productos'];

/* dep($data['productos']); */
?>


<div id="sinFondo">
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
                        <li class="acceso"><a href="<?= base_url(); ?>/login">Acceso</a></li>
                        <li class="carrito"></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- /Cabecera -->
        <!-- Menu -->
       
        <!-- /Menu -->
<!-- Menu responsive -->
<div id="menu_responsive">
    
</div>
<!-- /Menu responsive -->
        
    </div>
    <!-- Slider -->
   
    <!-- /Slider -->
<!--     onmouseout="outBox()" onmouseover="openBox()" -->
    <!-- MENU CATEGORIA FLOTANTE -->
        <!--   Categoria Flotante -->
      
    <!-- MENU CATEGORIA FLOTANTE -->
<!--     Personal de llamadas Callcenter -->
 
<!--     /Personal de llamadas Callcenter -->
<!-- Contenido -->
<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= media(); ?>/tienda/files/img/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= media(); ?>/tienda/files/img/1.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="<?= media(); ?>/tienda/files/img/1.png" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
<!-- /Slider -->
<!-- Migaja de pan -->
<div class="container">
    <div class="row">
        <div class="col-sm">
            <nav aria-label="breadcrumb" class="migajadepan">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Inicio</a></li>
               <!--      <li class="breadcrumb-item"><a href="#">Categoria</a></li> -->

                    <li class="breadcrumb-item active" aria-current="page"><?php echo $data['page_title'] ?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- /Migaja de pan -->

    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h2 class="titulodiv text-left fs14"> <?php echo $data['page_title'] ?></h2>
                <p><?php echo $data['page_title'] ?></p>
            </div>

        </div>
    </div>
<!--     <div class="container" id="filtrosCategory">

        <h5 class="text-center">CANTIDAD DE ARTICULOS 10</h5>
            <div class="search-items d-flex align-content-between flex-wrap">

                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>
                <select class="itemCategorias">
                    <option>Seleccione 1</option>
                    <option>Seleccione 2</option>
                    <option>Seleccione 3</option>
                    <option>Seleccione 4</option>
                    <option>Seleccione 5</option>
                </select>

            </div>

        <input type="submit" class="vermas" value="Ver Mas ..." class="vermas">
        <input type="submit" class="ocultar" value="Ocultar" class="ocultar">
    </div> -->


<!-- /Contenido -->

<div class="container">
    <!-- Productos -->
        <section class="contenedor products">
                <div class="title"><span><?php echo $data['page_title'] ?></span></div>
                <div class="clearfix"></div>
                <div class="product-contenedor">
           
            <?php
            if(!empty($arrProductos)){
        for( $p=0 ; $p < count($arrProductos); $p++){

            if(count($arrProductos[$p]['images']) > 0 ){
                $portada = $arrProductos[$p]['images'][0]['url_image'];
            }else{
                $portada = media().'/images/uploads/product.png';
            }

            ?>
            <div class="product-item">
                   <img src="<?= $portada ?>" alt="<?= $arrProductos[$p]['nombre'] ?>">
                <div class="brandAndFlag">
                    <img class="brand" src="<?= media(); ?>/tienda/files/img/brand/brand.png" width="10" alt=""> 
                      <img class="flag" src="<?= media(); ?>/tienda/files/img/flag/flag.png" width="10" alt=""> 
                 </div>
                <div class="description">
                    <div class="direction-product">
                       <?= $arrProductos[$p]['nombre'] ?>
                        <span>  <?= $arrProductos[$p]['nombre'] ?></span>
                    </div>
                    <div class="price-product"> <?= MONEY.formatMoney($arrProductos[$p]['preciosolesigv']) ?></div>
                    <div class="before-product">
                        Antes:  <?= MONEY.formatMoney($arrProductos[$p]['preciodescuento']) ?>
                    </div>
                    
                </div>
                <div class="product_text">
                    <h2><?= $arrProductos[$p]['nombre'] ?></h2>
                    <hr>
                    <p> <?= $arrProductos[$p]['nombre'] ?></p>
                         
                         <a class="btn btn-warning" href="<?= base_url().'/tienda/producto/'.$arrProductos[$p]['ruta']; ?>">VER PRODUCTO</a>
                </div>
            </div>
          <?php
        }
    }else{
        echo "no hay productos para mostrar";
    }
?>

        </section>
<!-- /Productos -->
</div>

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
<?php

footerTienda($data); 

?>