<nav class="bg-navbar w-full z-50">
    <div class="mx-auto max-w-7xl px-2 sm:px-30 md:px-35 lg:px-20">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button id="menu-button" type="button"
                    class="relative inline-flex items-center justify-center rounded-md p-2 text-black hover:bg-gray-700 hover:text-white focus:ring-2 focus:ring-white focus:outline-hidden focus:ring-inset"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg id="icon-open" class="block size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>

                    <svg id="icon-close" class="hidden size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" aria-hidden="true" data-slot="icon">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <a href="#"><img class="h-8 w-auto" src="/images/logo.png" alt="Your Company"></a>
                    <a href="#">
                        <h1 class="h-8 w-auto font-medium text-xl ml-4 text-white font-bold">HolyBone</h1>
                    </a>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <div class="hidden sm:flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="{{ route('donation') }}"
                        class="rounded-md px-3 py-2 text-sm font-medium text-white duration-500 hover:bg-blue-700 hover:text-white">Donation</a>
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-white duration-500 hover:bg-blue-700 hover:text-white">Information</a>
                    <a href="#"
                        class="rounded-md px-3 py-2 text-sm font-medium text-white duration-500 hover:bg-blue-700 hover:text-white">Rules</a>
                </div>
            </div>
        </div>
    </div>

    <div class="sm:hidden hidden transform transition-all duration-300 ease-in-out" id="mobile-menu">
        <div class="space-y-1 px-2 pt-2 pb-3 text-center">
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-white duration-300 hover:bg-blue-700 hover:text-white">Donation</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-white duration-300 hover:bg-blue-700 hover:text-white">Information</a>
            <a href="#"
                class="block rounded-md px-3 py-2 text-base font-medium text-white duration-300 hover:bg-blue-700 hover:text-white">Rules</a>
        </div>
    </div>
</nav>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuButton = document.getElementById("menu-button");
        const mobileMenu = document.getElementById("mobile-menu");
        const iconOpen = document.getElementById("icon-open");
        const iconClose = document.getElementById("icon-close");

        mobileMenu.classList.add("hidden");
        iconOpen.classList.remove("hidden");
        iconClose.classList.add("hidden");

        menuButton.addEventListener("click", function() {
            const isMenuVisible = !mobileMenu.classList.contains(
                "hidden");

            mobileMenu.classList.toggle("hidden");

            if (isMenuVisible) {
                iconOpen.classList.remove("hidden");
                iconClose.classList.add("hidden");
            } else {
                iconOpen.classList.add("hidden");
                iconClose.classList.remove("hidden");
            }

            menuButton.setAttribute("aria-expanded", !isMenuVisible);
        });
    });
</script>
