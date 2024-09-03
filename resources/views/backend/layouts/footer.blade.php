<footer class="footer fixed-bottom">
    <div class="container-fluid d-flex justify-content-between">
{{--        <nav class="pull-left">--}}
{{--            <ul class="nav">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="http://www.themekita.com">ThemeKita</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"> Help </a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#"> Licenses </a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </nav>--}}
        <div class="copyright">
            &copy; Copy right @php
                echo \Carbon\Carbon::now()->timezone('Asia/Dhaka')->format('Y');
            @endphp
            made with <i class="fa fa-heart heart text-danger"></i>
            by <a href="https://www.zasusoft.com/" target="_blank">Owner</a>
        </div>
        <div>
            Developed by <a href="https://www.zasusoft.com/" target="_blank">Engr. Muhammad Tourat Islam</a>
        </div>
    </div>
</footer>