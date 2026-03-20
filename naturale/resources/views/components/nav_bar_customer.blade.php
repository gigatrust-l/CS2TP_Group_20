<header class="main-header transition-colors duration-300" 
    style="background-color: var(--page); border-bottom: 1px solid var(--border);">
    
    <div class="container-fluid d-flex align-items-center justify-content-between py-2 px-4">
        <div class="logo">
            <a href="/">
                <img src="{{ asset('media/media_webp/logo.webp')}}" alt="Naturale Logo" style="max-height: 50px;">
            </a>
        </div>
        <nav class="d-flex align-items-center gap-4">
            <form class="search-bar d-flex align-items-center gap-2" action="{{ route('products') }}" method="get">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="name"
                    style="background-color: white; border: 1px solid var(--border); color: #1a1a1a;">
                <button type="submit" class="bg-transparent border-0">
                    <i class="fa-solid fa-magnifying-glass" style="color: var(--text);"></i>
                </button>
            </form>
            <div class="headerIcons d-flex align-items-center gap-4">
                <a href="/products" title="Shop">
                    <i class="fa-solid fa-store text-xl" style="color: var(--text);"></i>
                </a>
                <a href="/cart" title="Cart">
                    <i class="fa-solid fa-cart-shopping text-xl" style="color: var(--text);"></i>
                </a>
                
                <button type="button" class="theme-toggle-btn">
                    <i id="theme-toggle-dark-icon" class="fa-solid fa-moon"></i>
                    <i id="theme-toggle-light-icon" class="fa-solid fa-sun"></i>
                </button>

                @if(auth()->user() == null)
                    <a href="/login" title="My Account">
                        <i class="fa-solid fa-user text-xl" style="color: var(--text);"></i>
                    </a>
                @else
                    <div class="btn-group flex-shrink-0">
                        <a href="/portal" class="btn px-3 py-2 text-nowrap" 
                            style="background-color: var(--bg); color: var(--text);">Dashboard</a>
                        <button type="button" class="btn dropdown-toggle dropdown-toggle-split px-2" 
                            style="background-color: var(--bg); color: var(--text); border-left: 1px solid rgba(255,255,255,0.2);" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow-lg" 
                            style="background-color: var(--bg); border: var(--bg); min-width: 180px;">
                            <li>
                                <p class="dropdown-item mb-0 fw-bold d-flex align-items-center" 
                                    style="color: var(--text); pointer-events: none;">
                                    {{ Auth::user()->name }}
                                </p>
                            </li>
                            <li><hr class="dropdown-divider" style="border-color: rgba(255,255,255,0.15);"></li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="/dashboard/orders"
                                    style="color: var(--text);">
                                    <i class="fa-solid fa-box" style="color: var(--text); width: 16px; text-align: center;"></i>
                                    My Orders
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item d-flex align-items-center gap-2" href="/dashboard/profile"
                                    style="color: var(--text);">
                                    <i class="fa-solid fa-user" style="color: var(--text); width: 16px; text-align: center;"></i>
                                    My Profile
                                </a>
                            </li>
                            <li><hr class="dropdown-divider" style="border-color: rgba(255,255,255,0.15);"></li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item d-flex align-items-center gap-2 w-100" 
                                        style="color: var(--text);">
                                        <i class="fa-solid fa-right-from-bracket" style="width: 16px; text-align: center;"></i>
                                        Log Out
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endif
            </div>
        </nav>
    </div>
</header>

<style>
    .dropdown-item:hover, .dropdown-item:focus {
        background-color: rgba(255,255,255,0.1) !important;
        color: white !important;
    }
    .dropdown-item:hover i, .dropdown-item:focus i {
        color: white !important;
    }
</style>