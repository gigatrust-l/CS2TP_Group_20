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
                    <h1>Ingredients</h1>
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
                    
    <section class="pt-5 pb-3 px-2" id="OurIngredients">
            <h2>Our Ingredients</h2></br></br>
        <div class="container">
            <div class="ingredientImages">
                <div class="item">
                    <a href="{{ url('/ingredients/avocado-extract') }}" class="categoryTitle text-decoration-none pt-2">
                    <img src="{{ asset('media/media_webp/ingredients/avocado.webp') }}" class="static-img mb-2">
                    <a href="{{ url('/ingredients/avocado-extract') }}" class="categoryTitle text-decoration-none pt-2">Avocado Extract</a></a>
                </div>
                <div class="item">
                    <a href="{{ url('/ingredients/shea-butter') }}" class="categoryTitle text-decoration-none pt-2">
                    <img src="{{ asset('media/media_webp/ingredients/shea.webp') }}" class="static-img mb-2">
                    <a href="{{ url('/ingredients/shea-butter') }}" class="categoryTitle text-decoration-none pt-2">Shea Butter</a></a>
                </div>
                <div class="item">
                    <a href="{{ url('/ingredients/pomegranate-oil') }}" class="categoryTitle text-decoration-none pt-2">
                    <img src="{{ asset('media/media_webp/ingredients/pomegranate.webp') }}" class="static-img mb-2">
                    <a href="{{ url('/ingredients/pomegranate-oil') }}" class="categoryTitle text-decoration-none pt-2">Pomegranate Seed Oil</a></a>
                </div>
                <div class="item">
                    <a href="{{ url('/ingredients/tea-tree-oil') }}" class="categoryTitle text-decoration-none pt-2">
                    <img src="{{ asset('media/media_webp/ingredients/teatree.webp') }}" class="static-img mb-2">
                    <a href="{{ url('/ingredients/tea-tree-oil') }}" class="categoryTitle text-decoration-none pt-2">Tea Tree Oil</a></a>
                </div>
                <div class="item">
                    <a href="{{ url('/ingredients/coconut-oil') }}" class="categoryTitle text-decoration-none pt-2">
                    <img src="{{ asset('media/media_webp/ingredients/coconut.webp') }}" class="static-img mb-2">
                    <a href="{{ url('/ingredients/coconut-oil') }}" class="categoryTitle text-decoration-none pt-2">Coconut Oil</a></a>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>
             
</body>

</html>
