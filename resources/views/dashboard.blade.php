<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <a href="{{ route('siswas.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                + Tambah Siswa
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Card Total Siswa -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border-l-4 border-green-500">
                    <div class="flex items-center">
                        <div class="flex-shrink-0 bg-green-100 p-3 rounded-full">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div class="ml-4">
                            <dt class="text-sm font-medium text-gray-500 truncate">
                                Total Siswa
                            </dt>
                            <dd class="mt-1 text-3xl font-semibold text-gray-900">
                                {{ $totalSiswa }}
                            </dd>
                        </div>
                    </div>
                </div>

                <!-- Tambahkan card statistik lain di sini jika diperlukan -->
            </div>

            <!-- Section Recent Activity -->
            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Aktivitas Terbaru</h3>
                    <div class="space-y-4">
                        <!-- Contoh aktivitas -->
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <span class="h-5 w-5 bg-green-100 text-green-800 rounded-full flex items-center justify-center">
                                    ✓
                                </span>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-gray-600">
                                    Sistem siap digunakan! Selamat datang, {{ Auth::user()->name }}
                                </p>
                                <p class="text-xs text-gray-500 mt-1">
                                    {{ now()->format('d M Y H:i') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>