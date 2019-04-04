<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/select2.js') }}" defer></script>

    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/js.js') }}" defer></script>
    <script src="{{ asset('js/parsley.js') }}" defer></script>
  <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>
  tinymce.init({ 
    selector:'textarea',
    plugins:'link',
    // toolbar: "code"
    // menubar:"tools"
});
</script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> --}}
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{-- <link href="{{ asset('css/style.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/parsley.css') }}" rel="stylesheet">
    <link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
</head>
<body>
  
    <div id="app">


        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand {{Request::is('index')?'active':''}}" href="{{ url('/') }}">
                    {{ config('app.name', 'Blog') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
              {{--    <li class=" {{Request::is('contact')? 'active': ''}}"> <a class="nav-link " href="/contact">{{ __('contact') }}</a></li> --}}
             {{--     <li class="{{Request::is('about') ? 'active':''}}"> <a class="nav-link" href="/about">{{ __('about') }}</a></li>
                 <li class=" {{Request::is('blog')? 'active' :''}}"> <a class="nav-link" href="/blog">{{ __('blog') }}</a></li>
                 <li class="{{Request::is('service')? 'active':''}}"><a class="nav-link " href="/service">{{ __('service') }}</a></li>
                   <li class="{{Request::is('EContact')? 'active':''}}"><a class="nav-link " href="/EContact">{{ __('Contact us') }}</a></li> --}}
                    
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                 {{--  <a class="dropdown-item" href="/user-post">{{ __('Dashboard') }}</a>
                                  <a class="dropdown-item" href="/user-post/create">{{ __('Create Post') }}</a>
                                  <a class="dropdown-item" href="/category/create">{{ __('Create Category') }}</a>
                                  <a class="dropdown-item" href="/tag/create">{{ __('Create tags') }}</a> --}}

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
                </div>
            </div>
        </nav>

        <main class="py-4">
              @include('inc.messages')

            @yield('content')
        </main>
    </div>
<script>

  
</script>
</body>
</html>
