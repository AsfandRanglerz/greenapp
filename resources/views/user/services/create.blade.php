<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            @if (Auth::guard('web')->user()->emp_type == 'self')
                <h4>Dashboard</h4>
            @else
                <h4>Employee Dashboard</h4>
            @endif

            <p><span class="fab fa-servicestack"></span> - Services</p>
            <form action="{{ route('user.request-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        @if (Auth::guard('web')->user()->emp_type == 'self')
                        <h6><span class="fa fa-bell"></span> - Requests</h6>
                        @else
                        <h6><span class="fa fa-book"></span> - Employee Documents</h6>
                        @endif

                        {{-- <a type="button" class="mb-3 btn btn-success add-btn"><span class="fa fa-plus mr-2"></span>Add
                            More</a> --}}
                    </div>
                    <div class="form-row position-relative doc-fields" id="docField1">
                        {{-- @if (Auth::guard('web')->user()->emp_type == 'self') --}}
                        <div class="form-group col-md-6">
                            <label>Select Request Type<span class="required"> *</span></label>
                            <select id="selectDocument" name="req_type" value="{{ old('doc_type[]') }}"
                                class="form-control select_request" required>
                                <option value="" selected disabled>Select Request</option>
                                <option value="Request to Apply for Golden Visa Nomination">Request to Apply for Golden Visa Nomination</option>
                                <option value="Request for Documents Attestation">Request for Documents Attestation</option>
                                <option value="Request for Legal Translation">Request for Legal Translation</option>
                                <option value="Request for Equivalency of Abroad Certificate">Request for Equivalency of Abroad Certificate</option>
                                <option value="Request for Visit Visa Services">Request for Visit Visa Services</option>
                                <option value="Request to process housemaid visa application">Request to process housemaid visa application</option>
                                <option value="Traffic services">Traffic services</option>
                                <option value="New Business setup inquiry">New Business setup inquiry</option>
                                <option value="Request for Vehicle Insurance">Request for Vehicle Insurance</option>
                                <option value="other">Other</option>
                            </select>
                            @error('doc_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group col-md-6">
                            <label>Select File</label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file" value="{{ old('file') }}"
                                    style="line-height: 1">
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                            @error('file')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 other-show d-none">
                            <label>Other Request<span class="required"> *</span></label>
                            <input type="text" name="req_type"
                                placeholder="Enter Request" class="form-control">
                            @error('req_type')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                            <div class="form-group w-100">
                                <label>Comments</label>
                                <textarea required type="text" name="comment" placeholder="Enter Your Comments ..." value="{{ old('comment[]') }}"
                                    class="form-control" rows="5"></textarea>
                            </div>
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
<script>
    $('.select_request').on('change',function(){
        if($(this).val()=='other'){
            $('.other-show').removeClass('d-none');
        }else{
            $('.other-show').addClass('d-none');
        }
    });
</script>

@endsection
