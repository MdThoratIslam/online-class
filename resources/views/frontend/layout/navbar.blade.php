<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-secondary bangla-font">ই-লার্নিং প্ল্যাটফর্ম</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{route('/')}}" class="nav-item nav-link active bangla-font">হোম</a>
                <a href="about.html" class="nav-item nav-link bangla-font">এবাউট</a>
                <a href="class.html" class="nav-item nav-link bangla-font">ক্লাস</a>
                <a href="team.html" class="nav-item nav-link bangla-font">শিক্ষকরা</a>
                <a href="gallery.html" class="nav-item nav-link bangla-font">গ্যালারি</a>
            </div>
            {{--        <div class="nav-item dropdown">--}}
            {{--            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>--}}
            {{--            <div class="dropdown-menu rounded-0 m-0">--}}
            {{--                <a href="blog.html" class="dropdown-item">Blog Grid</a>--}}
            {{--                <a href="single.html" class="dropdown-item">Blog Detail</a>--}}
            {{--            </div>--}}
            {{--        </div>--}}
            <a href="contact.html" class="nav-item nav-link bangla-font">যোগাযোগ</a>
        </div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary px-4 bangla-font">
                    ড্যাশবোর্ড
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary px-4 bangla-font">লগ ইন</a>&nbsp;
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary px-4 bangla-font">নিবন্ধন</a>
    @endif
    @endauth
</div>
@endif
</nav>
</div>