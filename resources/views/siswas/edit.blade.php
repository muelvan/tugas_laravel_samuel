<x-app-layout>
<div class="max-w-4xl mx-auto px-4 py-8">
    <div class="bg-white rounded-2xl shadow-xl p-8 transition-all duration-300 hover:shadow-2xl">
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-800">
                {{ isset($siswa) ? 'Edit Profil Siswa' : 'Form Pendaftaran Siswa Baru' }}
            </h1>
            <a href="{{ route('siswas.index') }}" class="text-gray-500 hover:text-gray-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </a>
        </div>

        <form action="{{ isset($siswa) ? route('siswas.update', $siswa->id) : route('siswas.store') }}" method="POST" class="space-y-6">
            @csrf
            @if(isset($siswa))
                @method('PUT')
            @endif

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Kolom Kiri -->
                <div class="space-y-6">
                    <div class="group relative">
                        <label class="block mb-2 text-sm font-medium text-gray-600">Nama Lengkap</label>
                        <div class="relative">
                            <input type="text" name="nama" 
                                   class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                   value="{{ $siswa->nama ?? old('nama') }}"
                                   placeholder="Nama lengkap siswa">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-green-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <label class="block mb-2 text-sm font-medium text-gray-600">NIS</label>
                        <div class="relative">
                            <input type="text" name="nis" 
                                   class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                   value="{{ $siswa->nis ?? old('nis') }}"
                                   placeholder="Nomor Induk Siswa">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-green-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="space-y-6">
                    <div class="group relative">
                        <label class="block mb-2 text-sm font-medium text-gray-600">Jenis Kelamin</label>
                        <div class="relative">
                            <select name="jenis_kelamin" class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent appearance-none transition-all">
                                <option value="L" {{ (isset($siswa) && $siswa->jenis_kelamin == 'L') ? 'selected' : '' }}>Laki-laki</option>
                                <option value="P" {{ (isset($siswa) && $siswa->jenis_kelamin == 'P') ? 'selected' : '' }}>Perempuan</option>
                            </select>
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-green-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <div class="group relative">
                        <label class="block mb-2 text-sm font-medium text-gray-600">Tanggal Lahir</label>
                        <div class="relative">
                            <input type="date" name="tanggal_lahir" 
                                   class="w-full pl-12 pr-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all"
                                   value="{{ $siswa->tanggal_lahir ?? old('tanggal_lahir') }}">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400 group-focus-within:text-green-500">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="group relative">
                <label class="block mb-2 text-sm font-medium text-gray-600">Alamat</label>
                <div class="relative">
                    <textarea name="alamat" 
                              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent transition-all h-32"
                              placeholder="Alamat lengkap siswa">{{ $siswa->alamat ?? old('alamat') }}</textarea>
                </div>
            </div>

            <div class="pt-6">
                <button type="submit" class="w-full bg-gradient-to-r from-green-600 to-green-500 text-white py-3 px-6 rounded-lg hover:from-green-700 hover:to-green-600 transition-all duration-300 font-semibold shadow-md hover:shadow-lg flex items-center justify-center">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"/>
                    </svg>
                    {{ isset($siswa) ? 'Update Data' : 'Simpan Data' }}
                </button>
            </div>
        </form>
    </div>
</div>
</x-app-layout>
