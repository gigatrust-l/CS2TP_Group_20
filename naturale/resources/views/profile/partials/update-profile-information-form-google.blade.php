<section>
    <header>
        <h2 class="text-lg font-semibold" style="color: var(--text);">
            {{ __('Profile Information') }}
        </h2>
        <p class="mt-1 text-sm" style="color: var(--muted);">
            {{ __("You are unable to change your Name and email, as you are using a Google Account.") }}
        </p>
    </header>
    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>
    <div class="mt-6 space-y-6">
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text"
                class="mt-1 block w-full focus:border-green-500 focus:ring-green-500"
                style="background-color: var(--page); border-color: var(--border); color: var(--muted);"
                :value="old('name', $user->name)" required autofocus autocomplete="name" disabled />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email"
                class="mt-1 block w-full focus:border-green-500 focus:ring-green-500"
                style="background-color: var(--page); border-color: var(--border); color: var(--muted);"
                :value="old('email', $user->email)" required autocomplete="username" disabled />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />
            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2" style="color: var(--text);">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="underline text-sm hover:opacity-80" style="color: var(--footer-link);">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>
                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm" style="color: var(--footer-link);">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
    </div>
</section>