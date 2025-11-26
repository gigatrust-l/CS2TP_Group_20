<header class="main-header">
<<<<<<< Updated upstream:resources/views/components/nav_bar_customer.blade.php
    <a class="logo" href="/">
        <img src="{{ asset('media/logo.png')}}" alt="Naturale Logo">
=======
    <a class="logo">
        <img src="{{ asset('media/logo.png')}}" alt="HealthSpace Logo">
        <h1 id="header-name"><em>Naturale</em></h1>
>>>>>>> Stashed changes:naturale/resources/views/components/nav_bar_customer.blade.php
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
