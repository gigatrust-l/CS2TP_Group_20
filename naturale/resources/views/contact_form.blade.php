<!DOCTYPE html>

<html>

<head>
    <title>Contact Us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{ asset('/css/index_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/aboutus_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/contactus_style.css') }}" />

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.css" rel="stylesheet">

    <!--Icons-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">

    <!--Fonts same as home page-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Inter:wght@300;400&display=swap" rel="stylesheet">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
</head>


<body class="contact-page">
    @include('components/nav_bar_customer')

<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="aboutus-title-content">
                <h2 class="display-6 fw-bold mb-4 text-center">Contact Us</h2>
                <!-- Session Status -->
                @if(session('status'))
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
                            <input type="text"
                                   id="name"
                                   name="name"
                                   class="form-control @error('name') is-invalid @enderror"
                                   value="{{ old('name') }}"
                                   required
                                   autofocus>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Email Address -->
                        <div class="col-sm-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email"
                                   id="email"
                                   name="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   value="{{ old('email') }}"
                                   required
                                   autofocus>
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <!-- "Row" 2 for Subject -->
                    <div class="mb-3">
                        <label for="subject" class="form-label">Subject</label>
                        <select id="subject"
                                name="subject"
                                class="form-select @error('subject') is-invalid @enderror">
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
                        <textarea id="message"
                                  name="message"
                                  rows="5"
                                  class="form-control @error('message') is-invalid @enderror"
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
	<footer>
    	@include('components/footer')
    </footer>
</body>

</html>
