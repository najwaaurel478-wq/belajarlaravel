<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Mobil;
use Illuminate\Http\Request;

class MobilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mobil = Mobil::all();
        return view('mobil.index', compact('mobil'));
   }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mobil.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
         'merek' => 'required',
         'tipe' => 'required',
         'warna' => 'required',
         'jumlah_roda' => 'required',
         'nomor_mesin' => 'required',
         'gambar' => 'required'
      ], [
         'merek.required'=> 'Merek harus diisi',
         'tipe.required'=> 'Tipe harus diisi',
         'warna.required'=> 'Warna harus diisi',
         'jumlah_roda.required'=> 'Jumlah roda harus diisi',
         'nomor_mesin.required'=> 'Nomor mesin harus diisi',
         'gambar.required'=> 'Gambar harus diisi'
      ]);
      $mobil = Mobil::create($request->all());
      return redirect()->route('mobil.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
         $mobil = Mobil::find($id);
         return view('mobil.show', compact('mobil'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mobil = Mobil::find($id);
        return view('mobil.edit', compact('mobil'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
         'merek' => 'required',
         'tipe' => 'required',
         'warna' => 'required',
         'jumlah_roda' => 'required',
         'nomor_mesin' => 'required',
         'gambar' => 'required'
      ], [
         'merek.required'=> 'Merek harus diisi',
         'tipe.required'=> 'Tipe harus diisi',
         'warna.required'=> 'Warna harus diisi',
         'jumlah_roda.required'=> 'Jumlah roda harus diisi',
         'nomor_mesin.required'=> 'Nomor mesin harus diisi',
         'gambar.required'=> 'Gambar harus diisi'
      ]);

      $mobil = Mobil::find($id);
      $mobil->update($request->all()); 
      return redirect()->route('mobil.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $mobil = Mobil::find($id)->delete();
         return redirect()->back();
    }
}
