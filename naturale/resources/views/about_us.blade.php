<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }} - About Us</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}">
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    @include('components/nav_bar_customer')

    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8">

                    <div name="header">
                        <h2 class="font-semibold text-xl text-gray-900 leading-tight">
                            {{ __('About Us') }}
                        </h2>
                    </div>

                    <div class="py-4 min-h-screen">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

                            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100 mb-8">
                                <div class="p-8">
                                    <div class="card-header bg-white border-bottom py-3 px-4">
                                        <h5 class="fw-semibold mb-0 fs-6 text-dark">Our Mission</h5>
                                        <p class="text-muted small mb-0 mt-1">Who we are and what we stand for.</p>
                                    </div>
                                    <div class="card-body px-4 py-4">
                                        <div class="row align-items-start">
                                            <div class="col-md-9">
                                                <p class="text-secondary mb-0">
                                                    Welcome to Naturale, your premier destination for ecofriendly,
                                                    natural, and organic
                                                    haircare products. Our mission is to bring the natural benefits of
                                                    different ingredients
                                                    to care for all hair types, providing high quality products for our
                                                    discerning customers
                                                    around the world. From the deep hydration that coconut oil provides,
                                                    the rich antioxidant
                                                    properties of pomegranate, the detox qualities of tea tree oil, to
                                                    the radiant shine that
                                                    shea butter leaves on the hair, every product is designed with love
                                                    and tailored to
                                                    nourish, strengthen, repair, and protect your hair without using
                                                    harsh chemicals. We are
                                                    here to make you embrace the natural beauty with confidence.
                                                </p>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <img src="{{ asset('media/media_webp/logo.webp') }}"
                                                    class="img-fluid rounded-3 shadow-sm"
                                                    style="max-width: 200px; object-fit: cover;" alt="Naturale Logo">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white border-top px-4 py-3 text-end rounded-bottom-3">
                                        <span class="text-muted small">Naturale &mdash; Natural Haircare</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100 mb-8">
                                <div class="p-8">
                                    <div class="card-header bg-white border-bottom py-3 px-4">
                                        <h5 class="fw-semibold mb-0 fs-6 text-dark">Our Story</h5>
                                        <p class="text-muted small mb-0 mt-1">How Naturale came to life.</p>
                                    </div>
                                    <div class="card-body px-4 py-4">
                                        <div class="row align-items-center g-4">
                                            <div class="col-md-3 text-center">
                                                <img src="{{ asset('media/media_webp/our_story.webp') }}"
                                                    class="img-fluid rounded-3 shadow-sm"
                                                    style="max-width: 200px; object-fit: cover;" alt="Our Story">
                                            </div>
                                            <div class="col-md-9">
                                                <p class="text-secondary mb-3">
                                                    Naturale was founded by a group of students who really care about
                                                    the environment and know
                                                    the power of natural remedies. We firmly believe in preserving the
                                                    ancient traditions
                                                    around the world that, for centuries, have shown how nature brings
                                                    out the best in us.
                                                </p>
                                                <p class="text-secondary mb-0">
                                                    At Naturale, we work to inspire self love through simple sustainable
                                                    sourced ingredients.
                                                    Every product is crafted with love and respect for both the
                                                    environment and your hair.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white border-top px-4 py-3 rounded-bottom-3">
                                        <span class="text-muted small">Founded with purpose &mdash; grown with
                                            care.</span>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100 ">
                                <div class="p-8">
                                    <div class="card-header bg-white border-bottom py-3 px-4">
                                        <h5 class="fw-semibold mb-0 fs-6 text-dark">Sustainability &amp; Fair Trade</h5>
                                        <p class="text-muted small mb-0 mt-1">Our commitment to the planet and people.
                                        </p>
                                    </div>
                                    <div class="card-body px-4 py-4">
                                        <div class="row align-items-center g-4">
                                            <div class="col-md-9">
                                                <p class="text-secondary mb-0">
                                                    Naturale is firmly committed to sustainability and ethical trade
                                                    practices. Our materials
                                                    are sourced from local artisans and suppliers, who dedicate their
                                                    lives honouring their
                                                    craft. Our ingredients have all organic origins, free of harsh
                                                    chemicals, perfect for
                                                    sensitive scalps.
                                                </p>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <img src="{{ asset('media/media_webp/farmer.webp') }}"
                                                    class="img-fluid rounded-3 shadow-sm"
                                                    style="max-width: 200px; object-fit: cover;" alt="Sustainability">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer bg-white border-top px-4 py-3 text-end  rounded-bottom-3">
                                        <span class="text-muted small">Ethically sourced &mdash; organically
                                            crafted.</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <footer>
            @include('components/footer')
        </footer>
</body>

</html>
