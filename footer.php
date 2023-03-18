<footer id="colophon" class="site-footer" role="contentinfo"> 
 <div class="row contMapa">
  <div class="col-md-6 col-12 mapasinpadding mapi">   
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3902.8497023465275!2d-77.06644365032355!3d-11.98489984397245!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce4e47be9695%3A0xd08249c5aab74c22!2sAv.%20Alfredo%20Mendiola%204148%2C%20Independencia%2015311!5e0!3m2!1sen!2spe!4v1679016113191!5m2!1sen!2spe" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div class="col-md-6 col-12 infoMa">
    <div class="continfoMap">
      <h2 class="tituloContacto">¡Contáctenos hoy mismo para su próximo envío!</h2>         
      <div class="row">
        <div class="col-sm-12 col-lg-6 fono">
          <h3 class="llamanos">Llamanos al: </h3>
          <p><span>Central: </span>920 610 632</p>            
          <p><span> </span></p>
          <h3 class="llamanos">Email: </h3>
          <p>tracomarstransportes@gmail.com</p>
        </div>
        <div class="col-sm-12 col-lg-6 lugar">
          <h3>Visitanos en:</h3>
          <p><span>Dirección: </span>Av. Alfredo Mendiola 4148, Independencia 15311, Lima, Perú</p>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="menuFoot">
      <div class="contenedor">
       <div class="menu-menu-pie-de-pagina-container">
        <ul id="menu-menu-pie-de-pagina" class="menu">
         <li id="menu-item-233" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-233 current_page_item menu-item-230"><a href="index.php" class="menu-image-title-after "><span class="menu-image-title">INICIO</span></a></li>
          <li id="menu-item-230" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-230"><a href="nosotros.php" class="menu-image-title-after"><span class="menu-image-title">NOSOTROS</span></a></li>
         <li id="menu-item-232" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-232"><a href="servicios.php" class="menu-image-title-after"><span class="menu-image-title">SERVICIOS</span></a></li>
         <li id="menu-item-231" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-231"><a href="productos.php" class="menu-image-title-after"><span class="menu-image-title">PRODUCTOS</span></a></li>
         <li id="menu-item-362" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-362"><a href="contacto.php" class="menu-image-title-after"><span class="menu-image-title"><i></i> CONTÁCTO</span></a></li>
         </ul>
       </div>
      </div>
      <div class="copy-foo cleaner">
        <div class="contenedor">
            <div class="foot_bott">
                <div class="right-res">     
                    <div class="copy"> <?= date('Y') ?> © Transporte Bella Luz. Todos los Derechos Reservados </div>
                </div>
                <div class="left-res">
                  
                   Desarrollado por <a href="#">FR SYSTEM</a> 
                                 
               </div>
            </div>
          </div>    
      </div>	  
    </div>
</footer>

	 
</div>


<script src="js/jquery-3.3.1.min.js" type="text/javascript" charset="utf-8"></script>
<script src="js/bootstrap.min.js"    type="text/javascript" charset="utf-8"></script>
<script src="js/owl-jquery.min.js"></script> 
<script src="js/owl.carousel.min.js"></script>
<script src="js-slider/jquery.js"></script>
<script src="js-slider/initslider-1.js"></script>
<script src="js-slider/amazingslider.js"></script>
<!-- Texto dinamico cambiante -->
<script src="js/typed.js"></script>
<script src="js/basic.js"></script>
<script type="text/javascript">
  $(document).ready(function(){

  $window = $(window);
              $(window).scroll(function() {
                  var yPos = -($window.scrollTop() / 1.5);
                  var coords = '50% ' + yPos + 'px';
                  $('.parallax').css({ backgroundPosition: coords });

                

                  if ($window.scrollTop() > 20) {
                    $('.buscadorFixed').addClass('animate_joven');

                    $('.espaciotop').addClass('filter-drop-spacer');
                  }

              });

$('.slider-active').owlCarousel({
  loop:true,
            margin:10,
            nav: false,
            dots: true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true,
            autoplaySpeed: false,
            smartSpeed:250,           
         //   navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
         navText: false,
        responsive:{
        0:{
            items:1
        },

        960:{
            items:4
        }
    }
});


});
</script>

<script>

  /*
$( ".nav-link" ).click(function() {

 if ($(this).hasClass('active'))
 {
 	 
 	$(this).removeClass('active');

 }else
 {
 	 $(this).addClass('active');
 }
 
  

}); 
*/
	$(function(){

   /*  $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
     	&& location.hostname == this.hostname) 
      {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) 
             {

                 var desplazamientoDestino = $target.offset().top;

                 $('html,body').animate({scrollTop: desplazamientoDestino}, 1000);

                 return false;

             }

       }

   });*/

     $(window).scroll(function()
        {
     	if( $(this).scrollTop() > 0){
     		$('.navbar-brand').addClass('logo2');
     		$('.cl-effect-4').addClass('ocultarporresponsive');
     		$('.logo').addClass('logochico');
     		$('.etiqueta').addClass('espaciodelmarcador');
     	//	$('.nav-item').addClass('active');

     	}else
     	{
     		$('.cl-effect-4').removeClass('ocultarporresponsive');
     		$('.navbar-brand').removeClass('logo2');
     		$('.logo').removeClass('logochico');
     		$('.etiqueta').removeClass('espaciodelmarcador');
     		//$('.nav-item').removeClass('active');
     	}
     });

});
</script>
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

</body>
</html>