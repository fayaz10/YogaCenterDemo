
    <!-- //header -->
    <header class="py-sm-3 pt-3 pb-2" id="home">
        <div class="container">
            <!-- nav -->
            <div class="top d-md-flex">
                <div id="logo">
                    <h1> <a class="navbar-brand {{Request::is('index2')?'active':''}}" href="{{ url('/index2') }}">
                    {{ config('app.name', 'Blog') }}
                </a></h1>
                </div>
                <div class="search-form mx-md-auto">
                    <div class="form-w3layouts-grid">
                        <form action="#" method="post" class="newsletter">
                            <input class="search" type="search" placeholder="Search..." required="">
                            <button class="form-control btn" value=""><span class="fas fa-search"></span></button>
                        </form>
                    </div>
                </div> 
                  @guest
                <div class="forms mt-md-0 mt-2">
                    <a href="/login" class="btn"><i class="fas fa-user-circle"></i> Sign In</a>
                      @if (Route::has('register'))
                    <a href="/register" class="btn"><i class="fas fa-pen-square"></i> Sign Up</a>
                        @endif
                     @else
                   @endguest
                </div>
            </div>
            <nav class="text-center">
                <label for="drop" class="toggle"><i class="fas fa-bars"></i></label>
                <input type="checkbox" id="drop" />
                <ul class="menu">
                  <li class="{{Request::is('index2') ? 'active':''}}"> <a class="nav-link" href="/index2">{{ __('index') }}</a></li>
                    <li class="{{Request::is('about2') ? 'active':''}}"> <a class="nav-link" href="/about2">{{ __('about') }}</a></li>
                   
                      <li class="{{Request::is('contact2')? 'active':''}}"><a class="nav-link " href="/contact2">{{ __('Contact us') }}</a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">Dropdown <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href="/services2" class="drop-text">Services</a></li>
                            <li><a href="/events2" class="drop-text">Events</a></li>
                       </ul>
                    </li>

                  @if(!Auth::guest())
                        <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">    Hi.{{ Auth::user()->name }} <span class="fa fa-angle-down" aria-hidden="true"></span>
                        </label>
                        <a href="#">    Hi.{{ Auth::user()->name }} <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                          <li><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                             </form></li>
                        </ul>
                    </li>
                    @endif
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->