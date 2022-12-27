<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $items=Product::latest()->get();

        return view("product.index",compact("items"));
    }


    public function create()
    {
        return view("product.create");
    }

    public function store(ProductRequest $request, Product $product)
    {
        $product=Product::create($request->input('product'));
        return redirect()->route('products.index')->with('message','creato correctement');
    }

    public function show(Product $product)
    {
        //
    }

    public function edit(Product $product)
    {
       return view('product.edit',compact('product'));
    }

    public function update(ProductRequest $request, Product $product)
    {
        $product->update($request->input('product'));
        return redirect()->route('products.index')->with('message','update correctement');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('message','delete correctement');
    }
}
