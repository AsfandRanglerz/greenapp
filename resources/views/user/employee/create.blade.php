@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-user"></span> - Add Employee Details</p>
            <form action="{{ route('employee.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div class="form-group col-12">
                        <div class="avatar-wrapper">
                            <img class="profile-pic" id="uploadedImage" src="" />
                            <div class="upload-button">
                                <span class="fa fa-plus profile-img-uploaded-icon"></span>
                            </div>
                            <input class="file-upload" name="image" type="file" accept="image/*" />
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userName">Name<span class="required"> *</span></label>
                        <input id="userName" type="text" name="name" value="{{old('name')}}" class="form-control"
                            placeholder="Enter Employee Name">
                        @error('name')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Date Of Birth<span class="required"> *</span></label>
                        <div class="input-group">
                            <input type="text"  name="dob" value="{{old('dob')}}" placeholder="dd.mm.yyyy"
                                class="form-control datepicker date-of-birth">
                            <div class="input-group-prepend">
                                <small class="input-group-text"><span class="fa fa-calendar"></span></small>
                            </div>
                        </div>
                        @error('dob')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Nationality<span class="required"> *</span></label>
                        <select id="selectCountry" name="nationality" value="{{old('nationality')}}"class="form-control">
                            <option disabled selected>Please Select a Country</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Iran">Iran</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="India">India</option>
                        </select>
                        @error('nationality')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label>Religion<span class="required"> *</span></label>
                        <input type="text" class="form-control" name="religion" value="{{old('religion')}}" placeholder="Enter Religion">
                        @error('religion')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userPhone">Phone Number<span class="required"> *</span></label>
                        <input id="userPhone" type="number" name="phone" value="{{old('phone')}}" class="form-control"
                            placeholder="Enter Phone Number">
                        @error('phone')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="userEmail">Email<span class="required"> *</span></label>
                        <input id="userEmail" type="email" name="email" value="{{old('email')}}" class="form-control"
                            placeholder="Enter Your Email">
                        @error('email')
                            <div class="text-danger p-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                        <button type="submit" class="btn-bg">Save</button>
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
            /*datepicker*/
            $('.date-of-birth').datepicker({
                format: 'dd-mm-yyyy',
                autoclose: true,
            });
            $('.date-of-birth + .input-group-prepend').click(function() {
                $(".date-of-birth").focus();
            });
            /*datepicker*/
            /*single-select-dropdowns*/
            $('#selectCountry').select2({
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
