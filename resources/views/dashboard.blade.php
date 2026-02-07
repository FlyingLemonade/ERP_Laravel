@extends('layouts.base')

@section('title', 'Dashboard')
@section('content')

<div class="flex h-screen overflow-hidden">
    <!-- Sidebar -->
    <div class="hidden md:flex md:flex-shrink-0">
        <div class="flex flex-col w-64 bg-blue-800 text-white">
            <div class="flex items-center justify-center h-16 px-4 bg-blue-900">
                <span class="text-xl font-semibold">Hotel Vista</span>
            </div>
            <div class="flex flex-col flex-grow px-4 py-4 overflow-y-auto">
                <nav class="flex-1 space-y-2">
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-md bg-blue-700 text-white">
                        <i class="fas fa-tachometer-alt mr-3"></i>
                        Dashboard
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-md hover:bg-blue-700 text-white">
                        <i class="fas fa-calendar-check mr-3"></i>
                        Bookings
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-md hover:bg-blue-700 text-white">
                        <i class="fas fa-bed mr-3"></i>
                        Rooms
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-md hover:bg-blue-700 text-white">
                        <i class="fas fa-users mr-3"></i>
                        Guests
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-md hover:bg-blue-700 text-white">
                        <i class="fas fa-concierge-bell mr-3"></i>
                        Services
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-md hover:bg-blue-700 text-white">
                        <i class="fas fa-chart-bar mr-3"></i>
                        Reports
                    </a>
                    <a href="#" class="flex items-center px-4 py-2 text-sm font-medium rounded-md hover:bg-blue-700 text-white">
                        <i class="fas fa-cog mr-3"></i>
                        Settings
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

    <!-- Main Content -->
    <div class="flex flex-col flex-1 overflow-hidden">
        <!-- Top Navigation -->
        <header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200">
            <div class="flex items-center">
                <button class="md:hidden text-gray-500 focus:outline-none">
                    <i class="fas fa-bars"></i>
                </button>
                <h1 class="text-xl font-semibold text-gray-800 ml-4">Dashboard</h1>
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

        <!-- Main Content Area -->
        <main class="flex-1 overflow-y-auto p-6 bg-gray-100">
            <!-- Stats Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                            <i class="fas fa-bed text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Total Rooms</p>
                            <p class="text-2xl font-semibold text-gray-800">120</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-green-100 text-green-600">
                            <i class="fas fa-calendar-check text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Occupied</p>
                            <p class="text-2xl font-semibold text-gray-800">84</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                            <i class="fas fa-calendar-day text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Check-ins Today</p>
                            <p class="text-2xl font-semibold text-gray-800">12</p>
                        </div>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <div class="flex items-center">
                        <div class="p-3 rounded-full bg-red-100 text-red-600">
                            <i class="fas fa-calendar-times text-xl"></i>
                        </div>
                        <div class="ml-4">
                            <p class="text-sm font-medium text-gray-500">Check-outs Today</p>
                            <p class="text-2xl font-semibold text-gray-800">8</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recent Bookings and Room Status -->
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-6">
                <!-- Recent Bookings -->
                <div class="lg:col-span-2 bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-800">Recent Bookings</h2>
                    </div>
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Guest</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Room</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-in</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Check-out</th>
                                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/32.jpg" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">John Smith</div>
                                                <div class="text-sm text-gray-500">john@example.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Deluxe Suite</div>
                                        <div class="text-sm text-gray-500">#205</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        15 May 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        20 May 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Checked In
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/women/44.jpg" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Emily Johnson</div>
                                                <div class="text-sm text-gray-500">emily@example.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Executive Room</div>
                                        <div class="text-sm text-gray-500">#312</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        18 May 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        22 May 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                            Confirmed
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://randomuser.me/api/portraits/men/75.jpg" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">Michael Brown</div>
                                                <div class="text-sm text-gray-500">michael@example.com</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">Standard Room</div>
                                        <div class="text-sm text-gray-500">#108</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        20 May 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        25 May 2023
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                            Pending
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Room Status -->
                <div class="bg-white rounded-lg shadow overflow-hidden">
                    <div class="px-6 py-4 border-b border-gray-200">
                        <h2 class="text-lg font-semibold text-gray-800">Room Status</h2>
                    </div>
                    <div class="p-6">
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">Occupied</span>
                                <span class="text-sm font-medium text-gray-700">70%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-green-600 h-2.5 rounded-full" style="width: 70%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">Available</span>
                                <span class="text-sm font-medium text-gray-700">30%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 30%"></div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <div class="flex justify-between mb-1">
                                <span class="text-sm font-medium text-gray-700">Maintenance</span>
                                <span class="text-sm font-medium text-gray-700">5%</span>
                            </div>
                            <div class="w-full bg-gray-200 rounded-full h-2.5">
                                <div class="bg-red-600 h-2.5 rounded-full" style="width: 5%"></div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <h3 class="text-md font-medium text-gray-800 mb-3">Room Types</h3>
                            <div class="space-y-3">
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Standard</span>
                                    <span class="text-sm font-medium">40 rooms</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Deluxe</span>
                                    <span class="text-sm font-medium">35 rooms</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Executive</span>
                                    <span class="text-sm font-medium">25 rooms</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-sm text-gray-600">Suite</span>
                                    <span class="text-sm font-medium">20 rooms</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="bg-white rounded-lg shadow p-6 mb-6">
                <h2 class="text-lg font-semibold text-gray-800 mb-4">Quick Actions</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition">
                        <div class="p-3 rounded-full bg-blue-100 text-blue-600 mb-2">
                            <i class="fas fa-plus text-lg"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">New Booking</span>
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-green-50 hover:border-green-200 transition">
                        <div class="p-3 rounded-full bg-green-100 text-green-600 mb-2">
                            <i class="fas fa-user-check text-lg"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Check In</span>
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-yellow-50 hover:border-yellow-200 transition">
                        <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mb-2">
                            <i class="fas fa-user-times text-lg"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Check Out</span>
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-purple-50 hover:border-purple-200 transition">
                        <div class="p-3 rounded-full bg-purple-100 text-purple-600 mb-2">
                            <i class="fas fa-bell text-lg"></i>
                        </div>
                        <span class="text-sm font-medium text-gray-700">Requests</span>
                    </button>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection