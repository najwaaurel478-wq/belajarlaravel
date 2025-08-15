<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Products;
use App\Models\Suppliers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Products::with('suppliers')->orderBy('created_at', 'desc')->get();
        return view('products.index', compact('products'));
        
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $suppliers = Suppliers::orderBy('name', 'asc')->get();
        return view('products.create', compact('suppliers'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'suppliers_id' => 'required',
            'name'=> 'required|min:3|max:255',
            'images' => 'required|mimes:jpg,jpeg,png|max:2048',
            'stock' => 'required|numeric|min:0|max:1000',
            'unit' => 'required|max:4',
            'price' => 'required',
        ]);

        $images = $request->file('images');
        $directory = 'images/';
        $filename = Str::random(10) . '.' .  $images->getClientOriginalExtension();
        Storage::putFileAs($directory, $images, $filename);

        $products = Products::create([
            'suppliers_id' => $request->suppliers_id,
            'name' => $request->name,
            'images' => $filename,
            'stock' => $request->stock,
            'unit' => $request->unit,
            'price' => $request->price,
            'discount' =>$request->discount,
            'description' =>$request->description
        ]);

        return redirect()->route('products.index', $products->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Products::find($id);
        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $products = Products::find($id);
        return view('products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $request->validate([
            'suppliers_id' => 'required',
            'name'=> 'required|min:3|max:255',
            'images' => 'mimes:jpg,jpeg,png|max:2048',
            'stock' => 'required|numeric|min:0|max:1000',
            'unit' => 'required|max:4',
            'price' => 'required',
         ], [

         'suppliers_id.required'=> 'Suppliers id harus diisi',
         'name.required'=> 'Name harus diisi',
         'name.min' => 'Name minimal 3 karakter',
         'name.max' => 'Name maksimal 255 karakter', 
         'images.required'=> 'Images harus diisi',
         'images.max' => 'Images maksimal 2048 karakter',
         'stock.required'=> 'Stock harus diisi',
         'unit.required'=> 'Unit harus diisi',
         'price.required'=> 'Price harus diisi',

         ]);

         $products = Products::find($id);
         $filename = $products->images;

     if ($request->hasFile('images')){
        $images = $request->file('images');
        $directory = 'images/';
        $filename = Str::random(10) . '.' .  $images->getClientOriginalExtension();
        Storage::putFileAs($directory, $images, $filename);

    }

        $products->update([
            'suppliers_id' => $request->suppliers_id,
            'name' => $request->name,
            'images' => $filename,
            'stock' => $request->stock,
            'unit' => $request->unit,
            'price' => $request->price,
            'discount' =>$request->discount,
            'description' =>$request->description
        ]);

        return redirect()->route('products.index', $products->id);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Products::find($id)->delete();
        return redirect()->back();
    }
}
