<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Vehicles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('search.query') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="make" class="text-gray-600">Make:</label>
                            <input type="text" id="make" name="make" class="border border-gray-300 px-3 py-2 rounded-md w-full">
                        </div>

                        <div class="mb-4">
                            <label for="model" class="text-gray-600">Model:</label>
                            <input type="text" id="model" name="model" class="border border-gray-300 px-3 py-2 rounded-md w-full">
                        </div>

                        <div class="mb-4">
                            <label for="registration" class="text-gray-600">Registration:</label>
                            <input type="text" id="registration" name="registration" class="border border-gray-300 px-3 py-2 rounded-md w-full">
                        </div>

                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white py-2 px-4 rounded-md">Search</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
