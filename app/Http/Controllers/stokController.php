<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stok;

class stokController extends Controller
{
    public function index()
    {
        $stoks = Stok::all();
        return view('admin.stok', compact('stoks'));
    }
    public function create()
    {
        return view('admin.createstok');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate
        ([
            'nama' => 'string|required',
            'SKU' => 'string|required|min:4|max:5|unique:stoks',
            'Jumlah' => 'string|required',
            'Keterangan' => 'string|required'
        ]);

        $stok = Stok::create($validateData);
        if($stok)
        {
            return to_route('admin.stok')->with('success','Berhasil Menambah Data');
        }
        else
        {
            return to_route('admin.stok')->with('failed','Gagal Menambah Data');
        }
    }

    public function edit(Request $request, $id)
    {
    $data = Stok::find($id);
    return view('admin.editstok', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $stok = Stok::find($id);
        $stok->nama = $request->nama;
        $stok->SKU = $request->SKU;
        $stok->Jumlah = $request->Jumlah;
        $stok->Keterangan = $request->Keterangan;
        $update = $stok->save();

        if($update)
        {
            return to_route('admin.stok')->with('success','Berhasil Mengubah Data');
        }
        else
        {
            return to_route('admin.stok')->with('failed','Gagal Mengubah Data');
        }
    }

    public function destroy(Stok $stok)
    {
        $stok->delete();
        if($stok)
        {
            return to_route('admin.stok')->with('success','Berhasil Hapus Data');
        }
        else
        {
            return to_route('admin.stok')->with('failed','Gagal Hapus Data');
        }
    }
}
