<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Company Dashboard</h4>
            <p><span class="fa fa-book"></span> - Documents/Attachments</p>
            <form action="{{ route('employeeDocument.update',$data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-book"></span> - Employee Documents</h6>

                    </div>
                    {{-- <input type="hidden" name="employee_id" value="{{ $empId }}"> --}}
                    <div class="form-row position-relative doc-fields" id="docField1">
                        <div class="form-group col-md-6">
                            <label>Select Document Type<span class="required"> *</span></label>
                            <select id="selectDocument" class="form-control category" name="doc_type"
                            value="{{ $data['doc_type'] }}" required>

                            <option value="" selected disabled>Select Document</option>
                            <option value="Passport"
                                {{ $data['doc_type'] == 'Passport' ? 'selected' : '' }}>Passport
                            </option>
                            <option value="Identitiy Card"
                                {{ $data['doc_type'] == 'Identitiy Card' ? 'selected' : '' }}>
                                Identitiy Card</option>
                            <option value="Visa"
                                {{ $data['doc_type'] == 'Visa' ? 'selected' : '' }}>Visa</option>
                            <option value="Insurance Card"
                                {{ $data['doc_type'] == 'Insurance Card' ? 'selected' : '' }}>
                                Insurance Card</option>
                            <option value="Work Permit"
                                {{ $data['doc_type'] == 'Work Permit' ? 'selected' : '' }}>Work
                                Permit</option>
                            <option value="Driving License"
                                {{ $data['doc_type'] == 'Driving License' ? 'selected' : '' }}>
                                Driving License</option>
                            <option value="Other"
                                {{ $data['doc_type'] == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                            @error('doc_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label>Select File<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file" value="{{ $data['file'] }}" style="line-height: 1">
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                            @error('file')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-show d-none">
                            <label>Document Name<span class="required"> *</span></label>
                            <input type="text" name="doc_name[]" value="{{ old('doc_name[]') }}"
                                placeholder="Enter Document Name" class="form-control" required>
                            @error('doc_name')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Issue Date<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="date" name="issue_date" placeholder="dd.mm.yyyy"
                                value="{{ $data['issue_date'] }}" class="form-control issue-date" required>
                            </div>
                            @error('issue_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-none">
                            <label>Expiry Date<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="date" name="expiry_date" placeholder="dd.mm.yyyy"
                                value="{{ $data['expiry_date'] }}" class="form-control expire-date" required>
                            </div>
                            @error('expiry_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-12 w-100">
                            <label>Comments</label>
                            <textarea type="text" name="comment" placeholder="Enter Your Comments ..." class="form-control" rows="5">{{ $data['comment'] ?? '' }}</textarea>
                        </div>
                        <div class="form-group col-12">
                            <a type="button" class="btn btn-danger remove-btn" style="position: unset"><span class="fa fa-trash mr-2"></span>Remove</a>
                        </div>
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
            $(document).on('change', '#selectDocument', function() {
                if($(this).val()=='Other') {
                    $('.other-show').removeClass('d-none');
                    $('.other-none').addClass('d-none');
                    $('.other-none').addClass('d-none');
                } else {
                    $('.other-show').addClass('d-none');
                    $('.other-none').removeClass('d-none');
                    $('.other-none').removeClass('d-none');
                }
            });

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
