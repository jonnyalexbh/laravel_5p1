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
  
  <div class="container">
    @yield('content')
  </div>

  @yield('js')
</body>
</html>
