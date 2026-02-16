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
                    <li><a href="/" class="text-decoration-none">Home</a></li>
                    <li><a href="/about" class="text-decoration-none">About Us</a></li>
                    <li><a href="/login" class="text-decoration-none">Login</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Our Ingredients</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/ingredients/avocado-extract') }}" class="text-decoration-none">Avocado Extract</a></li>
                    <li><a href="{{ url('/ingredients/shea-butter') }}" class="text-decoration-none">Shea Butter</a></li>
                    <li><a href="{{ url('/ingredients/pomegranate-oil') }}" class="text-decoration-none">Pomegranate Seed Oil</a></li>
                    <li><a href="{{ url('/ingredients/tea-tree-oil') }}" class="text-decoration-none">Tea Tree Oil </a></li>
                    <li><a href="{{ url('/ingredients/coconut-oil') }}" class="text-decoration-none">Coconut Oil</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-4">
                <h5>Get In Touch</h5>
                <ul class="list-unstyled">
                    <li><a href="/contact" class="text-decoration-none">Contact Us</a></li>
                    <li>Email: <a class="text-decoration-none" href="mailto:NaturaleHelpDesk@gmail.com">NaturaleHelpDesk@gmail.com</a></li>
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
</style>
