<x-app-layout>
<div class="max-w-3xl mx-auto p-6 bg-white rounded-2xl shadow-md mt-8">
    <h1 class="text-2xl font-bold mb-6 text-gray-800">{{ isset($siswa) ? 'Edit' : 'Tambah' }} Siswa</h1>

    <form action="{{ isset($siswa) ? route('siswas.update', $siswa->id) : route('siswas.store') }}" method="POST" class="space-y-5">
        @csrf
        @if(isset($siswa))
            @method('PUT')
        @endif

        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">Nama</label>
            <input type="text" name="nama" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->nama ?? old('nama') }}" required>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">NIS</label>
            <input type="text" name="nis" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->nis ?? old('nis') }}" required>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">Alamat</label>
            <textarea name="alamat" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>{{ $siswa->alamat ?? old('alamat') }}</textarea>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                <option value="L" {{ (isset($siswa) && $siswa->jenis_kelamin == 'L') ? 'selected' : '' }}>Laki-laki</option>
                <option value="P" {{ (isset($siswa) && $siswa->jenis_kelamin == 'P') ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div>
            <label class="block mb-1 text-sm font-medium text-gray-700">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" value="{{ $siswa->tanggal_lahir ?? old('tanggal_lahir') }}" required>
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition duration-300">
                Submit
            </button>
        </div>
    </form>
</div>
</x-app-layout>