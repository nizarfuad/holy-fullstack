<footer class="bg-black w-full text-white py-2 px-20 border-t">
    <div class="container mx-auto px-4 grid grid-cols-3 items-center">
        <!-- Left: Social Media -->
        <div class="flex justify-start space-x-4">
            <!-- Discord -->
            <a href="#" aria-label="Discord" target="_blank" class="hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M20.317 4.369A19.791 19.791 0 0 0 15.892 3c-.213.374-.455.864-.622 1.26a18.27 18.27 0 0 0-5.54 0 12.31 12.31 0 0 0-.633-1.26 19.736 19.736 0 0 0-4.425 1.37C2.82 9.073 1.976 13.58 2.4 18c1.85 1.37 3.64 2.21 5.39 2.77.455-.623.86-1.285 1.21-1.98-.66-.26-1.29-.58-1.88-.94.16-.12.31-.24.46-.36 3.62 1.67 7.54 1.67 11.12 0 .15.12.3.25.46.36-.6.36-1.23.68-1.88.94.35.7.75 1.36 1.21 1.98 1.75-.56 3.54-1.4 5.39-2.77.44-4.42-.55-8.92-3.66-13.63ZM8.02 15.15c-1.1 0-2-1.02-2-2.27 0-1.25.89-2.27 2-2.27 1.11 0 2.01 1.02 2 2.27 0 1.25-.89 2.27-2 2.27Zm7.95 0c-1.1 0-2-1.02-2-2.27 0-1.25.89-2.27 2-2.27 1.11 0 2.01 1.02 2 2.27 0 1.25-.89 2.27-2 2.27Z" />
                </svg>
            </a>

            <!-- TikTok -->
            <a href="#" aria-label="TikTok" target="_blank" class="hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M12 2h3.5a5.6 5.6 0 0 0 4 4V9a8.5 8.5 0 0 1-5-2v7.5a5.5 5.5 0 1 1-5-5.5V12a2.5 2.5 0 1 0 2.5 2.5V2Z" />
                </svg>
            </a>

            <!-- Instagram -->
            <a href="#" aria-label="Instagram" target="_blank" class="hover:scale-110 transition-transform">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <path
                        d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7Zm10 2c1.7 0 3 1.3 3 3v10c0 1.7-1.3 3-3 3H7c-1.7 0-3-1.3-3-3V7c0-1.7 1.3-3 3-3h10Zm-5 3a5 5 0 1 0 0 10 5 5 0 0 0 0-10Zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm4.5-.5a1 1 0 1 1 0 2 1 1 0 0 1 0-2Z" />
                </svg>
            </a>
        </div>

        <!-- Center: Vote Button -->
        <div class="flex justify-center">
            <ul class="text-center">
                <li>
                    <div class="relative text-blue-500 font-bold text-2xl p-2">
                        <p>mc.holybone.id</p>
                    </div>
                    <a href="#"
                        class="bg-white text-black px-5 py-1 rounded-md font-bold hover:bg-navbar duration:500 transition-colors">
                        Vote Server
                    </a>
                </li>
            </ul>
        </div>

        <!-- Right: Copyright -->
        <div class="flex justify-end text-sm opacity-80">
            <p>&copy; {{ date('Y') }} HolyBone</p>
        </div>
    </div>
</footer>
