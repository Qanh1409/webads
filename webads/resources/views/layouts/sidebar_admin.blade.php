<div class="h-screen bg-gray-800 text-white flex flex-col w-64">
    <!-- Logo Section -->
    <div class="p-4 flex items-center space-x-2">
        <img src="https://via.placeholder.com/40" alt="Logo" class="w-8 h-8">
        <span class="text-xl font-bold">TailAdmin</span>
    </div>

    <!-- Menu Header -->
    <div class="p-4 uppercase text-sm font-semibold text-gray-400">
        Menu
    </div>

    <!-- Menu Items -->
    <nav class="flex-grow px-4 space-y-2">
        <!-- Dashboard -->
        <div x-data="{ open: false }">
            <a @click="open = !open" href="#" class="flex items-center justify-between px-2 py-2 rounded hover:bg-gray-700 focus:bg-gray-700">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18v18H3V3z"></path>
                    </svg>
                    <span>Dashboard</span>
                </div>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"></path>
                </svg>
            </a>
            <!-- Dropdown (if necessary) -->
            <div x-show="open" class="ml-6 space-y-2">
                <a href="#" class="block px-2 py-2 text-sm hover:bg-gray-700">Overview</a>
                <a href="#" class="block px-2 py-2 text-sm hover:bg-gray-700">Stats</a>
            </div>
        </div>

        <!-- Calendar -->
      

        <!-- Profile -->
        <a href="#" class="flex items-center px-2 py-2 rounded hover:bg-gray-700 focus:bg-gray-700">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12c2.21 0 4-1.79 4-4S14.21 4 12 4 8 5.79 8 8s1.79 4 4 4zM4 20v-1a4 4 0 014-4h8a4 4 0 014 4v1H4z"></path>
            </svg>
            <span class="ml-2">Profile</span>
        </a>

        <!-- Task Dropdown -->
        <div x-data="{ open: false }">
            <a @click="open = !open" href="#" class="flex items-center justify-between px-2 py-2 rounded hover:bg-gray-700 focus:bg-gray-700">
                <div class="flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6M9 16h6"></path>
                    </svg>
                    <span>Task</span>
                </div>
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 9l6 6 6-6"></path>
                </svg>
            </a>
            <div x-show="open" class="ml-6 space-y-2">
                <a href="#" class="block px-2 py-2 text-sm hover:bg-gray-700">Current Tasks</a>
                <a href="#" class="block px-2 py-2 text-sm hover:bg-gray-700">Completed</a>
            </div>
        </div>
 

     
      
    </nav>
</div>
