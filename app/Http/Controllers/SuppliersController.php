<?php

namespace App\Http\Controllers;

use App\Http\Controllers;
use App\Models\Suppliers;
use Illuminate\Http\Request;

class SuppliersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $suppliers = Suppliers::all();
        return view('suppliers.index', compact('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('suppliers.create'); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
         'name' => 'required',
         'address' => 'required',
         'province' => 'required',
         'city' => 'required',
         'postcode' => 'required',
         'phone' => 'required',
         'fax' => 'required',
      ], [
         'name.required'=> 'Name harus diisi',
         'address.required'=> 'Address harus diisi',
         'province.required'=> 'Province harus diisi',
         'city.required'=> 'City harus diisi',
         'postcode.required'=> 'Post code harus diisi',
         'phone.required'=> 'Phone harus diisi',
         'fax.required'=> 'Fax harus diisi',
      ]);
      $suppliers = Suppliers::create($request->all());
      return redirect()->route('suppliers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      $suppliers = Suppliers::find($id);
      return view('suppliers.show', compact('suppliers'));
   
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      $suppliers = Suppliers::find($id);
      return view('suppliers.edit', compact('suppliers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
         'name' => 'required',
         'address' => 'required',
         'province' => 'required',
         'city' => 'required',
         'postcode' => 'required',
         'phone' => 'required',
         'fax' => 'required',
      ], [
         'name.required'=> 'Name harus diisi',
         'address.required'=> 'Address harus diisi',
         'province.required'=> 'Province harus diisi',
         'city.required'=> 'City harus diisi',
         'postcode.required'=> 'Post code harus diisi',
         'phone.required'=> 'Phone harus diisi',
         'fax.required'=> 'Fax harus diisi',
      ]);

      $suppliers = Suppliers::find($id);
      $suppliers->update($request->all()); 
      return redirect()->route('suppliers.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
      $suppliers = Suppliers::find($id)->delete();
      return redirect()->back();
    }
}
