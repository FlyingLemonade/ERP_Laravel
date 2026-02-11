@extends('layouts.mainbase')

@section('title', 'Create Inventory')

@section('content')

<div class="grid grid-cols-1 gap-6 mb-6">
    <div class="bg-white border-1 border-gray-100 rounded-lg shadow relative">

        <!-- Header -->
        <div class="flex items-start justify-between p-5 border-b border-gray-200 rounded-t">
            <h3 class="text-xl font-semibold">
                Create new item
            </h3>
        </div>

        <!-- Form Body -->
        <div class="p-6 space-y-6">
            <form id="create-form"
                action="{{ route('inventory.store') }}"
                method="POST">

                @csrf
                @method('POST')

                <div class="grid grid-cols-6 gap-6">

                    <!-- Name -->
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="text-sm font-medium text-gray-900 block mb-2">
                            Product Name
                        </label>
                        <input type="text"
                            name="name"
                            id="name"

                            required
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                    </div>

                    <!-- Quantity -->
                    <div class="col-span-6 sm:col-span-3">
                        <label for="quantity" class="text-sm font-medium text-gray-900 block mb-2">
                            Quantity
                        </label>
                        <input type="number"
                            name="quantity"
                            id="quantity"

                            min="0"
                            required
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                    </div>

                    <!-- Price Average -->
                    <div class="col-span-6 sm:col-span-3">
                        <label for="price_average" class="text-sm font-medium text-gray-900 block mb-2">
                            Price Average
                        </label>
                        <input type="number"
                            name="price_average"
                            id="price_average"

                            min="0"
                            required
                            class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-2.5">
                    </div>

                    <!-- Description -->
                    <div class="col-span-full">
                        <label for="description" class="text-sm font-medium text-gray-900 block mb-2">
                            Product Details
                        </label>
                        <textarea name="description"
                            id="description"
                            rows="6"
                            required
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-cyan-600 focus:border-cyan-600 block w-full p-4"></textarea>
                    </div>

                </div>
            </form>
        </div>

        <!-- Footer Buttons (Outside Form) -->
        <div class="p-6 border-t border-gray-200 rounded-b flex justify-end gap-3">

            <a href="{{ route('inventory.index') }}"
                class="text-gray-700 bg-gray-200 hover:bg-gray-300 font-medium rounded-lg text-sm px-5 py-2.5">
                Cancel
            </a>

            <!-- This submits the form without JavaScript -->
            <button type="submit"
                form="create-form"
                class="text-white bg-blue-500 hover:bg-blue-400 active:bg-blue-600 focus:ring-4 focus:ring-blue-200 font-medium rounded-lg text-sm px-5 py-2.5">
                Create
            </button>

        </div>

    </div>
</div>

@endsection