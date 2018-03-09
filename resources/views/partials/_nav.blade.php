<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel Blog
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         <li class="nav-item">
                            <a class="nav-link {{ Request::is('/') ? "active" : ""}}" href="/">Home</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link {{ Request::is('blog') ? "active" : ""}}" href="/blog">Blog</a>
                          </li>

                          <li class="nav-item">
                            <a class="nav-link {{ Request::is('about') ? "active" : ""}}" href="/about">About</a>
                          </li>
                        

                          <li class="nav-item">
                            <a class="nav-link {{ Request::is('contact') ? "active" : ""}}" href="/contact">Contact</a>
                          </li>
        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @else

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('home') }}">Dashboard</a>
                                  <a class="dropdown-item" href="{{ route('posts.index') }}">Posts</a>
                                  <a class="dropdown-item" href="{{ route('categories.index') }}">Categories</a>
                                  <a class="dropdown-item" href="{{ route('tags.index') }}">Tags</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
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