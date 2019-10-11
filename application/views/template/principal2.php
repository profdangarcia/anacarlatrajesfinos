
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

  
  <!-- CSS Header-->
  <link href="<?= base_url("bootstrap/css/header/header.css")?>" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

  <!-- CSS Footer-->
  <link href="<?= base_url("bootstrap/css/footer/footer.css")?>" rel="stylesheet">

  <!-- CSS Signup -->
  <link href="<?= base_url("bootstrap/css/signup/signup.css")?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet"> 

  <!-- CSS Destaques -->
  <link href="<?= base_url("bootstrap/css/destaques/destaques.css")?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
  
  
</head>

<body id="page-top">

  <!-- Header -->
  <header>
    <img  class="timlogo " src="<?= base_url("assets/img/logo.png")?>">
    <div class="nav-modal" >
      <div class="blob"></div>
      <nav>
        <ul>
          <li><a href="<?= site_url("site")?>">HOME</a></li>
          <li><a href="#">GALERIA</a>
            <ul>
              <li><a href="<?= site_url("site/vestidos")?>">VESTIDOS</a></li>
              <li><a href="<?= site_url("site/ternos")?>">TERNOS</a></li>
            </ul>
          </li>
          <li><a target="_blank" href="<?= site_url("#signup")?>" >CONTATO</a></li>
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


  <!--Carousel -->
  <div class="container-fluid pt-2 pr-0 pl-0 " >
	
    
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="5000">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?= base_url("assets/img/propaganda.png")?>" alt="Destaque Vestidos">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?= base_url("assets/img/propaganda2.png")?>" alt="Destaque Ternos">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
                    
  </div>

  <!-- Destaques -->
  <section class='showcase'>
    <div class="container-fluid p-0 destaques">
      <div class="row no-gutters linha1">

        <div class="col-lg-3 col-md-6 col-sm-6  order-sm-2 text-white showcase-img" style="background-image: url('<?= base_url("assets/img/destaque1.jpg") ?>');"></div>
        <div class="col-lg-9 col-md-6 col-sm-6  order-sm-1 my-auto showcase-text">
          <h2>Maravilhos Vestidos</h2>
          <p class="lead mb-0">Venha conhecer nossa variada opção de vestidos com ótimos preços de aluguel!</p>
          <a href='<?= site_url("site/vestidos")?>'><p class="lead mb-0">Ver Mais</p></a>
        </div>
      </div>
      <div class="row no-gutters linha2">
        <div class="col-lg-3 col-md-6 col-sm-6  text-white showcase-img" style="background-image: url('<?= base_url("assets/img/destaque2.jpg") ?>');"></div>
        <div class="col-lg-9 col-md-6 col-sm-6  my-auto showcase-text">
          <h2>Ternos Completos</h2>
          <p class="lead mb-0">Ternos, camisas e gravatas com diversas opções em cores e tamanhos. Aqui você vai encontrar o que procura!</p>
          <a href='<?= site_url("site/ternos")?>'><p class="lead mb-0">Ver Mais</p></a>
        </div>
      </div>
    </div>
  </section>
  <!--Fim destaques -->
  
  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="fa fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Inscreva-se para receber novidades!</h2>

          <form class="form-inline d-flex" method='post' action='<?= site_url("/newsletter") ?>'>
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" name='email' placeholder="Entrar com endereço de e-mail..." required>
            <button type="submit" name='submit' value='ok' class="btn btn-primary mx-auto">Inscrever</button>
          </form>

        </div>
      </div>
    </div>
  </section>

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
  
  <?php
    if ($check=='ok'): ?>
      <script> alert("E-mail cadastrado com sucesso!")</script>
    <?php
    elseif($check=='nok'): ?>
      <script> alert("E-mail já cadastrado em nosso banco de dados!")</script>
    <?php
    endif; ?>
  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url("bootstrap/js/jquery.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/bootstrap.min.js")?>"></script>

  

  <!-- Header Script -->
  <script src="<?= base_url("bootstrap/js/header/header.js")?>"></script>


</body>

</html>
