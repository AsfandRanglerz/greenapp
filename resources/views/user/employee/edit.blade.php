@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-user"></span> - Edit Employee Details</p>
            <form action="{{ route('employee.update', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="{{ asset($data['image']) }}" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" type="file" name="image" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userName">Name<span class="required"> *</span></label>
                        <input id="userName" type="text" name="name" value="{{ $data['name'] }}" class="form-control"
                            placeholder="Enter Employee Name" >
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date Of Birth<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="date" name="dob"value="{{ $data['dob'] }}" placeholder="dd.mm.yyyy"
                                class="form-control date-of-birth">
                        </div>
                        @error('dob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nationality<span class="required"> *</span></label>

                        <select name="nationality" id="nationality" class="form-control">
                            <option value=""></option>

                            @foreach($data['countries'] as $country)

                            <option value="{{ $country->name }}" {{ $data['nationality'] == $country->name ? 'selected' : ''}}>{{ $country->name }}</option>
                         @endforeach

                        </select>
                        @error('nationality')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Religion<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="religion" value="{{ $data['religion'] }}"
                            placeholder="Enter Religion">
                        @error('religion')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userPhone">Phone Number<span class="required"> *</span></label>
                        <input id="userPhone" type="number" name="phone" value="{{ $data['phone'] }}"
                            class="form-control" placeholder="Enter Phone Number">
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userEmail">Email<span class="required"> *</span></label>
                        <input id="userEmail" type="email" name="email" value="{{ $data['email'] }}"
                            class="form-control" placeholder="Enter Your Email" readonly>
                        @error('email')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                        <button type="submit" class="btn-bg">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            /*single-select-dropdowns*/
            $('#nationality').select2({
                placeholder: 'Select Country'
            });
            /*single-select-dropdowns*/
            /*Avatar upload*/
            var readURL = function(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function(e) {
                        $('#uploadedImage').attr('src', e.target.result);
                        $('.header-profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function() {
                readURL(this);
            });

            $(".upload-button").on('click', function() {
                $(this).siblings('.file-upload').click();
            });
            /*Avatar upload*/
        });
    </script>
@endsection
