<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produks = DB::table('produk')
        ->join('kategori', 'produk.id_kategori', '=', 'kategori.id_kategori')
        ->orderBy('nama_kategori', 'ASC')
        ->paginate(10);

        return view('bor.data_produk.produk', [
            'produk'=>$produks,
        ]);
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;

            // mengambil data dari table pegawai sesuai pencarian data
        $produks = DB::table('produk')
        ->where('nama_produk','like',"%".$cari."%")
        ->join('kategori', 'produk.id_kategori', '=', 'kategori.id_kategori')
        ->orderBy('nama_kategori', 'ASC')
        ->paginate();

            // mengirim data pegawai ke view index
        return view('bor.data_produk.produk',['produk' => $produks]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bor.data_produk.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('gambar');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'img/produk';
        $file->move($tujuan_upload,$nama_file);

        Product::create([
            'nama_produk'=>$request->nama_produk,
            'gambar'=>$nama_file,
            'id_kategori'=>$request->kategori,
            'harga'=>$request->harga,
            'create_at'=> null,
            'updated_at'=> null,
        ]);

        return redirect('produk')->with('success', 'Produk Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $produk = DB::table('produk')->where('id', $id)->first();

        // return response()->json([
        //     'data' => $produk,
        // ]);
        $produk = product::find($id);
        return view('bor.data_produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $produk = product::find($id);
        $produk->nama_produk = $request->input('nama');

        if($request->hasfile('gambar'))

        {   
            $file = $request->file('gambar');

            $extension = $request->gambar->getClientOriginalExtension(); 
            $fileName =  uniqid().'.'.$extension;
            $file->move(public_path().'/img/produk', $fileName);  
            $data = $fileName; 
            $produk->gambar = $data;
        }


        $produk->id_kategori = $request->input('kategori');
        $produk->harga = $request->input('harga');
        $produk->update();
        // return redirect()->back()->with('status','Student Updated Successfully');
        return redirect('produk')->with('success', 'Produk Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("DELETE FROM produk WHERE id='".$id."'"); 
    }
}
