<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?= $this->Url->build('/', true)?>LTE/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>Alexander Pierce</p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-th"></i>
        <span>Archivos</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <!--<li><a href="<?= $this->Url->build(["controller" => "Patients","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Pacientes</a></li>
        <li><a href="<?= $this->Url->build(["controller" => "Bioanalysts","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Bioanalistas</a></li>
        <li><a href="<?= $this->Url->build(["controller" => "Typetests","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Configurar Exámenes</a></li>
        <li><a href="<?= $this->Url->build(["controller" => "Resultests","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Ingreso de Resultado</a></li>-->
      </ul>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-gears"></i>
        <span>Config</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="treeview-menu">
        <li><a href="<?= $this->Url->build(["controller" => "Users","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Usuarios</a></li>
        <li><a href="<?= $this->Url->build(["controller" => "Groups","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Grupos</a></li>
        <li><a href="<?= $this->Url->build(["controller" => "Permisos","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Permisos</a></li>
        <li><a href="<?= $this->Url->build(["controller" => "Companys","action" => "index"]); ?>"><i class="fa fa-circle-o"></i> Empresa</a></li>
      </ul>
    </li>
  </ul>
</section>
<!-- /.sidebar -->