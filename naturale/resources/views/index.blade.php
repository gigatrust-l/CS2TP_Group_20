<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    <meta name="viewport" content ="width=device-width, initial-scale=1" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <!--This is to link google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>
<body>
    <!-- This is to include the nav bar -->
    @include('components/nav_bar_customer')

    @include('components/hero')
    <script src="{{ asset('js/hero.js') }}"></script>

    <!--This is the Shop section-->
    <section class="category-section">
        <div class="category-container">
            <h2 class="category-label">Shop by Category</h2>
            <p class="category-title">Find the perfect natural products for every step of your hair care routine.</p>
            <div class="category-grid">
                <a href="{{ url('/products?type=Shampoo') }}" class="category-card">
                <img src="{{ asset('media/media_webp/categories/shampoo.webp') }}" alt="Shampoos">
                <div class="category-overlay"></div>
                <div class="category-text">
                    <h3>Shampoo</h3>
                    <p>5 PRODUCTS</p>
                </div>
            </a>
                <a href="{{ url('/products?type=Conditioner') }}" class="category-card">
                <img src="{{ asset('media/media_webp/categories/conditioner.webp') }}" alt="Conditioners">
                <div class="category-overlay"></div>
                <div class="category-text">
                    <h3>Conditioner</h3>
                    <p>5 PRODUCTS</p>
                </div>
            </a>
                <a href="{{ url('/products?type=Leave-In+Conditioner') }}" class="category-card">
                <img src="{{ asset('media/media_webp/categories/leavein_conditioner.webp') }}" alt="Leave-In Conditioners">
                <div class="category-overlay"></div>
                <div class="category-text">
                    <h3>Leave-In Conditioner</h3>
                    <p>5 PRODUCTS</p>
                </div>
            </a>
                <a href="{{ url('/products?type=Hair+Masks') }}" class="category-card">
                <img src="{{ asset('media/media_webp/categories/hair_mask.webp') }}" alt="Hair Masks">
                <div class="category-overlay"></div>
                <div class="category-text">
                    <h3>Hair Masks</h3>
                    <p>5 PRODUCTS</p>
                </div>
            </a>
                <a href="{{ url('/products?type=Hair+Accessory') }}" class="category-card">
                <img src="{{ asset('media/media_webp/categories/accessory.webp') }}" alt="Accessories">
                <div class="category-overlay"></div>
                <div class="category-text">
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
            <h2 class="section-title text-center">Our Ingredients</h2>
            <p class="section-sub text-center">
                Nature provides the most powerful solutions for healthy hair.
            </p>
            <div class="container-fluid py-2 ingredient-slider overflow-auto">
                <div class="ingredient-card">
                    <a href="{{ url('/ingredients/avocado-extract') }}">
                        <img src="{{ asset('media/media_webp/ingredients/avocado.webp') }}" alt="avodacoExtract">
                        <div class="card-overlay">
                            <small class="latin">Persea Gratissima</small>
                            <h3>Avocado Extract</h3>
                            <p>Deep moisture and restoration</p>
                        </div>
                    </a>
                </div>
                <div class="ingredient-card">
                    <a href="{{ url('/ingredients/shea-butter') }}">
                        <img src="{{ asset('media/media_webp/ingredients/shea.webp') }}" alt="shea">
                        <div class="card-overlay">
                            <small class="latin">Vitellaria Paradoxa</small>
                            <h3>Shea Butter</h3>
                            <p>Intense hydration and frizz control</p>
                        </div>
                    </a>
                </div>
                <div class="ingredient-card">
                    <a href="{{ url('/ingredients/pomegranate-oil') }}">
                        <img src="{{ asset('media/media_webp/ingredients/pomegranate.webp') }}" alt="pomegranate">
                        <div class="card-overlay">
                            <small class="latin">Punica Granatum</small>
                            <h3>Pomegranate Seed Oil</h3>
                            <p>Hair strengthening and shine enhancement</p>
                        </div>
                    </a>
                </div>
                <div class="ingredient-card">
                    <a href="{{ url('/ingredients/tea-tree-oil') }}">
                        <img src="{{ asset('media/media_webp/ingredients/teatree.webp') }}" alt="teatree">
                        <div class="card-overlay">
                            <small class="latin">Melaleuca Alternifolia</small>
                            <h3>Tea Tree Oil</h3>
                            <p>Scalp soothing and dandruff reduction</p>
                        </div>
                    </a>
                </div>
                <div class="ingredient-card">
                    <a href="{{ url('/ingredients/coconut-oil') }}">
                        <img src="{{ asset('media/media_webp/ingredients/coconut.webp') }}" alt="coconut">
                        <div class="card-overlay">
                            <small class="latin">Cocos Nucifera</small>
                            <h3>Coconut Oil</h3>
                            <p>Hair nourishment and hair breakage prevention</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>

</body>
</html>
