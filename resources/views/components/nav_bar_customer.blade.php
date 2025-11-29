<header class="main-header">
    <a class="logo" href="/">
        <img src="{{ asset('media/logo.png')}}" alt="Naturale Logo">
    </a>
    <nav>
        <a href="/">Home</a>
        <a href="/products">Products</a>
        <a href="/cart">Cart</a>

        <?php

        $user = auth()->user();

        if ($user == null) {
            echo '<a href="/login">Login</a>';
        } else {
            echo '<a href="/dashboard">Dashboard</a>';
        }

        ?>
    </nav>
</header>
