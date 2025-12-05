<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/favicon.png" />
    <!--This is to link google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>
 
<!--Images for the carousel-->
@php

/* Hero carousel images */
$slides = [
    'media/coconutOil.png',
    'media/teaTreeOil.png',
    'media/pomegranateOil.png',
    'media/sheaButter.png',
    'media/avocadoExtract.png',
    ];

/* Shampoo images */
$shampoos = [
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    ];

/* Conditioner images */
$conditioners = [
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    ];

/* Leave in conditioner images */
$leaveins = [
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    ];

/* Hair mask images */
$hairmasks = [
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    ];

/* Accesories images */
$accessories = [
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
    'media/upload_img.png',
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
                    "Leave In Conditioner" => $leaveins,
                    "Hair Mask" => $hairmasks,
                    "Accesories" => $accessories,
                    ];
                @endphp

                @foreach ($productCategories as $nameCategory => $images)
                    @php
                    $slug = Str::slug($nameCategory);
                    @endphp
                    <div class="categoriesColumn">
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
                <div class="categoryTitle">{{ $nameCategory }}</div>
                </div>

                @endforeach
            </div>
        </div>
    </section>


    <section class="pt-5 pb-3 px-2" id="OurIngredients">
            <h2>Our Ingredients</h2></br></br>
        <div class="container">
            <div class="ingredientImages">
                <div class="item">
                    <img src="{{ asset('media/shea.png') }}" class="static-img mb-2">
                    <a href="/shea-butter" class="categoryTitle text-decoration-none pt-2">Shea Butter</a>
                </div>
                <div class="item">
                    <img src="{{ asset('media/coconut.png') }}" class="static-img mb-2">
                    <a href="/coconut-oil" class="categoryTitle text-decoration-none pt-2">Coconut Oil</a>
                </div>
                <div class="item">
                    <img src="{{ asset('media/pomegranate.png') }}" class="static-img mb-2">
                    <a href="/pomegranate-oil" class="categoryTitle text-decoration-none pt-2">Pomegranate Seed Oil</a>
                </div>
                <div class="item">
                    <img src="{{ asset('media/avocado.png') }}" class="static-img mb-2">
                    <a href="/avocado-extract" class="categoryTitle text-decoration-none pt-2">Avocado Extract</a>
                </div>
                <div class="item">
                    <img src="{{ asset('media/teatree.png') }}" class="static-img mb-2">
                    <a href="/tea-tree-oil" class="categoryTitle text-decoration-none pt-2">Tea Tree Oil</a>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>

</body>

</html>
