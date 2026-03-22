<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>Shipping & Returns</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/aboutus_style.css') }}" />

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.bundle.min.css" rel="stylesheet">

    <!--Icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">

    <!--Fonts same as home page-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@300;400&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
</head>


<body class="shipping-page">
    @include('components/nav_bar_customer')

    <section class="aboutus-title-section">
        <div class="aboutus-title-content text-center">
            <h1>Shipping & Refunds</h1>
        </div>
    </section>

    <!--Shipping information section-->
    <section class="brand-section">
        <div class="brand-container">
            <h2>Shipping Information</h2>

            <p class="brand-description">We aim to process and dispatch all orders as quickly as possible to ensure a smooth and reliable delivery experience.<br>
            Orders placed before 12:00 PM (midday) on a working day are eligible for next working day delivery. Orders placed after this time, or during weekends and public holidays, will be processed on the next available working day.<br>
            Once your order has been dispatched, you may receive a confirmation email with delivery information. Delivery times may occasionally vary due to factors outside our control, such as courier delays, weather conditions, or peak periods.<br>
            Please ensure that your shipping address and contact details are entered correctly at checkout, as we cannot guarantee changes once an order has been processed.</p>
        </div>
    </section>

    <!--Delivery Pricing section-->
    <section class="brand-section alt-section">
        <div class="brand-container">
            <h2>Delivery Pricing</h2>

            <p class="brand-description mb-0">We offer the following delivery options to suit your needs:</p>
            <ul class="brand-description mb-0" style="list-style-type: circle;">
            <li>Standard next working day delivery: £4.99 </li>
            <li>Optional shipping subscription: £12.99 per month</li>
            </ul>
            <p class="brand-description mb-0">
            Subscribers benefit from free delivery on all orders from Naturale.</p>
        </div>
    </section>

    <!--Returns & Refunds section-->
    <section class="brand-section">
        <div class="brand-container">
            <h2>Returns & Refunds</h2>

            <p class="brand-description mb-0">We want you to be satisfied with your purchase. If you experience any issues with your order, our support team is here to help.<br>
            To start a return, you can:</p>
            <ul class="brand-description mb-0" style="list-style-type: circle;">
            <li>Contact our support team with your order number and details about the issue.</li>
            <li>Visit the Orders page in your account and select the Return option for the relevant order.</li>
            </ul>
            <p class="brand-description mb-0">
            Providing clear information about the issue (and photos where applicable) will help us process your request more efficiently.<br>
            Our team aims to review and respond to all return requests within 5 working days. Once your request has been assessed, we will provide instructions on the next steps, which may include returning the item, issuing a replacement, or processing a refund where appropriate.</p>
        </div>
    </section>

    <!--Returns window section-->
    <section class="brand-section alt-section">
        <div class="brand-container">
            <h2>Returns Window</h2>

            <p class="brand-description mb-0">Returns must be requested within 14 days of receiving your order. Requests made outside of this period may not be eligible for return or refund unless the item is faulty or incorrect.</p>
            <p class="brand-description fw-semibold mb-0 fs-6 text-dark">Items must be unused, unopened, and in their original condition and packaging to qualify for a return.</p>
            <p class="brand-description text-danger fw-semibold">
            Opened products cannot be accepted for returns unless they are defective or damaged upon arrival.</p>
        </div>
    </section>

    <!--Additional Returns Conditions section-->
    <section class="brand-section">
        <div class="brand-container">
            <h2>Additional Returns Conditions</h2>

            <p class="brand-description mb-0">Customers may be responsible for return shipping costs unless the item is faulty, damaged, or sent in error.<br>
            Items returned without prior approval may not be processed.<br>
            We recommend using a tracked shipping service when returning items.<br>
            Refunds will be issued to the original payment method once approved.</p>
        </div>
    </section>

    <footer>
        @include('components/footer')
    </footer>
</body>

</html>
