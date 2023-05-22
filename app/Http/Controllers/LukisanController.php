<?php

namespace App\Http\Controllers;

use App\Models\Lukisan;
use Illuminate\Http\Request;

class LukisanController extends Controller
{
    public function index()
    {
        $lukisans = Lukisan::all();

        return view('lukisans.index', compact('lukisans'));
    }

    public function create()
    {
        return view('lukisans.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_lukisan' => 'required|unique:lukisans',
            'judul_lukisan' => 'required',
            'nama_pelukis' => 'required',
            'uk_panjang' => 'required|numeric',
            'uk_lebar' => 'required|numeric',
            'material' => 'required',
            'tahun_dibuat' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048',
            'status_lukisan' => 'required',
            'status_pelelangan' => 'required',
            'keterangan' => 'nullable',
        ]);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['gambar'] = $imageName;
        }

        Lukisan::create($validatedData);

        return redirect()->route('lukisans.index')->with('success', 'Lukisan berhasil ditambahkan.');
    }

    public function show($kode_lukisan)
    {
        $lukisan = Lukisan::findOrFail($kode_lukisan);

        return view('lukisans.show', compact('lukisan'));
    }

    public function edit($kode_lukisan)
    {
        $lukisan = Lukisan::findOrFail($kode_lukisan);

        return view('lukisans.edit', compact('lukisan'));
    }

    public function update(Request $request, $kode_lukisan)
    {
        $validatedData = $request->validate([
            'judul_lukisan' => 'required',
            'nama_pelukis' => 'required',
            'uk_panjang' => 'required|numeric',
            'uk_lebar' => 'required|numeric',
            'material' => 'required',
            'tahun_dibuat' => 'required|numeric',
            'deskripsi' => 'required',
            'gambar' => 'nullable|image|max:2048',
            'status_lukisan' => 'required',
            'status_pelelangan' => 'required',
            'keterangan' => 'nullable',
        ]);

        $lukisan = Lukisan::findOrFail($kode_lukisan);

        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $validatedData['gambar'] = $imageName;
        }

        $lukisan->update($validatedData);

        return redirect()->route('lukisans.index')->with('success', 'Lukisan berhasil diperbarui.');
    }

    public function destroy($kode_lukisan)
    {
        $lukisan = Lukisan::findOrFail($kode_lukisan);
        $lukisan->delete();

        return redirect()->route('lukisans.index')->with('success', 'Lukisan berhasil dihapus.');
    }
}
