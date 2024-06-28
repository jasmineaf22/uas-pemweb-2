<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pinjam;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth; // Import Auth

class PinjamController extends Controller
{
    public function create()
    {
        $bukus = Buku::all();
        return view('pinjam', compact('bukus'));
    }

    public function store(Request $request)
    {
        // Create new Pinjam instance and save data
        // dd($request->all());
        $pinjam = new Pinjam();
        $pinjam->id_user = Auth::id();
        $pinjam->id_buku = 1; // Ensure correct attribute name
        $pinjam->tanggal_pinjam = $request->tanggal_pinjam;
        $pinjam->tanggal_kembali = $request->tanggal_kembali;
        $pinjam->save();
    
        return redirect()->route('pinjam.index')
            ->with('success', 'Pinjam created successfully.');
    }
    
    
    

    public function index()
    {
        $pinjams = Pinjam::with('buku', 'user')->get();
        return view('list', compact('pinjams'));
    }

    public function edit(Pinjam $pinjam)
    {
        $bukus = Buku::all();
        return view('pinjam', compact('pinjam', 'bukus'));
    }

    public function update(Request $request, Pinjam $pinjam)
    {
        // Validate input
        $validatedData = $request->validate([
            'id_buku' => 'required',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'required|date',
        ]);

        // Set user ID
        $validatedData['id_user'] = Auth::id();

        // Update the Pinjam instance
        $pinjam->update($validatedData);

        return redirect()->route('pinjam.index')
            ->with('success', 'Pinjam updated successfully.');
    }

    public function destroy(Pinjam $pinjam)
    {
        $pinjam->delete();

        return redirect()->route('pinjam.index')
            ->with('success', 'Pinjam deleted successfully.');
    }
}
