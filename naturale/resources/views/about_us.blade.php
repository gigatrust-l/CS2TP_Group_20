<x-layouts.storefront title="{{ config('app.name', 'Laravel') }} - About Us">

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}">
        <link rel="stylesheet" href="{{ asset('/css/about_us.css') }}" />
    </x-slot:styles>

    <div>
        <section class="aboutus-title-section">
            <div class="aboutus-title-content text-center">
                <h1>About Us</h1>
            </div>
        </section>

        <!--Our mission section-->
        <section class="brand-section">
            <div class="brand-container">
                <p class="brand-label">Our Mission</p>
                <h2>Who are we and what we stand for</h2>

                <p class="brand-description">Welcome to Naturale, your premier destination for ecofriendly, natural, and
                    organic haircare products. Our mission is to bring the natural benefits of different ingredients to
                    care for all hair types, providing high quality products for our discerning customers around the
                    world. From the deep hydration that coconut oil provides, the rich antioxidant properties of
                    pomegranate, the detox qualities of tea tree oil, to the radiant shine that shea butter leaves on
                    the hair, every product is designed with love and tailored to nourish, strengthen, repair, and
                    protect your hair without using harsh chemicals. We are here to make you embrace the natural beauty
                    with confidence.</p>
            </div>
        </section>

        <!--Our story section-->
        <section class="about-split">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-md-6">
                        <img src="{{ asset('media/media_webp/our_story.webp') }}" class="about-img">
                    </div>

                    <div class="col-md-6">
                        <p class="brand-label">Our Story</p>
                        <h2>How Naturale came to life</h2>
                        <p class="brand-description">Naturale was founded by a group of students who really care about
                            the environment and know the power of natural remedies. We firmly believe in preserving the
                            ancient traditions around the world that, for centuries, have shown how nature brings out
                            the best in us. At Naturale, we work to inspire self love through simple sustainable sourced
                            ingredients. Every product is crafted with love and respect for both the environment and
                            your hair.</p>
                        <p class="about-highlight">Founded with purpose. Grown with care.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Our values section-->
        <section class="brand-section">
            <div class="brand-container">
                <p class="brand-label">Our Values</p>
                <h2>What we believe in</h2>
                <!--each "feature" is a box with an icon and text-->
                <div class="brand-features">
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fa-solid fa-leaf"></i>
                        </div>
                        <h3>Sustainability</h3>
                        <p>Respecting nature through conscious sourcing.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fa-solid fa-handshake"></i>
                        </div>
                        <h3>Ethical Trade</h3>
                        <p>Supporting artisans and fair partnerships.</p>
                    </div>
                    <div class="feature">
                        <div class="feature-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>
                        <h3>Pure Ingredients</h3>
                        <p>100% natural and chemical-free.</p>
                    </div>
                </div>
            </div>
        </section>

        <!--Sustainability section-->
        <section class="about-split reverse">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-md-6">
                        <p class="brand-label">Sustainability & Fair Trade</p>
                        <h2>Our commitment to the planet and people</h2>
                        <p class="brand-description">Naturale is firmly committed to sustainability and ethical trade
                            practices.
                            Our materials are sourced from local artisans and suppliers, who dedicate their lives
                            honouring their craft.</p>
                        <p class="about-highlight">Ethically sourced - organically crafted.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="{{ asset('media/media_webp/farmer.webp') }}" class="about-img">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot:scripts>
    </x-slot:scripts>

</x-layouts.storefront>
