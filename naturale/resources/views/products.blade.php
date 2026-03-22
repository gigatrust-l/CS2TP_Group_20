<x-layouts.storefront title="{{ config('app.name', 'Laravel') }} - Products">

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('css/products_style.css') }}" />
    </x-slot:styles>

    <div class="container mt-5 pb-5">
        <div class="text-center mb-5">
            <h1>Store</h1>
        </div>

        <div class="row g-4">

            @include('components/sidebar')

            <div class="col-lg-9 col-md-8">
                <div
                    class="div-bg d-flex align-items-center justify-content-between border rounded-3 px-3 py-2 mb-3 shadow-sm">
                    <span class="text-muted small">
                        <strong class="">{{ $products->total()}}</strong> products found
                    </span>
                    <div class="d-flex align-items-center gap-2">
                        <label class="text-muted small mb-0">Sort:</label>
                        <select class="form-select form-select-sm w-auto border-0 fw-semibold text-success"
                            onchange="document.querySelector('[name=sort]').value=this.value; document.getElementById('filterForm').submit()">
                            <option value="" {{ request('sort') == '' ? 'selected' : '' }}>Default</option>
                            <option value="price_asc" {{ request('sort') == 'price_asc' ? 'selected' : '' }}>Price ↑
                            </option>
                            <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price ↓
                            </option>
                            <option value="rating" {{ request('sort') == 'rating' ? 'selected' : '' }}>Top Rated
                            </option>
                            <option value="name_asc" {{ request('sort') == 'name_asc' ? 'selected' : '' }}>A → Z
                            </option>
                            <option value="name_desc" {{ request('sort') == 'name_desc' ? 'selected' : '' }}>Z → A
                            </option>
                        </select>
                    </div>
                </div>

                <div class="row g-3">
                    @forelse($products as $product)
                        @if (!($product->p_category == 'shipping'))
                            <div class="col-sm-6 col-xl-4 ">
                                <a href="{{ route('products.show', $product->pid) }}"
                                    class="text-decoration-none text-dark">
                                    <div class="card h-100 shadow-sm rounded-3 overflow-hidden div-bg border rounded-3">
                                        <img src="{{ asset($product->p_image) }}" alt="{{ $product->p_name }}"
                                            class="card-img-top p-3" style="height:180px; object-fit:contain;">
                                        <div class="card-body pb-1">
                                            <span
                                                class="badge bg-success bg-opacity-10 text-success small mb-1">{{ $product->p_category }}</span>
                                            <h6 class="card-title fw-semibold mt-1 mb-1">{{ $product->p_name }}</h6>
                                            <p class="card-text text-muted small">
                                                {{ Str::limit($product->p_description, 65) }}
                                            </p>
                                        </div>
                                        <div
                                            class="card-footer border-top d-flex justify-content-between align-items-center py-2">
                                            <span class="small">
                                                @if ($product->reviews_avg_r_rating)
                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($product->reviews_avg_r_rating >= $i)
                                                            <span style="color: #f5a623;">★</span>
                                                        @elseif ($product->reviews_avg_r_rating >= $i - 0.5)
                                                            <span style="position: relative; display: inline-block;">
                                                                <span style="color: #ccc;">★</span>
                                                                <span
                                                                    style="position: absolute; left: 0; width: 50%; overflow: hidden; color: #f5a623;">★</span>
                                                            </span>
                                                        @else
                                                            <span style="color: #ccc;">★</span>
                                                        @endif
                                                    @endfor
                                                    <span
                                                        class="fw-semibold">{{ number_format($product->reviews_avg_r_rating, 1) }}</span>
                                                    <span class="text-muted">/5</span>
                                                @else
                                                    <span class="text-muted fst-italic" style="font-size:.75rem">No
                                                        reviews</span>
                                                @endif
                                            </span>
                                            @if ($product->p_stock > 0)
                                                <span class="fw-bold text-success">
                                                    £{{ number_format($product->p_price, 2) }}
                                                </span>
                                            @else
                                                <span class="fw-bold text-danger">
                                                    Out Of Stock
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endif
                    @empty
                        <div class="col-12 text-center py-5 text-muted">
                            <p class="fs-1">🌿</p>
                            <p>No products found. Try adjusting your filters.</p>
                        </div>
                    @endforelse
                </div>

                @if (method_exists($products, 'links'))
                    <div class="mt-4">{{ $products->appends(request()->query())->links() }}</div>
                @endif

            </div>
        </div>
    </div>

    <x-slot:scripts>
        {{-- JS Scripts --}}
    </x-slot:scripts>

</x-layouts.storefront>