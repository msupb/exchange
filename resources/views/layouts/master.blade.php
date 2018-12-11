<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset('css/stylesheetadmin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/stylesheetauth.css') }}" rel="stylesheet">
    <link href="{{ asset('css/indexuserstylesheet.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
	<nav id="header-navbar" class="navbar navbar-inverse">
    <a id="brand" class="navbar-brand" href="{{ url('/') }}">
            Exchange
        </a>
    <ul>
        <!-- Authentication Links -->
        @guest
            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
            <li id="logout-dropdown" class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span id="menu-user">{{ Auth::user()->name }}</span> <span class="caret"></span>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
            </li>
        @endguest
    </ul>
	</nav>
	<div class="wrapper">
    <!-- Sidebar -->
    @if(Auth::user())
    <nav id="sidebar">
        <div class="sidebar-header">
            <h3>Dashboard</h3>
        </div>	
        <ul class="list-unstyled components">
            <p>Options</p>
            <li><a href="http://localhost/exchange/public/home/faculty">Faculties</a></li>
            <li><a href="http://localhost/exchange/public/home/universities">Universities</a></li>
            <li><a href="http://localhost/exchange/public/home/level">Level</a></li>
            <li><a href="http://localhost/exchange/public/home/countries">Countries</a></li>
            <li><a href="http://localhost/exchange/public/home/city">Cities</a></li>
            <li><a href="http://localhost/exchange/public/home/programme">Programme</a></li>
            <li><a href="http://localhost/exchange/public/home/course">Course</a></li>
            <li><a href="http://localhost/exchange/public/home/package">Package</a></li>
            @if(Auth::user()->hasRole('Super_admin')) 
                <li><a href="http://localhost/exchange/public/home/admin">Users</a></li>
            @endif
        </ul>
    </nav>
		<div id="content">
            @yield('content2')
		</div>
	@else
		<div class="container">
            @yield('content')
        </div>
    @endif
	</div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>