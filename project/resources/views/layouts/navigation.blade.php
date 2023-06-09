<div class="navbar">
    <nav>
        <ul class="nav-links">
            <div class="col-sm-9">
                <li>
                    <img class="nav-logo" src="{{ asset('assets/logo.png') }}" alt="the compnay logo">
                </li>
            </div>
            <div class="col-sm-3">
                <div class="nav-links-2">
                    <li>
                        <a href="{{ url('/home') }}">Home</a>
                    </li>
                    @if(Auth::check())
                        @if(Auth::user()->role_id == 1 )
                        @else(Auth::user()->role_id == 2 )

                        @endif
                        <li>
                            <a href="{{ url('/orders') }}">Order history</a>
                        </li>
                        <li>
                            <a href="{{ url('/logout') }}" id="form-button">Logout</a>
                        </li>
                    @else
                        <li>
                            <a href="{{ url('/register') }}" id="form-button">Register</a>
                        </li>
                        <li>
                            <a href="{{ url('/login') }}">Login</a>
                        </li>
                    @endif
                </div>
            </div>
        </ul>
    </nav>
</div>
<div class="navbar-btm">
    <nav>
        <ul class="nav-links" style="margin-left: 10%">
            @if(Auth::check())
                <li>
                    <a href="{{ url('/dashboard') }}">
                        <button class="btn-lg btn-dark">
                        <span class="nav-symbol">
                            <i class="fa-solid fa-align-justify"></i>
                        </span>
                            <span class="nav-logo-text">Dashboard</span>
                        </button>
                    </a>
                </li>
                @if(Auth::user()->role_id == 1 )
                    <li>
                        <a href="{{ route('comp.index') }}">
                            <button class="btn-lg btn-dark">
                        <span class="nav-symbol">
                            <i class="fa-solid fa-microchip"></i>
                        </span>
                                <span class="nav-logo-text">Components</span>
                            </button>
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('builds.index') }}">
                            <button class="btn-lg btn-dark">
                        <span class="nav-symbol">
                            <i class="fa-solid fa-computer"></i>
                        </span>
                                <span class="nav-logo-text">Builds</span>
                            </button>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/admin/users') }}">
                            <button class="btn-lg btn-dark">
                        <span class="nav-symbol">
                            <i class="fa-solid fa-person"></i>
                        </span>
                                <span class="nav-logo-text">Users</span>
                            </button>
                        </a>
                    </li>
                @elseif(Auth::user()->role_id == 2)
                    <li>
                        <a href="{{ url('/builder') }}">
                            <button class="btn-lg btn-dark">
                        <span class="nav-symbol">
                            <i class="fa-solid fa-wrench"></i>
                        </span>
                                <span class="nav-logo-text">PC Builder</span>
                            </button>
                        </a>
                    </li>
                @endif
            @else
            <li>
                <a href="{{ url('/builder') }}">
                    <button class="btn-lg btn-dark">
                        <span class="nav-symbol">
                            <i class="fa-solid fa-wrench"></i>
                        </span>
                        <span class="nav-logo-text">PC Builder</span>
                    </button>
                </a>
            </li>

            <li>
                <a href="{{ url('/presets') }}">
                    <button class="btn-lg btn-dark">
                        <span class="nav-symbol">
                            <i class="fa-solid fa-computer"></i>
                        </span>
                        <span class="nav-logo-text">Presets</span>
                    </button>
                </a>
            </li>

            <li>
                <a href="{{ url('/cart') }}">
                    <button class="btn-lg btn-dark">
                    <span class="nav-symbol"><i class="fa-solid fa-cart-shopping"></i></span>
                        <span class="nav-logo-text">Cart</span>
                    </button>
                </a>
            </li>
            @endif
        </ul>
    </nav>

</div>

