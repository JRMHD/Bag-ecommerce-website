<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderCreated;  // Import the OrderCreated Mailable

class CheckoutController extends Controller
{
    public function index()
    {
        $cart = Session::get('cart', []);
        $total = array_reduce($cart, fn($carry, $item) => $carry + $item['price'] * $item['quantity'], 0);

        return view('checkout', compact('cart', 'total'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'note' => 'nullable|string',
        ]);

        // Get the cart from session
        $cart = Session::get('cart', []);

        // If the cart is empty, redirect back
        if (empty($cart)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty!');
        }

        // Create the order
        $order = Order::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'note' => $request->note,
            'total' => array_reduce($cart, fn($carry, $item) => $carry + $item['price'] * $item['quantity'], 0),
        ]);

        // Attach products to the order
        foreach ($cart as $productId => $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $productId,
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);
        }

        // Clear the cart from session
        Session::forget('cart');

        // Send email to the admin about the new order
        Mail::to('imuzwatches@gmail.com')->send(new OrderCreated($order));

        // Redirect to checkout page with success message
        return redirect()->route('checkout')->with('success', 'Your order has been placed successfully!');
    }
}
