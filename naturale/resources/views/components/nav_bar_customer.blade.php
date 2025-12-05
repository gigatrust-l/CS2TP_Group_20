<head>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<header class="main-header">
    <div class="logo">
        <a href="/" class="logo">
            <img src="{{ asset('media/logo.png')}}" alt="Naturale Logo">
        </a>
    </div>
    <nav>    
		<form class="search" action="{{ route('/products') }}" method="get">
            <input type="search" placeholder="Search" title="Search" aria-label="Search" style="color: #354024;" name="name"></input>  
            <button title="Search" aria-label="Search"><i class="fa-solid fa-magnifying-glass" style="color: #354024;"></i></button>
		</form>
        <div class="headerIcons">
            <a href="/products" title="Shop" aria-label="Products"><i class="fa-solid fa-store" style="color: #354024;"></i></a>
            <?php
                $user = auth()->user();
                if ($user == null) {
                    echo '<a href="/login" title="My Account" aria-label="myAccount"><i class="fa-solid fa-user" style="color: #354024;"></i></a>';
                } else {
                    echo '<a href="/dashboard">Dashboard</a>';
                }
            ?>
            <a href="/cart" title="Cart" aria-label="Cart"><i class="fa-solid fa-cart-shopping" style="color: #354024;"></i></a>
        </div>
    </nav>
</header>
