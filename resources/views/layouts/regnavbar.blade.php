
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Institute of Integrated Electrical Engineers of the Philippines, Inc.</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet"> 
    <link href="{{asset('css/animate.css') }}" rel="stylesheet">
    

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top" style="background-color:white">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="img-responsive2"       
                                              src="images/logomembership.png" style="max-width: 90%"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="Home">Home</a>
           </li>
            <li class="nav-item">
              <a class="nav-link" href="registration">Register</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Login</a>
            </li>
             <li class="nav-item">
              <a class="nav-link" href="">Contact Us</a>
            </li>
              <li class="nav-item">
              <a class="nav-link" href="">Events</a>
            </li> 
          </ul>
        </div>
      </div>
    </nav>
    @yield('content')
    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>
</html>
