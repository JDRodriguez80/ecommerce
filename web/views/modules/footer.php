<div class="container-fluid bg-dark small">
  <div class="container py-5 text-light">
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
      <div class="col row">
        <div class="col-12 col-sm-4 col-md-3 col-lg-4">
          <h4 class="lead">
            <a href="#" class="text-upprercase">Ropa</a>
          </h4>
          <hr class="border-white">
          <ul>
            <li>
              <a href="">Dama</a>
            </li>
            <li>
              <a href="">Caballero</a>
            </li>
            <li>
              <a href="">Niños</a>
            </li>
            <li>
              <a href="">Deportiva</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-4">
          <h4 class="lead">
            <a href="#" class="text-upprercase">Calzado</a>
          </h4>
          <hr class="border-white">
          <ul>
            <li>
              <a href="">Dama</a>
            </li>
            <li>
              <a href="">Caballero</a>
            </li>
            <li>
              <a href="">Niños</a>
            </li>
            <li>
              <a href="">Deportiva</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-4">
          <h4 class="lead">
            <a href="#" class="text-upprercase">Tecnología</a>
          </h4>
          <hr class="border-white">
          <ul>
            <li>
              <a href="">Telefonia</a>
            </li>
            <li>
              <a href="">Computo</a>
            </li>
            <li>
              <a href="">Gadgets</a>
            </li>
            <li>
              <a href="">Accesorios</a>
            </li>
          </ul>
        </div>
        <div class="col-12 col-sm-4 col-md-3 col-lg-4">
          <h4 class="lead">
            <a href="#" class="text-upprercase">Cursos</a>
          </h4>
          <hr class="border-white">
          <ul>
            <li>
              <a href="">Desarrollo web</a>
            </li>
            <li>
              <a href="">Aplicaciones Móviles</a>
            </li>
            <li>
              <a href="">Diseño Gráfico</a>
            </li>
            <li>
              <a href="">Marketing Digital</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col my-3 my-lg-0 px-lg-5 text-light">
        <h1 class="lead small">Dudas e inquietudes, contactenos en:</h1>
        <br>
        <h1 class="lead small ">
          <i class="fa fa-phone-square pe-2"></i>(55)555-55-55
          <br><br>
          <i class="fa fa-envelope pe-2"></i>contacto@tienda.com
          <br><br>
          <i class="fa fa-map-marker pe-2"></i>calle 1 colonia del la muerte local 666
          <br><br>
        </h1>
        <iframe class="mt-3" src="https://www.google.com/maps/embed/v1/place?q=Estadio+Azteca,+Calzada+de+Tlalpan,+Sta.+Úrsula+Coapa,+Ciudad+de+México,+CDMX,+México&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8" height="200" width="100%" frameborder="0" style="border:0" allowfullscreen=""></iframe>
      </div>
      <div class="col small my-3 my-lg-0">
        <h4>Contactenos</h4>
        <form role="form" method="post">

          <input type="text" id="nombreContactenos" name="nombreContactenos" class="form-control" placeholder="Escriba su nombre" required>

          <br>

          <input type="email" id="emailContactenos" name="emailContactenos" class=" form-control" placeholder="Escriba su correo electrónico" required>

          <br>

          <textarea id="mensajeContactenos" name="mensajeContactenos" class="form-control" placeholder="Escriba su mensaje" rows="5" required></textarea>

          <br>

          <input type="submit" value="Enviar" class="btn btn-default float-end border-0 templateColor">

        </form>

      </div>
    </div>
  </div>
</div>
<footer class="main-footer topColor">
  <div class="container">
    <!-- To the right -->
    <div class="float-end ">
      <div class="d-flex justify-content-center" style="line-height: 0px;">
        <?php
        foreach ($socials as $key => $value) : ?>
          <div class="p-2">
            <a href="<?php echo $value->url_social ?>" target="_blank">
              <i class="<?php echo $value->icon_social ?> <?php echo $value->color_social ?>"></i>
            </a>
          </div>
        <?php endforeach ?>
      </div>
    </div>
    <!-- Default to the left -->
    <small>Copyright &copy; <?php echo date("Y") ?> <a href="#">JRodSoftware</a>. Todos los derechos reservados.</small>
  </div>
</footer>