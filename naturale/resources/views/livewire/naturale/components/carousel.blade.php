<div wire:ignore x-data="{
    current: 0,
    total: {{ count($slides) }},
    interval: null,
    @if ($auto) init() { this.startAutoScroll() }, @endif
    next() { this.current = (this.current + 1) % this.total },
    prev() { this.current = (this.current - 1 + this.total) % this.total },
    goTo(i) { this.current = i },
    @if ($auto) startAutoScroll() { this.interval = setInterval(() => this.next(), 4000) },
        stopAutoScroll() { clearInterval(this.interval) } 
}" @mouseenter="stopAutoScroll()" @mouseleave="startAutoScroll()" @else }" @endif
    class="relative w-full " style="height: {{ $height }}px;">
    {{-- Slides --}}
    @foreach ($slides as $i => $img)
        <div x-show="current === {{ $i }}" x-transition:enter="transition-opacity duration-700 ease-in-out"
            x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity duration-700 ease-in-out" x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0" class="absolute inset-0 {{ $i === 0 ? '' : '' }}"
            style="{{ $i === 0 ? '' : 'display:none' }}">

            <a @if (!is_null($link)) href="{{ $link }}" @endif>

                <img src="{{ asset($img) }}" class="w-full"
                    style="height: {{ $height }}px; object-fit:{{ $fit }};"
                    alt="Slide {{ $i + 1 }}">
                <div class="absolute inset-0 flex items-center justify-center">
                    <h1 class="text-white text-[128px] font-black drop-shadow-xl tracking-widest font-['Lemon_Jelly_Personal_Use'] text-shadow-lg/60 text-shadow-black ">{{ $text }}</h1>
                </div>

            </a>
        </div>
    @endforeach

    {{-- Spacer to maintain height --}}
    <div class="" style="height: {{ $height }}px;"></div>

    {{-- Prev Button --}}
    <button @click="prev()"
        class="absolute left-4 top-1/2 -translate-y-1/2 z-10 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
    </button>

    {{-- Next Button --}}
    <button @click="next()"
        class="absolute right-4 top-1/2 -translate-y-1/2 z-10 bg-black/40 hover:bg-black/60 text-white p-3 rounded-full transition">
        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
    </button>
    @if ($dots)
        {{-- Indicators --}}
        <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex gap-2 z-10">
            @foreach ($slides as $i => $img)
                <button @click="goTo({{ $i }})"
                    :class="current === {{ $i }} ? 'bg-white scale-125' : 'bg-white/50 hover:bg-white/80'"
                    class="w-3 h-3 rounded-full transition-all duration-300"></button>
            @endforeach
        </div>
    @endif
</div>
