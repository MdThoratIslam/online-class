<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
        <a href="" class="navbar-brand font-weight-bold text-secondary" style="font-size: 50px">
            <i class="flaticon-043-teddy-bear"></i>
            <span class="text-secondary bangla-font">{{ __('web_page.webTitle')  }}</span>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav font-weight-bold mx-auto py-0">
                <a href="{{route('/')}}" class="nav-item nav-link active bangla-font">{{__('web_page.nav.home')}}</a>
                <a href="about.html" class="nav-item nav-link bangla-font">{{__('web_page.nav.about')}}</a>
                <a href="class.html" class="nav-item nav-link bangla-font">{{__('web_page.nav.class')}}</a>
                <a href="team.html" class="nav-item nav-link bangla-font">{{__('web_page.nav.teacher')}}</a>
                <a href="gallery.html" class="nav-item nav-link bangla-font">{{__('web_page.nav.gallery')}}</a>
            </div>
            <a href="contact.html" class="nav-item nav-link bangla-font">{{__('web_page.nav.contact')}}</a>
        </div>
        @if (Route::has('login'))
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary px-4 bangla-font">
                    {{__('web_page.nav.dashboard')}}
                </a>
            @else
                <a href="{{ route('login') }}" class="btn btn-primary px-4 bangla-font">{{__('web_page.nav.login')}}</a>
                    &nbsp;
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary px-4 bangla-font">{{__('web_page.nav.register')}}</a>
    @endif
    @endauth
        &nbsp; &nbsp;
    <form action="{{ route('locale.change') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" name="locale" value="en" class="btn btn-link btn-sm p-0 {{ app()->getLocale() == 'en' ?
        'font-weight-bold' : '' }}">
            En
        </button>
        |
        <button type="submit" name="locale" value="bn" class="btn btn-link btn-sm p-0 {{ app()->getLocale() == 'bn' ?
        'font-weight-bold' : '' }}">
            Bn
        </button>
    </form>
</div>
@endif
</nav>
</div>