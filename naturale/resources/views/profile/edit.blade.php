<x-app-layout>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            @if (!auth()->user()->google_id)
                <div class="p-6 sm:p-8 shadow rounded-xl border"
                    style="background-color: var(--page); border-color: var(--border);">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
                <div class="p-6 sm:p-8 shadow rounded-xl border"
                    style="background-color: var(--page); border-color: var(--border);">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            @else
                <div class="p-6 sm:p-8 shadow rounded-xl border"
                    style="background-color: var(--page); border-color: var(--border);">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form-google')
                    </div>
                </div>
            @endif
            <div class="p-6 sm:p-8 shadow rounded-xl border"
                style="background-color: var(--page); border-color: var(--border);">
                <div class="max-w-xl">
                    @include('profile.partials.update-two-factor-authentication-form')
                </div>
            </div>
            <div class="p-6 sm:p-8 shadow rounded-xl border"
                style="background-color: var(--page); border-color: var(--border);">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>