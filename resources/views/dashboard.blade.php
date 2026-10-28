<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 text-gray-900">
                <h3 class="text-lg font-bold mb-4">Statistik Pengguna Sistem</h3>
                <ul class="list-disc pl-5 space-y-2">
                    <li>Total Seluruh Pengguna: <span class="font-semibold">{{ $totalUsers ?? 0 }}</span></li>
                    <li>Total Admin: <span class="font-semibold text-blue-600">{{ $totalAdmins ?? 0 }}</span></li>
                    <li>Total User Biasa: <span class="font-semibold text-green-600">{{ $totalRegularUsers ?? 0 }}</span></li>
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>