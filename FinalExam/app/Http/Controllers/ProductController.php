<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    public function create()
    {
        return view('products.create');
    }
    public function index(Request $request)
    {
        $filter = $request->input('filter');

        if ($filter) {
            $products = Product::where('type', $filter)->get();
        } else {
            $products = Product::all();
        }

        return view('products.index', ['products' => $products]);
    }

    public function displayNewForm()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        DB::table('products')->insert([
            'type' => $request->type,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('products.index')->with('status', 'New product added successfully');
    }

    public function displayUpdateForm($id)
    {
        $selectedProduct = DB::table('products')->where('id', $id)->first();
        return view('products.update', ["selectedProduct" => $selectedProduct]);
    }

    public function updateProduct(Request $request)
    {
        $validatedData = $request->validate([
            'type' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        DB::table('products')->where('id', $request->id)
            ->update([
                'type' => $request->type,
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
            ]);

        return redirect()->route('products.index')->with('status', 'Product updated successfully');
    }

    public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        'type' => 'required',
        'name' => 'required',
        'description' => 'required',
        'price' => 'required|numeric',
    ]);

    DB::table('products')->where('id', $id)
        ->update([
            'type' => $request->type,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

    return redirect()->route('products.index')->with('status', 'Product updated successfully');
}

}
