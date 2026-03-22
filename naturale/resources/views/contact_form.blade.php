<x-layouts.storefront title="{{ config('app.name', 'Laravel') }} - Contact Us">

    <x-slot:styles>
        <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/contact_style.css') }}" />
    </x-slot:styles>

    <section class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="aboutus-title-content">
                    <h2 class="display-6 fw-bold mb-4 text-center">Contact Us</h2>
                    <!-- Session Status -->
                    @if (session('status'))
                        <div class="alert alert-success text-center">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf

                        <!-- Row 1 for Name and Email -->
                        <div class="row mb-3">
                            <!-- Name -->
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror border div-bg rounded-3" value="{{ old('name') }}"
                                    required autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Email Address -->
                            <div class="col-sm-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email"
                                    class="form-control @error('email') is-invalid @enderror border div-bg rounded-3"
                                    value="{{ old('email') }}" required autofocus>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <!-- "Row" 2 for Subject -->
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <select id="subject" name="subject"
                                class="form-select @error('subject') is-invalid @enderror border div-bg rounded-3">
                                <option value="Order Enquiry">Order Enquiry</option>
                                <option value="Product Question">Product Question</option>
                                <option value="Website Feedback">Website Feedback</option>
                                <option value="Technical Issue">Technical Issue</option>
                                <option value="Other">Other</option>
                            </select>
                            @error('subject')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- "Row" 3 for Message -->
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" rows="5" class="form-control @error('message') is-invalid @enderror border div-bg rounded-3"
                                required>{{ old('message') }}</textarea>
                            @error('message')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="btn btn-success px-4">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <x-slot:scripts>
        {{-- JS Scripts --}}
    </x-slot:scripts>

    </x-layouts.admin>
