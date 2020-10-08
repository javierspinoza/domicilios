<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/simple-sidebar.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>JAVIER SPINOZA!</title>
  </head>
  <body>
    <div class="d-flex" id="wrapper">
      {{-- aqui creamos nuestro sidebar --}}
      <div class="bg-ligth border-right" id="sidebar-wrapper">
        <div class="sidebar-heading"><strong>DOMICILIOS</strong></div>
        <div class="list-group list-group-flush">
          <a href="{{route('servicios')}}" class="list-group-item list-group-item-action">Servicios</a>
          <a href="{{route('clientes')}}" class="list-group-item list-group-item-action">Clientes</a>
          <a href="{{route('direcciones')}}" class="list-group-item list-group-item-action">Direcciones</a>
          <a href="{{route('empleados')}}" class="list-group-item list-group-item-action">Empleados</a>
          <a href="{{route('marcas')}}" class="list-group-item list-group-item-action">Marca</a>
          <a href="{{route('modelos')}}" class="list-group-item list-group-item-action">Modelo</a>
          <a href="{{route('pagoempresas')}}" class="list-group-item list-group-item-action">Pago Empresa</a>
          <a href="{{route('servicios')}}" class="list-group-item list-group-item-action">Servicios</a>
          <a href="{{route('vehiculos')}}" class="list-group-item list-group-item-action">Vehiculos</a>          
        </div>
      </div>


    <div id="page-content-wrapper">
      <nav class="navbar navbar-light navbar-expand-lg bg-light border-bottom">
        <a class="navbar-brand" href="#">
          <button class="btn btn-primary" id="menu-toggle"><</button>
          @yield('titulo')
        </a>
      </nav>
    <div class="container">
      @yield('domicilio')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/slim.min.js" ></script>
    <script src="/js/popper.min.js" ></script>
    <script src="/js/bootstrap.min.js"></script>

    <script>
      $('#menu-toggle').click(function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
    </script>

  </body>
</html>