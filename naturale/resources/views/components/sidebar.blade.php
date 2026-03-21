<div class="col-lg-3 col-md-4">
    <form method="GET" id="filterForm">
        <div class="card border-0 shadow-sm rounded-3 p-3" style="position: sticky; top: 1.5rem;">
            <h6 class="fw-bold text-success mb-3 pb-2 border-bottom">Filter & Sort</h6>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing:.05em">Search</label>
                <input type="text" class="form-control form-control-sm" placeholder="Product name…" name="name"
                    value="{{ request('name') }}">
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing:.05em">Category</label>
                <div class="d-flex flex-column gap-1">
                    <div class="form-check">
                        <input class="form-check-input " type="radio" name="type" id="cat_all" value=""
                            {{ request('type', '') == '' ? 'checked' : '' }}></input>
                        <label class="form-check-label small" for="cat_all">All categories</label>
                    </div>
                    @foreach ($categories as $category)
                        @if (!($category == 'shipping'))
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type"
                                    id="cat_{{ Str::slug($category) }}" value="{{ $category }}"
                                    {{ request('type') == $category ? 'checked' : '' }}></input>
                                <label class="form-check-label small"
                                    for="cat_{{ Str::slug($category) }}">{{ $category }}</label>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase"
                    style="letter-spacing:.05em">Ingredients</label>
                <div class="d-flex flex-column gap-1">
                    <div class="form-check">
                        <input class="form-check-input " type="radio" name="ingredient" id="ing_all" value=""
                            {{ request('ingredient', '') == '' ? 'checked' : '' }}></input>
                        <label class="form-check-label small" for="ing_all">All ingredients</label>
                    </div>
                    @foreach ($ingredients as $ingredient)
                        @if (!($ingredient == ''))
                            <div class="form-check">
                                <input class="form-check-input " type="radio" name="ingredient"
                                    id="ing_{{ Str::slug($ingredient) }}" value="{{ $ingredient }}"
                                    {{ request('ingredient') == $ingredient ? 'checked' : '' }}></input>
                                <label class="form-check-label small"
                                    for="ing_{{ Str::slug($ingredient) }}">{{ $ingredient }}</label>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
            
            <div class="mb-3">
            <label class="form-label fw-semibold small text-muted text-uppercase" style="letter-spacing:.05em">
              Max Price: <span class="text-success fw-bold" id="priceLabel">£{{ request('max_price', 25) }}</span>
            </label>
            <input type="range" class="form-range" style="border: none; accent-color: #198754;" id="priceSlider" name="max_price"
                   min="0" max="25" step="1" value="{{ request('max_price', 25) }}">
            <div class="d-flex justify-content-between">
              <small class="text-muted">£0</small>
              <small class="text-muted">£25+</small>
            </div>
          </div>

            <div class="mb-3">
                <label class="form-label fw-semibold small text-muted text-uppercase" style="letter-spacing:.05em">Min
                    Rating</label>
                <div class="d-flex flex-column gap-1">
                    @foreach ([['', 'Any rating', ''], ['4', '4★★★★☆', '4 stars & above'], ['3', '3★★★☆☆', '3 stars & above'], ['2', '2★★☆☆☆', '2 stars & above']] as [$val, $stars, $label])
                        <div class="form-check">
                            <input class="form-check-input " type="radio" name="min_rating"
                                id="rating_{{ $val ?: 'any' }}" value="{{ $val }}"
                                {{ request('min_rating', '') == $val ? 'checked' : '' }}></input>
                            <label class="form-check-label small" for="rating_{{ $val ?: 'any' }}">
                                @if ($val)
                                    <span class="text-warning">{{ $stars }}</span>
                                @else
                                    {{ $stars }}
                                @endif
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>


          <div class="">
            <select name="sort" class="form-select form-select-sm" hidden>
              <option value=""           {{ request('sort') == ''           ? 'selected' : '' }}>Default</option>
              <option value="price_asc"  {{ request('sort') == 'price_asc'  ? 'selected' : '' }}>Price: Low → High</option>
              <option value="price_desc" {{ request('sort') == 'price_desc' ? 'selected' : '' }}>Price: High → Low</option>
              <option value="rating"     {{ request('sort') == 'rating'     ? 'selected' : '' }}>Top Rated</option>
              <option value="name_asc"   {{ request('sort') == 'name_asc'   ? 'selected' : '' }}>Name: A → Z</option>
              <option value="name_desc"  {{ request('sort') == 'name_desc'  ? 'selected' : '' }}>Name: Z → A</option>
            </select>
          </div>

            <button type="submit" class="btn btn-success w-100 btn-sm">Apply Filters</button>
            <a href="{{ route('products') }}" class="btn btn-outline-secondary w-100 btn-sm mt-2">✕
                Reset All</a>
        </div>
    </form>
</div>

<style>#priceSlider::-webkit-slider-thumb {
    background-color: #198754 !important;
    border-color: #198754 !important;
}

#priceSlider::-moz-range-thumb {
    background-color: #198754 !important;
    border-color: #198754 !important;
}</style>

<script>
  // Live price label
  const slider = document.getElementById('priceSlider');
  const label  = document.getElementById('priceLabel');
  if (slider) {
    slider.addEventListener('input', () => label.textContent = '£' + slider.value);
  }

  // Category pill radio highlight
  document.querySelectorAll('.cat-pill input[type="radio"]').forEach(radio => {
    radio.addEventListener('change', () => {
      document.querySelectorAll('.cat-pill').forEach(p => p.classList.remove('active'));
      radio.closest('.cat-pill').classList.add('active');
    });
  });
</script>
