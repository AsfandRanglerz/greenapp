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

            <p><span class="fa fa-book"></span> - Receipts</p>
            <form action="{{ route('user.update-receipt', $receipts->id) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="form-row col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group col-12 d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        @if (Auth::guard('web')->user()->emp_type == 'self')
                            <h6><span class="fa fa-book"></span> - Receipts</h6>
                        @else
                            <h6><span class="fa fa-book"></span> - Employee Receipts</h6>
                        @endif
                    </div>
                    <div class="form-row position-relative doc-fields" id="docField1">

                        <div class="form-group col-md-6">
                            <label>Select File<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file" value="{{ $receipts->file }}"
                                    style="line-height: 1">
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                            @error('file')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 receipts-show">
                            <label>Receipts<span class="required"> *</span></label>
                            <select id="selectReceipt" name="receipt" class="form-control">
                                <option value="" selected disabled>Select Receipt</option>
                                <option
                                    value="Preapproval of work permit receipt"{{ $receipts->receipt == 'Preapproval of work permit receipt' ? 'selected' : '' }}>
                                    Preapproval of work permit</option>
                                <option
                                    value="Dubai Insurance receipts"{{ $receipts->receipt == 'Dubai Insurance receipts' ? 'selected' : '' }}>
                                    Dubai Insurance</option>
                                <option
                                    value="Preapproval work permit fees receipt"{{ $receipts->receipt == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>
                                    Preapproval work permit fees</option>
                                <option
                                    value="Work permit Renewal Fees Receipt"{{ $receipts->receipt == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>
                                    Work permit Renewal Fees</option>
                                <option
                                    value="Entry Visa Application Receipt"{{ $receipts->receipt == 'Entry Visa Application Receipt' ? 'selected' : '' }}>
                                    Entry Visa Application</option>
                                <option
                                    value="Change of Visa Status Application"{{ $receipts->receipt == 'Change of Visa Status Application' ? 'selected' : '' }}>
                                    Change of Visa Status Application</option>
                                <option value="Medical"{{ $receipts->receipt == 'Medical' ? 'selected' : '' }}>Medical
                                </option>
                                <option value="Tawjeeh"{{ $receipts->receipt == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh
                                </option>
                                <option
                                    value="Heath Insurance"{{ $receipts->receipt == 'Heath Insurance' ? 'selected' : '' }}>
                                    Health Insurance</option>
                                <option
                                    value="Emirates ID Application"{{ $receipts->receipt == 'Emirates ID Application' ? 'selected' : '' }}>
                                    Emirates ID Application</option>
                                <option
                                    value="Residency Visa Application"{{ $receipts->receipt == 'Residency Visa Application' ? 'selected' : '' }}>
                                    Residency Visa Application</option>
                                <option value="Visa Fines"{{ $receipts->receipt == 'Visa Fines' ? 'selected' : '' }}>Visa
                                    Fines</option>
                                <option
                                    value="Emirates ID Fines"{{ $receipts->receipt == 'Emirates ID Fines' ? 'selected' : '' }}>
                                    Emirates ID Fines</option>
                                <option value="Other fines"{{ $receipts->receipt == 'Other fines' ? 'selected' : '' }}>
                                    Other fines</option>
                                <option
                                    value="Health Insurance Fines"{{ $receipts->receipt == 'Health Insurance Fines' ? 'selected' : '' }}>
                                    Health Insurance Fines</option>
                                <option
                                    value="Immigration Application"{{ $receipts->receipt == 'Immigration Application' ? 'selected' : '' }}>
                                    Immigration Application</option>
                                <option
                                    value="MOHRE Application"{{ $receipts->receipt == 'MOHRE Application' ? 'selected' : '' }}>
                                    MOHRE Application</option>
                            </select>
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
