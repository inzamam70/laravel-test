<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function index()
    {
        $products = $this->product->latest()->paginate(5);
        return view('admin.product.index', compact('products'));
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $this->product->create([
            'name' => $request->name,
            'category_name' => $request->category_name,
            'brand_name' => $request->brand_name,
            'description' => $request->description,
            'image' => $request->image,
            'status' => $request->status,
        ]);

        return redirect()->route('product.index');
    }

    public function show($id)
    {
        $product = Product::find($id);
        
        return view('admin.product.show', compact('product'));
    }

    public function edit($id)
    {
        $product = $this->product->find($id);
        return view('admin.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->product->find($id)->update([
            'name' => $request->name,
            'category_name' => $request->category_name,
            'brand_name' => $request->brand_name,
            'description' => $request->description,
            'image' => $request->image,
            'status' => $request->status,
        ]);

        return redirect()->route('product.index');
    }

    public function destroy($id)
    {
        $this->product->find($id)->delete();
        return redirect()->route('product.index');
    }
}
