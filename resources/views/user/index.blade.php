<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Overview Leveranciers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                        <tr class="bg-gray-100">
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Name') }}</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Contact Person') }}</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Number') }}</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Mobile') }}</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-semibold text-gray-600 uppercase border-b border-gray-300">{{ __('Leverancier Details') }}</th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                        @foreach ($users as $user)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->contact_person }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $user->mobile }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex justify-center">
                                        <a href="{{ route('user.show', $user->id) }}" class="text-blue-500 hover:text-blue-700">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="p-6 sm:px-20 bg-white border-t border-gray-200">
                    <div class="flex justify-center">
                        <a href="{{ route('dashboard') }}" class="text-blue-500 hover:text-blue-700 px-4 py-2 border border-blue-500 rounded-md transition duration-300 ease-in-out">
                            {{ __('Home') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
