<div class="max-w-full px-6 mt-6 ">
    <div
        class="flex flex-col shadow-sm border-2 p-4 rounded-2xl sticky top-[100px] border-[var(--shadow)] bg-white dark:bg-[var(--page)] dark:shadow-lg hover:scale-100">
        <h6 class="font-bold text-[var(--footer-link)]  mb-4 pb-2 border-b ">Filter & Sort</h6>

        <div class="mb-4">
            <label
                class="inline-block text-sm mb-2 font-semibold uppercase text-[var(--footer-link-hover)] tracking-wider">Search</label>
            <input type="text"
                class="block w-full font-normal line-h-1 leading-normal appearance-none bg-white dark:bg-[var(--page)] bg-clip-padding py-1 px-2 text-sm border rounded border-[#e5e7eb]"
                placeholder="Product name…" name="name" value="{{ request('name') }} "
                wire:model.live.debounce.250ms="name">
        </div>

        <div class="mb-4">
            <label
                class="inline-block text-sm mb-2 font-semibold uppercase text-[var(--footer-link-hover)] tracking-wider">Category</label>
            <div class="flex flex-col gap-1">
                <div class="flex items-center gap-2 mb-1">
                    <input type="radio" name="type" id="cat_all" value="" wire:model.live="type"
                        class="w-4 h-4 cursor-pointer text-green-600 border-[var(--footer-sub)]" />
                    <label class="text-sm cursor-pointer" for="cat_all">All categories</label>
                </div>
                @foreach ($categories as $category)
                    @if (!($category == 'shipping'))
                        <div class="flex items-center gap-2 mb-1">
                            <input class="w-4 h-4 cursor-pointer text-green-600 border-[var(--footer-sub)]"
                                type="radio" name="type" id="cat_{{ Str::slug($category) }}"
                                value="{{ $category }}" wire:model.live="type"></input>
                            <label class="box-border inline text-sm"
                                for="cat_{{ Str::slug($category) }}">{{ $category }}</label>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <div class="mb-4">
            <label
                class="inline-block text-sm mb-2 font-semibold uppercase text-[var(--footer-link-hover)] tracking-wider">
                Max Price: <span class="text-[var(--footer-link)] font-bold"
                    id="priceLabel">£{{ $max_price ?: 25 }}</span>
            </label>
            <input type="range" class="w-full accent-green-600 cursor-pointer" id="priceSlider" min="0"
                max="25" value="25" wire:model.lazy="max_price">
            <div class="flex justify-between">
                <small class="text-[var(--footer-link-hover)]">£0</small>
                <small class="text-[var(--footer-link-hover)]">£25+</small>
            </div>
        </div>

        <div class="mb-4">
            <label
                class="inline-block text-sm mb-2 font-semibold uppercase text-[var(--footer-link-hover)] tracking-wider">Min
                Rating</label>
            <div class="flex flex-col gap-1">
                @foreach ([['', 'Any rating', ''], ['5', '5 ★★★★★', '5 stars'], ['4', '4 ★★★★☆', '4 stars & above'], ['3', '3 ★★★☆☆', '3 stars & above'], ['2', '2 ★★☆☆☆', '2 stars & above']] as [$val, $stars, $label])
                    <div class="flex items-center gap-2 mb-1">
                        <input class="w-4 h-4 cursor-pointer text-green-600 border-[var(--footer-sub)]" type="radio"
                            name="min_rating" wire:model.live="min_rating" value="{{ $val }}"></input>
                        <label class="form-check-label small" for="rating_{{ $val ?: 'any' }}">
                            @if ($val)
                                <span class="text-[#f5a623]">{{ $stars }}</span>
                            @else
                                {{ $stars }}
                            @endif
                        </label>
                    </div>
                @endforeach
            </div>
        </div>
        
            <button class="inline-flex items-center justify-center px-4 py-2 border-2 text-base font-medium rounded-md shadow-sm w-full mt-2 border-gray-100 dark:border-[var(--shadow)] bg-gray-100 dark:bg-[var(--page)] dark:shadow-lg hover:scale-100" wire:click="resetFilters" @if (!$this->isFiltered) disabled @endif>✕
                Reset Filters
            </button>
    </div>
</div>
