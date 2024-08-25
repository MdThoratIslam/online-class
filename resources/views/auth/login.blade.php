@extends('auth.index')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card animate__animated animate__fadeInDown">
                <div class="card-header text-center">
                    <h4>Login Form</h4>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success animate__animated animate__fadeInUp" role="alert">
                            {{ session('status') }}
                        </div>
                    @elseif(session('warning'))
                        <div class="alert alert-warning animate__animated animate__fadeInUp" role="alert">
                            {{ session('warning') }}
                        </div>
                    @elseif(session('error'))
                        <div class="alert alert-danger animate__animated animate__fadeInUp" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif
                    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1">@</span>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" required value="{{ old('email') }}" autocomplete="email" autofocus />
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock fa-lg"></i></span>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Password" required autocomplete="current-password" />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 form-check input_field animate__animated animate__bounceInLeft">
                            <input type="checkbox" class="form-check-input" id="cb1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="cb1">Remember Me</label>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 animate__animated animate__bounceIn">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
