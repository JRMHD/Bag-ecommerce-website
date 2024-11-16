@extends('layouts.admin')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="text-center mt-5">
        <h1>Welcome, Admin</h1>
        <p>Phone: {{ session('phone') }}</p>

        <!-- Add a card or a Bootstrap-styled welcome section -->
        <div class="mt-4">
            <form action="{{ route('admin.logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>
@endsection
