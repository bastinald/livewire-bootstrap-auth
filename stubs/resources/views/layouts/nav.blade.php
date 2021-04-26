<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a href="{{ url('/') }}" class="navbar-brand">
            {{ config('app.name') }}
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-nav"
            aria-controls="navbar-nav" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div id="navbar-nav" class="collapse navbar-collapse">
            @guest
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('login') }}"
                            class="nav-link {{ Request::routeIs('login') ? 'active' : '' }}">
                            {{ __('Login') }}
                        </a>
                    </li>

                    @if(Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}"
                                class="nav-link {{ Request::routeIs('register') ? 'active' : '' }}">
                                {{ __('Register') }}
                            </a>
                        </li>
                    @endif
                </ul>
            @else
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('home') }}"
                            class="nav-link {{ Request::routeIs('home') ? 'active' : '' }}">
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="user-dropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="user-dropdown">
                            <li><a href="{{ route('logout') }}" class="dropdown-item">{{ __('Logout') }}</a></li>
                        </ul>
                    </li>
                </ul>
            @endguest
        </div>
    </div>
</nav>
