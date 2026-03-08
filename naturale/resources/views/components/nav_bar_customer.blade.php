<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</head>

<header class="main-header">
    <div class="logo">
        <a href="/" class="logo">
            <img src="{{ asset('media/media_webp/logo.webp')}}" alt="Naturale Logo">
        </a>
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
    </nav>
</header>