<div class="d-flex" id="wrapper">
    {{-- aqui creamos nuestro sidebar --}}
    <div class="bg-ligth border-right" id="sidebar-wrapper">
      <div class="sidebar-heading"><strong>GESTIONES</strong></div>
      <div class="list-group list-group-flush">
        <a href="{{route('servicios')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">call_end</i>Servicios</a>
          <a href="{{route('clientes')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">supervisor_account</i>Clientes</a>
          <a href="{{route('direcciones')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">assignment</i>Direcciones</a>
          <a href="{{route('empleados')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">supervisor_account</i>Empleados</a>
          <a href="{{route('marcas')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">copyright</i>Marca</a>
          <a href="{{route('modelos')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">toc</i>Modelo</a>
          <a href="{{route('pagoempresas')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">attach_money</i>Pago Empresa</a>
          <a href="{{route('vehiculos')}}" class="list-group-item list-group-item-action"><i class="material-icons md-24 align-top">sports_motorsports</i>Vehículos</a>          
      </div>
    </div>

    {{-- contenido de la paguina --}}
    <div id="page-content-wrapper">
      <nav class="navbar navbar-light navbar-expand-lg bg-light border-bottom">
          <button class="btn btn-primary" id="menu-toggle"><i class="material-icons md-24 align-top">close_fullscreen</i></button>
        <a class="navbar-brand" href="#">
          @yield('titulo')
        </a>
      </nav>
    <div class="container-fluid">
      @yield('domicilio')
    </div>
  </div>
</div>


  <script>
    $('#menu-toggle').click(function(e){
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>