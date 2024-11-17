<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $total = 0;

        // Calculate total and get product details
        foreach ($cartItems as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }

        return view('cart', compact('cartItems', 'total'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        $cart = session()->get('cart', []);

        if (isset($cart[$request->product_id])) {
            $cart[$request->product_id]['quantity']++;
        } else {
            $cart[$request->product_id] = [
                'name' => $product->name,
                'quantity' => 1,
                'price' => $product->price,
                'image' => json_decode($product->images)[0],
                'color' => $product->color
            ];
        }

        session()->put('cart', $cart);
        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully!',
            'cartCount' => count($cart)
        ]);
    }

    public function update(Request $request)
    {
        if ($request->product_id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->product_id]['quantity'] = $request->quantity;
            session()->put('cart', $cart);

            // Calculate new totals
            $itemTotal = $cart[$request->product_id]['price'] * $request->quantity;
            $cartTotal = 0;
            foreach ($cart as $item) {
                $cartTotal += $item['price'] * $item['quantity'];
            }

            return response()->json([
                'success' => true,
                'message' => 'Cart updated successfully!',
                'itemTotal' => number_format($itemTotal),
                'cartTotal' => number_format($cartTotal)
            ]);
        }
    }

    public function remove(Request $request)
    {
        if ($request->product_id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->product_id])) {
                unset($cart[$request->product_id]);
                session()->put('cart', $cart);
            }

            $cartTotal = 0;
            foreach ($cart as $item) {
                $cartTotal += $item['price'] * $item['quantity'];
            }

            return response()->json([
                'success' => true,
                'message' => 'Product removed from cart!',
                'cartCount' => count($cart),
                'cartTotal' => number_format($cartTotal)
            ]);
        }
    }

    public function getCount()
    {
        $cart = session()->get('cart', []);
        return response()->json(['count' => count($cart)]);
    }
}
