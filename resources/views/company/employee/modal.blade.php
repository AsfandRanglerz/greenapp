<div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="employeeDetailsLabel"><span class="fa fa-user"></span> - Employee Details
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span class="fa fa-times"></span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                        <div class="col-12 mb-sm-3 mb-2 text-center">
                            <img src="{{ asset('') . '' . $data->image }}" alt="" height="90"
                                width="90" class="rounded-circle">
                        </div>
                        <div class="col-sm-6 mb-sm-3 mb-2">
                            <label>Name</label>
                            <input type="text" value="{{ $data->name }}" class="form-control" readonly>
                        </div>
                        <div class="col-sm-6 mb-sm-3 mb-2">
                            <label>Email</label>
                            <input type="text" value="{{ $data->email }}" class="form-control" readonly>
                        </div>
                        <div class="col-sm-6 mb-sm-3 mb-2">
                            <label>Phone</label>
                            <input type="text" value="{{ $data->phone }}" class="form-control" readonly>
                        </div>
                        <div class="col-sm-6 mb-sm-3 mb-2">
                            <label>Nationality</label>
                            <input type="text" value="{{ $data->nationality }}" class="form-control" readonly>
                        </div>
                        <div class="col-sm-6 mb-sm-3 mb-2">
                            <label>Religion</label>
                            <input type="text" value="{{ $data->religion }}" class="form-control" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label>Data-Of-birth</label>
                            <input type="text" value="{{ $data->dob }}" class="form-control" readonly>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-bg" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


