<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Panel Principal</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ** Preloader Start ** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ** Preloader End ** -->

    <!-- Header -->
    <header class="">

        <nav class="navbar navbar-expand-lg">

         <div class="container">
            <img src="assets/images/caballo97.png" alt="" width="60px" height="60px">
          <a class="navbar-brand" href="index.html"><h2> <em>Tierra de vaqueros</em></h2></a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="http://127.0.0.1:8000/">Panel
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="products.html">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/contact">Contacto</a>
              </li>




              <li class="nav-item">
              @if (Route::has('login'))

                    @auth
                    <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}">
                        <i class="fas fa-shopping-cart"></i>Carrito[{{($count)}}]</a>

                    </li>

                           <x-app-layout></x-app-layout>
                    @else
                    <li>
                        <a class="nav-link" href="{{ route('login') }}"
                           >Iniciar Sesión</a>
                    </li>
                        @if (Route::has('register'))
                        <li>
                            <a  class="nav-link" href="{{ route('register') }}"
                               >Registrarse</a>
                        </li>
                        @endif
                    @endauth

            @endif
         </li>

            </ul>
          </div>
         </div>
        </nav>
        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">x</button>
                {{session()->get('message')}}
            </div>
            @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4></h4>
            <h2>Tierra de vaqueros</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4></h4>
            <h2>La moda la pones tu</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4></h4>
            <h2>Sin sombrero no hay vaquero</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
   @include('User.product')


    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
             <!-- <h2>Acerca de nuestra ropa</h2> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>¿Que ofrecemos como empresa?</h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent"></a> Nosotros somos empresa encargada de ofrecer productos de calidad a precios accesibles, abarcando sus gustos de acuerdo a su estilo de vestir.  </p>
              <ul class="featured-list">
                <li><a href="#">Botas</a></li>
                <li><a href="#">Cinturones</a></li>
                <li><a href="#">Sombreros</a></li>

              </ul>
              <a href="about.html" class="filled-button">Acerca de la empresa</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/quien.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


  <!--  <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>


    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Tienda de ropa; Tierra de vaqueros, Por:

             <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">Karen Lizbeth Alvarez Aguirre.</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
