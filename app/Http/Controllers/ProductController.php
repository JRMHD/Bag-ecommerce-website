<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductImage;
use App\Models\ProductVideo;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show product listing for the shop
    public function index()
    {
        $products = Product::with('images')->get();
        return view('shop', compact('products'));
    }

    // Show product detail page
    public function show($id)
    {
        $product = Product::with(['images', 'videos'])->findOrFail($id);

        // Group images by color
        $groupedImages = $product->images->groupBy('color');

        // Fetch 4 random products excluding the current product
        $relatedProducts = Product::with('images')
            ->where('id', '!=', $id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('product', compact('product', 'groupedImages', 'relatedProducts'));
    }



    // Show admin product listing
    public function adminIndex()
    {
        $products = Product::with('images')->get();
        return view('admin.products.index', compact('products'));
    }

    // Show create product form
    public function create()
    {
        return view('admin.products.create');
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'slashed_price' => 'nullable|numeric',
            'description' => 'required',
            'design_description' => 'required',
            'features' => 'required',
            'images' => 'required|array',
            'images.*.path' => 'required|image',
            'images.*.color' => 'required|string',
            'videos' => 'nullable|array',
            'videos.*' => 'nullable|file|mimes:mp4,mov,avi|max:50000',
        ]);

        $product = Product::create($request->only(['name', 'price', 'slashed_price', 'description', 'design_description', 'features']));

        // Store images
        foreach ($request->images as $imageData) {
            $imagePath = $imageData['path']->store('products/images', 'public');
            ProductImage::create([
                'product_id' => $product->id,
                'image_path' => $imagePath,
                'color' => $imageData['color'],
            ]);
        }

        // Store videos
        if ($request->videos) {
            foreach ($request->videos as $video) {
                $videoPath = $video->store('products/videos', 'public');
                ProductVideo::create([
                    'product_id' => $product->id,
                    'video_path' => $videoPath,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product created successfully');
    }
    // Show edit product form
    public function edit($id)
    {
        $product = Product::with(['images', 'videos'])->findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Update product
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'slashed_price' => 'nullable|numeric',
            'description' => 'required',
            'design_description' => 'required',
            'features' => 'required',
            'images' => 'nullable|array',
            'images.*.path' => 'nullable|image',
            'images.*.color' => 'nullable|string',
            'videos' => 'nullable|array',
            'videos.*' => 'nullable|file|mimes:mp4,mov,avi|max:50000',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->only(['name', 'price', 'slashed_price', 'description', 'design_description', 'features']));

        // Update images
        if ($request->images) {
            foreach ($request->images as $imageData) {
                if (isset($imageData['path'])) {
                    $imagePath = $imageData['path']->store('products/images', 'public');
                    ProductImage::create([
                        'product_id' => $product->id,
                        'image_path' => $imagePath,
                        'color' => $imageData['color'],
                    ]);
                }
            }
        }

        // Update videos
        if ($request->videos) {
            foreach ($request->videos as $video) {
                $videoPath = $video->store('products/videos', 'public');
                ProductVideo::create([
                    'product_id' => $product->id,
                    'video_path' => $videoPath,
                ]);
            }
        }

        return redirect()->route('admin.products.index')->with('success', 'Product updated successfully');
    }
    // Delete product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.index')->with('success', 'Product deleted successfully');
    }
}
