<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Dashboard</title>
</head>

<div class="bg-gradient-to-r from-green-900 to-green-800 text-white">
    <div class="max-w-7xl mx-auto px-8 py-24">
        <p class="uppercase tracking-[0.25em] text-xs text-green-400 mb-6">Your Account</p>

        <h1 class="text-6xl font-serif leading-tight">Welcome back, <br>
            <span class="text-green-400">{{ auth()->user()->name }}.</span></h1>

        <p class="mt-4 text-sm text-green-200">{{ auth()->user()->email }}</p>
    </div>
</div>

<div class="bg-gray-100">
    <div class="max-w-7xl mx-auto px-8 py-14">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card -->
            <a href="/dashboard/orders" class="group">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition">

                    <div class="w-11 h-11 flex items-center justify-center rounded-md bg-green-100 text-green-700 mb-5 text-lg">
                        <i class="fa-solid fa-list"></i></div>

                    <h3 class="font-semibold text-gray-900">My Orders</h3>

                    <p class="text-sm text-gray-500 mt-1">Track and review your past purchases</p>

                    <span class="text-green-600 text-sm mt-4 inline-block group-hover:underline">View →</span>
                </div>
            </a>
            <!-- Saved Addresses -->
            <a href="/dashboard/addresses" class="group">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition">

                    <div class="w-11 h-11 flex items-center justify-center rounded-md bg-green-100 text-green-700 mb-5 text-lg">
                        <i class="fa-solid fa-location-dot"></i></div>

                    <h3 class="font-semibold text-gray-900">My Saved Addresses</h3>

                    <p class="text-sm text-gray-500 mt-1">Manage your delivery locations</p>

                    <span class="text-green-600 text-sm mt-4 inline-block group-hover:underline">View →</span>
                </div>
            </a>
            <!-- My Account -->
            <a href="/dashboard/profile" class="group">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition">

                    <div class="w-11 h-11 flex items-center justify-center rounded-md bg-green-100 text-green-700 mb-5 text-lg">
                        <i class="fa-solid fa-circle-user"></i></div>

                    <h3 class="font-semibold text-gray-900">My Account</h3>

                    <p class="text-sm text-gray-500 mt-1">Update your personal details and more</p>

                    <span class="text-green-600 text-sm mt-4 inline-block group-hover:underline">View →</span>
                </div>
            </a>
            <!-- My Reviews -->
            <a href="/dashboard/reviews" class="group">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition">

                    <div class="w-11 h-11 flex items-center justify-center rounded-md bg-green-100 text-green-700 mb-5 text-lg">
                        <i class="fa-solid fa-star-half-stroke"></i></div>

                    <h3 class="font-semibold text-gray-900">My Reviews</h3>

                    <p class="text-sm text-gray-500 mt-1">See the feedback you've left on products</p>

                    <span class="text-green-600 text-sm mt-4 inline-block group-hover:underline">View →</span>
                </div>
            </a>
            <!-- Subsctiptions -->
            <a href="/dashboard/subscriptions" class="group">
                <div class="bg-white border border-gray-200 rounded-lg p-6 hover:shadow-md transition">

                    <div class="w-11 h-11 flex items-center justify-center rounded-md bg-green-100 text-green-700 mb-5 text-lg">
                        <i class="fa-solid fa-sack-dollar"></i></div>

                    <h3 class="font-semibold text-gray-900">My Subscriptions</h3>

                    <p class="text-sm text-gray-500 mt-1">Manage your recurring product deliveries</p>

                    <span class="text-green-600 text-sm mt-4 inline-block group-hover:underline">View →</span>
                </div>
            </a>
        </div>
    </div>
</div>
