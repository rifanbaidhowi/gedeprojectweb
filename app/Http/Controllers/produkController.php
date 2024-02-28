<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\Produk;

class produkController extends Controller
{
    public function index()
    {
        $produks = Produk::all();
        return view('admin.produk', compact('produks'));
    }
    public function create()
    {
        return view('admin.createproduk');
    }
    public function store(Request $request)
    {
        $validateData = $request->validate
        ([
            'Kode' => 'string|required|min:4|max:5|unique:produks',
            'Nama' => 'string|required',
            'Harga' => 'integer|required',
            'Gambar' => 'required|mimes:jpg,png,jpeg',
            'Stok' => 'integer|required|'
        ]);

        if ($request->hasFile('Gambar'))
        {
            $Gambar_file = $request->file('Gambar');
            $Gambar_nama = $Gambar_file->getClientOriginalName();
            $Gambar_file->move(public_path('Gambar'), $Gambar_nama);

            $produks['Gambar'] = $Gambar_nama;
        }
        $produk = Produk::create($validateData);
        if($produk)
        {
            return redirect()->route('admin.produk')->with('success','Berhasil Menambah Data');
        }
        else
        {
            return redirect()->route('admin.produk')->with('failed','Gagal Menambah Data');
        }
    }

    public function editproduk(Request $request, $id)
    {
        $data = Produk::find($id);
        return view('admin.editproduk', compact('data'));
    }



    public function updateproduk(Request $request, $id)
    {
    $produk = Produk::find($id);
    $produk->Kode = $request->Kode;
    $produk->Nama = $request->Nama;
    $produk->Harga = $request->Harga;
    $produk->Gambar = $request->Gambar;
    $produk->Stok = $request->Stok;
    $update = $produk->save();

    if ($request->hasFile('Gambar'))
        {


            $Gambar_file = $request->file('Gambar');
            $Gambar_nama = $Gambar_file->getClientOriginalName();
            $Gambar_file->move(public_path('Gambar'), $Gambar_nama);
            $produks = Produk::where('id',$id )->first();

            File::delete(public_path('Gambar').'/'.$produks->Gambar);

            $produks['Gambar'] = $Gambar_nama;
        }
    if($update)
    {
        return redirect()->route('admin.produk')->with('success','Berhasil Mengubah Data');
    }
    else
    {
        return redirect()->route('admin.produk')->with('failed','Gagal Mengubah Data');
    }
}

public function destroy(Produk $produk)
{
   $produk = Produk :: where ('id', $produk->id)->first();
   File::delete(public_path('Gambar').'/'. $produk->Gambar);
   $produk->delete();
   if($produk)
   {
       return redirect()->route('admin.produk')->with('success','Berhasil Hapus Data');
   }
   else
   {
       return redirect()->route('admin.produk')->with('failed','Gagal Hapus Data');
   }
}
}
