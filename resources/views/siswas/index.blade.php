<x-app-layout>
    <div class="container mx-auto px-4 py-6">
        <h1 class="text-2xl font-bold mb-4">Daftar Siswa</h1>
        <a href="{{ route('siswas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4">
            Tambah Siswa
        </a>
        
        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ $message }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border">
                <thead>
                    <tr>
                        <th class="py-2 px-4 border-b">No</th>
                        <th class="py-2 px-4 border-b">Nama</th>
                        <th class="py-2 px-4 border-b">NIS</th>
                        <th class="py-2 px-4 border-b">Jenis Kelamin</th>
                        <th class="py-2 px-4 border-b">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 0 @endphp
                    @foreach ($siswas as $siswa)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ ++$i }}</td>
                        <td class="py-2 px-4 border-b">{{ $siswa->nama }}</td>
                        <td class="py-2 px-4 border-b">{{ $siswa->nis }}</td>
                        <td class="py-2 px-4 border-b">{{ $siswa->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan' }}</td>
                        <td class="py-2 px-4 border-b">
                            <div class="flex space-x-2">
                                <a href="{{ route('siswas.show',$siswa->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 rounded text-sm">
                                    Show
                                </a>
                                <a href="{{ route('siswas.edit',$siswa->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 rounded text-sm">
                                    Edit
                                </a>
                                <form action="{{ route('siswas.destroy',$siswa->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 rounded text-sm">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        <div class="mt-4">
            {{ $siswas->links() }}
        </div>
    </div>
</x-app-layout>