<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-[var(--text)]  leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[var(--input-bg)]  overflow-hidden shadow-[var(--shadow)] sm:rounded-lg">
                <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 5000)"  class="p-6 text-[var(--text)]  transition-opacity duration-1000">
                    {{ __("Welcome" ) }}
                </div>
            </div>
        </div>
    </div>


</x-app-layout>