<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/ingredients.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/media_webpfavicon.webp" />
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
        <div class="heroImage" style="background-image: url('/media/media_webp/ingredients/sheaButter.webp')">
            <div class="heroText">
                <h1>Shea Butter</h1>
            </div>
        </div>
    </section>

    <section id="ingredientInfo" class="pt-5 pb-3 px-2" id="ingredientInfo">
        <div class="row justify-content-center mb-4 mb-md-5">
                <div class="col-xl-9 col-xxl-8">
                    <h2 class="text-center py-3">Why Shea Butter?</h2>
                    <p>At Naturale, we choose shea butter as one of our main ingredients because of its many nourishing properties. Shea butter deeply moisturises and defines curls. It seals hydration, provides strength to the hair strands, and reduces frizz. Its hight vitamin A and vitamin E contents helps restore the hair elasticity, making the hair softer, bouncier and more manageable.
                    </p>
                    <p>These characteristics make shea butter the best ingredient for curly hair. At Naturale, we provide the perfect complete routine products for curly hair, crafted to enhance hair definition, hydrate and maintain curl’s health.</p>
                </div>
        </div>
    </section>

    <!--This is the Shop section-->
    <section class="pb-5 px-3" id="Shop">
            <h2>Shop Our Shea Butter Products</h2></br></br>
        <!--Products categories-->
        <div class="container">
            <div class="categoryImages">
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_6.webp') }}" class="static-img">
                    <p class="categoryTitle">Curl Revival Shampoo</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_11.webp') }}" class="static-img">
                    <p class="categoryTitle">Velvet Spiral Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_16.webp') }}" class="static-img">
                    <p class="categoryTitle">Curl Essence Leave In Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_1.webp') }}" class="static-img">
                    <p class="categoryTitle">Curl Bloom Nourishing Mask</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>

</body>

</html>
