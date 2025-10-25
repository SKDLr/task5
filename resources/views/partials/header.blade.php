<header class="main-header fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="https://toyishland.com/wp-content/themes/zixton-test/assets/images/logo.svg" alt="Toyishland Logo" height="50">
            </a>

            <!-- Mobile Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navigation Menu -->
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('shop') ? 'active' : '' }}" href="{{ url('/shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('shop') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
                    </li>
                    
                    <!-- Cart -->
                    <a href="{{ url('/cart') }}" class="btn btn-link text-dark p-0 position-relative me-3">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="cart-count">0</span>
                    </a>

                    <!-- User Account -->
                    @auth
                        <div class="dropdown">
                            <button class="btn btn-link text-dark p-0" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-user fa-lg"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ url('/profile') }}">Profile</a></li>
                                <li><a class="dropdown-item" href="{{ url('/orders') }}">My Orders</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" class="dropdown-item">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-link text-dark p-0">
                            <i class="fas fa-user fa-lg"></i>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
</header>