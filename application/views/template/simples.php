
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Ana Carla - Trajes Finos</title>
  <link rel="icon" type="imagem/png" href="<?= base_url("assets/img/dress.png")?>" />

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url("bootstrap/css/bootstrap.min.css")?>" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="<?= base_url("bootstrap/css/all.min.css")?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url("bootstrap/css/grayscale.min.css")?>" rel="stylesheet">

  <?php if ($this->router->class == 'login'): ?>
  <link href="<?= base_url("bootstrap/css/login.css")?>" rel="stylesheet">
  <?php endif; ?>
  
  <!-- Imports para Galerias -->
  <?php if ($this->router->class != 'login'): ?>
  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url("bootstrap/fonts/icomoon/style.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/fonts/flaticon/font/flaticon.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/magnific-popup.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/jquery-ui.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/owl.carousel.min.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/owl.theme.default.min.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/bootstrap-datepicker.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/aos.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/jquery.scrollbar.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/fancybox.min.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/swiper.min.css")?>">
  <link rel="stylesheet" href="<?= base_url("bootstrap/css/galeria/style.css")?>">
  <?php endif; ?>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?= site_url("/site") ?>">Ana Carla</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url()?>">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url("/site/vestidos") ?>">Vestidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url("/site/ternos") ?>">Ternos & Smokings</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


 <!--conteúdo da página -->
 <div class='container-fluid'>
    <div class='row'>
        <div class='col-lg-12 conteudo'>
          <?= $contents ?>
        </div>
    </div>
</div>

<!-- final do conteúdo -->
  

  

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Todos os Direitos Reservados &copy; Ana Carla 2019
    </div>
    
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url("bootstrap/js/jquery.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/bootstrap.bundle.min.js")?>"></script>

  <!-- Plugin JavaScript -->
  <!-- <script src="bootstrap/js/jquery.easing.min.js"></script> -->

  <!-- Custom scripts for this template -->
  <script src="<?= base_url("bootstrap/js/grayscale.min.js")?>"></script>

  <!-- Scripts para a galeria --> 
 
  
  <script src="<?= base_url("bootstrap/js/galeria/jquery-ui.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/popper.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/owl.carousel.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/jquery.countdown.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/jquery.magnific-popup.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/bootstrap-datepicker.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/aos.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/jquery.fancybox.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/swiper.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/jquery.scrollbar.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/main.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/galeria/jquery-migrate-3.0.1.min.js")?>"></script>
</body>

</html>
