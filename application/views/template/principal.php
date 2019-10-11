
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

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand w-25 js-scroll-trigger" href="<?= site_url("/site") ?>">Ana Carla</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Quem Somos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url("/site/vestidos") ?>">Vestidos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?= site_url("/site/ternos") ?>">Ternos & Smokings</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <!-- <h1 class="mx-auto my-0 text-uppercase">Ana Carla</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Trajes Finos</h2> -->
        <img class='img-fluid w-75 mx-auto' src='<?= base_url('assets/img/logo.png')?>' style='display: block;'/>
        <a href="<?= site_url("site#about") ?>" class="btn btn-primary js-scroll-trigger">Conheça</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class='col'>
          <img class ='img-fluid mb-4 mw-50 mh-50 rounded ' src='<?= base_url('assets/img/logo.png');?>' />
        </div>
        <div class="col-lg-8 mx-auto mt-5">
          <h2 class="text-white mb-4">Uma nova opção em aluguéis</h2>
          <p class="text-white-50">Ternos e Vestidos para as mais diversas ocasiões. Venha nos conhecer e conhecer as nossas peças.</p>
          
        </div>
        
      </div>
      <!-- <img src="<?= base_url("assets/img/ipad.png")?>" class="img-fluid" alt=""> -->
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-8 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="<?= base_url("assets/img/bg-masthead.jpg")?>" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Shoreline</h4>
            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?= base_url("assets/img/demo-image-01.jpg")?>" alt="">
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Misty</h4>
                <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div class="row justify-content-center no-gutters">
        <div class="col-lg-6">
          <img class="img-fluid" src="<?= base_url("assets/img/demo-image-02.jpg")?>" alt="">
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Mountains</h4>
                <p class="mb-0 text-white-50">Another example of a project with its respective description. These sections work well responsively as well, try this theme on a small screen!</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Inscreva-se para receber novidades!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Entrar com endereço de e-mail...">
            <button type="submit" class="btn btn-primary mx-auto">Inscrever</button>
          </form>

        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section class="contact-section bg-black" id='contact'>
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Endereço</h4>
              <hr class="my-4">
              <div class="small text-black-50">Rua Luís Zerbinatti, 251</div>
              <div class="small text-black-50">Ouro Fino - MG</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fab fa-whatsapp text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Whatsapp</h4>
              <hr class="my-4">
              <div class="small text-black-50">(35) 3441-1312</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="http://instagram.com/anacarlatrajesfinos" target="_blank" class="mx-2">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        
      </div>

    </div>
  </section>

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
  <script src="<?= base_url("bootstrap/js/jquery.easing.min.js")?>"></script>

  <!-- Custom scripts for this template -->
  <script src="<?= base_url("bootstrap/js/grayscale.min.js")?>"></script>

</body>

</html>
