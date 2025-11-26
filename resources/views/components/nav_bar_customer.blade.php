<header class="main-header">
    <a class="logo">
        <img src="{{ asset('media/logo.png')}}" alt="HealthSpace Logo">
        <h1 id="header-name"><em>HealthSpace</em></h1>
    </a>
    <nav>
        <a href="/">Home</a>
        <a href="/products">Products</a>

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