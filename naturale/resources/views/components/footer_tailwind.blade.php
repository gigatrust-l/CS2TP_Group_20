<footer class="mt-20 py-12 border-t" style="background-color: var(--page); border-color: var(--border);">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="mb-4">
                <h5 class="text-lg font-bold mb-3" style="color: var(--text);">Naturale</h5>
                <p style="color: var(--muted);">Hair Products Based on Natural Ingredients</p>
            </div>
            <div class="mb-4">
                <h5 class="text-lg font-bold mb-3" style="color: var(--text);">Quick Links</h5>
                <ul class="space-y-2">
                    <li><a href="/" style="color: var(--footer-link);">Home</a></li>
                    <li><a href="/about" style="color: var(--footer-link);">About Us</a></li>
                    <li><a href="/shipping" style="color: var(--footer-link);">Shipping and Refunds</a></li>
                    <li><a href="/login" style="color: var(--footer-link);">Login</a></li>
                </ul>
            </div>
            <div class="mb-4">
                <h5 class="text-lg font-bold mb-3" style="color: var(--text);">Our Ingredients</h5>
                <ul class="space-y-2">
                    <li><a href="{{ url('/ingredients/avocado-extract') }}" style="color: var(--footer-link);">Avocado Extract</a></li>
                    <li><a href="{{ url('/ingredients/shea-butter') }}" style="color: var(--footer-link);">Shea Butter</a></li>
                    <li><a href="{{ url('/ingredients/pomegranate-oil') }}" style="color: var(--footer-link);">Pomegranate Seed Oil</a></li>
                    <li><a href="{{ url('/ingredients/tea-tree-oil') }}" style="color: var(--footer-link);">Tea Tree Oil</a></li>
                    <li><a href="{{ url('/ingredients/coconut-oil') }}" style="color: var(--footer-link);">Coconut Oil</a></li>
                </ul>
            </div>
            <div class="mb-4">
                <h5 class="text-lg font-bold mb-3" style="color: var(--text);">Get In Touch</h5>
                <ul class="space-y-2">
                    <li><a href="/contact" style="color: var(--footer-link);">Contact Us</a></li>
                    <li style="color: var(--text);">Email: <a href="mailto:NaturaleHelpDesk@gmail.com" style="color: var(--footer-link);">NaturaleHelpDesk@gmail.com</a></li>
                </ul>
            </div>
        </div>
        <div class="mt-12 pt-8 border-t text-center" style="border-color: var(--border); color: var(--muted);">
            <p>&copy; <?php echo date('Y') ?> Naturale. All rights reserved.</p>
        </div>
    </div>
</footer>