    <!-- Top Navigation -->
    <header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200">
        <div class="flex items-center">
            <button class="md:hidden text-gray-500 focus:outline-none">
                <i class="fas fa-bars"></i>
            </button>
            <h1 class="text-xl font-semibold text-gray-800 ml-4">
                {{ request()->routeIs('dashboard') ? 'Dashboard' : '' }}
                {{ request()->routeIs('inventory') ? 'Inventory' : '' }}
                {{ request()->routeIs('sales') ? 'Sales' : '' }}
                {{ request()->routeIs('user') ? 'User' : '' }}
                {{ request()->routeIs('order') ? 'Order' : '' }}
                {{ request()->routeIs('supplier') ? 'Supplier' : '' }}


            </h1>
        </div>
        <div class="flex items-center space-x-4">
            <button class="text-gray-500 focus:outline-none">
                <i class="fas fa-bell"></i>
            </button>
            <button class="text-gray-500 focus:outline-none">
                <i class="fas fa-envelope"></i>
            </button>
            <div class="relative">
                <button class="flex items-center focus:outline-none">
                    <img class="w-8 h-8 rounded-full" src="https://randomuser.me/api/portraits/women/11.jpg" alt="User">
                </button>
            </div>
        </div>
    </header>