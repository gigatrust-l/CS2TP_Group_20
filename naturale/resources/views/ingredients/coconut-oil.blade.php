<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/ingredients.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.webp" />
    <!--This is to link google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- This is to include the nav bar -->
    @include('components/nav_bar_customer')

    <section id="hero">
        <!-- This is a hero picture -->
        <div class="heroImage" style="background-image: url('/media/media_webp/ingredients/coconutOil.webp')">
            <div class="heroText">
                <h1>Coconut Oil</h1>
            </div>
        </div>
    </section>

    <section id="ingredientInfo" class="pt-5 pb-3 px-2" id="ingredientInfo">
        <div class="row justify-content-center mb-4 mb-md-5">
                <div class="col-xl-9 col-xxl-8">
                    <h2 class="text-center py-3">Why Coconut Oil?</h2>
                    <p>At Naturale, we choose coconut oil as one of our main ingredients because of its ability to penetrate the hair fibre providing it with strength. It is a lightweight oil that smooths the cuticles and reduces frizz which improves the hair texture overall, leaving a smooth and silky hair without making it greasy. Coconut oil also supports the scalp health, protecting the hair against daily damage, breakage and dryness.</p>
                    <p>These benefits make coconut oil a perfect match for those with straight hair, and here we offer a range of products specially suited for those who want to give their hair the softness, smoothness, and long-lasting shine it needs.</p>
                </div>
        </div>
    </section>

    <!--This is the Shop section-->
    <section class="pb-5 px-3" id="Shop">
            <h2>Shop Our Coconut Oil Products</h2></br></br>
        <!--Products categories-->
        <div class="container">
            <div class="categoryImages">
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_7.webp') }}" class="static-img">
                    <p class="categoryTitle">Luminous Sleek Shampoo</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_12.webp') }}" class="static-img">
                    <p class="categoryTitle">Glass Veil Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_17.webp') }}" class="static-img">
                    <p class="categoryTitle">Silk Glide Leave In Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_2.webp') }}" class="static-img">
                    <p class="categoryTitle">Silk Flow Smoothing Mask</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>

</body>

</html>
