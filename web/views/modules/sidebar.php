<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="/admin" class="brand-link">
    <img src="<?php echo $path ?>views/assets/img/template/<?php echo $template->id_template ?>/<?php echo $template->icon_template ?>" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Administration</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo $path ?>views/assets/img/adminlte/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $_SESSION["admin"]->name_admin ?></a>
      </div>
    </div>
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
        with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="/admin/administradores/" class="nav-link">
            <i class="nav-icon fas fa-user-cog"></i>
            <p>
              Administradores
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-cog"></i>
            <p>
              General
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/plantillas" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Plantillas</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/integraciones" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Integraciónes</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-bullhorn"></i>
            <p>
              Promociones
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/slides" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Slides</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/banners" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Banners</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-shopping-bag"></i>
            <p>
              Productos
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/admin/categorias" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Categorias</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/subcategorias" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Subcategorias</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/inventario" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inventario</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin/mensajes" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Mensajes</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="../widgets.html" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Widgets
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/logout" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
              LogOut
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>