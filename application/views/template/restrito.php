<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ana Carla - Área do Administrador</title>
  <link rel="icon" type="imagem/png" href="<?= base_url("assets/img/dress.png")?>" />
  <!-- Custom fonts for this template-->
  <link href="<?= base_url("bootstrap/css/restrito/all.min.css")?>" rel="stylesheet">
  <link href="<?= base_url("bootstrap/css/restrito/css.css")?>" rel="stylesheet">
  

  <!-- Custom styles for this template-->
  <link href="<?= base_url("bootstrap/css/restrito/sb-admin-2.min.css")?>" rel="stylesheet">
  

  <!-- Grocery Crud -->

  <?php
        if ($this->router->class != 'bemvindo'):
          foreach($css_files as $css): ?>
              <link rel='stylesheet' href='<?= $css ?>' />
          <?php
          endforeach; 
        endif;
          ?>
 

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= site_url('site')?>">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-briefcase"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Ana Carla</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item <?=  ($this->router->class == 'bemvindo' ? "active" : "") ?>">
        <a class="nav-link" href="<?= site_url('bemvindo')?>">
          <i class="fas fa-fw fa-flag"></i>
          <span>Início</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Controle
      </div>

      <!-- Nav Item - Cadastros -->
      <li class="nav-item">
        <a class="nav-link " href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-plus"></i>
          <span>Cadastros</span>
        </a>
        <?php 
        //variável com os valores possíveis neste bloco
        $cadastros=['usuario', 'cliente', 'produtogeral', 'produtoespecifico', 'grupo', 'subgrupo', 'cor', 'tamanho', 'ocasiao', 'formapagamento'];
        ?>
        <div id="collapseTwo" class="collapse <?=  (in_array($this->router->class, $cadastros) ? "show" : "") ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pessoas:</h6>
            <a class="collapse-item <?=  ($this->router->class == 'usuario' ? "active" : "") ?>" href="<?= site_url('usuario')?>">Usuários</a>
            <a class="collapse-item <?=  ($this->router->class == 'cliente' ? "active" : "") ?>" href="<?= site_url('cliente')?>">Clientes</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Produtos:</h6>
            <a class="collapse-item <?=  ($this->router->class == 'produtogeral' ? "active" : "") ?>" href="<?= site_url('produtogeral')?>">Produtos (Geral)</a>
            <a class="collapse-item <?=  ($this->router->class == 'produtoespecifico' ? "active" : "") ?>" href="<?= site_url('produtoespecifico')?>">Produtos (Específico)</a>
            <a class="collapse-item <?=  ($this->router->class == 'grupo' ? "active" : "") ?>" href="<?= site_url('grupo')?>">Grupos</a>
            <a class="collapse-item <?=  ($this->router->class == 'subgrupo' ? "active" : "") ?>" href="<?= site_url('subgrupo')?>">Subgrupo</a>
            <a class="collapse-item <?=  ($this->router->class == 'cor' ? "active" : "") ?>" href="<?= site_url('cor')?>">Cores</a>
            <a class="collapse-item <?=  ($this->router->class == 'tamanho' ? "active" : "") ?>" href="<?= site_url('tamanho')?>">Tamanhos</a>
            <a class="collapse-item <?=  ($this->router->class == 'ocasiao' ? "active" : "") ?>" href="<?= site_url('ocasiao')?>">Ocasiões</a>
          </div>
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Financeiro:</h6>
            <a class="collapse-item <?=  ($this->router->class == 'formapagamento' ? "active" : "") ?>" href="<?= site_url('formapagamento')?>">Formas de Pagamento</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilidades</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Em produção:</h6>
            <a class="collapse-item" href="utilities-color.html">Em breve</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Aluguéis e Relatórios
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
      <a class="nav-link" href="charts.html">
        <i class="fas fa-fw fa-file-signature"></i>
        <span>Aluguéis</span></a>
      </li>

      <!-- Nav Item - Relatórios -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-file-alt"></i>
          <span>Relatórios</span>
          
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

     

      <!-- Nav Item - Galeria -->
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Controle Site
      </div>
      <li class="nav-item <?=  ($this->router->class == 'galeria' ? "active" : "") ?>">
        <a class="nav-link " href="<?= site_url('galeria')?>">
          <i class="fas fa-fw fa-camera-retro"></i>
          <span>Galeria</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Pesquisar..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>


            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $_SESSION['usuario'] ?></span>
                <img class="img-profile rounded-circle" src="<?= base_url("assets/uploads/files/".$_SESSION['fotoperfil']) ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?= site_url('login/sair')?>" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <!-- <h1 class="h3 mb-4 text-gray-800">Usuários</h1> -->

          <div class="row">

          <div class='col-lg-12'>
                <?= $contents ?>
            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Todos os Direitos Reservados &copy; Ana Carla 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Quer mesmo sair?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Clique em 'Logout' abaixo para sair.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
          <a class="btn btn-primary" href="<?= site_url('login/sair')?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url("bootstrap/js/jquery.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js")?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url("bootstrap/js/restrito/jquery.easing.min.js")?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url("bootstrap/js/restrito/sb-admin-2.min.js")?>"></script>

  <!--arquivos JS do Grocery Crud não necessita importar acima o Jquery -->
 <?php
    if ($this->router->class != 'bemvindo'):
      foreach($js_files as $js): ?>
          <script  src='<?= $js ?>' ></script>
      <?php
      endforeach;
      endif;
      ?>
 

</body>

</html>
