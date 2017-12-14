<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>
@extends('layouts.app')
@section('content')

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Services
        <small>Subheading</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Home</a>
        </li>
        <li class="breadcrumb-item active">Issuances</li>
      </ol>

      <!-- Image Header -->
      <img class="img-fluid rounded mb-6 animated fadeIn" src="images/issuances/issuances3.jpg" alt="">

      <!-- Marketing Icons Section -->
      <div class="row">
        <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
            <h4 class="card-header">Compliance to IIEE Membership E-Card Requirements and Issuancesof Certificate of Good Standing</h4>
            <div class="card-body">
              <p class="card-text">SUBJECT: Memorandum Circular
              </p>
            </div>
            <div class="card-footer">
              <a href="/memo" class="btn btn-primary">View Image</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 animated fadeIn">
          <div class="card h-100">
            <h4 class="card-header">Proposed Amendments to the IIEE Constitution and By-Laws</h4>
            <div class="card-body">
              <p class="card-text">SUBJECT: Proposed amendments to the IIEE constitution and by laws</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">View Image</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4 animated fadeIn" >
          <div class="card h-100">
            <h4 class="card-header">CHED MEMORANDUM</h4>
            <div class="card-body">
              <p class="card-text">SUBJECT: Participation in the 2015 annual national convention of the institute of integrated electrical engineer of the philippines, inc.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">View Image</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection
</html>