<header class="flex justify-between items-center bg-white p-4 shadow-md">
    <!-- Left Section (Search Bar) -->
    <div class="flex items-center">
        <div class="relative">
            <input
                type="text"
                class="bg-gray-100 rounded-full pl-10 pr-4 py-2 text-sm text-gray-600 focus:outline-none"
                placeholder="Type to search..." />
            <span class="absolute left-3 top-2 text-gray-500">
                <!-- Search Icon (Magnifying Glass) -->
                <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                </svg>
            </span>
        </div>
    </div>

    <!-- Right Section (Icons and User Info) -->
    <div class="flex items-center space-x-6">
        <!-- Icons -->

        <!-- User Info -->
        <div x-data="{ open: false }" class="relative flex items-center space-x-2">
            <!-- User Info Section -->
            <div @click="open = !open" class="cursor-pointer flex items-center space-x-2">
                <div class="text-right">
                    <h2 class="text-sm font-semibold text-gray-700">Thomas Anree</h2>
                    <p class="text-xs text-gray-500">UX Designer</p>
                </div>
                <img
                    src="https://via.placeholder.com/40"
                    alt="User Avatar"
                    class="w-10 h-10 rounded-full object-cover" />
            </div>

            <!-- Dropdown Menu -->
            <ul x-show="open" @click.outside="open = false"
                class="absolute right-0 mt-2 w-48 bg-white border border-gray-200 shadow-lg rounded-lg py-2"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 transform scale-95"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-75"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-95">
                <!-- My Profile Option -->
                <li>
                    <a href="#"
                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                        My Profile
                    </a>
                </li>
                <!-- Logout Option -->
                <li>
                    <a href="{{route('user.logout')}}"
                        class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-gray-900">
                        Log Out
                    </a>
                </li>
            </ul>
        </div>

    </div>
</header>