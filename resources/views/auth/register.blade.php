@extends('auth.index')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card animate__animated animate__fadeInDown">
                <div class="card-header text-center">
                    <h4>Registration Form</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="name" class="form-label">First Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="First Name" required
                                           value="{{ old('name') }}" autocomplete="name" autofocus />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="name" class="form-label">Last Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-user"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Last Name" required
                                           value="{{ old('name') }}" autocomplete="name" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required
                                           value="{{ old('email') }}" autocomplete="email" autofocus />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                <label for="phone" class="form-label">Phone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                    <input type="text" name="phone" class="form-control" placeholder="Phone" required
                                           value="{{ old('phone') }}" autocomplete="phone" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password" required
                                           autocomplete="new-password" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="password" class="form-label">Confirm Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Confirm Password" required
                                           autocomplete="new-password" />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                <label for="address" class="form-label">Address</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="address" class="form-control" placeholder="Address" required
                                           value="{{ old('address') }}" autocomplete="address" autofocus />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                <label for="city" class="form-label">City</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="city" class="form-control" placeholder="City" required
                                           value="{{ old('city') }}" autocomplete="city" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="country" class="form-label">Country</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="country" class="form-control" placeholder="Country" required
                                           value="{{ old('country') }}" autocomplete="country" autofocus />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="division" class="form-label">Division</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="division" class="form-control" placeholder="Division" required
                                           value="{{ old('division') }}" autocomplete="division" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="district" class="form-label">District</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="district" class="form-control" placeholder="District" required
                                           value="{{ old('district') }}" autocomplete="district" autofocus />
                                </div>
                            </div>
                            
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                <label for="police_station" class="form-label">Police Station</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="police_station" class="form-control" placeholder="Police Station" required
                                           value="{{ old('police_station') }}" autocomplete="police_station" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                <label for="post_office" class="form-label">Post Office</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="post_office" class="form-control" placeholder="Post Office" required
                                           value="{{ old('post_office') }}" autocomplete="post_office" autofocus />
                                </div>
                            </div>
                            <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                <label for="zip_code" class="form-label">Zip Code</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                    <input type="text" name="zip_code" class="form-control" placeholder="Zip Code" required
                                           value="{{ old('zip_code') }}" autocomplete="zip_code" autofocus />
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 form-check input_field animate__animated animate__bounceInRight">
                            <input type="checkbox" class="form-check-input" id="cb1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="cb1">I agree to the terms and conditions</label>
                        </div>
                        
                        <div class="mb-3 form-check input_field animate__animated animate__bounceInLeft">
                            <input type="checkbox" class="form-check-input" id="cb1" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="cb1">I agree to the terms and conditions</label>
                        </div>
                        <button type="submit" class="btn btn-warning w-100 animate__animated animate__bounceIn">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
