<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>OverFly | @yield('titulo')</title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/uikit.min.css">
  <link rel="stylesheet" href="css/estilos.css">
  {{-- <link rel="stylesheet" href="https://getuikit.com/css/theme.css?510"> --}}
</head>
<body>
  @include('layouts.menu')

  @yield('contenido')

  <script src="js/jquery.min.js"></script>
  <script src="js/uikit.js"></script>
  <script src="js/uikit-icons.min.js"></script>
</body>
</html>
