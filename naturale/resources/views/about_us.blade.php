<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }} - About Us</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    @include('components/nav_bar_customer')

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center text-center mb-4 mb-md-5">
                <div class="col-xl-9 col-xxl-8">
                    <h1 class="fw-bold">About Us</h1>
                    <p>Welcome to Naturale, your premier destination for ecofriendly, natural, and organic haircare products.
                        Our mission is to bring the natural benefits of different ingredients to care for all hair types,
                        providing high quality products for our discerning customers around the world.
                        From the deep hydration that coconut oil provides, the rich antioxidant properties of pomegranate,
                        the detox qualities of tea tree oil, to the radiant shine that shea butter leaves on the hair,
                        every product is designed with love and tailored to nourish, strengthen, repair,
                        and protect your hair without using harsh chemicals. Our mission is simple,
                        we are here to make you embrace the natural beauty with confidence.</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6"><img src="{{ asset('media/upload_img.png') }}" alt="img_placeholder"></div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-lg-12 col-lg-10 col-xl-12">
                            <h3 class="fw-bold my-3">Our Story</h3>
                            <p class="my-1">
                                Naturale was founded by a group of students who really care about the environment and know the power of natural remedies.
                                We firmly believe in preserving the ancient traditions around the world that, for centuries,
                                have shown how nature brings out the best in us. </p>
                            <p class="my-1">
                                At Naturale, we work to inspire self love through simple sustainable sourced ingredients.
                                Every product is crafted with love and respect for both the environment and your hair.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-6 order-2 order-md-1">
                    <div class="row justify-content-end">
                        <div class="col-lg-12 col-lg-10 col-xl-12">
                            <h3 class="fw-bold my-3">Sustainability & Fair Trade</h3>
                            <p class="my-1">Naturale is firmly committed to sustainability and ethical trade practices.
                                Our materials are sourced from local artisans suppliers,
                                who dedicate their lives honouring their craft. Our ingredients have all organic origins,
                                free of harsh chemicals, perfect for sensitive scalps.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 order-1 order-md-2">
                    <div class="col-md-6 py-3"><img src="{{ asset('media/upload_img.png') }}" alt="img_placeholder"></div>
                </div>
            </div>
        </div>
    </section>

    @include('components/footer')
</body>
</html>
