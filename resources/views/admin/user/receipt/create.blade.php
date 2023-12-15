@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <style>
            #docField1 .remove-btn {
                display: none;
            }
        </style>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ url()->previous() }}">Back</a>
                    {{-- <p>{{$id}}</p> --}}
                    <form id="add_student" action="{{ route('store-receipt',$id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Add Document<button type="button"
                                            class="btn btn-success add-btn" style="position: absolute;right: 2.5rem"><span
                                                class="fa fa-plus mr-2"></span>Add More</button></h4>
                                    <div id="docField1" class="doc-fields">
                                        <div class="row mx-0 px-4">
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 receipts-show">
                                                <div class="form-group mb-2">
                                                    <label>Receipts<span class="required"> *</span></label>
                                                    <select id="selectReceipt" name="receipt[]" class="form-control">
                                                        <option value="" selected disabled>Select Receipt</option>
                                                        <option value="Preapproval of work permit receipt">Preapproval of
                                                            work permit</option>
                                                        <option value="Dubai Insurance receipts">Dubai Insurance</option>
                                                        <option value="Preapproval work permit fees receipt">Preapproval
                                                            work permit fees</option>
                                                        <option value="Work permit Renewal Fees Receipt">Work permit
                                                            Renewal Fees</option>
                                                        <option value="Entry Visa Application Receipt">Entry Visa
                                                            Application</option>
                                                        <option value="Change of Visa Status Application">Change of Visa
                                                            Status Application</option>
                                                        <option value="Medical">Medical</option>
                                                        <option value="Tawjeeh">Tawjeeh</option>
                                                        <option value="Heath Insurance">Heath Insurance</option>
                                                        <option value="Emirates ID Application">Emirates ID Application
                                                        </option>
                                                        <option value="Residency Visa Application">Residency Visa
                                                            Application</option>
                                                        <option value="Visa Fines">Visa Fines</option>
                                                        <option value="Emirates ID Fines">Emirates ID Fines</option>
                                                        <option value="Other fines">Other fines</option>
                                                        <option value="Health Insurance Fines">Health Insurance Fines
                                                        </option>
                                                        <option value="Immigration Application">Immigration Application
                                                        </option>
                                                        <option value="MOHRE Application">MOHRE Application</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                                <div class="form-group mb-2">
                                                    <label>Select File<span class="required"> *</span></label>
                                                    <input type="file" name="file[]" id="file"
                                                        value="{{ old('file[]') }}" class="form-control" required>
                                                    @error('file.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            {{-- <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Issue Date</label>
                                                    <input type="date" name="issue_date[]"
                                                        value="{{ old('issue_date[]') }}" id="issue_date"
                                                        class="form-control" placeholder="Issue Date">
                                                    @error('issue_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Expiry Date</label>
                                                    <input type="date" name="expiry_date[]"
                                                        value="{{ old('expiry_date[]') }}" id="expiry_date"
                                                        class="form-control" placeholder="Expiry Date">
                                                    @error('expiry_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div> --}}
                                        </div>

                                        <div class="row mx-0 px-4 py-4">
                                            <button type="button" class="btn btn-danger remove-btn"><span
                                                    class="fa fa-trash mr-2"></span>Remove</button>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success mr-1 btn-bg"
                                                id="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </body>
@endsection

@section('js')
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif
    <script type="text/javascript">
        $(function() {
            $(document).on('change', '#selectDocument', function() {
                var notIssueExpiryOther = $(this).val() == 'Personal Photo' || $(this).val() ==
                    'Offer Letter' || $(this).val() == 'MOL Job Offer' || $(this).val() ==
                    'Signed MOL Job Offer' || $(this).val() == 'MOL MB Contract' || $(this).val() ==
                    'Signed MOL MB Offer' || $(this).val() == 'Preapproval Work Permit' || $(this).val() ==
                    'Dubai Insurance' || $(this).val() == 'Tawjeeh Receipt' || $(this).val() ==
                    'Emirates Id Application form' || $(this).val() == 'Stamped EID Application form' || $(
                        this).val() == 'Birth Certificate' || $(this).val() == 'Marriage Certificate' || $(
                        this).val() == 'School Certificate' || $(this).val() == 'Diploma' || $(this)
                    .val() == 'University Degree' || $(this).val() == 'Salary Certificate' || $(this)
                    .val() ==
                    'Tenancy Contract' || $(this).val() == 'MOL Cancellation form' || $(this).val() ==
                    'Signed MOL Cancellation Form' || $(this).val() ==
                    'Work Permit Cancellation Approval' || $(this).val() ==
                    'Residency Cancellation Approval' || $(this).val() == 'Modify MOL Contract' || $(this)
                    .val() == 'Work Permit Application' || $(this).val() ==
                    'Work Permit Renewal Application' || $(this).val() == 'Signed Work Permit Renewal' || $(
                        this).val() == 'Application' || $(this).val() == 'Submission Form';
                if ($(this).val() == 'Other') {
                    $(this).closest('.doc-fields').find('.other-show').removeClass('d-none').find('input')
                        .attr('required', true);
                    $(this).closest('.doc-fields').find('.other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                } else if (notIssueExpiryOther) {
                    $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                } else if ($(this).val() == 'Receipts') {
                    $(this).closest('.doc-fields').find('.other-show, .other-none').addClass('d-none');
                    $(this).closest('.doc-fields').find('.receipts-show').removeClass('d-none');
                } else {
                    $(this).closest('.doc-fields').find('.receipts-show').addClass('d-none');
                    $(this).closest('.doc-fields').find('.other-show').addClass('d-none').find('input')
                        .attr('required', false);
                    $(this).closest('.doc-fields').find('.other-none').removeClass('d-none');
                }
            });

            $(document).on('click', '.add-btn', function() {
                // get the last DIV which ID starts with ^= "docField"
                var $div = $('div[id^="docField"]:first');

                // Read the Number from that DIV's ID (i.e: 3 from "klon3")
                // And increment that number by 1
                var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

                // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
                var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end()
                    .show();

                $($div).before(html);
            });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.doc-fields').remove();
            });
        });
    </script>


@endsection
