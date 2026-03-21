<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <!--This is to link google fonts-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Optional: per-page extra styles --}}
    {{ $styles ?? '' }}
</head>

<body>
    <header class="main-header bg-[var(--page)]">
        <div class="logo">
            <a href="/" class="logo">
                <img src="{{ asset('media/media_webp/logo.webp') }}" alt="Naturale Logo">
            </a>
        </div>
        <nav class="d-flex align-items-center gap-3">
            <form class="search-bar d-flex align-items-center gap-3" action="{{ route('products') }}" method="get">
                <input class="form-control" type="search" placeholder="Search" title="Search" aria-label="Search"
                    style="color: #354024;" name="name"></input>
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

                @if (auth()->user() == null)
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

    <div class="container-fluid mt-4">
        {{ $slot }}
    </div>

    {{-- Bootstrap JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Optional: per-page extra scripts --}}
    {{ $scripts ?? '' }}
</body>

</html>
