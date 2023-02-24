<!DOCTYPE html>
<html>

@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-question-circle"></span> - Inquiries</p>
            <form action="{{ route('user.inquiry.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-question-circle"></span> - Employee Inquiry</h6>
                    </div>
                    <div class="form-group col-12">
                        <label>Inquiry</label>
                        <textarea type="text" name="question" placeholder="Enter Your Inquiry ..." value="{{ old('question') }}"
                            class="form-control" rows="5"></textarea>
                    </div>
                    @error('question')
                        <div class="text-danger p-2">{{ $message }}</div>
                    @enderror
                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                        <button type="submit" class="btn-bg">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    </div>

    </div>
@endsection
