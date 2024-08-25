@include('frontend.layout.htmlHead')
    <!-- Navbar Start -->
    @include('frontend.layout.navbar')
    <!-- Navbar End -->
    @yield('pages')
    @include('frontend.layout.footer')
@include('frontend.layout.script')
