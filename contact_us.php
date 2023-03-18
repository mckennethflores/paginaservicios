<!-- Contactenos mas -->
<section class="contactenos" >
    <div class="container">
        <div class="titH1 wow zoomIn" style="visibility: visible; animation-name: zoomIn;">
            <h2 class="text-center2">CONTACTENOS</h2>    
            <div class="triangulo-equilatero-bottom"></div>
            <div id="formularioContacto">
                <form action="index.php" method="post">
                    <div class="form-group">
                    <label for="exampleInputPassword1">Nombre</label>
                    <input type="text" required class="form-control" name="nombre" id="exampleInputPassword1" placeholder="Nombre">
                    </div>	
                    <div class="form-group">
                    <label for="exampleInputEmail1">Celular</label>
                    <input type="text" required class="form-control" name="telefono_fijo" id="exampleInputEmail1"  placeholder="Celular">
                
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" required id="exampleFormControlTextarea1" name="comentario" placeholder="Mensaje" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btnenviar">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- /Contactenos mas -->