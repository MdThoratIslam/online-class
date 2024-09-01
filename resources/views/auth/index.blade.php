<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="{{asset('backend/assets/img/kaiadmin/favicon.ico')}}" type="image/x-icon"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <script src="{{asset('backend/assets/js/plugin/webfont/webfont.min.js')}}"></script>
    
    <script>
        WebFont.load({
            google: { families: ["Public Sans:300,400,500,600,700"] },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["{{asset('backend/assets/css/fonts.min.css')}}"],
            },
            active: function () {
                sessionStorage.fonts = true;
            },
        });
    </script>
    <!-- CSS Files -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                
                </ul>
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif
                        
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
{{--                    @else--}}
{{--                        <li class="nav-item dropdown">--}}
{{--                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                {{ Auth::user()->name }}--}}
{{--                            </a>--}}
{{--                            --}}
{{--                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                   onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                    {{ __('Logout') }}--}}
{{--                                </a>--}}
{{--                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                    @csrf--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </li>--}}
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    <main class="py-6">
        @yield('content')
    </main>
{{--    need a footer section a --}}
</div>

<script src="{{asset('backend/assets/js/core/jquery-3.7.1.min.js')}}"></script>
{{--<script src="{{asset('backend/assets/js/core/popper.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/assets/js/core/bootstrap.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js')}}"></script>--}}
{{--<!-- jQuery Scrollbar -->--}}
{{--<script src="{{asset('backend/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')}}"></script>--}}
{{--<!-- Datatables -->--}}
{{--<script src="{{asset('backend/assets/js/plugin/datatables/datatables.min.js')}}"></script>--}}
{{--<!-- Kaiadmin JS -->--}}
{{--<script src="{{asset('backend/assets/js/kaiadmin.min.js')}}"></script>--}}
{{--<!-- Kaiadmin DEMO methods, don't include it in your project! -->--}}
{{--<script src="{{asset('backend/assets/js/setting-demo2.js')}}"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    // need email error message to be displayed
    @if($errors->has('email'))
    toastr.error("{{$errors->first('email')}}", "Error",
        {
        "closeButton": true,
        "progressBar": true,
        "timeOut": "5000",
        "extendedTimeOut": "5000",
        "positionClass": "toast-top-center",
        "preventDuplicates": true,
        "showDuration": "300",
        "color": "red",
        "backgroundColor": "red",
    });
    @elseif($errors->has('password'))
    toastr.error("{{$errors->first('password')}}", "Error",
        {
        "closeButton": true,
        "progressBar": true,
        "timeOut": "5000",
        "extendedTimeOut": "5000",
        "positionClass": "toast-top-center",
        "preventDuplicates": true,
        "showDuration": "300",
        "color": "red",
        "backgroundColor": "red",
    });
    @endif
</script>
@yield('authScripts')
</body>
</html>