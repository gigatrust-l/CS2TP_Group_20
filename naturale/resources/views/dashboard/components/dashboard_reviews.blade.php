<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">

        <div class="relative flex w-full">
            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-2 tracking-wider">My Reviews</h3>
            <a href="/dashboard"
                class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8">
                &lt; Back
            </a>
        </div>

        {{-- Create Review --}}
        @if ($reviewableProducts->isNotEmpty())
            <div class="mb-8" x-data="{ open: false }">

                <button x-on:click="open = !open"
                    class="flex items-center gap-2 bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg text-sm font-bold uppercase transition duration-150 ease-in-out shadow-sm mb-4">
                    <svg x-show="!open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                    </svg>
                    <svg x-show="open" class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                    <span x-text="open ? 'Cancel' : 'Write a Review'"></span>
                </button>

                <div x-show="open" x-transition x-cloak>

                    @if (session('success'))
                        <div class="mb-4 px-4 py-2 bg-green-100 text-green-700 rounded-md text-sm font-medium">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('reviews.store') }}" method="POST">
                        @csrf

                        {{-- Product Select --}}
                        <div class="mb-4">
                            <label for="r_pid" class="block text-sm font-semibold text-gray-700 mb-2">Product</label>
                            <select id="r_pid" name="r_pid"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent">
                                <option value="">Select a product...</option>
                                @foreach ($reviewableProducts as $product)
                                    <option value="{{ $product->pid }}"
                                        {{ old('r_pid') == $product->pid ? 'selected' : '' }}>
                                        {{ $product->p_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('r_pid')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Title --}}
                        <div class="mb-4">
                            <label for="r_title" class="block text-sm font-semibold text-gray-700 mb-2">Title</label>
                            <input type="text" id="r_title" name="r_title" value="{{ old('r_title') }}"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                placeholder="Summarise your review...">
                            @error('r_title')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Star Rating --}}
                        <div class="mb-4">
                            <label class="block text-sm font-semibold text-gray-700 mb-2">Rating</label>
                            <div class="flex gap-2" x-data="{ rating: {{ old('r_rating', 0) }}, hovered: 0 }">
                                @for ($i = 1; $i <= 5; $i++)
                                    <label class="cursor-pointer">
                                        <input type="radio" name="r_rating" value="{{ $i }}"
                                            class="sr-only" x-on:change="rating = {{ $i }}"
                                            {{ old('r_rating') == $i ? 'checked' : '' }}>
                                        <svg x-on:mouseenter="hovered = {{ $i }}"
                                            x-on:mouseleave="hovered = 0" x-on:click="rating = {{ $i }}"
                                            :class="(hovered || rating) >= {{ $i }} ? 'text-amber-400' :
                                                'text-gray-300'"
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
                            <textarea id="r_description" name="r_description" rows="3"
                                class="w-full border border-gray-300 rounded-lg px-3 py-2 text-sm text-gray-700 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent"
                                placeholder="Write your review here...">{{ old('r_description') }}</textarea>
                            @error('r_description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Anonymous --}}
                        <div class="mb-6">
                            <label class="flex items-center gap-3 cursor-pointer">
                                <input type="checkbox" name="r_anonymous" value="1"
                                    class="w-4 h-4 accent-green-600" {{ old('r_anonymous') ? 'checked' : '' }}>
                                <span class="text-sm font-semibold text-gray-700">Post anonymously
                                    <span class="text-gray-400 font-normal">(your name will show as "Verified
                                        Customer")</span>
                                </span>
                            </label>
                        </div>

                        <button type="submit"
                            class="bg-green-600 hover:bg-green-700 text-white px-5 py-2 rounded-lg text-sm font-bold uppercase transition duration-150 ease-in-out shadow-sm">
                            Submit Review
                        </button>
                    </form>
                </div>
            </div>

            <hr class="border-gray-100 mb-8">
        @endif

        {{-- Reviews Table --}}
        <table class="w-full text-left">
            <thead>
                <tr class="text-xs font-semibold text-gray-400 uppercase border-b">
                    <th class="py-3 px-4">Review Number</th>
                    <th class="py-3 px-4">Product</th>
                    <th class="py-3 px-4">Rating</th>
                    <th class="py-3 px-4">Status</th>
                    <th class="py-3 px-4">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-50">
                @forelse ($reviews as $review)
                    <tr>
                        <td class="py-4 px-4 font-mono text-sm">#{{ $review->rid }}</td>
                        <td class="py-4 px-4 font-medium">{{ $review->product->p_name ?? 'Unknown Product' }}</td>
                        <td class="py-4 px-4 font-medium">
                            <div class="flex items-center gap-0.5">
                                @for ($i = 1; $i <= 5; $i++)
                                    <svg class="w-4 h-4 {{ $i <= $review->r_rating ? 'text-amber-400' : 'text-gray-200' }}"
                                        fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                @endfor
                                <span class="text-sm text-gray-500 ml-1">({{ $review->r_rating }}/5)</span>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            @if ($review->r_approved)
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">
                                    <span class="w-1.5 h-1.5 rounded-full bg-green-500"></span>
                                    Accepted
                                </span>
                            @else
                                <span
                                    class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full text-xs font-medium bg-gray-100 text-gray-500">
                                    <span class="w-1.5 h-1.5 rounded-full bg-gray-400"></span>
                                    Not Shown
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-4 font-medium">
                            <a href="/dashboard/reviews/{{ $review->rid }}"
                                class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded-md text-sm font-medium transition-colors">
                                View Review
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="py-8 px-4 text-center text-sm text-gray-400">
                            You haven't written any reviews yet.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Pagination --}}

        @if ($reviews->hasPages())
            <div class="mt-4">
                {{ $reviews->appends(request()->query())->links() }}
            </div>
        @endif

    </div>
</div>
