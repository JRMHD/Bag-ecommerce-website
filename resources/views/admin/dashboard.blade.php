@extends('layouts.admin')
@section('title', 'Admin Dashboard')
@section('content')

    <div style="min-height: 100vh; background-color: #f8f9fa; font-family: 'Segoe UI', sans-serif;">
        <!-- Top Navigation Bar -->
        <nav
            style="background: linear-gradient(135deg, #FF6B00 0%, #FF8533 100%); padding: 1rem; color: white; display: flex; justify-content: space-between; align-items: center; box-shadow: 0 2px 4px rgba(0,0,0,0.1);">
            <div style="display: flex; align-items: center; gap: 1rem;">
                <h1 style="margin: 0; font-size: 1.25rem;">Welcome, Admin</h1>
                <div style="font-size: 0.875rem;">Phone: {{ session('phone') }}</div>
            </div>
            <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                @csrf
                <button type="submit"
                    style="background: #1e3a8a; border: none; color: white; padding: 0.5rem 1rem; border-radius: 0.375rem; cursor: pointer; transition: all 0.3s;">Logout</button>
            </form>
        </nav>

        <!-- Time and Location Section -->
        <div
            style="background: white; margin: 1rem; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.05);">
            <div style="display: flex; flex-wrap: wrap; gap: 2rem; justify-content: space-around;">
                <div style="text-align: center;">
                    <div style="font-size: 0.875rem; color: #6b7280;">Nairobi Time</div>
                    <div style="font-size: 1.5rem; color: #1e3a8a; font-weight: bold;" id="time"></div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 0.875rem; color: #6b7280;">Date</div>
                    <div style="font-size: 1.5rem; color: #1e3a8a; font-weight: bold;" id="date"></div>
                </div>
                <div style="text-align: center;">
                    <div style="font-size: 0.875rem; color: #6b7280;">City</div>
                    <div style="font-size: 1.5rem; color: #1e3a8a; font-weight: bold;">Nairobi, Kenya</div>
                </div>
            </div>
        </div>

        <!-- Shortcuts Grid -->
        <div style="padding: 1rem;">
            <h2 style="color: #374151; margin-bottom: 1rem;">Quick Access</h2>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem;">
                <!-- Orders Shortcut -->
                <a href="{{ url('admin/orders') }}" style="text-decoration: none;">
                    <div
                        style="background: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.05); transition: transform 0.3s; cursor: pointer; border-left: 4px solid #FF6B00;">
                        <div style="font-size: 1.25rem; color: #1e3a8a; margin-bottom: 0.5rem;">Orders</div>
                        <div style="color: #6b7280; font-size: 0.875rem;">Manage customer orders</div>
                    </div>
                </a>

                <!-- Products Shortcut -->
                <a href="{{ url('admin/products') }}" style="text-decoration: none;">
                    <div
                        style="background: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 2px 4px rgba(0,0,0,0.05); transition: transform 0.3s; cursor: pointer; border-left: 4px solid #1e3a8a;">
                        <div style="font-size: 1.25rem; color: #1e3a8a; margin-bottom: 0.5rem;">Products</div>
                        <div style="color: #6b7280; font-size: 0.875rem;">Manage your product catalog</div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script>
        function updateTime() {
            const now = new Date();
            const timeElement = document.getElementById('time');
            const dateElement = document.getElementById('date');

            // Format time
            timeElement.textContent = now.toLocaleTimeString('en-KE', {
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: true
            });

            // Format date
            dateElement.textContent = now.toLocaleDateString('en-KE', {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
        }

        // Update time every second
        updateTime();
        setInterval(updateTime, 1000);

        // Add hover effect to shortcut cards
        document.querySelectorAll('[style*="cursor: pointer"]').forEach(card => {
            card.addEventListener('mouseover', () => {
                card.style.transform = 'translateY(-5px)';
            });
            card.addEventListener('mouseout', () => {
                card.style.transform = 'translateY(0)';
            });
        });
    </script>

@endsection
