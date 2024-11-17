<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartItems = session()->get('cart', []);
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        if (count($cartItems) === 0) {
            return redirect()->route('shop')->with('error', 'Your cart is empty');
        }

        return view('checkout', compact('cartItems', 'total'));
    }

    public function placeOrder(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        $cartItems = session()->get('cart', []);
        $total = 0;

        foreach ($cartItems as $item) {
            $total += $item['price'] * $item['quantity'];
        }

        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'note' => $request->note,
            'total_amount' => $total,
            'items' => $cartItems,
            'status' => 'pending'
        ]);

        // Clear the cart
        session()->forget('cart');

        return redirect()->route('order.confirmation', $order->id)
            ->with('success', 'Order placed successfully!');
    }

    public function confirmation($id)
    {
        $order = Order::findOrFail($id);
        return view('order-confirmation', compact('order'));
    }
}
