<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/ingredients.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="icon" type="image/x-icon" href="/media/favicon.png" />
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
        <div class="heroImage" style="background-image: url('/media/pomegranateOil.png')">
            <div class="heroText">
                <h1>Pomegranate Seed Oil</h1>
            </div>
        </div>
    </section>

    <section id="ingredientInfo" class="pt-5 pb-3 px-2" id="ingredientInfo">
        <div class="row justify-content-center mb-4 mb-md-5">
                <div class="col-xl-9 col-xxl-8">
                    <h2 class="text-center py-3">Why Pomegranate Seed Oil?</h2>
                    <p>At Naturale, we choose pomegranate seed oil as one of our main ingredients because of its antioxidant properties. It strengthens the hair and provides colour-protecting benefits. This oil has a high concentration of polyphenols that prevent colour fading by acting as a hair shield from UV radiation, free-radicals, and environmental stress. It is a lightweight oil that strengthens the hair fibre, enhances the colour vibration, restores shine, and does not leave any greasy feeling.
                    </p>
                    <p>All together, these qualities make pomegranate seed oil ideal for dyed or chemically treated hair. Naturale offers a range of products for the kind of hair that needs protection and luminosity.</p>
                </div>
        </div>
    </section>

    <!--This is the Shop section-->
    <section class="pb-5 px-3" id="Shop">
            <h2>Shop Our Pomegranate Seed Oil Products</h2></br></br>
        <!--Products categories-->
        <div class="container">
            <div class="categoryImages">
                <div class="item">
                    <img src="{{ asset('media/upload_img.png') }}" class="static-img">
                    <p class="categoryTitle">Colour Repair Shampoo</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/upload_img.png') }}" class="static-img">
                    <p class="categoryTitle">Radiant Restore Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/upload_img.png') }}" class="static-img">
                    <p class="categoryTitle">Color Shield Leave In Conditioner</p>
                </div>
                <div class="item">
                    <img src="{{ asset('media/upload_img.png') }}" class="static-img">
                    <p class="categoryTitle">Chromaglow Color Care Mask</p>
                </div>
            </div>
        </div>
    </section>

    <footer>
    @include('components/footer')
    </footer>

</body>

</html>
