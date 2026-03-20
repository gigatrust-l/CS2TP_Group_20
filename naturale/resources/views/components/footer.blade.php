<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<footer class="footer mt-5 py-5 border-top transition-colors duration-300" 
        style="background-color: var(--page); border-color: var(--border) !important;">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <h5 style="color: var(--text);">Naturale</h5>
                <p style="color: var(--muted);">Hair Products Based on Natural Ingredients</p>
            </div>

            <div class="col-md-3 mb-4">
                <h5 style="color: var(--text);">Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link">About Us</a></li>
                    <li class="nav-item"><a href="/shipping" class="nav-link">Shipping and Refunds</a></li>
                    <li class="nav-item"><a href="/login" class="nav-link">Login</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5 style="color: var(--text);">Our Ingredients</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ingredients/avocado-extract') }}" class="nav-link">Avocado Extract</a></li>
                    <li><a href="{{ url('/ingredients/shea-butter') }}" class="nav-link">Shea Butter</a></li>
                    <li><a href="{{ url('/ingredients/pomegranate-oil') }}" class="nav-link">Pomegranate Seed Oil</a></li>
                    <li><a href="{{ url('/ingredients/tea-tree-oil') }}" class="nav-link">Tea Tree Oil</a></li>
                    <li><a href="{{ url('/ingredients/coconut-oil') }}" class="nav-link">Coconut Oil</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5 style="color: var(--text);">Get In Touch</h5>
                <ul class="list-unstyled">
                    <li><a href="/contact" class="nav-link">Contact Us</a></li>
                    <li style="color: var(--muted);">Email: <a class="nav-link d-inline" href="mailto:NaturaleHelpDesk@gmail.com">NaturaleHelpDesk@Gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4" style="color: var(--muted);">
            <p>&copy; <?php echo date('Y') ?> Naturale. All rights reserved.</p>
        </div>
    </div>
</footer>

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }

    footer {
        margin-top: auto;
    }

    /* Link colors mapped to your green variables */
    .nav-link {
        color: var(--footer-link) !important;
        transition: color 0.3s ease;
    }

    .nav-link:hover {
        color: var(--footer-link-hover) !important;
    }
</style>