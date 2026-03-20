<section class="space-y-6">
    <header>
        <h2 class="text-lg font-semibold" style="color: var(--text);">
            {{ __('Two Factor Authentication') }}
        </h2>
        <p class="mt-1 text-sm" style="color: var(--muted);">
            {{ __('Add additional security to your account using two factor authentication.') }}
        </p>
    </header>
    @if(!auth()->user()->two_factor_secret)
        <form method="POST" action="/user/two-factor-authentication">
            @csrf
            <x-green-button>
                {{ __('Enable 2FA') }}
            </x-green-button>
        </form>
    @else
        <div class="mt-4 space-y-4">
            @if(auth()->user()->two_factor_confirmed_at)
                <p class="text-sm font-medium" style="color: var(--footer-link);">
                    {{ __('Two factor authentication is enabled.') }}
                </p>
            @else
                <p class="text-sm font-medium text-red-600">
                    {{ __('Finish enabling two factor authentication.') }}
                </p>
                <div class="mt-4 p-4 inline-block border" style="background-color: var(--page); border-color: var(--border);">
                    {!! auth()->user()->twoFactorQrCodeSvg() !!}
                </div>
                <div class="mt-4">
                    <p class="text-sm" style="color: var(--muted);">
                        {{ __('To finish enabling two factor authentication, scan the following QR code using your phone\'s authenticator application and provide the generated OTP code.') }}
                    </p>
                    <form method="POST" action="/user/confirmed-two-factor-authentication" class="mt-4">
                        @csrf
                        <x-input-label for="code" value="{{ __('Code') }}" />
                        <x-text-input id="code" name="code" type="text"
                            class="mt-1 block w-1/2"
                            style="background-color: var(--page); border-color: var(--border); color: var(--text);"
                            inputmode="numeric" autofocus autocomplete="one-time-code" />
                        <x-input-error :messages="$errors->get('code')" class="mt-2" />
                        <x-green-button class="mt-4">
                            {{ __('Confirm Code') }}
                        </x-green-button>
                    </form>
                </div>
            @endif
            <div class="mt-4">
                <p class="mt-1 text-sm" style="color: var(--muted);">
                    {{ __('Store these recovery codes in a secure password manager. They can be used to recover access to your account if your two factor authentication device is lost.') }}
                </p>
                <div x-data="{ open: false }">
                    <x-green-button @click="open = !open" class="mt-4">
                        <span x-show="!open">Show Recovery Codes</span>
                        <span x-show="open">Hide Recovery Codes</span>
                    </x-green-button>
                    <div x-show="open" x-transition
                        class="grid gap-1 max-w-xl mt-4 px-4 py-4 font-mono text-sm rounded-lg"
                        style="background-color: var(--border); color: var(--text);">
                        @foreach (json_decode(decrypt(auth()->user()->two_factor_recovery_codes), true) as $code)
                            <div>{{ $code }}</div>
                        @endforeach
                    </div>
                </div>
            </div>
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