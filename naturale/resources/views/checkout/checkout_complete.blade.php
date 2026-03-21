<x-layouts.storefront title="{{ config('app.name', 'Laravel') }} - Checkout Complete">

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
    </x-slot:styles>

    <section class="checkout-confirmation container my-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h1 class="mb-4 text-success">Checkout Complete!</h1>

                <h2 class="h5 text-muted">Your Cart</h2>
                <ul class="list-group mb-3">
                    @foreach ($cart as [$product, $quantity])
                        <li class='list-group-item d-flex justify-content-between align-items-center'>
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
                    <li class="list-group-item d-flex justify-content-between">
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
