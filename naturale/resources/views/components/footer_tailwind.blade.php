<script src="https://cdn.tailwindcss.com"></script>
<footer class="mt-20 py-12 bg-gray-50 border-t border-gray-200">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="mb-4">
                <h5 class="text-lg font-bold text-gray-900 mb-3">Naturale</h5>
                <p class="text-gray-600">Hair Products Based on Natural Ingredients</p>
            </div>

            <div class="mb-4">
                <h5 class="text-lg font-bold text-gray-900 mb-3">Quick Links</h5>
                <ul class="space-y-2">
                    <li><a href="/" class="text-green-600 hover:text-gray-600 transition-colors">Home</a></li>
                    <li><a href="/about" class="text-green-600 hover:text-gray-600 transition-colors">About Us</a></li>
                    <li><a href="/shipping" class="text-green-600 hover:text-gray-600 transition-colors">Shipping and Refunds</a></li>
                    <li><a href="/login" class="text-green-600 hover:text-gray-600 transition-colors">Login</a></li>
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="text-lg font-bold text-gray-900 mb-3">Our Ingredients</h5>
                <ul class="space-y-2">
                    <li><a href="{{ url('/ingredients/avocado-extract') }}"
                            class="text-green-600 hover:text-gray-600 transition-colors">Avocado Extract</a></li>
                    <li><a href="{{ url('/ingredients/shea-butter') }}"
                            class="text-green-600 hover:text-gray-600 transition-colors">Shea Butter</a></li>
                    <li><a href="{{ url('/ingredients/pomegranate-oil') }}"
                            class="text-green-600 hover:text-gray-600 transition-colors">Pomegranate Seed Oil</a></li>
                    <li><a href="{{ url('/ingredients/tea-tree-oil') }}"
                            class="text-green-600 hover:text-gray-600 transition-colors">Tea Tree Oil</a></li>
                    <li><a href="{{ url('/ingredients/coconut-oil') }}"
                            class="text-green-600 hover:text-gray-600 transition-colors">Coconut Oil</a></li>
                </ul>
            </div>

            <div class="mb-4">
                <h5 class="text-lg font-bold text-gray-900 mb-3">Get In Touch</h5>
                <ul class="space-y-2 text-grey-600">
                    <li><a href="/contact" class="text-green-600 hover:text-gray-600 transition-colors">Contact Us</a></li>
                    <li>Email: <a href="mailto:NaturaleHelpDesk@gmail.com"
                            class="text-green-600 hover:text-gray-600 transition-colors">NaturaleHelpDesk@gmail.com</a></li>
                </ul>
            </div>

        </div>

        <div class="mt-12 pt-8 border-t border-gray-200 text-center text-gray-500">
            <p>&copy; <?php echo date('Y') ?> Naturale. All rights reserved.</p>
        </div>
    </div>
</footer>