<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    @include('admin.include.head')
</head>
<body>
@guest
    @yield('content')
@else
    <!-- Header -->
    <header class="top-head container-fluid navbar-fixed-top">
        @include('admin.include.header')
    </header>
    <!-- End Header -->
    <aside class="left-panel">
        <!-- Navbar -->
        @include('admin.include.side-bar')
        <!-- End Navbar -->
    </aside>

    <section class="content">
        @yield('content')
        <!-- Footer -->
        <footer class="footer">
            2015 © Laravel Admin By Ratul & Shahjalal
        </footer>
        <!-- End Footer -->
    </section>
    @include('admin.include.footer')
    @endguest
    <!-- Scripts -->
</body>
</html>
