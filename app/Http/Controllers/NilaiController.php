<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class NilaiController extends Controller
{
    public function index()
    {
        //get nilais
        $nilais = Nilai::with('Siswa')->paginate();

        //render view with posts
        return view('nilai.index', compact('nilais'));
    }

    public function create()
    {
        $nama = Siswa::all();
        return view('nilai.create',compact('nama'));
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'nis'     => 'required',
            'nama'     => 'required',
            'ipa'   => 'required',
            'ips'   => 'required',
            'mtk'   => 'required',
        ]);


        //create post
        Nilai::create($request->all());

        //redirect to index
        return redirect()->route('nilai.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(nilai $nilai)
    {
        return view('nilai.edit', compact('nilai'));
    }

    public function update(Request $request, nilai $nilai)
    {
        //validate form
        $this->validate($request, [
            'ipa'   => 'required',
            'ips'   => 'required',
            'mtk'   => 'required'
        ]);
        
        $nilai->update($request->all());
        
        //redirect to index
        return redirect()->route('nilai.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Nilai $nilai)
    {
        //delete post
        $nilai->delete();

        //redirect to index
        return redirect()->route('nilai.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
