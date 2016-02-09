
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">

            <div class="pull-left info">
              <p><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Admin Online</a>
            </div>
          </div>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">DASHBOARD</li>
            <li class="treeview">
              <a href="#"><i class='fa fa-rocket'></i> <span>2065</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('dosmil/posts'); ?>">Listado de Publicaciones</a></li>
                <li><a href="<?php echo site_url('dosmil/posts/add'); ?>">Crear Publicación</a></li>
                <li><a href="<?php echo site_url('dosmil/categorias'); ?>">Listado de Categorias</a></li>
                <li><a href="<?php echo site_url('dosmil/categorias/add'); ?>">Crear Categoria</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class='fa fa-book'></i> <span>Blog</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('blog/posts'); ?>">Listado de Posts</a></li>
                <li><a href="<?php echo site_url('blog/posts/add'); ?>">Crear Post</a></li>
                <li><a href="<?php echo site_url('blog/categorias'); ?>">Listado de Categorias</a></li>
                <li><a href="<?php echo site_url('blog/categorias/add'); ?>">Crear Categoria</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class='fa fa-puzzle-piece'></i> <span>Desafios</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('desafios/posts'); ?>">Listado de Desafios</a></li>
                <li><a href="<?php echo site_url('desafios/posts/add'); ?>">Crear Desafio</a></li>
                <li><a href="<?php echo site_url('desafios/categorias'); ?>">Listado de Categorias</a></li>
                <li><a href="<?php echo site_url('desafios/categorias/add'); ?>">Crear Categoria</a></li>
              </ul>
            </li>
           
            <li class="treeview">
              <a href="<?php echo site_url('auth/create_user'); ?>"><i class='fa fa-users'></i> <span>Usuarios</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('auth'); ?>">Listado</a></li>
                <li><a href="<?php echo site_url('auth/create_user'); ?>">Crear Usuario</a></li>
                <!--<li><a href="<php echo site_url('auth/create_group'); ?>">Crear Grupo</a></li>-->
              </ul>
            </li>
            <li><a href="<?php echo site_url('auth/logout'); ?>"><i class="fa fa-circle-o text-aqua"></i> <span>Cerrar Sesión</span></a></li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>