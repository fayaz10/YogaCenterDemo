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
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
  tinymce.init({ 
    selector:'textarea',
    plugins:'link',
});
    </script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
                <a class="navbar-brand {{Request::is('index')?'active':''}}" href="{{ url('/manage/dashboard') }}">
                    {{-- {{ config('app.name', 'Blog') }} --}}
                 {{__('Mangement Page')}}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown {{Request::is('manage/post/create') ? 'active':''}}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   New  <span class="caret"></span>
                                </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/manage/post/create">{{ __(' New Post') }}</a>
                                  <a class="dropdown-item" href="/manage/post">{{ __('All Posts') }}</a>
                                  {{-- <a class="dropdown-item" href="/tag/create">{{ __('Create tags') }}</a> --}}
                                </div>
                            </li> 
                            <li class="nav-item dropdown {{Request::is('manage/trainersIndex') ? 'active':''}}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Traners <span class="caret"></span>
                                </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/manage/trainersIndex">{{ __('All Traners') }}</a>
                                  <a class="dropdown-item" href="/manage/post/create">{{ __('new trainer') }}</a>
                                </div>
                            </li>
                              <li class="nav-item dropdown {{Request::is('manage/eventsIndex') ? 'active':''}}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Events <span class="caret"></span>
                                </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/manage/eventsIndex">{{ __('All Events') }}</a>
                                  <a class="dropdown-item" href="/manage/post/create">{{ __('New event') }}</a>
                                </div>
                            </li>
                                   <li class="nav-item dropdown {{Request::is('manage/ourClassIndex') ? 'active':''}}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Classes <span class="caret"></span>
                                </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/manage/ourClassIndex">{{ __('All Classes') }}</a>
                                  <a class="dropdown-item" href="/manage/post/create">{{ __('New Class') }}</a>
                                </div>
                            </li>
                                  <li class="nav-item dropdown {{Request::is('manage/servicesIndex') ? 'active':''}}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Serveces <span class="caret"></span>
                                </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/manage/servicesIndex">{{ __('All Serveces') }}</a>
                                  <a class="dropdown-item" href="/manage/post/create">{{ __('New service') }}</a>
                                </div>
                            </li> 
                    
                              <li class="nav-item dropdown {{Request::is('about') ? 'active':''}}">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Privacy Policy <span class="caret"></span>
                                </a>
                             <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/tag/create">{{ __('Create tags') }}</a>
                                  <a class="dropdown-item" href="/tag/create">{{ __('Create tags') }}</a>
                                  <a class="dropdown-item" href="/tag/create">{{ __('Create tags') }}</a>
                                </div>
                            </li>                    
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
                                  <a class="dropdown-item" href="/manage/post">{{ __('Dashboard') }}</a>
                                  <a class="dropdown-item" href="/manage/post/create">{{ __('Create Post') }}</a>
                                  <a class="dropdown-item" href="/manage/category/create">{{ __('Create Category') }}</a>
                                  {{-- <a class="dropdown-item" href="/tag/create">{{ __('Create tags') }}</a> --}}

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
