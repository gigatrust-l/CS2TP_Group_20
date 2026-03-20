<div class="shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
    <div class="p-8">
        <div class="relative flex w-full">
            <h3 class="text-lg font-bold mb-6 ml-6 tracking-wider" style="color: var(--text);">My Profile</h3>
            <a href="/dashboard"
                class="px-5 py-2 rounded-lg text-xs font-bold uppercase transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8"
                style="background-color: var(--border); color: var(--text);"
                onmouseover="this.style.backgroundColor='var(--muted)'; this.style.color='white'"
                onmouseout="this.style.backgroundColor='var(--border)'; this.style.color='var(--text)'">
                &lt; Back
            </a>
        </div>
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
                @if (!auth()->user()->google_id)
                    <div class="p-6 sm:p-8 shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>
                    <div class="p-6 sm:p-8 shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>
                @else
                    <div class="p-6 sm:p-8 shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form-google')
                        </div>
                    </div>
                @endif
                <div class="p-6 sm:p-8 shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
                    <div class="max-w-xl">
                        @include('profile.partials.update-two-factor-authentication-form')
                    </div>
                </div>
                <div class="p-6 sm:p-8 shadow-sm sm:rounded-lg border" style="background-color: var(--page); border-color: var(--border);">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>