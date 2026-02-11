@extends('layouts.mainbase')

@section('title', 'Dashboard')
@section('content')
<!-- Stats Cards -->


<!-- Recent Bookings and Room Status -->
<div class="grid grid-cols-1 gap-6 mb-6">

    <div class="bg-white rounded-lg shadow p-6 mb-6">
        <h2 class="text-lg font-semibold text-gray-800 mb-4">Actions</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 mb-2">
                    <i class="fas fa-plus text-lg"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">New Supplier</span>
            </button>
            <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-green-50 hover:border-green-200 transition">
                <div class="p-3 rounded-full bg-green-100 text-green-600 mb-2">
                    <i class="fas fa-user-check text-lg"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Print Data</span>
            </button>
            <!-- <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-yellow-50 hover:border-yellow-200 transition">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 mb-2">
                    <i class="fas fa-user-times text-lg"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Check Out</span>
            </button>
            <button class="flex flex-col items-center justify-center p-4 border border-gray-200 rounded-lg hover:bg-purple-50 hover:border-purple-200 transition">
                <div class="p-3 rounded-full bg-purple-100 text-purple-600 mb-2">
                    <i class="fas fa-bell text-lg"></i>
                </div>
                <span class="text-sm font-medium text-gray-700">Print Data</span>
            </button> -->
        </div>
    </div>
    <div class="border p-2 border-solid rounded-lg bg-white border-gray-200 shadow">

        <table id="example" class="display ">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price Average</th>
                    <th>Last Update</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($inventoryList as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price_average }}</td>
                    <td>{{ $item->last_update }}</td>
                </tr>
                @endforeach
            </tbody>

        </table>

    </div>
</div>



<script>
    new DataTable('#example', {
        searching: true,
        paging: true,
        info: true
    });
</script>
@endsection