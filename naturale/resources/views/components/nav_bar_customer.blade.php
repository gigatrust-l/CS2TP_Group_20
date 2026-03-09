<header class="main-header">
    <div class="logo">
        <a href="/" class="logo">
            <img src="{{ asset('media/media_webp/logo.webp')}}" alt="Naturale Logo">
        </a>
        <link rel="stylesheet" href="{{ asset('/css/dark_mode.css')}}" />
    <script type="text/javascript" src="js/switch.js" defer></script>
    </div>
    <nav class="d-flex align-items-center gap-3">
        <form class="search-bar d-flex align-items-center gap-3" action="{{ route('products') }}" method="get">
            <input class="form-control" type="search" placeholder="Search" title="Search" aria-label="Search" style="color: #354024;"
                name="name"></input>
                <a>
            <button id="searchBtn" title="Search" aria-label="Search"><i class="fa-solid fa-magnifying-glass"
                    style="color: #354024;"></i></button>
                    </a>
        </form>
        <div class="headerIcons d-flex align-items-center gap-3">
            <a href="/products" title="Shop" aria-label="Products"><i class="fa-solid fa-store"
                    style="color: #354024;"></i></a>

            <a href="/cart" title="Cart" aria-label="Cart"><i class="fa-solid fa-cart-shopping"
                    style="color: #354024;"></i></a>

            @if(auth()->user() == null)
                <a href="/login" title="My Account" aria-label="myAccount"><i class="fa-solid fa-user"
                        style="color: #354024;"></i></a>
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

                <style>
                    .dropdown-menu {
                        background-color: #16a34a !important;
                    }

                    .dropdown-item {
                        background-color: #16a34a !important;
                    }

                    .dropdown-item:hover,
                    .dropdown-item:focus {
                        background-color: #15803d !important;
                        color: #fff !important;
                    }

                    p.dropdown-item:hover,
                    p.dropdown-item:focus {
                        background-color: transparent !important;
                        cursor: default;
                    }
                </style>

            @endif
        </div>

                    <button id="theme-toggle">
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                    <path
                        d="M480-120q-150 0-255-105T120-480q0-150 105-255t255-105q14 0 27.5 1t26.5 3q-41 29-65.5 75.5T444-660q0 90 63 153t153 63q55 0 101-24.5t75-65.5q2 13 3 26.5t1 27.5q0 150-105 255T480-120Z" />
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px">
                    <path
                        d="M480-280q-83 0-141.5-58.5T280-480q0-83 58.5-141.5T480-680q83 0 141.5 58.5T680-480q0 83-58.5 141.5T480-280ZM200-440H40v-80h160v80Zm720 0H760v-80h160v80ZM440-760v-160h80v160h-80Zm0 720v-160h80v160h-80ZM256-650l-101-97 57-59 96 100-52 56Zm492 496-97-101 53-55 101 97-57 59Zm-98-550 97-101 59 57-100 96-56-52ZM154-212l101-97 55 53-97 101-59-57Z" />
                </svg>


            </button>

            <script>
                const toggle = document.getElementById('theme-toggle');
                const html = document.documentElement;
                const saved = localStorage.getItem('theme') || 'light';
                html.setAttribute('data-bs-theme', saved);

                toggle.addEventListener('click', () => {
                    const current = html.getAttribute('data-bs-theme');
                    const next = current === 'dark' ? 'light' : 'dark';
                    html.setAttribute('data-bs-theme', next);
                    localStorage.setItem('theme', next);
                });
            </script>




    </nav>
</header>