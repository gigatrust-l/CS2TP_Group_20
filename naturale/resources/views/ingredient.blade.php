<x-layouts.storefront title="Naturale - {{ $ingredient->name }}">

    {{-- Optional extra styles for this page only --}}
    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('/css/ingredients.css') }}" />
    </x-slot:styles>

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
        <div class="ingredient-container split-layout">
            <div class="ingredient-text">
                <p class="section-label">About the Ingredient</p>
                <h2 class="section-title">Why {{ $ingredient->name }}?</h2>
                <p class="ingredient-description">{!! nl2br(e($ingredient->description)) !!}</p>
            </div>

            <!-- Before and After -->
            <div class="ingredient-visual">
                <p class="slider-hint">Drag to reveal results</p>

                <div class="img-comp-container">
                    <!-- After img -->
                    <div class="img-comp-img">
                        <img src="{{ asset('media/media_webp/beforeafter/' . $ingredient->after_image) }}.webp"
                            alt="">
                    </div>
                    <!-- Before img -->
                    <div class="img-comp-img img-comp-overlay" style="clip-path: inset(0px 192px 0px 0px);">
                        <img src="{{ asset('media/media_webp/beforeafter/' . $ingredient->before_image) }}.webp"
                            alt="">
                    </div>
                </div>

                <div class="slider-labels">
                    <span>Before</span>
                    <span>After</span>
                </div>
            </div>
        </div>
    </section>

    <!--This is the Shop section-->
    <section class="ingredient-products">
        <div class="products-container">
            <p class="section-label">Shop Products</p>
            <h2 class="section-title">Shop Our {{ $ingredient->name }} Products</h2>
            <div class="products-grid">
                @foreach ($ingredient->products as $product)
                    <a href="{{ url('/products/' . $product->pid) }}" class="product-card div-bg border rounded-3">
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


    <x-slot:scripts>
        <script src="{{ asset('js/before-after.js') }}"></script>
    </x-slot:scripts>

</x-layouts.storefront>
