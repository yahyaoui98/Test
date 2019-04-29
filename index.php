<?PHP
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Oxygym++ <hr> </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            


                 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="../views/ajoutAbonne.html">Inscription</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#Recrutement">Recrutement</a>
              </li> <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#SAV">SAV</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="Panier%20et%20comamnde.html">Panier</a>
                </li>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="../views/afficherTopic.php">Forum</a>
                </li>
              <?PHP
                    if(!empty($_SESSION['l']))
                    {
                        echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="../views/logout.php">Logout</a>
                </li>';}
                    else
                    {
                        echo '<li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="../views/connect.html">Login</a>
                </li>';}
              ?>
              <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" href="#Login"><?PHP if(isset($_SESSION['l'])) {echo $_SESSION['l'];}?></a>
                </li>
          </ul>
        </div>
      </div>
    </nav>
     

    <!-- Header -->
    <header class="masthead">
        <br>
        <br>
      <div class="container d-flex h-100 align-items-center">
        <div class="mx-auto text-center">
            
          <h1 class="mx-auto my-0 text-uppercase">Oxygym++</h1>
            <br>
            
          <h2 class="text-white-50 mx-auto mt-2 mb-12">Premier espace de Fitness et achat des produits sportifs en Tunisie </h2>
            <br>
            
          <a href="#about" class="btn btn-primary js-scroll-trigger">start your journey</a>
        </div>
      </div>
    </header>

    <!-- About Section -->
    <section id="about" class="about-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 class="text-white mb-4">Enjoy the difference</h2>
                <h3 class="text-white mb-4">Bienvenue à OXYGYM++</h3>
            <p class="text-white-50">Join our community
              <a href="../template/formulaire/form.html">here </a></p>
          </div>
        </div>
           
      </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects-section bg-light">
      <div class="container">

        <!-- Featured Project Row -->
        <div class="row align-items-center no-gutters mb-4 mb-lg-5">
          <div class="col-xl-8 col-lg-7">
            <img class="img-fluid mb-3 mb-lg-0" src="" alt="">
          </div>
          <div class="col-xl-4 col-lg-5">
            <div class="featured-text text-center text-lg-left">
              <h4>Commande</h4>
              <p class="text-black-50 mb-0">Passer votre commande et demander une livraison</p>
            </div>
          </div>
        </div>

        <!-- Project One Row -->
        <div class="row justify-content-center no-gutters mb-5 mb-lg-0">
          <div class="col-lg-6">
            <img class="img-fluid" src="" alt="">
          </div>
          <div class="col-lg-6">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-left">
                  <h4 class="text-white">Produits</h4>
                  <p class="mb-0 text-white-50">achat en ligne.</p>
                  <hr class="d-none d-lg-block mb-0 ml-0">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Project Two Row -->
        <div class="row justify-content-center no-gutters">
          <div class="col-lg-6">
            <img class="img-fluid" src="" alt="">
          </div>
          <div class="col-lg-6 order-lg-first">
            <div class="bg-black text-center h-100 project">
              <div class="d-flex h-100">
                <div class="project-text w-100 my-auto text-center text-lg-right">
                  <h4 class="text-white">Activité</h4>
                  <p class="mb-0 text-white-50">Suivez notre programme ou  .</p>
                <?php
                    if(!empty($_SESSION['l']))
                    {
                     ?>
                       <p> <a href="../views/affichage_pack_front.php">here </a></p>
                    <?php
                    }
                    else{
                        ?>
                    <p><a href="#">Vous devez vous connecter</a></p>
                    <?php
                    }
                    ?>
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
            <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

            <form class="form-inline d-flex">
              <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
              <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
            </form>

          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section bg-black">
      <div class="container">

        <div class="row">

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-map-marked-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Address</h4>
                <hr class="my-4">
                <div class="small text-black-50">Ariana,Tunisia</div>
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
                  <a href="#">vixens2a8@gmail.com</a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 mb-3 mb-md-0">
            <div class="card py-4 h-100">
              <div class="card-body text-center">
                <i class="fas fa-mobile-alt text-primary mb-2"></i>
                <h4 class="text-uppercase m-0">Phone</h4>
                <hr class="my-4">
                <div class="small text-black-50">+216 23 567 004</div>
              </div>
            </div>
          </div>
        </div>

        <div class="social d-flex justify-content-center">
          <a href="https://twitter.com/GGa_x?https:/twitter.com/CCa_Q&gclid=Cj0KCQjw77TbBRDtARIsAC4l83lJqtZ9Td_t8x0wCBETujUc-Onb_EXMdaV9XJ9cjRtDbtC9M8fIDgEaAh-PEALw_wcB" class="mx-2">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="https://www.facebook.com/oxygymplusfitness/" class="mx-2">
            <i class="fab fa-facebook-f"></i>
          </a>
          <a href="https://github.com/" class="mx-2">
            <i class="fab fa-github"></i>
          </a>
        </div>

      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-black small text-center text-white-50">
      <div class="container">
        Copyright &copy; 2018
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>