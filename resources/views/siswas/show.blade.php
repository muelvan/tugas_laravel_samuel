<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <div class="bg-white rounded-lg shadow-md p-6">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Detail Siswa</h1>
                <a href="{{ route('siswas.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Kembali
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="border-b pb-2">
                    <label class="block text-sm font-medium text-gray-500">Nama Lengkap</label>
                    <p class="mt-1 text-lg text-gray-900">{{ $siswa->nama }}</p>
                </div>

                <div class="border-b pb-2">
                    <label class="block text-sm font-medium text-gray-500">NIS</label>
                    <p class="mt-1 text-lg text-gray-900">{{ $siswa->nis }}</p>
                </div>

                <div class="border-b pb-2">
                    <label class="block text-sm font-medium text-gray-500">Jenis Kelamin</label>
                    <p class="mt-1 text-lg text-gray-900">
                        {{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}
                    </p>
                </div>

                <div class="border-b pb-2">
                    <label class="block text-sm font-medium text-gray-500">Tanggal Lahir</label>
                    <p class="mt-1 text-lg text-gray-900">
                        {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->format('d F Y') }}
                    </p>
                </div>

                <div class="md:col-span-2 border-b pb-2">
                    <label class="block text-sm font-medium text-gray-500">Alamat</label>
                    <p class="mt-1 text-lg text-gray-900 whitespace-pre-line">{{ $siswa->alamat }}</p>
                </div>

                <!-- Bonus: Menampilkan umur -->
                <div class="md:col-span-2">
                    <label class="block text-sm font-medium text-gray-500">Umur</label>
                    <p class="mt-1 text-lg text-gray-900">
                        {{ \Carbon\Carbon::parse($siswa->tanggal_lahir)->age }} tahun
                    </p>
                </div>
            </div>  

            <div class="mt-6 flex justify-end space-x-3">
                <a href="{{ route('siswas.edit', $siswa->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Edit Data
                </a>
            </div>
        </div>
    </div>
</x-app-layout>