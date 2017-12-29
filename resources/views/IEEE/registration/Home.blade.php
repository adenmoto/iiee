    @extends('layouts.regnavbar')
@section('content')

<div class="container">
       <br><br>
    <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4">        
         <img class="card-img-top animated shake" src="images/reghome/profile.png" alt="" style="max-width: 50%; margin-left:6em ; ">
            <br><br> <br>
          <div class="card h-50 text-center">        
            <div class="card-body">
              <h4 class="card-title"><b>Profile</b></h4>
              <p class="card-text">Each member will have his/her own profile. You can login and view your data anytime, anywhere. You can also view transaction and status of your membership.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
       <img class="card-img-top animated shake" src="images/reghome/pupdate.png" alt="" style="max-width: 50%; margin-left:6em ">
         <br><br><br>
          <div class="card h-50 text-center">
            <div class="card-body">
                <h4 class="card-title"><b>Easy Update</b></h4>
              <p class="card-text">Members can update their data anytime, anywhere with our new system. No worries if you want to change your contact information and if you want to keep us updated. </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
            <img class="card-img-top animated shake" src="images/reghome/renewal.png" alt="" style="max-width: 50%; margin-left:6em; ">   
            <br><br><br>
          <div class="card h-50 text-center">
         
            <div class="card-body">
                <h4 class="card-title"><b>Renewal</b></h4>
              <p class="card-text">Renewal made easy. No need to go to main office to renew your membership. Renewal is just one click away. </p>
            </div>
          </div>
        </div>
      </div>
    </div>
<br><br>
<div class="container">
    <center>
        <a href="registration">
         <img src="images/reghome/register-now.png">
        </a>
    </center>
</div>
<br><br>



@endsection