
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <title>Mental Construction | @yield('title-page')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link rel="shortcut icon" href="./images/logo negro.png" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset ('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/estilos-miller.css') }}">
    <link rel="stylesheet" href="{{ asset ('css/bootstrap.css') }}">


</head>
<body>

    <div class="menu">
        <img src="./images/menu.svg" alt="">
        <img src="./images/xCircle.svg" alt="">
    </div>

    <div class="barra_container">

        <header>
            <div class="barra-lateral">
                @include('layouts.includes.my_sidebar')
            </div>

        </header>

        <main class="main_content">
          @yield('message')
          @yield('content')
        </main>

        <script src="{{ asset ('js/script.js') }}"></script>
        <script src="{{ asset ('js/articulos.js') }}"></script>
    
</body>
</html>

