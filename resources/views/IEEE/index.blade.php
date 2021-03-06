 @extends('layouts.app')
@section('content')
 <body>

     

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active animated fadeIn" style="background-image: url('images/indexcover/1.jpg')">
            <div class="carousel-caption d-none d-md-block animated fadeIn">
              <h3>First Slide</h3>
              <p>This is a description for the second slide.</p>      
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/indexcover/2.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Second Slide</h3>
              <p>This is a description for the second slide.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/indexcover/3.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Third Slide</h3>
              <p>This is a description for the third slide.</p>
            </div>
          </div>
           <!-- Slide four - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('images/indexcover/4.jpg')">
            <div class="carousel-caption d-none d-md-block">
              <h3>Four Slide</h3>
              <p>This is a description for the four slide.</p>
            </div>
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
    </header>

    <!-- Page Content -->
    <div class="container animated fadeIn">

      <h5 class="my-4 text-center">IIEE 2017 Theme: SUSTAINING GROWTH INITIATIVES FOR GLOBAL EXCELLENCE</h5><br>
      <div class="row">
      <h5>NEWS & EVENTS</h5><br>
      <div class="row" >
 
        <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
              <h6 class="card-header"><strong>IIEE Southern Cavite Chapter Report November 2017</strong></h6>
            <div class="card-body" animated fadeIn>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
              <h6 class="card-header"><strong>IIEE-CDO Report for the month of OCTOBER 2017</strong></h6>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
              <h6 class="card-header"><strong>2017 List of Election Ballot 1st batch Return to Sender (RTS)</strong></h6>
            <div class="card-body">
              <p class="card-text" animated fadeIn>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
          <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
              <h6 class="card-header"><strong>IIEE-CDO Chapter September 2017 Activities </strong></h6>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
              <h6 class="card-header"><strong>ISA GROUP PERDAMAN Job Opportunity</strong></h6>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ipsam eos, nam perspiciatis natus commodi similique totam consectetur praesentium molestiae atque exercitationem ut consequuntur, sed eveniet, magni nostrum sint fuga.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
              <h6 class="card-header"><strong>2017 4th MM Presentations</strong></h6>
            <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      
      <!-- Features Section -->
      <br>
      <div class="row">
        <div class="col-lg-6 animated fadeIn">
          <h5>Quick Links</h5>
           <ul>
              <a href="/Home"><li>Membership Online Registration</li></a>
              <a href="#"><li>Asia Power Quality Initiative - Philippines</li></a>
              <a href="#"><li>IIEE Board Resolution No. 2012-03-31</li></a>
              <a href="#"><li>Application for ASEAN Engineer</li></a>
              <a href="#"><li>THE IIEE FOUNDATION PROFILE</li></a>
              <a href="#"><li>IIEE Council of Student Chapters-IIEECSC</li></a>
              <a href="#"><li>2016 3RD METRO MANILA CONFERENCE PRESENTATION</li></a>
              <a href="#"><li>TECHNICAL INFORMATION COMMITTEE </li></a>
          </ul>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
        </div>
        <div class="col-lg-6 animated fadeIn">
            <img class="img-fluid rounded" src="images/lolog.png" alt="LOGO" style="max-width:70%">
        </div>
      </div>
       </div>
        </div>
    <br>
    <br>
  </body>
</html>
@endsection

