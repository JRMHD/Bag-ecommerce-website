<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // List of predefined admin credentials
    private $admins = [
        ['phone' => '0745478277', 'pin' => '2065'],
        ['phone' => '0706378245', 'pin' => '2065'],
    ];

    // Show login form
    public function showLoginForm()
    {
        return view('admin.login');
    }

    // Handle login request
    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'phone' => 'required|regex:/^07[0-9]{8}$/',
            'pin' => 'required|digits:4',
        ]);

        // Check if credentials match any admin
        foreach ($this->admins as $admin) {
            if ($admin['phone'] === $request->phone && $admin['pin'] === $request->pin) {
                // Store the admin session
                session(['admin_logged_in' => true, 'phone' => $request->phone]);
                return redirect()->route('admin.dashboard');
            }
        }

        // If no match, redirect back with error
        return back()->withErrors(['Invalid credentials. Please try again.']);
    }

    // Show admin dashboard
    public function dashboard()
    {
        // Check if the admin is logged in
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login')->withErrors(['You must log in first.']);
        }

        return view('admin.dashboard');
    }

    // Logout admin
    public function logout()
    {
        session()->forget(['admin_logged_in', 'phone']);
        return redirect()->route('admin.login');
    }
}
