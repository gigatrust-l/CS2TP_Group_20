<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @include('components/head-theme-script')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <!--This is to link google fonts-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css')}}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">
</head>

<body class="bg-[var(--page)] text-[var(--text)] transition-colors">
    <!-- This is to include the nav bar -->
    @include('components/nav_bar_customer')

    @include('components/hero')
    <script src="{{ asset('js/hero.js') }}"></script>

    <section class="brand-section bg-[var(--page)]">
        <div class="brand-container">
            <p class="brand-label">Our Philosophy</p>
            <h2>Rooted in Nature, Crafted for Healthy Hair</h2>
            <p class="brand-description">
                Naturale combines botanical ingredients to create haircare that restores, protects, and enhances your
                natural beauty.
            </p>

            <div class="brand-features">
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fa-solid fa-leaf" style="color: var(--accent);"></i>
                    </div>
                    <h3 class="text-[var(--text)]">100% Natural</h3>
                    <p class="text-[var(--muted)]">Botanical ingredients sourced responsibly.</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fa-solid fa-recycle" style="color: var(--accent);"></i>
                    </div>
                    <h3 class="text-[var(--text)]">Sustainable & Eco-Friendly</h3>
                    <p class="text-[var(--muted)]">Crafted with care for both your hair and the environment.</p>
                </div>
                <div class="feature">
                    <div class="feature-icon">
                        <i class="fa-regular fa-heart" style="color: var(--accent);"></i>
                    </div>
                    <h3 class="text-[var(--text)]">Cruelty-Free</h3>
                    <p class="text-[var(--muted)]">Never tested on animals, always ethically sourced.</p>
                </div>
            </div>
        </div>
    </section>

    <!--This is the Shop section-->
    <section class="category-section">
        <div class="category-container">
            <h2 class="category-label">Shop by Category</h2>
            <p class="category-title">Find the perfect natural products for every step of your hair care routine.</p>
            <div class="category-grid">
                <a href="{{ url('/products?type=Shampoo') }}" class="category-card">
                    <img src="{{ asset('media/media_webp/categories/shampoo.webp') }}" alt="Shampoos">
                    <div class="category-overlay"></div>
                    <div class="category-text text-white">
                        <h3>Shampoo</h3>
                        <p>5 PRODUCTS</p>
                    </div>
                </a>
                <a href="{{ url('/products?type=Conditioner') }}" class="category-card">
                    <img src="{{ asset('media/media_webp/categories/conditioner.webp') }}" alt="Conditioners">
                    <div class="category-overlay"></div>
                    <div class="category-text text-white">
                        <h3>Conditioner</h3>
                        <p>5 PRODUCTS</p>
                    </div>
                </a>
                <a href="{{ url('/products?type=Leave-In+Conditioner') }}" class="category-card">
                    <img src="{{ asset('media/media_webp/categories/leavein_conditioner.webp') }}"
                        alt="Leave-In Conditioners">
                    <div class="category-overlay"></div>
                    <div class="category-text text-white">
                        <h3>Leave-In Conditioner</h3>
                        <p>5 PRODUCTS</p>
                    </div>
                </a>
                <a href="{{ url('/products?type=Hair+Masks') }}" class="category-card">
                    <img src="{{ asset('media/media_webp/categories/hair_mask.webp') }}" alt="Hair Masks">
                    <div class="category-overlay"></div>
                    <div class="category-text text-white">
                        <h3>Hair Masks</h3>
                        <p>5 PRODUCTS</p>
                    </div>
                </a>
                <a href="{{ url('/products?type=Hair+Accessory') }}" class="category-card">
                    <img src="{{ asset('media/media_webp/categories/accessory.webp') }}" alt="Accessories">
                    <div class="category-overlay"></div>
                    <div class="category-text text-white">
                        <h3>Hair Accessory</h3>
                        <p>5 PRODUCTS</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!--This is the Ingredients section-->
    <section class="ingredients-section">
        <div class="container">
            <h2 class="section-title text-[var(--text)]text-center">Our Ingredients</h2>
            <p class="section-sub text-[var(--muted)] text-center">
                Nature provides the most powerful solutions for healthy hair.
            </p>
            <div class="container-fluid py-2 ingredient-slider overflow-auto">
                @foreach($ingredients as $ingredient)
                <div class="ingredient-card bg-[var(--input-bg)] border border-[var(--border)] rounded-lg overflow-hidden shadow-[var(--shadow)]">
                    <a href="{{ url('/ingredients/'.$ingredient->slug) }}">
                        <img src="{{ asset($ingredient->ingred_img) }}" alt="{{ $ingredient->name }}">
                        <div class="card-overlay p-4">
                            <small class="latin text-[var(--accent)]">{{ $ingredient->latin }}</small>
                            <h3 class="text-[var(--text)]">{{ $ingredient->name }}</h3>
                            <p class="text-[var(--muted)]">{{ $ingredient->ingred_comment }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <footer>
        @include('components/footer')
    </footer>

</body>

</html>