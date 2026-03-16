<div class="mt-12 px-[300px] pb-10">
    <div class="text-center mb-12">
        <h1 class="mb-2 font-medium text-5xl">Store</h1>
    </div>

    <div class="flex  max-w-[1320px] mx-auto">

        @include('livewire.naturale.components.sidebar')

        <div class="mt-6 px-3 w-full md:w-2/3 lg:w-3/4">

            {{-- thingie at top showing products and sort --}}
            <div
                class="flex items-center justify-between border rounded-2xl px-4 py-2 mb-4 shadow-[rgba(0, 0, 0, 0.075) 0px 2px 4px 0px] bg-white dark:bg-[var(--page)]">
                <span class="text-sm text-[var(--footer-link-hover)]">
                    <strong class="text-[var(--primary)]">{{ $products->total() }}</strong> products found
                </span>
                <div class="flex items-center gap-2">
                    <label class="mb-0 text-sm text-[var(--footer-link-hover)]">Sort:</label>
                    <select
                        class="block py-1 text-[var(--footer-link)] font-semibold w-auto border-0 pl-2 text-sm rounded bg-white dark:bg-[var(--page)]"
                        wire:model.live="sort">
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

            {{-- -products shower --}}
            @if ($products->total())
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-3">
                @else
                    <div class="">
            @endif
            @forelse ($products as $product)
                <a href="/products/{{ $product->p_name }}"
                    class="text-[var(--primary)] hover:shadow-2xl transition-shadow shadow-white"
                    wire:key="product--{{ $product->pid }}">
                    <div
                        class="h-full border shadow-sm rounded-lg overflow-hidden relative flex flex-col bg-white dark:bg-[var(--page)] dark:shadow-lg  shadow-white">
                        <img class="h-[180px] object-contain p-4" src="{{ asset($product->p_image) }}"
                            alt="{{ $product->p_name }}">
                        <div class="flex-auto p-4">
                            <span
                                class="inline-flex items-center gap-2">
                                <span
                                    class="inline-flex items-center rounded-md px-2 py-1 text-[10px] font-medium ring-1 ring-inset bg-green-50 text-green-700 ring-green-600/20">
                                    {{ $product->p_category }}
                                </span>
                                @if ($product->p_category != "Hair Accessory")
                                <span
                                    class="inline-flex items-center rounded-md px-2 py-1 text-[10px] font-medium ring-1 ring-inset bg-green-50 text-green-700 ring-green-600/20">
                                    {{ $product->p_feature }}
                                </span>
                                @endif
                            </span>
                            <h6 class="text-sm font-semibold my-1">{{ $product->p_name }}</h6>
                            <p class="text-[var(--footer-link-hover)] mb-0 text-sm">
                                {{ Str::limit($product->p_description, 65) }}</p>
                        </div>
                        <div class="p-4 flex border-t justify-between items-center py-2 ">
                            <span class="text-sm">
                                @if ($product->reviews_avg_r_rating)
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($product->reviews_avg_r_rating >= $i)
                                            <span class="text-[#f5a623]">★</span>
                                        @elseif ($product->reviews_avg_r_rating >= $i - 0.5)
                                            <span style="position: relative; display: inline-block;">
                                                <span class="text-[#ccc]">★</span>
                                                <span
                                                    class="absolute left-0 w-1/2 overflow-hidden text-[#f5a623]">★</span>
                                            </span>
                                        @else
                                            <span style="color: #ccc;">★</span>
                                        @endif
                                    @endfor
                                    <span
                                        class="font-semibold">{{ number_format($product->reviews_avg_r_rating, 1) }}</span>
                                    <span class="text-[var(--footer-link-hover)]">/5</span>
                                @else
                                    <span class="text-[var(--footer-link-hover)] italic text-xs">No
                                        reviews</span>
                                @endif
                            </span>
                            @if ($product->p_stock > 0)
                                <span class="font-bold text-[var(--footer-link)]">
                                    £{{ number_format($product->p_price, 2) }}
                                </span>
                            @else
                                <span class="font-bold text-red-600">
                                    Out Of Stock
                                </span>
                            @endif
                        </div>
                    </div>
                </a>
            @empty
                <div class="flex-none width-full py-12 text-center text-[var(--footer-link-hover)]">
                    <p class="fs-1">🌿</p>
                    <p>No products found. Try adjusting your filters.</p>
                </div>
            @endforelse
        </div>

        @if (method_exists($products, 'links'))
            <div class="mt-4">{{ $products->appends(request()->query())->links() }} </div>
        @endif
    </div>
</div>
</div>
