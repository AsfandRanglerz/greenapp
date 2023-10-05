<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="employeeDetailsLabel"><span class="fa fa-user"></span> - Company Details
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
                    <label>Company Name</label>
                    <input type="text" value="{{ $data->name }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Email</label>
                    <input type="text" value="{{ $data->email }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Phone Number</label>
                    <input type="text" value="{{ $data->phone }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>MOHRE Company Code</label>
                    <input type="text" value="{{ $data->mohre_no }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Po Box</label>
                    <input type="text" value="{{ $data->po_box }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Daman Police Number</label>
                    <input type="text" value="{{ $data->daman_police_number }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="position">Daman Customer Number</label>
                    <input type="text" id="position" value="{{ $data->daman_customer_number }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="person_code">Other Insurance Policy Number</label>
                    <input type="text" id="person_code" value="{{ $data->other_insurance_policy_number }}" class="form-control"
                        readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="pob">E Channel Issue Date</label>
                    <input type="text" id="pob" value="{{ $data->e_channel_issue_date }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="join_date">E Channel Expiry Date</label>
                    <input type="date" id="join_date" value="{{ $data->e_channel_expiry_date }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label for="religion">Trade License No</label>
                    <input type="text" id="religion" value="{{ $data->license_no }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Issue Date</label>
                    <input type="text" value="{{ $data->license_issue_date }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Expiry Date<span class="required"> *</span></label>
                    <input type="text" value="{{ $data->license_expiry_date }}" class="form-control" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>ICP Establishment Card No<span class="required"> *</span></label>
                    <input type="text" class="form-control" value="{{ $data->establishment_no }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Issue Date</label>
                    <input type="text" class="form-control" value="{{ $data->establishment_issue_date }}"readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Expiry Date</label>
                    <input type="text" class="form-control" value="{{ $data->establishment_expiry_date }}"readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Tenancy</label>
                    <input type="text" class="form-control" value="{{ $data->tenancy }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Issue Date</label>
                    <input type="text" class="form-control" value="{{ $data->tenancy_issue_date }}" readonly>
                </div>
                <div class="col-lg-4 col-md-6 mb-sm-3 mb-2">
                    <label>Expiry Date</label>
                    <input type="text" class="form-control" value="{{ $data->tenancy_expiry_date }}" readonly>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn-bg" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>
</div>
