<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <title>Tierra de vaqueros</title>

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
      <a class="navbar-brand" href="http://127.0.0.1:8000/"><h2><em>Tierra de vaqueros</em></h2></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="http://127.0.0.1:8000/">Principal
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
                        <i class="fas fa-shopping-cart"></i> [{{ ($count) }}]</a>
                  </li>
                <x-app-layout></x-app-layout>
                @else
                <li>
                    <a class="nav-link" href="{{ route('login') }}"
                        >ingresar</a>
                </li>
                    @if (Route::has('register'))
                    <li>
                        <a class="nav-link" href="{{ route('register') }}"
                            >Registro</a>
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
 <div class="page-heading contact-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="text-content">

            <h2>Contactanos</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="container mt-5">
        <!-- Success message -->
        @if(Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
        @endif
        <form action="" method="post" action="{{ route('contact.store') }}">
            <!-- CROSS Site Request Forgery Protection -->
            @csrf
            <div class="form-group">
                <label>Nombre</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                <label>Telefono</label>
                <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group">
                <label>Asunto</label>
                <input type="text" class="form-control" name="subject" id="subject">
            </div>
            <div class="form-group">
                <label>Mensaje</label>
                <textarea class="form-control" name="message" id="message" rows="4"></textarea>
            </div>
            <input type="submit" name="send" value="Enviar" class="btn btn-dark btn-block">
        </form>
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
