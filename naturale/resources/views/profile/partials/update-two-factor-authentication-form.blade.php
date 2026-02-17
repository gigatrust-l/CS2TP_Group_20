<section class="space-y-6">
    <header>
        <h2 class="text-lg font-semibold text-gray-900">
            {{ __('Two Factor Authentication') }}
        </h2>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Add additional security to your account using two factor authentication.') }}
        </p>
    </header>

    @if(!auth()->user()->two_factor_secret)
        {{-- Case 1: 2FA is Disabled --}}
        <form method="POST" action="/user/two-factor-authentication">
            @csrf
            <x-green-button class="bg-green-600 hover:bg-green-700 text-white">
                {{ __('Enable 2FA') }}
            </x-green-button>
        </form>
    @else
        {{-- Case 2: 2FA is Enabled (or awaiting confirmation) --}}
        <div class="mt-4 space-y-4">
            @if(auth()->user()->two_factor_confirmed_at)
                <p class="text-sm font-medium text-green-600">
                    {{ __('Two factor authentication is enabled.') }}
                </p>
            @else
                <p class="text-sm font-medium text-red-600">
                    {{ __('Finish enabling two factor authentication.') }}
                </p>

                {{-- Show QR Code --}}
                <div class="mt-4 p-4 bg-white inline-block border border-gray-200">
                    {!! auth()->user()->twoFactorQrCodeSvg() !!}
                </div>

                <div class="mt-4">
                    <p class="text-sm text-gray-600">
                        {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application and provide the generated OTP code.') }}
                    </p>

                    <form method="POST" action="/user/confirmed-two-factor-authentication" class="mt-4">
                        @csrf
                        <x-input-label for="code" value="{{ __('Code') }}" />
                        <x-text-input id="code" name="code" type="text" class="mt-1 block w-1/2" inputmode="numeric" autofocus
                            autocomplete="one-time-code" />
                        <x-input-error :messages="$errors->get('code')" class="mt-2" />
                        <x-green-button class="mt-4 bg-green-600 hover:bg-green-700 text-white">
                            {{ __('Confirm Code') }}
                        </x-green-button>
                    </form>
                </div>
            @endif

            {{-- Show Recovery Codes --}}
            <div class="mt-4">
                <p class="mt-1 text-sm text-gray-600">
                    {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                </p>
                <div class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm bg-gray-100 rounded-lg">
                    @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                        <div>{{ $code }}</div>
                    @endforeach
                </div>
            </div>

            {{-- Disable Button --}}
            <div class="mt-4">
                <form method="POST" action="/user/two-factor-authentication">
                    @csrf
                    @method('DELETE')
                    <x-danger-button class="bg-red-600 hover:bg-red-700 text-white">
                        {{ __('Disable 2FA') }}
                    </x-danger-button>
                </form>
            </div>
        </div>
    @endif
</section>