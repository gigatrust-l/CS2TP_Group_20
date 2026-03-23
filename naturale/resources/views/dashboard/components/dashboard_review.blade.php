<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">

        <div class="relative flex w-full">
            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-2 tracking-wider">
                {{ __('My Reviews > Review') }} #{{ $review->rid }}
            </h3>
            <a href="/dashboard/reviews"
                class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8">
                &lt; Back
            </a>
        </div>

        <div>

            {{-- Review Preview --}}
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-3">Review Information</h3>
                <div class="mb-3 text-sm">
                    <span class="font-semibold">Product:</span> {{ $review->product->p_name ?? 'Unknown Product' }}
                </div>

                <div class="p-4 border-gray-100 rounded-lg bg-gray-50 border">
                    <div class="flex items-start justify-between gap-4">
                        <div class="flex items-center gap-3 min-w-0">
                            <div class="min-w-0">
                                <p class="text-sm font-semibold truncate">
                                    {{ $review->r_title ?? __('Untitled Review') }}
                                </p>
                                <p class="text-xs text-gray-400">
                                    @if ($review->r_anonymous)
                                        Verified Customer
                                    @else
                                        {{ $review->customer->c_name }}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center gap-0.5 shrink-0"
                            aria-label="{{ $review->r_rating }} out of 5 stars">
                            @for ($i = 1; $i <= 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="w-4 h-4 {{ $i <= $review->r_rating ? 'text-amber-400' : 'text-gray-200' }}"
                                    fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    @if (!empty($review->r_description))
                        <p class="mt-3 text-sm leading-relaxed">{{ $review->r_description }}</p>
                    @endif
                </div>
            </div>

            {{-- Update Review Form --}}
            <div class="mb-6">
                <h3 class="text-lg font-semibold text-gray-700 mb-4">Update Review</h3>

                <form action="{{ route('reviews.update', $review->rid) }}" method="POST">
                    @csrf
                    @method('PUT')

                    {{-- Title --}}
                    <div class="mb-4">
                        <label for="r_title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                        <input type="text" id="r_title" name="r_title"
                            value="{{ old('r_title', $review->r_title) }}"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                            placeholder="Summarise your review...">
                        @error('r_title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Star Rating --}}
                    <div class="mb-4">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Rating</label>
                        <div class="flex gap-2" x-data="{ rating: {{ old('r_rating', $review->r_rating) }}, hovered: 0 }">
                            @for ($i = 1; $i <= 5; $i++)
                                <label class="cursor-pointer">
                                    <input type="radio" name="r_rating" value="{{ $i }}" class="sr-only"
                                        x-on:change="rating = {{ $i }}"
                                        {{ old('r_rating', $review->r_rating) == $i ? 'checked' : '' }}>
                                    <svg x-on:mouseenter="hovered = {{ $i }}" x-on:mouseleave="hovered = 0"
                                        x-on:click="rating = {{ $i }}"
                                        :class="(hovered || rating) >= {{ $i }} ? 'text-amber-400' : 'text-gray-300'"
                                        class="w-8 h-8 transition-colors" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </label>
                            @endfor
                        </div>
                        @error('r_rating')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    {{-- Description --}}
                    <div class="mb-4">
                        <label for="r_description"
                            class="block text-sm font-semibold text-gray-700 mb-2">Description</label>
                        <textarea id="r_description" name="r_description" rows="4"
                            class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                            placeholder="Write your review here...">{{ old('r_description', $review->r_description) }}</textarea>
                        @error('r_description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Anonymous Toggle --}}
                    <div class="mb-6">
                        <label class="flex items-center gap-3 cursor-pointer">
                            <input type="checkbox" name="r_anonymous" value="1" class="w-4 h-4 accent-green-600"
                                {{ old('r_anonymous', $review->r_anonymous) ? 'checked' : '' }}>
                            <span class="text-sm font-semibold text-gray-700">Post anonymously
                                <span class="text-gray-400 font-normal">(your name will show as "Verified
                                    Customer")</span>
                            </span>
                        </label>
                    </div>

                    <button type="submit"
                        class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg text-sm font-bold uppercase transition duration-150 ease-in-out shadow-sm">
                        Update Review
                    </button>
                </form>
            </div>

        </div>
    </div>
</div>
