<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Http\Requests\StoreBukuRequest;
use App\Http\Requests\UpdateBukuRequest;
use Illuminate\Http\Request;
use App\Models\Kategori;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Kategori::all();
        return view('form', ['categories' => $categories, 'buku' => null]);
    }
    
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'tahun_terbit' => 'required',
            'foto' => 'required'
        ]);

        // Create a new Buku instance and save it to the database
        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'id_kategori' => $request->id_kategori,
            'sinopsis' => $request->sinopsis,
            'tahun_terbit' => $request->tahun_terbit,
            'foto' => $request->foto
        ]);

        // Redirect to a success page or any other page you want
        return redirect()->intended('table');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        $bukus = Buku::all();
        return view('table', ['bukus' => $bukus]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        $categories = Kategori::all();
        return view('form', ['categories' => $categories, 'buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        // Validate the form data
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'id_kategori' => 'required',
            'sinopsis' => 'required',
            'tahun_terbit' => 'required',
            'foto' => 'required'
        ]);
    
        // Update the Buku instance in the database
        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'id_kategori' => $request->id_kategori,
            'sinopsis' => $request->sinopsis,
            'tahun_terbit' => $request->tahun_terbit,
            'foto' => $request->foto
        ]);
    
        // Redirect to a success page or any other page you want
        return redirect()->route('table')->with('success', 'Buku berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

    return redirect()->route('table')->with('success', 'Buku berhasil dihapus');
    }

    public function kategory()
    {
        $categories = Kategori::with('bukus')->get();

        return view('kategori', compact('categories'));
    }

}
