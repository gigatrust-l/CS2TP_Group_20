<footer class="sticky py-12 bg-[var(--page)] border-t border-[var(--primary)] ">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="mb-4">
                <h5 class="text-xl font-bold text-[var(--footer-main)] mb-3">Naturale</h5>
                <p class="text-[var(--footer-sub)]">Hair Products Based on Natural Ingredients</p>
            </div>

            <div class="mb-4">
                <h5 class="text-xl font-bold text-[var(--footer-main)] mb-3">Quick Links</h5>
                <ul class="space-y-1">
                    <li><a href="/" class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)] transition-colors">Home</a></li>
                    <li><a href="/about" class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)] transition-colors">About Us</a></li>
                    <li><a href="/shipping" class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)] transition-colors">Shipping and Refunds</a></li>
                    <li><a href="/login" class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)] transition-colors">Login</a></li>
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="font-bold text-[var(--footer-main)] mb-3 text-xl">Our Ingredients</h5>
                <ul class="space-y-1">
                    <li><a href="{{ url('/ingredients/avocado-extract') }}"
                            class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors">Avocado Extract</a></li>
                    <li><a href="{{ url('/ingredients/shea-butter') }}"
                            class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors">Shea Butter</a></li>
                    <li><a href="{{ url('/ingredients/pomegranate-oil') }}"
                            class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors">Pomegranate Seed Oil</a></li>
                    <li><a href="{{ url('/ingredients/tea-tree-oil') }}"
                            class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors">Tea Tree Oil</a></li>
                    <li><a href="{{ url('/ingredients/coconut-oil') }}"
                            class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors">Coconut Oil</a></li>
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="text-xl font-bold text-[var(--footer-main)] mb-3">Get In Touch</h5>
                <ul class="space-y-1 text-grey-600">
                    <li><a href="/contact" class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors">Contact Us</a></li>
                    <li>Email: <a href="mailto:NaturaleHelpDesk@gmail.com"
                            class="text-[var(--footer-link)] hover:text-[var(--footer-link-hover)]  transition-colors">NaturaleHelpDesk@gmail.com</a></li>
                </ul>
            </div>

        </div>

        <div class="mt-12 pt-8 border-t border-gray-200 text-center text-[var(--footer-sub)]">
            <p>&copy; {{date('Y')}} Naturale. All rights reserved.</p>
        </div>
    </div>
</footer>