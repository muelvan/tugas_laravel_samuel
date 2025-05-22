<?php
namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::latest()->paginate(10);
        return view('siswas.index', compact('siswas'));
    }

    public function create()
    {
        return view('siswas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date'
        ]);

        Siswa::create($request->all());

        return redirect()->route('siswas.index')
            ->with('success', 'Siswa created successfully.');
    }

    public function show(Siswa $siswa)
    {
        return view('siswas.show', compact('siswa'));
    }

    public function edit(Siswa $siswa)
    {   
        return view('siswas.edit', compact('siswa'));
    }

    public function update(Request $request, Siswa $siswa)
    {
        $request->validate([
            'nama' => 'required',
            'nis' => 'required|unique:siswas,nis,'.$siswa->id,
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required|date'
        ]);

        $siswa->update($request->all());

        return redirect()->route('siswas.index')
            ->with('success', 'Siswa updated successfully');
    }

    public function destroy(Siswa $siswa)
    {
        $siswa->delete();

        return redirect()->route('siswas.index')
            ->with('success', 'Siswa deleted successfully');
    }
}