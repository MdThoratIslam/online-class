@extends('auth.index')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card animate__animated animate__fadeInDown">
                    <div class="card-header text-center">
                        <h4>Registration Form</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        <input type="text" name="first_name" class="form-control" placeholder="First Name" required
                                               value="{{ old('first_name') }}" autocomplete="first_name" autofocus />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-user"></i></span>
                                        <input type="text" name="last_name" class="form-control" placeholder="Last Name" required
                                               value="{{ old('last_name') }}" autocomplete="last_name" autofocus />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-envelope"></i></span>
                                        <input type="email" name="email" class="form-control" placeholder="Email" required
                                               value="{{ old('email') }}" autocomplete="email" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                    <label for="phone" class="form-label">Phone</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone" required
                                               value="{{ old('phone') }}" autocomplete="phone" />
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
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-lock"></i></span>
                                        <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required
                                               autocomplete="new-password" />
                                    </div>
                                </div>
                            </div>
                            
                            
                            <div class="row">
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                    <div class="form-floating form-floating-custom mb-3">
                                        <input type="text" class="form-control" name="present_area" id="present_area"
                                               value="{{ old('present_area') }}" autocomplete="address" required />
                                        <label for="present_area">House No:'', Village/Area:</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                    <label for="present_city" class="form-label">City</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" name="present_city" class="form-control" placeholder="City" required
                                               value="{{ old('present_city') }}" autocomplete="city" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                    <div class="form-group">
                                        <label for="present_country">Country</label>
                                        <select class="form-select form-control" id="present_country" name="present_country">
                                            <option value="1">Country 1</option>
                                            <option value="2">Country 2</option>
                                            <option value="3">Country 3</option>
                                            <option value="4">Country 4</option>
                                            <option value="5">Country 5</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
{{--                                    <label for="present_division" class="form-label">Division</label>--}}
{{--                                    <div class="input-group">--}}
{{--                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>--}}
{{--                                        <input type="text" name="present_division" class="form-control" placeholder="Division" required--}}
{{--                                               value="{{ old('present_division') }}" autocomplete="division" />--}}
{{--                                    </div>--}}
                                    <div class="form-group">
                                        <label for="division_id">Division</label>
                                        <select class="form-select form-control" id="division_id" name="division_id">
                                            <option value="" disabled selected>Select Division</option>
{{--                                            @foreach($divisions as $division)--}}
{{--                                                <option value="{{ $division->id }}">{{ $division->en_name }}</option>--}}
{{--                                            @endforeach--}}
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
{{--                                    <label for="present_district" class="form-label">District</label>--}}
{{--                                    <div class="input-group">--}}
{{--                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>--}}
{{--                                        <input type="text" name="present_district" class="form-control" placeholder="District" required--}}
{{--                                               value="{{ old('present_district') }}" autocomplete="district" />--}}
{{--                                    </div>--}}
                                    <div class="form-group"
                                        <label for="district_id">District</label>
                                        <select class="form-select form-control" id="district_id" name="district_id">
                                            <option value="" disabled selected>Select District</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                    <label for="present_police_station" class="form-label">Police Station</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" name="present_police_station" class="form-control" placeholder="Police Station" required
                                               value="{{ old('present_police_station') }}" autocomplete="police_station" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                    <label for="present_post_office" class="form-label">Post Office</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" name="present_post_office" class="form-control" placeholder="Post Office" required
                                               value="{{ old('present_post_office') }}" autocomplete="post_office" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                    <label for="present_zip_code" class="form-label">Zip Code</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                        <input type="text" name="present_zip_code" class="form-control" placeholder="Zip Code" required
                                               value="{{ old('present_zip_code') }}" autocomplete="zip_code" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3 form-check input_field animate__animated animate__bounceInRight">
                                <input type="checkbox" class="form-check-input" id="same_address" name="same_address" {{ old('same_address') ? 'checked' : '' }}>
                                <label class="form-check-label" for="same_address">Same as Present Address</label>
                            </div>
                            
                            <div id="permanent_address_box">
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="text" class="form-control" name="permanent_area" id="permanent_area"
                                                   value="{{ old('permanent_area') }}" autocomplete="address" required />
                                            <label for="permanent_area">House No:'', Village/Area:</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <label for="permanent_city" class="form-label">City</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="permanent_city" class="form-control" placeholder="City" required
                                                   value="{{ old('permanent_city') }}" autocomplete="city" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <div class="form-group">
                                            <label for="permanent_country">Country</label>
                                            <select class="form-select form-control" id="permanent_country" name="permanent_country">
                                                <option value="1">Country 1</option>
                                                <option value="2">Country 2</option>
                                                <option value="3">Country 3</option>
                                                <option value="4">Country 4</option>
                                                <option value="5">Country 5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <label for="permanent_division" class="form-label">Division</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="permanent_division" class="form-control" placeholder="Division" required
                                                   value="{{ old('permanent_division') }}" autocomplete="division" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <label for="permanent_district" class="form-label">District</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="permanent_district" class="form-control" placeholder="District" required
                                                   value="{{ old('permanent_district') }}" autocomplete="district" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <label for="permanent_police_station" class="form-label">Police Station</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="permanent_police_station" class="form-control" placeholder="Police Station" required
                                                   value="{{ old('permanent_police_station') }}" autocomplete="police_station" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <label for="permanent_post_office" class="form-label">Post Office</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="permanent_post_office" class="form-control" placeholder="Post Office" required
                                                   value="{{ old('permanent_post_office') }}" autocomplete="post_office" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <label for="permanent_zip_code" class="form-label">Zip Code</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="permanent_zip_code" class="form-control" placeholder="Zip Code" required
                                                   value="{{ old('permanent_zip_code') }}" autocomplete="zip_code" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3 form-check input_field animate__animated animate__bounceInRight">
                                <input type="checkbox" class="form-check-input" id="terms_conditions" {{ old('terms_conditions') ? 'checked' : '' }} required>
                                <label class="form-check-label" for="terms_conditions">I agree to the terms and conditions</label>
                            </div>
                            <button type="submit" class="btn btn-warning w-100 animate__animated animate__bounceIn">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('authScripts')
    <script>
        $(document).ready(function () {
            function loadAddressData(element, url, data, targetElement, defaultOption) {
                $(element).change(function () {
                    var id = $(this).val();
                    if (id) {
                        $.ajax({
                            url: url,
                            type: "POST",
                            data: data(id),
                            success: function (res) {
                                $(targetElement).empty();
                                $(targetElement).append(defaultOption);
                                if (res && $.isEmptyObject(res) === false) {
                                    $.each(res, function (key, value) {
                                        $(targetElement).append('<option value="' + value.id + '" data-post-code="' + value.code + '">' + value.en_name + '</option>');
                                    });
                                } else {
                                    $(targetElement).append('<option value="">No Data found</option>');
                                }
                            },
                            error: function (xhr, status, error) {
                                console.error("Error: " + error);
                                console.error("Status: " + status);
                                console.dir(xhr);
                            }
                        });
                    } else {
                        $(targetElement).empty();
                    }
                });
            }

            // Current address fields
            loadAddressData('#division_id', "", function (id) { return { division_id: id, _token: "{{ csrf_token() }}" }; }, '#district_id', '<option value="" disabled selected>Select District</option>');
            loadAddressData('#district_id', "", function (id) { return { district_id: id, _token: "{{ csrf_token() }}" }; }, '#police_station_id', '<option value="" disabled selected>Select Police Station</option>');
            loadAddressData('#police_station_id', "", function (id) { return { police_station_id: id, _token: "{{ csrf_token() }}" }; }, '#post_office_id', '<option value="" disabled selected>Select Post Office</option>');

            // Auto fill post code for current address
            $('#post_office_id').change(function () {
                var selectedOption = $(this).find(':selected');
                var post_code = selectedOption.data('post-code');
                $('#post_code').val(post_code !== undefined ? post_code : '');
            });

            // Handle the same address checkbox
            $('#same_address').change(function () {
                $('#permanent_address_box').toggle(!$(this).is(':checked'));
            });

            // Handle identification type dropdown
            $('#identification_type').change(function () {
                let identification_type = $(this).val();
                $('#nid_number, #dob, #driving_license_number, #passport_number').parent().parent().hide();
                $('#identification_document').parent().parent().hide().removeAttr('required accept');

                if (identification_type == 1) {
                    $('#nid_number').parent().parent().show();
                    $('#identification_document').parent().parent().show().attr('required', 'required').attr('accept', 'pdf');
                } else if (identification_type == 2) {
                    $('#passport_number').parent().parent().show();
                    $('#identification_document').parent().parent().show().attr('required', 'required').attr('accept', 'pdf');
                } else if (identification_type == 3) {
                    $('#driving_license_number').parent().parent().show();
                    $('#identification_document').parent().parent().show().attr('required', 'required').attr('accept', 'pdf');
                } else if (identification_type == 4) {
                    $('#dob').parent().parent().show();
                    $('#identification_document').parent().parent().show().attr('required', 'required').attr('accept', 'pdf');
                }
            }).change();
        });
    </script>
@endsection

