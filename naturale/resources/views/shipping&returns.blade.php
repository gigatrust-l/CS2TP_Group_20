<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name', 'Laravel') }} - Shipping & Returns</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@300;400&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>




<body class="font-sans text-gray-900 antialiased">
    @include('components/nav_bar_customer')


    <style>
        body {
            background-color: #f5f7fa;
        }

        .page-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .policy-card {
            margin-bottom: 25px;
        }

        .min-h-screen {
            background-color: #f9fafb !important;
        }

        body,
        h3,
        th,
        td {
            color: #111827 !important;
        }
    </style>


    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
                <div class="p-8">

                    <div class="page-header mt-6">
                        <br>
                        <h1 class="fw-bold">Shipping & Returns</h1>
                        <p class="text-muted">Information about delivery, returns, and refunds</p>
                    </div>

                    <div class="row g-4">

                        <div class="col-12">
                            <div class="card shadow-sm policy-card">
                                <div class="card-body p-4">

                                    <h3 class="card-title mb-3">Shipping Information</h3>

                                    <p>
                                        We aim to process and dispatch all orders as quickly as possible
                                        to
                                        ensure a
                                        smooth
                                        and reliable delivery experience.
                                    </p>

                                    <p>
                                        Orders placed before 12:00 PM (midday) on a working day are
                                        eligible for
                                        next working day delivery. Orders placed after this time, or
                                        during
                                        weekends and public holidays, will be processed on the next
                                        available
                                        working
                                        day.
                                    </p>

                                    <div class="alert border">
                                        <h5 class="mb-2">Delivery Pricing</h5>
                                        <ul class="mb-0">
                                            <li>Standard next working day delivery: £4.99 per order</li>
                                            <li>Optional shipping subscription: £12.99 per month</li>
                                        </ul>
                                        <p class="mt-2 mb-0 text-muted">
                                            Subscribers may benefit from reduced or included delivery
                                            costs on
                                            eligible
                                            orders.
                                        </p>
                                    </div>

                                    <p>
                                        Once your order has been dispatched, you may receive a
                                        confirmation
                                        email with
                                        delivery information. Delivery times may occasionally vary due
                                        to
                                        factors
                                        outside
                                        our control, such as courier delays, weather conditions, or peak
                                        periods.
                                    </p>

                                    <p>
                                        Please ensure that your shipping address and contact details are
                                        entered
                                        correctly
                                        at checkout, as we cannot guarantee changes once an order has
                                        been
                                        processed.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="card shadow-sm policy-card">
                                <div class="card-body p-4">

                                    <h3 class="card-title mb-3">Returns & Refunds</h3>

                                    <p>
                                        We want you to be satisfied with your purchase. If you
                                        experience any
                                        issues
                                        with
                                        your order, our support team is here to help.
                                    </p>

                                    <p>To start a return, you can:</p>

                                    <ul class="list-group list-group-flush mb-3">
                                        <li class="list-group-item">Contact our support team with your
                                            order number and details about the issue.
                                        </li>
                                        <li class="list-group-item">Visit the Orders page in your
                                            account
                                            and select the Return option for the relevant order.</li>
                                    </ul>

                                    <p>
                                        Providing clear information about the issue (and photos where
                                        applicable) will
                                        help
                                        us process your request more efficiently.
                                    </p>

                                    <p>
                                        Our team aims to review and respond to all return requests
                                        within 5
                                        working
                                        days. Once your request has been assessed, we will provide
                                        instructions
                                        on the next steps, which may include returning the item, issuing
                                        a
                                        replacement,
                                        or
                                        processing a refund where appropriate.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm policy-card h-100">
                                <div class="card-body p-4">

                                    <h4 class="card-title mb-3">Returns Window</h4>

                                    <p>
                                        Returns must be requested within 14 days of receiving your
                                        order.
                                        Requests made outside of this period may not be eligible for
                                        return or
                                        refund
                                        unless
                                        the item is faulty or incorrect.
                                    </p>

                                    <p>
                                        Items must be unused, unopened, and in their original condition
                                        and
                                        packaging to qualify for a return.
                                    </p>

                                    <p class="text-danger fw-semibold">
                                        Opened products cannot be accepted for returns unless they are
                                        defective
                                        or
                                        damaged
                                        upon arrival.
                                    </p>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card shadow-sm policy-card h-100">
                                <div class="card-body p-4">

                                    <h4 class="card-title mb-3">Additional Return Conditions</h4>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Customers may be responsible for
                                            return
                                            shipping
                                            costs unless the item is faulty, damaged, or sent in error.
                                        </li>
                                        <li class="list-group-item">Items returned without prior
                                            approval may
                                            not be
                                            processed.</li>
                                        <li class="list-group-item">We recommend using a tracked
                                            shipping
                                            service when returning items.</li>
                                        <li class="list-group-item">Refunds will be issued to the
                                            original
                                            payment
                                            method once approved.</li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <footer>
        @include('components/footer')
    </footer>
</body>

</html>