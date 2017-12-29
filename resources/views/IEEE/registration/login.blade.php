@extends('layouts.regnavbar')
@section('content')
    <head>

  <meta charset="UTF-8">

  <title>CodePen - Log-in</title>



    <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
    <link rel="stylesheet" href="css/animate.css" media="screen" type="text/css" />
</head>

<body>
    <br><br><br><br><br><br>
  <div class="login-card animated fadeIn">

    <h1>Log-in</h1><br>
  <form>
    <input type="text" name="user" placeholder="Username">
    <input type="password" name="pass" placeholder="Password">
    <input type="submit" name="login" class="login login-submit" value="login">
  </form>

  <div class="login-help">
    <a href="registration">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>
                        </<div>
</body>
<br><br><br>
@endsection