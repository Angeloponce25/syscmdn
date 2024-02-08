<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->            
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU SISTEMA</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-tachometer"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu Angelo</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo dirname($_SERVER['PHP_SELF']).'/';?>inicio"><i class="fa fa-circle-o"></i> Ruta 1</a></li>            
            <li><a href="<?php echo dirname($_SERVER['PHP_SELF']).'/';?>usuarios/gestion_usuarios"><i class="fa fa-circle-o"></i> Ruta 1</a></li>            
          </ul>
        </li>
        <?php
        $menu = new co_menu();
        $menu->cargarMenu();       
        ?>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>