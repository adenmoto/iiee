@extends('layouts.appabout')
@section('content')   
<head>
    <link href="{{asset('css/animate.css') }}" rel="stylesheet">
</head>
    <!-- Page Content -->
    <div class="container animated fadeIn">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">About Us
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a href="/about">About</a>
        </li>
       <li class="breadcrumb-item active">Code of Ethics</li>

      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-12">
          <img class="img-fluid rounded mb-4" src="images/aboutx/codeofethics.jpg"alt="">
        </div>
        <div class="col-lg-12">
                 <h2>IEEE</h2>
          <p><b>Foreword</b></p>
          <p>The Engineer shall uphold and advance the integrity, honor and dignity of the engineering profession by:</p>
          <p>I. Using his knowledge and skill for the enhancement of human welfare;</p>
          <p>II. Being honest and impartial, and serving with fidelity the public, his employers and his clients; and</p>
          <p>III. Striving to increase the competence and prestige of the engineering profession.</p>
          <p><b>The Fundamental Canons</b></p>
        <div class="col-lg-12">
          <p>&nbsp &nbsp We, therefore Members of the Institute of Integrated Electrical Engineers of the Philippines, (IIEE), in recognition of the never-ending involvement of our technology, in uplifting the quality of life, and in accepting a personal obligation and dedication to our profession, its members and the communities we serve, do hereby pledge and commit ourselves to the highest ethical and professional conduct and agree:</p>
        </div><br>
          <p>1. To accept responsibility in making sound engineering decisions consistent with the safety, health and welfare of the public, and to disclose promptly the factors that might endanger the public or the environment;</p>
          <p>2. To avoid real or perceived conflicts of interest whenever possible, and to disclose them to affected parties when they do exist;</p>
          <p>3. To be honest, objective, impartial and realistic in stating claims or estimates base on available facts</p>
          <p>4. To prevent graft and corruption in all its forms</p>
          <p>5. To improve the understanding of technology and its advancement, its appropriate application, and potential consequences;</p>
          <p>6. To maintain and improve our technical competence and to undertake technological tasks for others only if qualified by education, training or experience, or after full disclosure of pertinent limitations</p>
          <p>7. To seek, accept, and offer honest and constructive criticism of technical work; to acknowledge and correct errors; and to credit properly their contributions;</p>
          <p>8. To treat fairly all persons regardless of race, gender, disability, age or national origin</p>
          <p>9. To avoid injury to other’s life property, reputation or livelihood by false or malicious actions; and</p>
          <p>10. To assist colleagues and co-workers in their professional development and to support them in following this Code of Ethics. </p>
       </div>
      </div>
@endsection