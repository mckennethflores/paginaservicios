<footer id="colophon" class="site-footer" role="contentinfo">
 
 <div class="row contMapa">
  <div class="col-md-6 col-12 mapasinpadding mapi">   
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15607.91653293186!2d-77.0467451!3d-12.0449566!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23760da8804deb88!2sHidroservice!5e0!3m2!1ses!2spe!4v1533246238882" width="100%" height="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
 
  </div>
  <div class="col-md-6 col-12 infoMa">
         <div class="continfoMap">
          <h2 class="tituloContacto">Ven a Hidroservice para impresionarte con nuestros servicios: </h2>         
          <div class="row">
            <div class="col-sm-12 col-lg-6 lugar">
              <h3>Visitanos en:</h3>
              <p><span>Dirección: </span>C.C boulevar ferretero Dansey 354 Tienda H 17 cercado de Lima</p>
            </div>
            <div class="col-sm-12 col-lg-6 fono">
              <h3 class="llamanos">Llamanos al: </h3>
              <p><span>Central: </span>984 288 065</p> 
               
              <p><span> </span></p>
              <h3 class="llamanos">Email: </h3>
              <p>hidroservice123@gmail.com <br>
               gerencia@hidroservice.com.pe</p>
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
                    <div class="copy"> 2018 © HIDROSERVICE. Todos los Derechos Reservados </div>
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
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5xANF6I9TcDOe8bhhnshvM3LONDhzEGC";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
</body>
</html>