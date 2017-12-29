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

  <body style="background-image: url('images/bg.png');">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light fixed-top" style="background-color:#FFbe35">
      <div class="container">
        <a class="navbar-brand" href="/"><img class="img-responsive2"       
       src="images/lolog.png">IIEE</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           <li class="nav-item">
              <a class="nav-link" href="/">Home</a>
           </li>
            <li class="nav-item">
              <a class="nav-link" href="about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="issuances">Issuances</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="jobopportunities">Job Opportunities</a>  
            </li>
             <li class="nav-item">
              <a class="nav-link" href="calendar">Calendar</a>
            </li>
             <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdowncontact " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Contact Us</a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdowncontact">
                <a class="dropdown-item" href="contactus">Contact Us</a>
                <a class="dropdown-item" href="membershipdept">Membership Department</a>
                <a class="dropdown-item" href="admindept">Admin Department</a>
                <a class="dropdown-item" href="marketingdept">Marketing Department</a>
                <a class="dropdown-item" href="financedept">Finance Department</a>
                <a class="dropdown-item" href="pimis">Public Information Management Information System Department</a>
              </div>
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
