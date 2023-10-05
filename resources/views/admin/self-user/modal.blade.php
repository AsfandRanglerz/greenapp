<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="employeeDetailsLabel"><span class="fa fa-user"></span> - Individual Details
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="fa fa-times"></span>
            </button>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col-12 mb-sm-3 mb-2 text-center">
                    <img src="{{ asset('') . '' . $data->image }}" alt="" height="90" width="90"
                        class="rounded-circle object-contain">
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Name</label>
                    <input type="text" value="{{ $data->name }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Email</label>
                    <input type="text" value="{{ $data->email }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Phone</label>
                    <input type="text" value="{{ $data->phone }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Nationality</label>
                    <input type="text" value="{{ $data->nationality }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Religion</label>
                    <input type="text" value="{{ $data->religion }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Data-Of-birth</label>
                    <input type="text" value="{{ $data->dob }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="position">Position</label>
                    <input type="text" id="position" value="{{ $data->position }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="person_code">Person Code</label>
                    <input type="text" id="person_code" value="{{ $data->person_code }}" class="form-control"
                        readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="pob">Place Of Birth</label>
                    <input type="text" id="pob" value="{{ $data->pob }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="join_date">Joining Date</label>
                    <input type="date" id="join_date" value="{{ $data->join_date }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="religion">Religion</label>
                    <input type="text" id="religion" value="{{ $data->religion }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Marital Status</label>
                    <input type="text" value="{{ $data->marital_status }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Gender<span class="required"> *</span></label>
                    <input type="text" value="{{ $data->gender }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Father's Name<span class="required"> *</span></label>
                    <input type="text" class="form-control" value="{{ $data->father_name }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Mother's Name</label>
                    <input type="text" class="form-control" value="{{ $data->mother_name }}"readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Passport Number</label>
                    <input type="text" class="form-control" value="{{ $data->passport_number }}"readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Unified Number</label>
                    <input type="text" class="form-control" value="{{ $data->unified_number }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Emirates ID Number</label>
                    <input type="text" class="form-control" value="{{ $data->emirate_id_number }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Work Permit Number</label>
                    <input type="text" class="form-control" value="{{ $data->work_permit_number }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Residence File Number</label>
                    <input type="text" class="form-control" value="{{ $data->residence_no }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Health Insurance Card Number</label>
                    <input type="text" class="form-control" value="{{ $data->insurance_no }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Salary Details</label>
                    <input type="text" class="form-control" value="{{ $data->salary_detail }}" readonly>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn-bg" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
