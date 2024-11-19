<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    // Show the shopping cart
    public function index()
    {
        // Retrieve the cart from the session
        $cart = Session::get('cart', []);

        // Calculate total price and other cart info
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        // Pass cart items and total price to the view
        return view('cart', compact('cart', 'total'));
    }

    // Add a product to the cart
    public function addToCart(Request $request)
    {
        // Retrieve the product from the database
        $product = Product::findOrFail($request->product_id);

        // Get the current cart from the session
        $cart = Session::get('cart', []);

        // Check if the product is already in the cart
        if (isset($cart[$product->id])) {
            // If the product is already in the cart, increase the quantity
            $cart[$product->id]['quantity']++;
        } else {
            // Otherwise, add the product to the cart with quantity 1
            $cart[$product->id] = [
                'name' => $product->name,
                'price' => $product->price,
                'quantity' => 1,
                'image' => asset('storage/' . $product->images->first()->image_path), // Assuming you have product images
            ];
        }

        // Store the updated cart in the session
        Session::put('cart', $cart);

        // Redirect back with a success message
        return redirect()->route('product.show', $product->id)
            ->with('success', 'Product added to cart successfully!');
    }

    // Remove an item from the cart
    public function removeFromCart($productId)
    {
        // Retrieve the current cart from the session
        $cart = Session::get('cart', []);
    
        // Remove the product from the cart
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
        }
    
        // Update the cart in the session
        Session::put('cart', $cart);
    
        // Redirect back with a success message
        return redirect()->route('cart')
            ->with('success', 'Product removed from cart!');
    }
    

    // Update the quantity of a product in the cart
    public function updateQuantity(Request $request, $productId)
    {
        // Retrieve the current cart from the session
        $cart = Session::get('cart', []);
    
        // If the product exists in the cart, update its quantity
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $request->quantity;
        }
    
        // Update the cart in the session
        Session::put('cart', $cart);
    
        // Redirect back with a success message
        return redirect()->route('cart')
            ->with('success', 'Cart updated successfully!');
    }
    
}
