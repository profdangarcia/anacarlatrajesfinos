
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
    <a href='<?= site_url("site/")?>'><img  class="timlogo " src="<?= base_url("assets/img/logo.png")?>"></a>
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
	
    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" >
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" >
                <div class="view">
                    <a href='#'><img class="d-block img-fluid w-100" src="<?= base_url("assets/img/propaganda.jpg")?>" alt="First slide"></a>
                    <div class="mask rgba-black-light"></div>
                </div>
                <!-- <div class="carousel-caption">
                    <h3 class="h3-responsive " style="text-shadow: 1px 2px #000;">Light mask</h3>
                    <p style="text-shadow: 1px 2px #000;">First text</p>
                </div> -->
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view" >
                    <img class="d-block w-100 img-fluid" src="<?= base_url("assets/img/propaganda2.jpg")?>" alt="Second slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <!-- <div class="carousel-caption">
                    <h3 class="h3-responsive" style="text-shadow: 1px 2px #000;">Strong mask</h3>
                    <p style="text-shadow: 1px 2px #000;">Secondary text</p>
                </div> -->
            </div>
            
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
                    
  </div>

  <!-- Destaques -->
    <div class="container mt-3 mb-3">
      <h1 class='text-center h1-destaque '> Destaques </h1>
      <div class="row">
            
            <div class="col-md-6 col-sm-12 pb-2 pt-1 ">
                <div class="boxing">
                    <img class="img-fluid w-100" src="<?= base_url("assets/img/destaque1.jpg") ?>" alt="">
                    <div class="box-content">
                        <div class="content">
                            <h3 class="title">Vestidos</h3>
                            <span class="post ">Conheça as peças para aluguel</span>
                            <ul class="icon">
                                <li><a href="<?= site_url("site/vestidos")?>"><i class="fa fa-search"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 col-sm-12 pb-2 pt-1 ">
                <div class="boxing">
                    <img class="img-responsive"  src="<?= base_url("assets/img/destaque2.jpg") ?>" alt="">
                    <div class="box-content">
                        <div class="content">
                            <h3 class="title">Ternos</h3>
                            <span class="post">Conheça as peças para aluguel</span>
                            <ul class="icon">
                                <li><a href="<?= site_url("site/ternos")?>"><i class="fa fa-search"></i></a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            
              
      </div>
    </div>
  <!--Fim destaques -->
  
  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="fa fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Inscreva-se para receber novidades!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Entrar com endereço de e-mail...">
            <button type="submit" class="btn btn-primary mx-auto">Inscrever</button>
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
  
 

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url("bootstrap/js/jquery.min.js")?>"></script>
  <script src="<?= base_url("bootstrap/js/bootstrap.min.js")?>"></script>

  

  <!-- Header Script -->
  <script src="<?= base_url("bootstrap/js/header/header.js")?>"></script>


</body>

</html>
