<!--
* Jonnyalexbh
* @Descripcion: login layouts
-->
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <!-- application -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="{{asset('css/login.css')}}" media="screen" title="no title" charset="utf-8">
  <!-- font-awesome framework -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css">
  @yield('css')
</head>
<body class="login">

  @include('layouts.alerts.request')
  @include('layouts.alerts.errors')
  
  <div class="container">
    @yield('content')
  </div>

  <!-- Jquery framework -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  <!-- Js -->
  <!-- Bootstrap framework -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>
