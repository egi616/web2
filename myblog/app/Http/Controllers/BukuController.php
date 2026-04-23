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

        $dataBuku = Buku::orderBy('id', 'desc')->get();

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

        $validate = $request->validate([
            'judul'=>'required|min:5',
            'penulis'=>'required|min:5',
            'harga'=>'required|numeric',
            'tahun_terbit'=>'required|numeric',
        ]);

        $validate['kategori_id'] =1;

        Buku::create($validate);
        return redirect()->route('buku');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
