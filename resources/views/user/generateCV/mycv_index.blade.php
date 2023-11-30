@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            @if (Auth::guard('web')->user()->emp_type == 'self')
            <h4>Dashboard</h4>
            @else
            <h4>Employee Dashboard</h4>
            @endif
            <p><span class="fa fa-user"></span> - My CV</p>
            <form action="{{route('user.add-cv-details',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    {{-- @dd($data) --}}
                    <div class="form-group col-md-12">
                        <label for="">Carrier Objectives<span class="required"> *</span></label>
                        <textarea   type="text" name="carrier_objectives"
                            class="form-control" placeholder="Objectives" rows="4" >{{$data->carrier_objectives}}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Education Details<span class="required"> *</span></label>
                        <textarea id="userName" type="text" name="education_details"
                            class="form-control" placeholder="Enter Your Education" rows="4">{{$data->education_details}}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="userEmail">Experience<span class="required"> *</span></label>
                        <textarea id="userEmail" type="text" name="experience"
                            class="form-control" placeholder="Enter Your Experience" rows="4">{{$data->experience}}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="userEmail">Skills<span class="required"> *</span></label>
                        <textarea id="userEmail" type="text" name="skills"
                            class="form-control" placeholder="Enter Your Experience" rows="4">{{$data->skills}}</textarea>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Do you have your driving license ?<span class="required"> *</span></label>
                        <select name="license" class="form-control">
                            {{-- <option value="" hidden></option> --}}
                            <option value="Yes"  {{ old('license') == "Yes" ||  $data->license =="Yes" ? "selected" : '' }}>Yes</option>
                            <option value="No" {{ old('license') == "No" ||  $data->license =="No" ? "selected" : '' }}>No</option>
                        </select>
                    </div>

                    <div class="form-group col-12 text-right">
                        <button class="btn btn-success form-control" type="submit"><span class="fa fa-edit mr-2"></span>Add</button>
                    </div>
                </div>
            </form>
    </div>
    </div>
@endsection
@section('script')
    <script type="text/javascript">
        $(function() {
            $(document).on('click', '#editProfButton', function(event) {
                event.preventDefault();
                $(this).closest('form').find('input, select').removeAttr('disabled');
                $(this).closest('form').find('.upload-button').css('cursor', 'pointer');
            });
            /*single-select-dropdowns*/
            $('#selReligion').select2({
                placeholder: 'Lisence'
            });
            $('#martialStatus').select2({
                placeholder: 'Select Martial Status'
            });
            $('#selCountry').select2({
                placeholder: 'Select Country'
            });
            $('#selGender').select2({
                placeholder: 'Select Gender'
            });
            $('#salDetails').select2({
                placeholder: 'Salary Details'
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
        });
        /*Avatar upload*/
    </script>
@endsection
