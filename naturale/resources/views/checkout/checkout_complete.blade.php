<x-layouts.storefront title="{{ config('app.name', 'Laravel') }} - Checkout Complete">

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/checkout_login.css') }}" />

    </x-slot:styles>

    <section class="checkout-confirmation container my-5">
        <div class="card shadow-sm">
            <div class="card-body div-bg border rounded-3">
                <h1 class="mb-4 " style="color: var(--footer-link)">Thank you for your Naturale Order!</h1>
                <h2 class="h5 text-muted">Order #{{ $oid }}</h2>
                <p>You should recieve a confirmation email shortly!</p>

                <h2 class="h5 text-muted">Your Cart</h2>
                <ul class="list-group mb-3  border rounded div-bg">
                    @foreach ($cart as [$product, $quantity])
                        <li class='list-group-item d-flex justify-content-between align-items-center border div-bg'>
                            <div>
                                <strong>{{ $product->p_name }}</strong>
                                @if (!($product->p_category == 'shipping'))
                                        <div class="text-muted">Quantity: {{ $quantity }}</div>
                                    </div>
                                    <span class="text-muted">£{{ number_format($product->p_price * $quantity, 2) }}
                                    </span>
                                @else
                                    </div>
                                    <span class="text-muted">£{{ number_format($product->p_price, 2) }}</span>
                                @endif
                        </li>
                    @endforeach
                    <li class="list-group-item d-flex justify-content-between border div-bg">
                        <span>Total (GBP)</span>
                        <strong>£ {{ $runningTotal }}</strong>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <x-slot:scripts>
        {{-- Put script links links here --}}
    </x-slot:scripts>

</x-layouts.storefront>