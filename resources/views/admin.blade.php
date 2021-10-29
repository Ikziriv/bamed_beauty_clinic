<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="">
	
	<meta name="author" content="">
	
	<link rel="icon" href="images/favicon.ico">
	
	<title>Bamed Apps</title>
	@yield('style')
    @include('partials.assets.css.index')
	<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.2/classic/ckeditor.js"></script>
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<div class="row">
			<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2 bg-faded sidebar-style-1">
				<h1 class="site-title"><a href="/admin"><em class="fa fa-rocket"></em> BAMED Apps</a></h1>
				
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-bars"></em></a>
				
				@include('partials.component.sidebar')
                {{-- <a class="logout-button" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <em class="fa fa-power-off"></em> Signout</a>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form> --}}
			</nav>
			
			<main class="col-xs-12 col-sm-8 offset-sm-4 col-lg-9 offset-lg-3 col-xl-10 offset-xl-2 pt-3 pl-4">
				@include('partials.component.header')
				{{--  Body  --}}
                @yield('content')
			</main>
		</div>
	</div>
    
    @include('partials.assets.js.index')
    @yield('javascript')
	</body>
</html>
