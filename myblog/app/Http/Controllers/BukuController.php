<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;

class BukuController extends Controller
{
    //bisa diubah nama function nya bisa di sesuaikan 
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //cara 1 query bulder
        // $dataBuku = DB::table('buku')->get();
        //pardam
        // dd($dataBuku);

        //cara dua orm yang bagus suapaya tidak pakai query manual
        // $dataBuku = Buku::all();

        $dataBuku = Buku::orderBy('id', 'asc')->get();

        return view('pages.buku.daftar-buku', compact('dataBuku'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pages.buku.form-buku');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //ngambil data dari form
        // dd($request->judul);

        $validate = $request->validate(
            [
                'judul'=>'required|min:5',
                'penulis'=>'required|min:5',
                'harga'=>'required|numeric',
                'tahun_terbit'=>'required|numeric',
            ],

            //custom validasi
            [
                'judul.required' => 'judul buku tidak boleh di kosongkan',
                'judul.min' => 'judul buku terlalu pendek, minimal 5 karakter',
                'penulis.required' => 'nama penulis tidak boleh di kosongkan',
                'penulis.min' => 'isi nama lengkap',
                'harga.required' => 'harga harus numeric',
                'tahun_terbit.required' => 'tahun terbit harus numeric',
            ]
        );

        $validate['kategori_id'] =1;

        Buku::create($validate);
        return redirect()->route('buku')->with('success','buku baru berhasil di tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //detail buku dengan query builder
        // $detailBuku = DB::table('buku')->where('id',$id)->firstOrFail();

        //orm
        $detailBuku = Buku :: findOrFail($id);
        // dd($detailBuku);

        return view('pages.buku.detail-buku', compact('detailBuku'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $detailBuku = Buku::findOrFail($id);
        return view('pages.buku.form-buku', compact('detailBuku'));   
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validate = $request->validate(
            [
                'judul'=>'required|min:5',
                'penulis'=>'required|min:5',
                'harga'=>'required|numeric',
                'tahun_terbit'=>'required|numeric',
            ],

            //custom validasi
            [
                'judul.required' => 'judul buku tidak boleh di kosongkan',
                'judul.min' => 'judul buku terlalu pendek, minimal 5 karakter',
                'penulis.required' => 'nama penulis tidak boleh di kosongkan',
                'penulis.min' => 'isi nama lengkap',
                'harga.required' => 'harga harus numeric',
                'tahun_terbit.required' => 'tahun terbit harus numeric',
            ]
        );

        $validate['kategori_id'] =1;

        Buku::where('id', $id)->update($validate);
        return redirect()->route('buku')->with('success','buku baru berhasil di rubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
