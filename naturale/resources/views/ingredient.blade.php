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

<!-- This is a hero picture -->
<section class="hero">
    <div class="hero-bg">
        <div class="hero-image active" style="background-image: url('{{ asset($ingredient->image_hero) }}');"></div>
    </div>

    <div class="hero-overlay"></div>

    <div class="hero-content">
        <h1>{{ $ingredient->name }}</h1>
        <p class="latin">{{ $ingredient->latin }} - {{ $ingredient->ingred_comment }}</p>
    </div>
</section>


<!-- Ingredient information -->
<section class="ingredient-info">
    <div class="ingredient-container">
        <p class="section-label">About the Ingredient</p>
        <h2 class="section-title">Why {{ $ingredient->name }}?</h2>
        <p class="ingredient-description">{!! nl2br(e($ingredient->description)) !!}</p>
    </div>
</section>

<!--This is the Shop section-->
<section class="ingredient-products">
    <div class="products-container">
        <p class="section-label">Shop Products</p>
        <h2 class="section-title">Shop Our {{ $ingredient->name }} Products</h2>
        <div class="products-grid">
            @foreach($ingredient->products as $product)
                <a href="{{ url('/products/'.$product->pid) }}" class="product-card">
                    <div class="product-image">
                        <img src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}">
                    </div>

                    <div class="product-info">
                        <p class="product-category">{{ $product->p_category }}</p>
                        <p class="product-name">{{ $product->p_name }}</p>
                        <p class="product-price">£{{ $product->p_price }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</section>

<footer>
    @include('components/footer')
</footer>

</body>

</html>
