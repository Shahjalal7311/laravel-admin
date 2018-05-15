<!DOCTYPE html>
<html lang="en">
	<head>
		@include('admin.include.head')
	</head>
	<body>
    <!-- Header -->
    <header class="top-head container-fluid navbar-fixed-top">
        @include('admin.include.header')
    </header>
    <!-- End Header -->
    <!-- Aside Menu -->
    <aside class="left-panel">
        <!-- Navbar -->
        @include('admin.include.side-bar')
        <!-- End Navbar -->
    </aside>
    <!-- End Aside -->
		<!--Main Content -->
		<section class="content">
            @yield('content')
			<!-- Footer -->
			<footer class="footer">
				2015 © Laravel Admin By Ratul & Shahjalal
			</footer>
			<!-- End Footer -->
		</section>
        @include('admin.include.footer')
	</body>
</html>
