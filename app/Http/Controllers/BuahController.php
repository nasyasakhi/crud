<?php

namespace App\Http\Controllers;

use App\Models\Buah;
use Illuminate\Http\Request;

class BuahController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $buah = Buah::all();
            return view('buah.index', compact('buah'));
    
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('buah.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $pesan = [
            'nama_buah.required' => 'Nama buah masih kosong !',
            'harga.required' => 'harga masih kosong !',
            'nama_buah.min' => 'Nama salah!',
            'harga.min' => 'harga salah!'
        ];

        $request->validate([
            'nama_buah' => 'required|min:3',
            'harga' => 'required|min:1000',
        ],$pesan);
        

        $buah= new Buah();

        $buah->nama_buah = $request->nama_buah;
        $buah->harga = $request->harga;
        
        $buah->save();
        return redirect()->route('buah.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $buah = Buah::findOrFail($id);
        return view('buah.show', compact('buah'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $buah = Buah::findOrFail($id);
        return view('buah.edit', compact('buah'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buah = Buah::findOrFail($id);

        $buah->nama_buah = $request->nama_buah;
        $buah->harga = $request->harga; 

        $buah->update();
        return redirect()->route('buah.index');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buah = Buah::findOrFail($id);
        $buah->delete();

        return redirect()->route('buah.index');
    }
}
