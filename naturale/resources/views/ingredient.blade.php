<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <title>{{ $ingredient->name }} - Naturale</title>
    <link rel="stylesheet" href="{{ asset('/css/ingredients.css')}}" />
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

<section id="hero">
    <!-- This is a hero picture -->
    <div class="heroImage" style="background-image: url({{ asset($ingredient->image) }})">
        <div class="heroText">
            <h1>{{ $ingredient->name }}</h1>
        </div>
    </div>
</section>

<section id="ingredientInfo" class="pt-5 pb-3 px-2" id="ingredientInfo">
    <div class="row justify-content-center mb-4 mb-md-5">
        <div class="col-xl-9 col-xxl-8">
            <h2 class="text-center py-3">Why {{ $ingredient->name }}?</h2>
            <p>{!! nl2br(e($ingredient->description)) !!}</p>
        </div>
    </div>
</section>

<!--This is the Shop section-->
<section class="pb-5 px-3" id="Shop">
    <h2>Shop Our {{ $ingredient->name }} Products</h2></br></br>
    <!--Products categories-->
    <div class="container">
        <div class="categoryImages">
            @foreach($ingredient->products as $product)
            <div class="item">
                <a href="{{ url('/products/'.$product->pid) }}">
                    <img src="{{ asset($product->p_image) }}" class="static-img">
                    <p class="categoryTitle">{{ $product->p_name }}</p>
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
