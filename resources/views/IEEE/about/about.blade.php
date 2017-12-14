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
        <li class="breadcrumb-item ">
          <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item active">About</li>
      </ol>

      <!-- Intro Content -->
      <div class="row">
        <div class="col-lg-6">
          <img class="img-fluid rounded mb-4" src="images/aboutx/aboutlogo.png"alt="">
        </div>
        <div class="col-lg-6">
          <h2>About IEEE</h2>
          <p>The Institute of Integrated Electrical Engineers of the Philippines, Inc. (IIEE) is the organization of electrical practitioners and the only accredited professional organization (APO) of electrical practitioners by the Professional Regulation Commission (PRC) with PRC Cert. No. I-APO-016. Founded in 1975, the organization, which started with 500 members, has now 47,000 members and more are joining.</p>
          <p>The new EE Law (RA 7920) requires Electrical Practitioners (Professional Electrical Engineers, Registered Electrical Engineers and Registered Master Electricians) to be a member of IIEE or other PRC accredited organization of electrical practitioners. IIEE being the only APO of electrical practitioners expects to more than double its membership by year 2008.</p>
          <p>IIEE is committed to (1) upgrade the professional credentials of its members through the Continuing Professional Development (CPD) programs; (2) enhance their social standing through the promotion of high ideals of integrity and ethics; (3) facilitate advancement of technology transfer through carefully conceived educational and training programs; and (4) provide opportunity for regular interaction among electrical practitioners.</p>
        </div>
      </div>
    @endsection


