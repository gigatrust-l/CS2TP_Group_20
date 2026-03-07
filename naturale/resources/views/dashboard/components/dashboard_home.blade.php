<div class="bg-white shadow-sm sm:rounded-lg border border-gray-100">
    <div class="p-8">
        <h3 class="text-lg font-bold text-gray-900 mb-6 tracking-wider">Welcome, {{ auth()->user()->name }}</h3>
        <div class="grid grid-cols-3 gap-4">
            <a href="/dashboard/orders">
                <div
                    class="relative aspect-square bg-white shadow-sm sm:rounded-lg border border-gray-100 hover:bg-gray-200 transition ease-in-out duration-150 ">
                    <div>
                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            style="width: 80%; height: auto; display: block; margin: auto; text-align:center;">
                            <style>
                                .sh1s0 {
                                    fill: #000000
                                }

                                .sh1s1 {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linejoin: round;
                                    stroke-width: 32
                                }
                            </style>
                            <path id="Shape 3" fill-rule="evenodd" class="sh1s0"
                                d="m173 176h166c7.18 0 13 5.82 13 13v6c0 7.18-5.82 13-13 13h-166c-7.18 0-13-5.82-13-13v-6c0-7.18 5.82-13 13-13z" />
                            <path id="Shape 3 copy" fill-rule="evenodd" class="sh1s0"
                                d="m173 272h166c7.18 0 13 5.82 13 13v6c0 7.18-5.82 13-13 13h-166c-7.18 0-13-5.82-13-13v-6c0-7.18 5.82-13 13-13z" />
                            <path id="Shape 3 copy 2" fill-rule="evenodd" class="sh1s0"
                                d="m173 368h166c7.18 0 13 5.82 13 13v6c0 7.18-5.82 13-13 13h-166c-7.18 0-13-5.82-13-13v-6c0-7.18 5.82-13 13-13z" />
                            <path id="Shape 1" fill-rule="evenodd" class="sh1s0"
                                d="m208 32h95c8.84 0 16 7.16 16 16v64c0 8.84-7.16 16-16 16h-95c-8.84 0-16-7.16-16-16v-64c0-8.84 7.16-16 16-16z" />
                            <path id="Shape 2" fill-rule="evenodd" class="sh1s1" d="m416 80v384h-320v-384z" />
                        </svg>

                    </div>

                    <h2
                        class="text-lg font-bold text-gray-900 ml-6 mt-4 mb-6 tracking-wider absolute bottom-0 left-0 ...">
                        View Orders</h2>

                </div>
            </a>
            <a href="/dashboard/addresses">
                <div
                    class="relative aspect-square bg-white shadow-sm sm:rounded-lg border border-gray-100 hover:bg-gray-200 transition ease-in-out duration-150">
                    <div>

                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            style="width: 80%; height: auto; display: block; margin: auto; text-align:center;">
                            <style>
                                .sh2s0 {
                                    fill: #000000
                                }

                                .sh2s1 {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-miterlimit: 100;
                                    stroke-width: 42
                                }

                                .sh2s2 {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linejoin: round;
                                    stroke-width: 36
                                }
                            </style>
                            <path id="Shape 4" class="sh2s0"
                                d="m153.5 268.5c-6.6 1.81-14.03 3.94-16.5 4.73-2.47 0.8-8.55 2.97-13.5 4.83-4.95 1.87-13.72 5.71-19.5 8.55-5.78 2.83-14.55 7.82-19.5 11.07-4.95 3.26-12.32 9.05-16.38 12.87-4.06 3.82-9.31 9.65-11.67 12.95-2.36 3.3-5.63 8.7-7.28 12-1.64 3.3-3.93 9.71-5.08 14.25-1.15 4.54-2.09 10.5-2.09 13.25 0 2.75 1.17 9.16 2.6 14.25 1.42 5.09 3.51 11.05 4.64 13.25 1.12 2.2 3.72 6.48 5.78 9.5 2.06 3.02 6.83 8.51 10.61 12.19 3.78 3.68 9.12 8.47 11.87 10.64 2.75 2.18 9.5 6.55 15 9.73 5.5 3.17 12.7 7 16 8.52 3.3 1.52 8.47 3.75 11.5 4.96 3.03 1.2 8.65 3.29 12.5 4.62 3.85 1.34 11.84 3.77 17.75 5.39 5.91 1.62 17.61 4.31 26 5.97 8.39 1.65 22.9 3.72 32.25 4.58 9.35 0.87 18.57 2.01 20.5 2.54 2.03 0.56 13.97 0.79 28.5 0.53 13.75-0.24 27.02-0.73 29.5-1.08 2.48-0.36 11.02-1.33 19-2.17 7.98-0.83 19.45-2.43 25.5-3.54 6.05-1.11 17.07-3.55 24.5-5.41 7.43-1.87 17.32-4.71 22-6.31 4.68-1.61 10.98-3.92 14-5.12 3.02-1.21 8.43-3.55 12-5.21 3.57-1.65 10.77-5.51 16-8.57 5.23-3.06 11.75-7.32 14.5-9.47 2.75-2.15 8.09-6.92 11.87-10.6 3.78-3.68 8.7-9.39 10.93-12.69 2.24-3.3 5.11-8.36 6.38-11.25 1.28-2.89 3.26-8.96 4.4-13.5q2.08-8.25 1.66-14.25c-0.22-3.3-1.18-8.7-2.11-12-0.94-3.3-3.07-8.93-4.74-12.5-1.68-3.57-4.97-9.2-7.33-12.5-2.37-3.3-7.39-8.93-11.18-12.51-3.78-3.58-11.15-9.38-16.38-12.88-5.23-3.51-14.23-8.69-20-11.52-5.77-2.82-14.32-6.57-19-8.33-4.68-1.76-11.2-4.08-14.5-5.16-3.3-1.09-11.29-3.35-17.75-5.04-6.46-1.68-13.77-3.06-16.25-3.06-2.48 0-6.19 0.84-8.25 1.87-2.06 1.03-5.21 3.51-7 5.5-1.79 2-3.75 5.54-4.35 7.88-0.61 2.34-0.82 6.27-0.47 8.75 0.35 2.48 1.68 6.3 2.95 8.5 1.28 2.2 3.85 4.96 5.72 6.14 1.87 1.18 10.38 4.02 18.9 6.3 8.52 2.29 20.68 6.2 27 8.69 6.32 2.48 14.43 6.12 18 8.08 3.57 1.96 9.84 5.86 13.92 8.68 4.09 2.81 9.6 7.7 12.25 10.86 3.02 3.6 5.41 7.71 6.39 11 1.22 4.13 1.33 6.1 0.48 9.25-0.59 2.2-2.13 5.8-3.43 8-1.3 2.2-5 6.43-8.23 9.39-3.24 2.97-8.24 6.9-11.13 8.75-2.89 1.85-8.96 5.22-13.5 7.49-4.54 2.28-12.3 5.67-17.25 7.56-4.95 1.88-13.5 4.71-19 6.29-5.5 1.58-15.62 4-22.5 5.38-6.87 1.38-15.87 2.97-20 3.54-4.12 0.57-12.9 1.58-19.5 2.24-6.6 0.65-22.57 1.2-35.5 1.21-15.35 0.01-29.4-0.59-40.5-1.73-9.35-0.97-23.75-3.1-32-4.75-8.25-1.65-19.5-4.29-25-5.88-5.5-1.59-14.05-4.42-19-6.3-4.95-1.89-12.71-5.28-17.25-7.56-4.54-2.27-10.61-5.64-13.5-7.48-2.89-1.84-7.95-5.83-11.25-8.86-3.3-3.04-7.2-7.72-8.67-10.4-1.46-2.69-2.96-6.46-3.32-8.39-0.45-2.36-0.06-5.13 1.19-8.5 1.02-2.75 3.64-7.22 5.83-9.93 2.18-2.71 7.57-7.6 11.97-10.87 4.4-3.26 12.95-8.33 19-11.25 6.05-2.92 17.07-7.32 24.5-9.76 7.43-2.44 17.55-5.4 22.5-6.57 5.77-1.36 10.32-3.11 12.68-4.87 2.02-1.51 4.59-4.32 5.7-6.25 1.12-1.93 2.34-5.52 2.71-8 0.46-3.05 0.15-6.11-0.94-9.5-0.91-2.83-3.03-6.36-4.88-8.14-1.8-1.72-4.73-3.86-6.52-4.75-1.87-0.92-5.49-1.57-8.5-1.51-2.89 0.06-10.65 1.58-17.25 3.4z" />
                            <path id="Shape 1" fill-rule="evenodd" class="sh2s1"
                                d="m255.5 234c-47.28 0-85.5-38-85.5-85 0-47.01 38.22-85 85.5-85 47.28 0 85.5 37.99 85.5 85 0 47-38.22 85-85.5 85z" />
                            <path id="Shape 2" fill-rule="evenodd" class="sh2s2" d="m258.32 342.58h-4.64v-103.58h4.64z" />
                        </svg>

                    </div>

                    <h2
                        class="text-lg font-bold text-gray-900 ml-6 mt-4 mb-6 tracking-wider absolute bottom-0 left-0 ...">
                        View Saved Addresses</h2>

                </div>
            </a>
            <a href="/dashboard/profile">
                <div
                    class="relative aspect-square bg-white shadow-sm sm:rounded-lg border border-gray-100 hover:bg-gray-200 transition ease-in-out duration-150">

                    <div>

                        <svg version="1.2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                            style="width: 80%; height: auto; display: block; margin: auto; text-align:center;">
                            <style>
                                .sh3s0 {
                                    fill: none;
                                    stroke: #000000;
                                    stroke-linejoin: round;
                                    stroke-width: 16
                                }
                            </style>
                            <path id="Shape 1" fill-rule="evenodd" class="sh3s0"
                                d="m256 243c-47 0-85-38-85-85 0-47 37.99-85 85-85 47 0 85 37.99 85 85 0 47-38 85-85 85z" />
                            <path id="Shape 4" class="sh3s0"
                                d="m146.86 438.86c-24.19 0-43.86-16.28-43.86-36.31v-54.46c0-70.18 68.23-105.12 153-105.12 84.77 0 154 34.94 154 105.12v54.46c0 20.03-19.67 36.31-43.86 36.31z" />
                        </svg>

                    </div>

                    <h2
                        class="text-lg font-bold text-gray-900 ml-6 mt-4 mb-6 tracking-wider absolute bottom-0 left-0 ...">
                        View Account</h2>

                </div>
            </a>
        </div>

    </div>
</div>