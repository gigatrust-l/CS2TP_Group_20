<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">
        <div class="relative flex w-full">
            <h3 class="text-lg font-bold text-gray-900 mb-6 ml-6  tracking-wider">My Profile</h3>
            <a href="/dashboard" class="bg-gray-100 text-black px-5 py-2 rounded-lg text-xs font-bold uppercase hover:bg-gray-200 transition duration-150 ease-in-out shadow-sm inset-y-0 right-0 absolute h-8"> &lt;   Back </a>
        </div>

        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                @if (!auth()->user()->google_id)

                    <div class="p-6 sm:p-8 bg-white shadow-sm sm:rounded-lg border border-gray-100">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    <div class="p-6 sm:p-8 bg-white shadow-sm sm:rounded-lg border border-gray-100">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                @else

                    <div class="p-6 sm:p-8 bg-white shadow-sm sm:rounded-lg border border-gray-100">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form-google')
                        </div>
                    </div>

                @endif

                <div class="p-6 sm:p-8 bg-white shadow-sm sm:rounded-lg border border-gray-100">
                    <div class="max-w-xl">
                        @include('profile.partials.update-two-factor-authentication-form')
                    </div>
                </div>

                <div class="p-6 sm:p-8 bg-white shadow-sm sm:rounded-lg border border-gray-100">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>