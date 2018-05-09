<!DOCTYPE html>
<html lang="en">

	<head>
		@include('admin.head')
	</head>

	<body>

    <!-- Header -->
    <header class="top-head container-fluid navbar-fixed-top">
        @include('admin.header')
    </header>
    <!-- End Header -->

    <!-- Aside Menu -->
    <aside class="left-panel">

        <!-- Navbar -->
        @include('admin.side-bar')
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

        @include('admin.footer')
	</body>
</html>
