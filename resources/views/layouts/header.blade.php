<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- No uislider cdn for price filter -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/15.5.0/nouislider.min.css" integrity="sha512-qveKnGrvOChbSzAdtSs8p69eoLegyh+1hwOMbmpCViIwj7rn4oJjdmMvWOuyQlTOZgTlZA0N2PXA7iA8/2TUYA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ url("frontend/css/main.css") }}" />
    <title>Bus Ticketing System</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top">
        <div class="container">
            <a href="{{ route("user.userHome") }}" class="navbar-brand font">Bus Ticketing System</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#whyUs" class="nav-link">Why Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="#stats" class="nav-link">Our Stats</a>
                    </li>
                    <li class="nav-item">
                        <a href="#routes" class="nav-link">All Routes</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                24x7 Support
              </a>
                        <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">9840539880</a></li>
                            <li>
                                <a class="dropdown-item" href="#">rusanmhz789@gmail.com</a>
                            </li>
                        </ul>
                    </li>

                    @if (Route::has('login'))
                        @auth
                            @if (Auth::user()->roles === 'ADM')
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                        <li><a class="dropdown-item" href="{{ route('admin.getBus') }}">Manage Bus</a></li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.getOperator') }}">Manage Operator</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{ route('admin.getRoute') }}">Manage Route</a>
                                        </li>

                                        <li>
                                            <a href="{{ route('profile.show') }}" class="dropdown-item">Dashboard</a>
                                        </li>

                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Logout</a>
                                        </li>

                                        <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                            @csrf                                            
                                        </form>
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        {{ Auth::user()->name }}
                                    </a>
                                    <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                        <li>
                                            <a href="{{ route('profile.show') }}" class="dropdown-item">Dashboard</a>
                                        </li>
                                        
                                        <li>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form-a').submit();">Logout</a>
                                        </li>

                                        <form id="logout-form-a" method="POST" action="{{ route('logout') }}">
                                            @csrf                                            
                                        </form>
                                    </ul>
                                </li>
                            @endif
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Action
                            </a>
                            <ul class="dropdown-menu text-center" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('register') }}">Signup</a>
                                </li>
                            </ul>
                        </li>
                        @endauth
                    @endif

                    

                    
                </ul>
            </div>
        </div>
    </nav>