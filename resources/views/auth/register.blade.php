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
                    
                            <fieldset class="mb-3 border p-3 animate__animated animate__bounceInRight">
                                <legend>Present Address</legend>
                                <div class="row">
                                    <div class="col-md-12 mb-3 input_field animate__animated animate__bounceInRight">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="text" class="form-control" name="present_area" id="present_area"
                                                   value="{{ old('present_area') }}" autocomplete="address" required />
                                            <label for="present_area">House No:'', Village/Area:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <div class="form-group">
                                            <label for="present_country">Country</label>
                                            <select class="form-select form-control" id="present_country" name="present_country">
                                                @foreach( get_country() as $country)
                                                    @if($country['name'] == 'Bangladesh')
                                                        <option value="{{$country['id']}}" selected>{{$country['name']}}</option>
                                                    @elseif(old('present_country') == $country['id'])
                                                        <option value="{{$country['id']}}" disabled>{{$country['name']}}</option>
                                                    @else
                                                        <option value="{{$country['id']}}" disabled
                                                        >{{$country['name']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <div class="form-group">
                                            <label for="division_id">Division</label>
                                            <select class="form-select form-control" id="division_id" name="division_id">
                                                <option value="0" disabled selected>Select Division</option>
                                                @foreach( get_division() as $division)
                                                    @if(old('division_id') == $division['id'])
                                                        <option value="{{$division['id']}}" >{{$division['name']}}</option>
                                                    @else
                                                        <option value="{{$division['id']}}">{{$division['name']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <div class="form-group">
                                            <label for="district_id">District</label>
                                            <select class="form-select form-control" id="district_id" name="district_id">
                                                <option value="" disabled selected>Select District</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <div class="form-group">
                                            <label for="police_station_id">Police Station</label>
                                            <select class="form-select form-control" id="police_station_id" name="police_station_id">
                                                <option value="" disabled selected>Select Police Station</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <div class="form-group">
                                            <label for="post_office_id">Post Office</label>
                                            <select class="form-select form-control" id="post_office_id"
                                                    name="post_office_id" data-post-code="">
                                                <option value="" disabled selected>Select Post Office</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <label for="post_code" class="form-label">Post Code</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="post_code" class="form-control" placeholder="Post Code" required
                                                   value="{{ old('post_code') }}" autocomplete="post_code" id="post_code" />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            
                            <div class="mb-3 form-check input_field animate__animated animate__bounceInRight">
                                <input type="checkbox" class="form-check-input" id="same_address" name="same_address"
                                {{ old('same_address') ? 'checked' : '' }}>
                                <label class="form-check-label text-danger" for="same_address">Same as Present Address</label>
                            </div>
                            
                            <fieldset id="permanent_address_box" class="mb-3 border p-3 animate__animated animate__bounceInRight">
                                <div class="row">
                                    <div class="col-md-12 mb-3 input_field animate__animated animate__bounceInRight">
                                        <div class="form-floating form-floating-custom mb-3">
                                            <input type="text" class="form-control" name="permanent_area" id="permanent_area"
                                                   value="{{ old('permanent_area') }}" autocomplete="address" required />
                                            <label for="permanent_area">House No:'', Village/Area:</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <div class="form-group">
                                            <label for="permanent_country">Country</label>
                                            <select class="form-select form-control" id="permanent_country" name="permanent_country">
                                                @foreach( get_country() as $country)
                                                    @if($country['name'] == 'Bangladesh')
                                                        <option value="{{$country['id']}}" selected>{{$country['name']}}</option>
                                                    @elseif(old('permanent_country') == $country['id'])
                                                        <option value="{{$country['id']}}"
                                                                disabled>{{$country['name']}}</option>
                                                    @else
                                                        <option value="{{$country['id']}}" disabled
                                                        >{{$country['name']}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <label for="permanent_division" class="form-label">Division</label>
                                        <select class="form-select form-control" id="permanent_division_id" name="permanent_division_id">
                                            <option value="0" disabled selected>Select Division</option>
                                            @foreach( get_division() as $division)
                                                @if(old('permanent_division_id') == $division['id'])
                                                    <option value="{{$division['id']}}" >{{$division['name']}}</option>
                                                @else
                                                    <option value="{{$division['id']}}">{{$division['name']}}</option>
                                                @endif
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <label for="permanent_district" class="form-label">District</label>
                                        <select class="form-select form-control" id="permanent_district_id" name="permanent_district_id">
                                            <option value="" disabled selected>Select District</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <label for="permanent_police_station" class="form-label">Police Station</label>
                                        <select class="form-select form-control" id="permanent_police_station_id" name="permanent_police_station_id">
                                            <option value="" disabled selected>Select Police Station</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInRight">
                                        <label for="permanent_post_office" class="form-label">Post Office</label>
                                        <select class="form-select form-control" id="permanent_post_office_id" name="permanent_post_office_id" data-post-code="">
                                            <option value="" disabled selected>Select Post Office</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-3 input_field animate__animated animate__bounceInLeft">
                                        <label for="permanent_zip_code" class="form-label">Zip Code</label>
                                        <div class="input-group">
                                            <span class="input-group-text"><i class="fa fa-map-marker"></i></span>
                                            <input type="text" name="permanent_zip_code" class="form-control"
                                                   placeholder="Zip Code" required value="{{ old('permanent_zip_code') }}" autocomplete="zip_code" id="permanent_zip_code" />
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            
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
                    if (id)
                    {
                        $.ajax({
                            url: url,
                            type: "POST",
                            data: data(id),
                            success: function (res) {
                                $(targetElement).empty();
                                $(targetElement).append(defaultOption);
                                if (res && $.isEmptyObject(res) === false)
                                {
                                    console.log(res);
                                    $.each(res, function (key, value)
                                    {
                                        if(value.en_name !== undefined)
                                        {
                                            $(targetElement).append('<option value="' + value.id + '" data-post-code="' + value.code + '">' + value.en_name + '</option>');
                                        }else{
                                            $(targetElement).append('<option value="' + value.id + '" data-post-code="' + value.code + '">' + value.name + '</option>');
                                        }
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

            loadAddressData('#division_id', "{{ route('get.district') }}", function(id) { return { division_id: id, _token: "{{csrf_token() }}" }; }, '#district_id', '<option value="" disabled selected>Select District</option>');
            loadAddressData('#district_id', "{{route('get.police_station')}}", function (id) { return { district_id:
                id, _token: "{{csrf_token()}}" }; }, '#police_station_id', '<option value="" disabled selected>Select Police Station</option>');
            loadAddressData('#police_station_id', "{{route('get.post_office')}}", function (id) { return { police_station_id: id, _token:
                    "{{
            csrf_token() }}" };}, '#post_office_id', '<option value="" disabled selected>Select Post Office</option>');

            // Permanent address fields
            loadAddressData('#permanent_division_id', "{{ route('get.district') }}", function(id) { return { division_id: id, _token: "{{ csrf_token() }}" }; }, '#permanent_district_id', '<option value="" disabled selected>Select District</option>');
            loadAddressData('#permanent_district_id', "{{ route('get.police_station') }}", function(id) { return { district_id: id, _token: "{{ csrf_token() }}" }; }, '#permanent_police_station_id', '<option value="" disabled selected>Select Police Station</option>');
            loadAddressData('#permanent_police_station_id', "{{ route('get.post_office') }}", function(id) { return { police_station_id: id, _token: "{{ csrf_token() }}" }; }, '#permanent_post_office_id', '<option value="" disabled selected>Select Post Office</option>');
            

            $('#post_office_id').change(function () {
                var selectedOption = $(this).find(':selected');
                var post_code = selectedOption.data('post-code') || ''; // Fallback to empty string if undefined
                $('#post_code').val(post_code).attr('readonly', 'readonly');
            });
            // Permanent post code
            $('#permanent_post_office_id').change(function () {
                var selectedOption = $(this).find(':selected');
                var post_code = selectedOption.data('post-code') || ''; // Fallback to empty string if undefined
                $('#permanent_zip_code').val(post_code).attr('readonly', 'readonly');
            });
            
            
            $('#same_address').change(function () {
                $('#permanent_address_box').toggle(!$(this).is(':checked'));
            });
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

