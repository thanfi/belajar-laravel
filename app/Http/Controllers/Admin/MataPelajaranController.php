<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\MataPelajaran;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    public function index()
    {
        $matapelajaran = MataPelajaran::all();

        $title = "Mata Pelajaran";

        return view('admin.matapelajaran.index', compact('title','matapelajaran'));
    }

    public function simpan(Request $request)
    {
        $request->validate([
            'nama_pelajaran'=>'required'
        ]);

        MataPelajaran::create($request->all());

        return redirect()->route('matapelajaran')
        ->with('success','Data berhasil ditambahkan');
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'nama_pelajaran'=>'required'
        ]);

        $matapelajaran = MataPelajaran::findOrFail($id);

        $matapelajaran->update($request->all());

        return redirect()->route('matapelajaran')
        ->with('success','Data berhasil diupdate');
    }

    public function hapus($id)
    {
        $matapelajaran = MataPelajaran::findOrFail($id);

        $matapelajaran->delete();

        return redirect()->route('matapelajaran')
        ->with('success','Data berhasil dihapus');
    }

}
