<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<footer class="footer mt-5 py-5 bg-light border-top">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-4">
                <h5>Naturale</h5>
                <p class="text-muted">Hair Products Based on Natural Ingredients</p>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li class="nav-item"><a href="/" class="nav-link text-secondary">Home</a></li>
                    <li class="nav-item"><a href="/about" class="nav-link text-secondary">About Us</a></li>
                    <li class="nav-item"><a href="/shipping" class="nav-link text-secondary">Shipping and Refunds</a>
                    </li>
                    <li class="nav-item"><a href="/login" class="nav-link text-secondary">Login</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Our Ingredients</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ingredients/avocado-extract') }}" class="nav-link text-secondary">Avocado
                            Extract</a></li>
                    <li><a href="{{ url('/ingredients/shea-butter') }}" class="nav-link text-secondary">Shea Butter</a>
                    </li>
                    <li><a href="{{ url('/ingredients/pomegranate-oil') }}" class="nav-link text-secondary">Pomegranate
                            Seed Oil</a></li>
                    <li><a href="{{ url('/ingredients/tea-tree-oil') }}" class="nav-link text-secondary">Tea Tree Oil </a>
                    </li>
                    <li><a href="{{ url('/ingredients/coconut-oil') }}" class="nav-link text-secondary">Coconut Oil</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Get In Touch</h5>
                <ul class="list-unstyled">
                    <li><a href="/contact" class="nav-link text-secondary">Contact Us</a></li>
                    <li>Email: <a class="nav-link text-secondary" href="mailto:NaturaleHelpDesk@gmail.com">NaturaleHelpDesk@Gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center mt-4 text-muted">
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

    .nav-link {

        color: #16a34a !important;

    }

    .nav-link:hover {

        color: #718096 !important; 

    }
</style>