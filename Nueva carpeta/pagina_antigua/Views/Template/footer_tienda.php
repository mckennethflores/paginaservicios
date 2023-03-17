<script> const base_url = "<?= base_url(); ?>";
    </script>
<div class="footer">
		<div class="container container-fluid">
<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-4 tituloFooter">
			<h3 class="blanco">AGRO ENERGY FOODS</h3>
			<img src="<?= media(); ?>/tienda/img/logo-hidden-footer.png" alt="<?= NOMBRE_EMPRESA ?>">
			<p>¿Quieres comprar algunos productos? Escríbenos o llámanos. Tenemos la mejor disposición para atender toda la información que necesites y ayudarte con cualquier pregunta que puedas tener.</p>
		</div>
		<div class="col-xs-12 col-sm-12 col-md-4 tituloFooter">
			<h3 class="blanco" >PRODUCTOS</h3>
			<ul>
			<li><p><a class="telefonoFooter" href="<?= base_url(); ?>/tienda/categoria/harinas">Harinas</a></p></li>
				<li><p><a class="telefonoFooter" href="<?= base_url(); ?>/tienda/categoria/frutas-deshidratadas">Frutas deshidratadas</a></p></li>
				<li><p><a class="telefonoFooter" href="<?= base_url(); ?>/contacto">Contacto</a></p></li>
			</ul> 
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-4 tituloFooter">

		<h3 class="blanco">CONTACTO</h3>
			<ul class="dats">
				<li class="c-tel"> <a class="txt-white" href="mailto:<?= PAIS.CELULAR1 ?>"><?= PAIS.' '.CELULAR1 ?></a>  | <a class="txt-white" href="mailto:<?= PAIS.CELULAR2 ?>"><?= PAIS.' '.CELULAR2 ?></a></li>
				<li class="c-mail"><a  class="txt-white" href="mailto:<?= EMAIL ?>"><?= EMAIL ?></a></li> 
				<li class="c-dir">Calle Toribio Rodríguez de Mendoza 211, San Martin de Porres, Lima, Perú.</li> 
		  	</ul>   
		</div>
	</div>
</div>
		<div class="creditos text-center blanco">
		  © Agro Energy Foods - Derechos Reservados 2022
		</div>
    </div>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<a href="https://api.whatsapp.com/send?phone=51918515262&amp;text=Quiero%20informacion%20sobre%20los%20productos,%20mi%20nombre%20es:" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<!-- /footer -->
<div class="social hidden-xs">
<ul>
                 <li class="ocultarobjmovil" >
					 <a href="https://api.whatsapp.com/send?phone=51918515262&amp;text=Quiero%20informacion%20sobre%20los%20productos%20naturales,%20mi%20nombre%20es:" target="_blank" class="icon-whatsapp">
					 <img src="<?= media(); ?>/tienda/img/whatsapp-logo.png" width="60px"></a></li>
                <li class="ocultarobjmovil">
					<a href="https://www.instagram.com/" target="_blank" class="icon-twitter"><img src="<?= media(); ?>/tienda/img/twitter-logo.png" width="60px"></a></li>
				<li>
					<a href="https://www.tiktok.com/" target="_blank" class="icon-tiktok"><img src="<?= media(); ?>/tienda/img/tiktok.jpg" width="60px"></a></li>
                <li>
					<a href="https://www.youtube.com/" target="_blank" class="icon-youtube"><img src="<?= media(); ?>/tienda/img/youtube-logo.JPG" width="60px"></a></li>
                <li>
					<a href="https://www.facebook.com/agroenergyfoodsperu/" target="_blank" class="icon-facebook"><img src="<?= media(); ?>/tienda/img/face-logo.JPG" width="60px"></a></li>

            </ul> 
        </div>


<script src="<?= media(); ?>/tienda/js/lightbox-plus-jquery.min.js"></script>
<script src="<?= media(); ?>/tienda/js/jquery.min.1.9.1.js"></script>

<script type="text/javascript">
var ww = document.body.clientWidth;

$(document).ready(function() {
    $(".nav li a").each(function() {
    	if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 768) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 768) {
		$(".toggleMenu").css("display", "none");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}
}

</script>
<script src="<?= media(); ?>/tienda/js/jquery-3.3.1.min.js"></script>
<script src="<?= media(); ?>/tienda/js/jquery.min.js"></script>

<script src="<?= media(); ?>/tienda/js/bootstrap.min.js"></script>
<script src="<?= media(); ?>/tienda/js/validacionFormulario.js"></script>
</body>
</html>