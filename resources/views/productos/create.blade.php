<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  


  <title>TecActiva Omar Jaramillo</title>


<script src="{{ asset('js/app.js') }}" defer></script>


  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    TecActiva
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">


                    

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('nuevoproducto') }}">{{ __('Nuevo') }}</a>
                                </li>



                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                               <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>





<h1 class="alert-dark">Ingrese Nuevo Producto</h1>
</center>
<form action="{{url('/productos')}}" method="post" enctype="multipart/form-data">
@csrf
           <div class="form-group">
          <label for="valorEgreso">ID</label>
          <input type="text" name="id" id="" class="form-control" placeholder="" aria-describedby="helpId">
  
  <br>

        <label for="descripcion">Nombre Producto</label>
        <input type="text" name="nombre_producto" id="" class="form-control" placeholder="" aria-describedby="helpId">
   <br>

      <label for="descripcion">Descripcion</label>
      <input type="text" name="descripcion" id="" class="form-control" placeholder="" aria-describedby="helpId">

<br>

      <label for="descripcion">Precio</label>
       <input type="textarea" name="precio" id="" class="form-control" placeholder="" aria-describedby="helpId">


       <label for="descripcion">Estado</label>
       <input type="number" name="estado" id="" class="form-control" placeholder="" aria-describedby="helpId">
       <br>

  

       



</div>

      <input class="btn-primary" type="submit" value="Enviar">
    
    
    
    </form>

                         
</body>
</html>























