<!DOCTYPE html>
<html>

<head>
    @include('components/head-theme-script')
    <title>{{ config('app.name', 'Laravel') }} - Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/index_style.css')}}" />
    <link rel="icon" type="image/x-icon" href="/media/media_webp/favicon.ico" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/css/navbar_style.css')}}" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body style="background-color: var(--page); color: var(--text);">
    @include('components/nav_bar_customer')

    <section class="py-5 min-h-screen">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2 class="text-3xl font-bold text-[var(--text)] mb-4">Contact Us</h2>
                    
                    @if(session('status'))
                        <div class="alert alert-success text-center bg-[var(--input-bg)] text-success border-[var(--border)]">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('contact.submit') }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="name" class="form-label text-[var(--text)]">Name</label>
                                <input type="text"
                                       id="name"
                                       name="name"
                                       class="form-control bg-[var(--input-bg)] text-[var(--text)] border-[var(--border)] @error('name') is-invalid @enderror"
                                       value="{{ old('name') }}"
                                       required
                                       autofocus>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="form-label text-[var(--text)]">Email</label>
                                <input type="email"
                                       id="email"
                                       name="email"
                                       class="form-control bg-[var(--input-bg)] text-[var(--text)] border-[var(--border)] @error('email') is-invalid @enderror"
                                       value="{{ old('email') }}"
                                       required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="subject" class="form-label text-[var(--text)]">Subject</label>
                            <select id="subject"
                                    name="subject"
                                    class="form-select bg-[var(--input-bg)] text-[var(--text)] border-[var(--border)] @error('subject') is-invalid @enderror">
                                <option value="Order Enquiry">Order Enquiry</option>
                                <option value="Product Question">Product Question</option>
                                <option value="Website Feedback">Website Feedback</option>
                                <option value="Technical Issue">Technical Issue</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="message" class="form-label text-[var(--text)]">Message</label>
                            <textarea id="message"
                                      name="message"
                                      rows="5"
                                      class="form-control bg-[var(--input-bg)] text-[var(--text)] border-[var(--border)] @error('message') is-invalid @enderror"
                                      required>{{ old('message') }}</textarea>
                        </div>

                        <div>
                            <button type="submit" 
                                    class="btn px-4 py-2 font-bold shadow-md transition duration-200 hover:opacity-90"
                                    style="background-color: var(--bg); color: white; border: 1px solid var(--border);">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

                <div class="col-md-6 text-center">
                    <img src="{{ asset('media/media_webp/mail.webp')}}" alt="Mail Icon" class="img-fluid drop-shadow-lg">
                </div>
            </div>
        </div>
    </section>

    <footer>
        @include('components/footer')
    </footer>
</body>
</html>