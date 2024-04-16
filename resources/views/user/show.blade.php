<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Leverancier Details') }}
        </h2>
    </x-slot>

    <div class="max-w-2xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg">
            <div class="p-6">
                <div class="mt-4">
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">Name:</span> {{ $user->name }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">Contact Person:</span> {{ $user->contact_person }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">Number:</span> {{ $user->number }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">Mobile:</span> {{ $user->mobile }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">Street:</span> {{ $user->street_name }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">House Number:</span> {{ $user->house_number }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">Zip Code:</span> {{ $user->zip_code }}
                    </p>
                    <p class="text-sm text-gray-600">
                        <span class="font-bold">City:</span> {{ $user->city }}
                    </p>
                </div>
            </div>
            <div class="flex justify-center space-x-4 py-4 bg-gray-100">
                <a href="{{ route('user.edit', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Edit
                </a>
                <a href="{{ route('user.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Back
                </a>
                <a href="{{ route('dashboard') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Home
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
