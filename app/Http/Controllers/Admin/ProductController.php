<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Get products ordered by the most recent
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'slashed_price' => 'nullable|numeric',
            'color' => 'required',
            'description' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $images = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $images[] = $path;
            }
        }

        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'slashed_price' => $request->slashed_price,
            'color' => $request->color,
            'description' => $request->description,
            'images' => json_encode($images),
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'slashed_price' => 'nullable|numeric',
            'color' => 'required',
            'description' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $images = json_decode($product->images, true) ?? [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products', 'public');
                $images[] = $path;
            }
        }

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'slashed_price' => $request->slashed_price,
            'color' => $request->color,
            'description' => $request->description,
            'images' => json_encode($images),
        ]);

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully.');
    }

    public function shop()
    {
        // Get products ordered by the most recent
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('shop', compact('products'));
    }


    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->limit(4)
            ->get();
        return view('product', compact('product', 'products'));
    }
}
