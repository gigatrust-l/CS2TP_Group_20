<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    <link rel="stylesheet" href="{{ asset('/css/ingredient_slider.css') }}" />
    <meta name="viewport" content ="width=device-width, initial-scale=1" >
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <!--This is to link google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>

<!--Images for the carousel-->
@php

/* Hero carousel images */
$slides = [
    'media/media_webp/ingredients/coconutOil.webp',
    'media/media_webp/ingredients/teaTreeOil.webp',
    'media/media_webp/ingredients/pomegranateOil.webp',
    'media/media_webp/ingredients/sheaButter.webp',
    'media/media_webp/ingredients/avocadoExtract.webp',
    ];

/* Shampoo images */
$shampoos = [
    'media/media_webp/products/product_6.webp',
    'media/media_webp/products/product_7.webp',
    'media/media_webp/products/product_8.webp',
    'media/media_webp/products/product_9.webp',
    'media/media_webp/products/product_10.webp',
    ];

/* Conditioner images */
$conditioners = [
    'media/media_webp/products/product_11.webp',
    'media/media_webp/products/product_12.webp',
    'media/media_webp/products/product_13.webp',
    'media/media_webp/products/product_14.webp',
    'media/media_webp/products/product_15.webp',
    ];

/* Leave in conditioner images */
$leaveins = [
    'media/media_webp/products/product_16.webp',
    'media/media_webp/products/product_17.webp',
    'media/media_webp/products/product_18.webp',
    'media/media_webp/products/product_19.webp',
    'media/media_webp/products/product_20.webp',
    ];

/* Hair mask images */
$hairmasks = [
    'media/media_webp/products/product_1.webp',
    'media/media_webp/products/product_2.webp',
    'media/media_webp/products/product_3.webp',
    'media/media_webp/products/product_4.webp',
    'media/media_webp/products/product_5.webp',
    ];

/* Accesories images */
$accessories = [
    'media/media_webp/products/product_21.webp',
    'media/media_webp/products/product_22.webp',
    'media/media_webp/products/product_23.webp',
    'media/media_webp/products/product_24.webp',
    'media/media_webp/products/product_25.webp',
    ];

@endphp

<body>
    <!-- This is to include the nav bar -->
    @include('components/nav_bar_customer')

    <section id="Hero Carousel">
    <!-- This is a hero carousel, picture with text for the home page) -->
    <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators"> <!-- Automatic indicators using foreach -->
            @foreach ($slides as $i => $img)
                <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}">
                </button>
            @endforeach
        </div>
        <!--This to show the different pictures as slides-->
        <div class="carousel-inner">
        @foreach ($slides as $i => $img)
             <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                <img src="{{ asset($img) }}" class="d-block w-100 hero-img">
                <div class="heroText">
                    <h1>Naturale</h1>
                </div>
            </div>
        @endforeach
        </div>
        <!--Previous and Next arrows-->
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
    </div>
    </section></br>


    <!--This is the Shop section-->
    <section class="py-5 px-3" id="Shop">
            <h2>Shop</h2></br></br>
        <!--Products categories-->
        <div class="container">
            <div class="categoriesRow">
                @php
                $productCategories = [
                    "Shampoo" => $shampoos,
                    "Conditioner" => $conditioners,
                    "Leave-In Conditioner" => $leaveins,
                    "Hair Masks" => $hairmasks,
                    "Hair Accessory" => $accessories,
                    ];
                @endphp

                @foreach ($productCategories as $nameCategory => $images)
                    @php
                    $slug = Str::slug($nameCategory);
                    @endphp
                    <div class="categoriesColumn">
                    <a href="/products?type={{ urlencode($nameCategory) }}" class="categoryTitle text-decoration-none pt-2">
                        <div id="{{ $slug }}Carousel" class="carousel slide categoryCarousel shopCarousel" id="categoryCarousel">
                            <div class="carousel-inner">
                                @foreach ($images as $i => $img)
                                    <div class="carousel-item {{ $i == 0 ? 'active' : '' }}">
                                        <img src="{{ asset($img) }}" alt="{{ $nameCategory }} image {{ $i+1 }}">
                                    </div>
                                @endforeach
                            </div>

                        <!--Previous and Next arrows-->
                        <button class="carousel-control-prev" type="button" data-bs-target="#{{ $slug }}Carousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#{{ $slug }}Carousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                	<!--Product category title below image-->
                	<div class="categoryTitle">
                    	<a href="/products?type={{ urlencode($nameCategory) }}" class="categoryTitle text-decoration-none pt-2">{{ $nameCategory }}</a>
                	</div>
                    </a>
                </div>

                @endforeach
            </div>
        </div>
    </section>

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
