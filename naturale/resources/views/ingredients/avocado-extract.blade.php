<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    @include('components/head-theme-script')
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
        <div class="heroImage" style="background-image: url('/media/media_webp/ingredients/avocadoExtract.webp')">
            <div class="heroText">
                <h1>Avocado Extract</h1>
            </div>
        </div>
    </section>

    <section id="ingredientInfo" class="pt-5 pb-3 px-2" id="ingredientInfo">
        <div class="row justify-content-center mb-4 mb-md-5">
                <div class="col-xl-9 col-xxl-8">
                    <h2 class="text-center py-3">Why Avocado Extract?</h2>
                    <p>At Naturale, we believe that avocado extract is an excellent ingredient for treating damaged and dry hair. The combination of vitamins, minerals, fatty acids (such as oleic and linolenic acids) provide a deep hydration that repairs dry, broken and damaged hair. Avocado extract nourishes from the roots to the cuticles of the hair, restoring its softness and strength. It works as a natural barrier that protects the hair from heat, chemicals or environmental stress.</p>
                    <p>We offer a range of avocado-extract based products tailored to perfection to help our customers nourish their strands, making them shiny, soft, well-hydrated and easy to style.</p>
                </div>
        </div>
    </section>

    <!--This is the Shop section-->
    <section class="pb-5 px-3" id="Shop">
            <h2>Shop Our Avocado Extract Products</h2></br></br>
        <!--Products categories-->
        <div class="container">
            <div class="categoryImages">
                <div class="item">
                    <img src="{{ asset('media/media_web/pproducts/product_9.webp') }}" class="static-img">
                    <p class="categoryTitle">Desert Dew Hydrating Shampoo</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_14.webp') }}" class="static-img">
                    <p class="categoryTitle">Moisture Bloom Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_19.webp') }}" class="static-img">
                    <p class="categoryTitle">Hydra Repair Leave In Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/media_webp/products/product_4.webp') }}" class="static-img">
                    <p class="categoryTitle">Oasis Quench Repair Mask</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>

</body>

</html>
