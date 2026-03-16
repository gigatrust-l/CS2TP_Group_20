<x-layouts.guest title="Login">

    

    <div class="w-full max-w-md ">

        {{-- Tab Switcher --}}
        <div class="flex mb-6 border-b">
            <button onclick="switchTab('login')" id="tab-login"
                class="flex-1 pb-2 font-semibold border-b-2 border-blue-600 text-blue-600">
                Login
            </button>
            <button onclick="switchTab('register')" id="tab-register" class="flex-1 pb-2 font-semibold text-gray-400">
                Register
            </button>
        </div>

        {{-- Session Errors --}}
        @if ($errors->any())
            <div class="mb-4 text-red-500 text-sm">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        {{-- Login Form --}}
        <div id="form-login">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full border rounded px-3 py-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" name="password" class="w-full border rounded px-3 py-2" required />
                </div>
                <div class="mb-4 flex items-center gap-2">
                    <input type="checkbox" name="remember" id="remember" />
                    <label for="remember" class="text-sm">Remember me</label>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                    Login
                </button>
            </form>
        </div>

        {{-- Register Form --}}
        <div id="form-register" class="hidden">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Name</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full border rounded px-3 py-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full border rounded px-3 py-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Password</label>
                    <input type="password" name="password" class="w-full border rounded px-3 py-2" required />
                </div>
                <div class="mb-4">
                    <label class="block text-sm font-medium mb-1">Confirm Password</label>
                    <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2"
                        required />
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700">
                    Register
                </button>
            </form>
        </div>

    </div>

    <script>
        function switchTab(tab) {
            document.getElementById('form-login').classList.toggle('hidden', tab !== 'login');
            document.getElementById('form-register').classList.toggle('hidden', tab !== 'register');
            document.getElementById('tab-login').className =
                `flex-1 pb-2 font-semibold ${tab === 'login' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-400'}`;
            document.getElementById('tab-register').className =
                `flex-1 pb-2 font-semibold ${tab === 'register' ? 'border-b-2 border-blue-600 text-blue-600' : 'text-gray-400'}`;
        }

        // If there were register errors, re-open the register tab
        @if (session('_old_input') || ($errors->any() && old('name')))
            switchTab('register');
        @endif
    </script>

</x-layouts.guest>
