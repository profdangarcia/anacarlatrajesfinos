
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

 

  <!-- CSS Login-->
  <link href="<?= base_url("bootstrap/css/login.css")?>" rel="stylesheet">
  
 
  <!-- CSS Header-->
  <link href="<?= base_url("bootstrap/css/header/header.css")?>" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- CSS Footer-->
  <link href="<?= base_url("bootstrap/css/footer/footer.css")?>" rel="stylesheet">


   <!-- CSS Galerias -->
  <?php if ($this->router->class != 'login' ): ?>
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

  <!-- Header -->
  <header>
    <img  class="timlogo " src="<?= base_url("assets/img/logo.png")?>">
    <div class="nav-modal">
      <div class="blob"></div>
      <nav>
        <ul>
          <li><a href="<?= site_url("site")?>">HOME</a></li>
          <li><a href="#">GALERIAS</a>
            <ul>
              <li><a href="<?= site_url("site/vestidos")?>">VESTIDOS</a></li>
              <li><a href="<?= site_url("site/ternos")?>">TERNOS</a></li>
            </ul>
          </li>
          <li><a href="<?= site_url("site#signup")?>">CONTATO</a></li>
        </ul>
      </nav>
    </div>
    <div class="head">
      <a href="#" class="tile socialmedia"><i class="fa fa-facebook-official"></i></a>
      <a href="http://instagram.com/anacarlatrajesfinos" class="tile socialmedia" target="_blank"><i class="fa fa-instagram"></i></a>
      
      <div class="tile burger">
        <div class="meat">
          <div class="line one"></div>
          <div class="line two"></div>
          <div class="line three"></div>
        </div>
      </div>
    </div>
  </header>


  <!--Conteúdo -->

    <div class='container-fluid '>
        <div class='row'>
            <div class='col-lg-12 conteudo p-0'>
            <?= $contents ?>
            </div>
        </div>
    </div>


  <!-- Footer -->
  <footer class="container-fluid bg-grey py-5 mb-0">
    <div class="container">
      <div class="row">
          <div class="col-lg-8">
            <div class="row">
                <div class="col-md-6 ">
                  <div class="logo-part">
                      <img src="<?= base_url("assets/img/logo-texto.png")?>" class="w-75 logo-footer" >
                  </div>
                </div>
                <div class="col-md-6 px-4">
                  <h6> Contatos </h6>
                  <ul>
                      <li>  
                        <i class="fa fa-whatsapp text-success mb-2 mr-2"></i> 
                        <a >(35) 99201-7139</a> 
                      </li>
                      <li>
                        <i class="fa fa-map text-light mb-2 mr-2"></i>  
                        <a>Rua Luíz Zerbinatti, 251 - 
                        Ouro Fino/MG</a>
                      </li>
                      <li>
                        <i class="fa fa-envelope text-light mb-2 mr-2"></i>  
                        <a>contato@anacarlatrajesfinos.com.br</a>
                      </li>
                    </ul>
              
                <div class='row'>
                    
                </div>
                </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="row">
                <div class="col ">
                  
                  <h6> Redes Sociais</h6>
                  <div class="social">
                      <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                      <a href="http://instagram.com/anacarlatrajesfinos"><i class="fa fa-instagram" target="_blank" aria-hidden="true"></i></a>
                  </div>
                  <br />

                </div>
            </div>
          </div>
          
      </div>
      
    </div>
    <p class='text-center mt-5'>Todos os Direitos Reservados &copy; Ana Carla 2019</p>

  </footer>
  
 

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url("bootstrap/js/jquery.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/bootstrap.min.js")?>"></script>

  <!-- Header Script -->
  <script src="<?= base_url("bootstrap/js/header/header.js")?>"></script>

  <!-- Scripts para a galeria --> 
<?php if ($this->router->class != 'login' ): ?>
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
<?php endif; ?>
</body>

</html>
