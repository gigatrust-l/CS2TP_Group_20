<body>
    <a class="logo" href="/">
        <img src="{{ asset('media/logo.png')}}" alt="Naturale Logo">
    </a>
    <!-- Session Status -->
    @if(session('status'))
        <div class="alert alert-success text-center">
            {{ session('status') }}
        </div>
    @endif

    <h2 class="text-center mb-4">Contact Us</h2>

    <form method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')"/>
            <x-text-input id="name" type="text" name="name"
                          :value="old('name')" required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" type="email" name="email"
                          :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
        <!-- Subject Field -->
        <div>
            <x-input-label for="subject" :value="__('Subject')" />
            <select id="subject" name="subject" >
                <option value="Order Enquiry">Order Enquiry</option>
                <option value="Product Question">Product Question</option>
                <option value="Website Feedback">Website Feedback</option>
                <option value="Technical Issue">Technical Issue</option>
                <option value="Other">Other</option>
            </select>
            <x-input-error :messages="$errors->get('subject')" class="mt-2" />
        </div>
        <!-- Message Field -->
        <div>
            <x-input-label for="message" :value="__('Message')" />
            <textarea id="message" name="message" rows="5"
                      required>{{old('message')}}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
        </div>
        <!-- Submit Button -->
        <div>
            <button type="submit">Send</button>
        </div>
    </form>
</body>
