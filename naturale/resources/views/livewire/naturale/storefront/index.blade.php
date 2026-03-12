<div>
    <livewire:naturale.components.carousel :slides="$slides['carousel']" :text="$text = 'Naturale'" :height="$height = '500'" />
    <section class="py-12 px-4">

        <h2 class="text-center text-5xl pb-[76px] font-bold">Shop</h2>

        <div class="flex mx-[284px]">

            @foreach ($slides as $key => $value)
                @if ($key != 'ingredients' && $key != 'carousel')
                    <div class="flex-1 text-center">

                        <livewire:naturale.components.carousel :slides="$value" :auto="$auto = false" :height="$height = '160'"
                            :fit="$fit = 'contain'" :dots="$dots = false" :link="$link = '/products?type=' . $key" />

                        <a class="font-['Poppins',_sans-serif] font-semibold mt-[12px]"
                            href="/products?type={{ $key }}">{{ $key }}</a>

                    </div>
                @endif
            @endforeach

        </div>

    </section>

    <section class="py-12 px-4">

        <h2 class="text-center text-5xl pb-[76px] font-bold">Our Ingredients</h2>

        <div class="flex mx-[284px] gap-x-6 items-center justify-center flex-nowrap">

            @foreach ($slides as $key => $value)
                @if ($key == 'ingredients')
                    @foreach ($value as $key => $image)
                        <div class="flex-1 max-w-[180px] text center">
                            <a href="/ingredients/{{ str_replace(' ', '', $ingredientsCategories[$key]) }}">
                                <img src="{{ asset($image) }}" class="h-[160px] object-cover w-[100%] rounded-md"
                                    style="height: 160px; object-fit: cover;">
                                <div class="inset-0 flex items-center justify-center">
                                    <a class="font-['Poppins',_sans-serif] font-semibold mt-[12px]"
                                        href="/ingredients/{{ str_replace(' ', '', $ingredientsCategories[$key]) }}">{{ $ingredientsCategories[$key] }}</a>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endif
            @endforeach

        </div>

    </section>
</div>
