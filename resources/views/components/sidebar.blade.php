    <!-- Sidebar -->
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64 bg-blue-800 text-white">
            <div class="flex items-center justify-center h-16 px-4 bg-blue-900">
                <span class="text-xl font-semibold">Simple ERP</span>
            </div>
            <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
                <nav class="flex-1 space-y-2">
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') ? 'bg-blue-700' : 'hover:bg-blue-700' }} flex items-center px-4 py-2 text-sm font-medium rounded-md  text-white">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>
                    <a href="{{ route('inventory.index') }}" class="{{ request()->routeIs('inventory.*') ? 'bg-blue-700' : 'hover:bg-blue-700' }} flex items-center px-4 py-2 text-sm font-medium rounded-md text-white">
                        <i class="fas fa-calendar-check mr-3"></i>
                        Inventory Management
                    </a>
                    <a href="{{ route('sales') }}" class="{{ request()->routeIs('sales') ? 'bg-blue-700' : 'hover:bg-blue-700' }} flex items-center px-4 py-2 text-sm font-medium rounded-md text-white">
                        <i class="fas fa-bed mr-3"></i>
                        Sales Management
                    </a>
                    <a href="{{ route('user') }}" class="{{ request()->routeIs('user') ? 'bg-blue-700' : 'hover:bg-blue-700' }} flex items-center px-4 py-2 text-sm font-medium rounded-md text-white">
                        <i class="fas fa-users mr-3"></i>
                        User Management
                    </a>
                    <a href="{{ route('order') }}" class="{{ request()->routeIs('order') ? 'bg-blue-700' : 'hover:bg-blue-700' }} flex items-center px-4 py-2 text-sm font-medium rounded-md text-white">
                        <i class="fas fa-concierge-bell mr-3"></i>
                        Order Management
                    </a>
                    <a href="{{ route('supplier') }}" class="{{ request()->routeIs('supplier') ? 'bg-blue-700' : 'hover:bg-blue-700' }} flex items-center px-4 py-2 text-sm font-medium rounded-md text-white">
                        <i class="fas fa-chart-bar mr-3"></i>
                        Supplier Management
                    </a>
                </nav>
            </div>
            <div class="p-4 border-t border-blue-700">
                <div class="flex items-center">
                    <img class="w-10 h-10 rounded-full" src="https://randomuser.me/api/portraits/women/11.jpg" alt="User">
                    <div class="ml-3">
                        <p class="text-sm font-medium">Sarah Johnson</p>
                        <p class="text-xs text-blue-200">Admin</p>
                    </div>
                </div>
            </div>
        </div>
    </div>