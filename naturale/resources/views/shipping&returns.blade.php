<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    @include('components/head-theme-script')
    <title>{{ config('app.name', 'Laravel') }} - Shipping & Returns</title>
    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}">
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
</head>

<body class="font-sans antialiased" style="background-color: var(--page); color: var(--text);">
    @include('components/nav_bar_customer')

    <div class="py-12 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-[var(--input-bg)] shadow-sm sm:rounded-lg border border-[var(--border)]">
                <div class="p-8">

                    <div name="header">
                        <h2 class="font-semibold text-xl text-[var(--text)] leading-tight">
                            {{ __('Shipping & Returns') }}
                        </h2>
                    </div>

                    <div class="py-4 min-h-screen">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 ">

                            <div class="bg-[var(--input-bg)] shadow-sm sm:rounded-lg border border-[var(--border)] mb-8">
                                <div class="p-8">
                                    <div class="card-header bg-[var(--input-bg)] border-b border-[var(--border)] py-3 px-4">
                                        <h5 class="fw-semibold mb-0 fs-6 text-[var(--text)]">Shipping Information</h5>
                                    </div>
                                    <div class="card-body px-4 py-4">
                                        <div class="">
                                            <p class="text-[var(--muted)] mb-0">
                                                We aim to process and dispatch all orders as quickly as possible to ensure a smooth and reliable delivery experience.
                                            </p>
                                            <br>
                                            <p class="text-[var(--muted)] mb-0">
                                                Orders placed before 12:00 PM (midday) on a working day are eligible for next working day delivery. Orders placed after this time, or during weekends and public holidays, will be processed on the next available working day.
                                            </p>
                                            <br>
                                            <p class="text-[var(--muted)] mb-0">
                                                Once your order has been dispatched, you may receive a confirmation email with delivery information. Delivery times may occasionally vary due to factors outside our control.
                                            </p>
                                            <br>
                                            <p class="text-[var(--muted)] mb-0">
                                                Please ensure that your shipping address and contact details are entered correctly at checkout.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[var(--input-bg)] shadow-sm sm:rounded-lg border border-[var(--border)] mb-8">
                                <div class="p-8">
                                    <div class="card-header bg-[var(--input-bg)] border-b border-[var(--border)] py-3 px-4">
                                        <h5 class="fw-semibold mb-0 fs-6 text-[var(--text)]">Delivery Pricing</h5>
                                    </div>
                                    <div class="card-body px-4 py-4">
                                        <div class="">
                                            <p class="text-[var(--muted)] mb-0">
                                                We offer the following delivery options to suit your needs:
                                            </p>
                                            <br>
                                            <ul class="mb-0 text-[var(--text)]" style="list-style-type: circle;">
                                                <li>Standard next working day delivery: £4.99 </li>
                                                <li>Optional shipping subscription: £12.99 per month</li>
                                            </ul>
                                            <br>
                                            <p class="text-[var(--muted)] mb-0">
                                                Subscribers benefit from free delivery on all orders from Naturale.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[var(--input-bg)] shadow-sm sm:rounded-lg border border-[var(--border)] mb-8">
                                <div class="p-8">
                                    <div class="card-header bg-[var(--input-bg)] border-b border-[var(--border)] py-3 px-4">
                                        <h5 class="fw-semibold mb-0 fs-6 text-[var(--text)]">Returns & Refunds</h5>
                                    </div>
                                    <div class="card-body px-4 py-4">
                                        <div class="">
                                            <p class="text-[var(--muted)] mb-0">
                                                We want you to be satisfied with your purchase. If you experience any issues with your order, our support team is here to help.
                                            </p>
                                            <br>
                                            <p class="text-[var(--muted)] mb-0"> To start a return, you can:</p>
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item bg-transparent text-[var(--text)] border-[var(--border)]">Contact our support team with your order number and details.</li>
                                                <li class="list-group-item bg-transparent text-[var(--text)] border-[var(--border)]">Visit the Orders page and select the Return option.</li>
                                            </ul>
                                            <br>
                                            <p class="text-[var(--muted)] mb-0">
                                                Our team aims to review and respond to all return requests within 5 working days.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-[var(--input-bg)] shadow-sm sm:rounded-lg border border-[var(--border)] mb-4">
                                <div class="p-8">
                                    <div class="card-header bg-[var(--input-bg)] border-b border-[var(--border)] py-3 px-4">
                                        <h5 class="fw-semibold mb-0 fs-6 text-[var(--text)]">Returns Window</h5>
                                    </div>
                                    <div class="card-body px-4 py-4">
                                        <div class="text-[var(--text)]">
                                            <p class="text-[var(--muted)] mb-2">
                                                Returns must be requested within 14 days of receiving your order.
                                            </p>
                                            <p class="mb-3">
                                                Items must be unused, unopened, and in their original condition and packaging to qualify.
                                            </p>
                                            <p class="text-[var(--primary)] fw-semibold">
                                                Opened products cannot be accepted for returns unless they are defective or damaged upon arrival.
                                            </p>
                                        </div>
                                    </div>
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