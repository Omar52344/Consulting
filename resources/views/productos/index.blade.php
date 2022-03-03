
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TecActiva Omar Jaramillo</title>

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


<table class="table table-striped">
                <thead>
                    <tr> 
                        <th  style="width:150px;"class="text-left">Id</th>
                        <th  style="width:150px;"class="text-left">nombre</th>
                        <th style="width:150px;" class="text-left">Precio</th>
                        <th style="width:150px;" class="text-left">Estado</th>
                        <th style="width:150px;" class="text-left">Publicacion</th>
                        <th style="width:150px;" class="text-left"></th>
                        
                                             
                    </tr>
                </thead>
                <tbody>
                     @foreach($producto as $m)
                     <tr>
                        <td style="width:150px;" class = text-left>{{ $m->id }} </td>
                         <td style="width:150px;" class = text-left>{{ $m->nombre_producto }} </td>
                         <td style="width:150px;" class = text-left>{{ $m->precio }} </td>
                         <td style="width:150px;" class = text-left>{{ $m->estado }} </td>
                         <td style="width:150px;" class = text-left>{{ $m->created_at }} </td>
                         

                         

                         <td style="width:150px;" class = text-left>
                         
                         <a href="{{url('productos/'.$m->id.'/edit')}}" >Editar</a>
                         

                      
                     
                     

                         </form> </td>

                         <td style="width:150px;" class = text-left><form action="{{url('productos/'.$m->id)}}" method="post">
                      
                         @csrf
                      {{method_field('DELETE')}}
                     <input type="submit"onClick="return confirm('¿Quieres borrar?')" value="Borrar">

                         </form> </td>

                         
                            
                        
                     </tr>
                     @endforeach
                </tbody>
            </table>

</body>
</html>







