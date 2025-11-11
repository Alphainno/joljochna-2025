<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>জলজোছনা - অ্যাডমিন ড্যাশবোর্ড</title>
    <!-- Chart.js Library for Data Visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/admin/style.css') }}">
    @if (file_exists(public_path('build/manifest.json')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
   
</head>
<body>
     <div class="dashboard">

        @include('admin.sidebar')

     <main class="main-content">

        @include('admin.header')

        @yield('content')
        
    </main>
    
    <!-- Mobile Navigation -->
    <div class="mobile-overlay" id="mobileOverlay"></div>
    <div class="mobile-navbar">
        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Open Menu">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
        </button>
    </div>
    
    <div>
  


    <!-- Custom Modal/Message Box (for alerts/confirmations) -->
    <div id="customModal" style="display:none; position:fixed; z-index:1000; left:0; top:0; width:100%; height:100%; overflow:auto; background-color:rgba(0,0,0,0.4);">
        <div style="background-color:#fefefe; margin: 15% auto; padding:20px; border:1px solid #888; width: 80%; max-width: 400px; border-radius: 0.75rem; box-shadow: 0 4px 20px rgba(0,0,0,0.2);">
            <h3 id="modalTitle" style="margin-bottom: 1rem; color: #0a4d2e;"></h3>
            <p id="modalMessage" style="margin-bottom: 1.5rem; color: #374151;"></p>
            <div id="modalButtons" style="display: flex; justify-content: flex-end; gap: 0.5rem;">
                <!-- Buttons populated by JS -->
            </div>
        </div>
    </div>


     <script src="{{ asset('assets/admin/program.js') }}"></script>

</body>
</html>
