
<header>
    <div class="header-area ">
        <div id="sticky-header" class="main-header-area ">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-2">
                        <div class="logo">
                            <a href="/home">
                                <img src="page/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="main-menu white_text  d-none d-lg-block">
                            <nav>
                                <ul id="navigation">
                                    <li><a href="/home">home</a></li>
                                    <li><a href="/about">about</a></li>

                                    <li><a href="/recipe">Recipes</a></li>
                                    <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="/blog">blog</a></li>
                                            <li><a href="/single_blog">single-blog</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="/recipes_details">Recipes Details</a></li>
                                            <li><a href="/elements">elements</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Contact <i class="ti-angle-down"></i></a>
                                        <ul class="submenu">
                                            <li><a href="/contact">Message</a></li>
                                            <li>
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
                                                        <ul>
                                                            <li><a id="navbarDropdown" class="dropdown-item" href="/admin/users/list_users">Manage</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('logout') }}"
                                                                   onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">

                                                                    {{ __('Logout') }}
                                                                </a></li>
                                                        </ul>

                                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                            @csrf
                                                        </form>
                                                    </div>

                                                    @endguest

                                                </li>
                                        </ul>
                                    </li>
                                        </ul>
                                    </li>





                                </ul>
                                </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                        <div class="search_icon">
                            <a href="#">
                                <i class="ti-search"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
