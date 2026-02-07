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
        <div class="heroImage" style="background-image: url('/media/media_webp/ingredients/teaTreeOil.webp')">
            <div class="heroText">
                <h1>Tea Tree Oil</h1>
            </div>
        </div>
    </section>

    <section id="ingredientInfo" class="pt-5 pb-3 px-2" id="ingredientInfo">
        <div class="row justify-content-center mb-4 mb-md-5">
                <div class="col-xl-9 col-xxl-8">
                    <h2 class="text-center py-3">Why Tea Tree Oil?</h2>
                    <p>At Naturale, we selected tea tree oil to be one of our main ingredients. A very well known oil for its powerful antibacterial and purifying properties. Tea tree oil makes sure to keep the scalp clean and balanced, reducing the product buildup, fighting dandruff, and soothing irritation. Perfect for those with an itchy scalp who need a refreshing detox to give a healthy environment to their scalp.
                    </p>
                    <p>We offer the best products to keep a healthy clean scalp, a complete routine to deeply cleanse and revitalise our customers scalp.</p>
                </div>
        </div>
    </section>

    <!--This is the Shop section-->
    <section class="pb-5 px-3" id="Shop">
            <h2>Shop Our Tea Tree Oil Products</h2></br></br>
        <!--Products categories-->
        <div class="container">
            <div class="categoryImages">
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_8.webp') }}" class="static-img">
                    <p class="categoryTitle">Green Balance Detox Shampoo</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_13.webp') }}" class="static-img">
                    <p class="categoryTitle">Calm Scalp Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_18.webp') }}" class="static-img">
                    <p class="categoryTitle">Root Relief Leave In Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_3.webp') }}" class="static-img">
                    <p class="categoryTitle">Pure Roots Scalp Detox Mask</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>

</body>

</html>
