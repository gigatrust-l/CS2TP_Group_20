<header class="main-header" >
    <div class="logo">
        <a href="/" class="logo" >
            <img src="{{ asset('media/media_webp/logo.webp') }}" alt="Naturale Logo">
        </a>
    </div>
    <nav class="d-flex align-items-center gap-3">
        <form class="search-bar d-flex align-items-center gap-3" action="{{ route('products') }}" method="get">
            <input class="form-control" type="search" placeholder="Search" title="Search" aria-label="Search"
                name="name"></input>
            <a class="nav-button">
                <button id="searchBtn" title="Search" aria-label="Search " ><i class="fa-solid fa-magnifying-glass "></i></button>
            </a>
        </form>
        <div class="headerIcons d-flex align-items-center gap-3">
            <a href="/products" title="Shop" aria-label="Products" class="nav-button"><i class="fa-solid fa-store "></i></a>

            <a href="/cart" title="Cart" aria-label="Cart" class="nav-button"><i class="fa-solid fa-cart-shopping "></i></a>

            @if (auth()->user() == null)
                <a href="/login" title="My Account" aria-label="myAccount" class="nav-button"><i id="nav-button" class="fa-solid fa-user "></i></a>
            @else
                <div class="btn-group">
                    <a href="/portal" class="btn btn-success">
                        Dashboard
                    </a>
                    <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <p class="dropdown-item text-white px-4 py-2 mb-0 fw-bold">
                                {{ Auth::user()->name }}
                            </p>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item text-white px-4 py-2" href="/dashboard/orders">
                                {{ __('My Orders') }}
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item text-white px-4 py-2" href="/dashboard/addresses">
                                {{ __('My Addresses') }}
                            </a>
                        </li>
                        <li><a class="dropdown-item text-white px-4 py-2" href="/dashboard/profile">
                                {{ __('My Profile') }}
                            </a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item text-white px-4 py-2" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>

                </div>

            @endif

            <button type="button" id="theme-toggle" class="nav-button"  
                style="position:relative; overflow:hidden; width:2.25rem; height:2.25rem; padding:0; border:none; background:transparent; cursor:pointer;"
                title="Toggle Theme" aria-label="Toggle Theme">

                <svg id="icon-sun"
                    style="position:absolute; width:1.25rem; height:1.25rem; transition:transform 0.5s ease; top:50%; left:50%; transform:translate(-50%, -50%);"
                    fill="none" stroke="#000000" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364-6.364l-.707.707M6.343 17.657l-.707.707M17.657 17.657l-.707-.707M6.343 6.343l-.707-.707M12 8a4 4 0 100 8 4 4 0 000-8z" />
                </svg>

                <svg id="icon-moon"
                    style="position:absolute; width:1.25rem; height:1.25rem; transition:transform 0.5s ease; top:50%; left:50%; transform:translate(-50%, calc(-50% + 40px));"
                    fill="none" stroke="#000000" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 12.79A9 9 0 1111.21 3 7 7 0 0021 12.79z" />
                </svg>
            </button>

        </div>
    </nav>

</header>
