@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ url()->previous() }}">Back</a>

                    <form id="add_student" action="{{ route('update-receipt', ['id'=>$id,'receipt_id'=>$receipt->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Edit Receipt</h4>
                                    <div id="docField1" class="doc-fields">
                                        <div class="row mx-0 px-4">
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                                <div class="form-group mb-2">
                                                    <label>Select File<span class="required"> *</span></label>
                                                    <input type="file" name="file" value="{{ $receipt->file }}"
                                                        class="form-control">
                                                    @error('file')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 receipts-show">
                                                <div class="form-group mb-2">
                                                    <label>Receipts<span class="required"> *</span></label>
                                                    <select id="selectReceipt" name="receipt" class="form-control">
                                                        <option value="" selected disabled>Select Receipt</option>
                                                        <option value="Preapproval of work permit receipt"{{ $receipt->receipt == 'Preapproval of work permit receipt' ? 'selected' : '' }}>Preapproval of work permit</option>
                                                        <option value="Dubai Insurance receipts"{{ $receipt->receipt == 'Dubai Insurance receipts' ? 'selected' : '' }}>Dubai Insurance</option>
                                                        <option value="Preapproval work permit fees receipt"{{ $receipt->receipt == 'Preapproval work permit fees receipt' ? 'selected' : '' }}>Preapproval work permit fees</option>
                                                        <option value="Work permit Renewal Fees Receipt"{{ $receipt->receipt == 'Work permit Renewal Fees Receipt' ? 'selected' : '' }}>Work permit Renewal Fees</option>
                                                        <option value="Entry Visa Application Receipt"{{ $receipt->receipt == 'Entry Visa Application Receipt' ? 'selected' : '' }}>Entry Visa Application</option>
                                                        <option value="Change of Visa Status Application"{{ $receipt->receipt == 'Change of Visa Status Application' ? 'selected' : '' }}>Change of Visa Status Application</option>
                                                        <option value="Medical"{{ $receipt->receipt == 'Medical' ? 'selected' : '' }}>Medical</option>
                                                        <option value="Tawjeeh"{{ $receipt->receipt == 'Tawjeeh' ? 'selected' : '' }}>Tawjeeh</option>
                                                        <option value="Heath Insurance"{{ $receipt->receipt == 'Heath Insurance' ? 'selected' : '' }}>Health Insurance</option>
                                                        <option value="Emirates ID Application"{{ $receipt->receipt == 'Emirates ID Application' ? 'selected' : '' }}>Emirates ID Application</option>
                                                        <option value="Residency Visa Application"{{ $receipt->receipt == 'Residency Visa Application' ? 'selected' : '' }}>Residency Visa Application</option>
                                                        <option value="Visa Fines"{{ $receipt->receipt == 'Visa Fines' ? 'selected' : '' }}>Visa Fines</option>
                                                        <option value="Emirates ID Fines"{{ $receipt->receipt == 'Emirates ID Fines' ? 'selected' : '' }}>Emirates ID Fines</option>
                                                        <option value="Other fines"{{ $receipt->receipt == 'Other fines' ? 'selected' : '' }}>Other fines</option>
                                                        <option value="Health Insurance Fines"{{ $receipt->receipt == 'Health Insurance Fines' ? 'selected' : '' }}>Health Insurance Fines</option>
                                                        <option value="Immigration Application"{{ $receipt->receipt == 'Immigration Application' ? 'selected' : '' }}>Immigration Application</option>
                                                        <option value="MOHRE Application"{{ $receipt->receipt == 'MOHRE Application' ? 'selected' : '' }}>MOHRE Application</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                            {{-- <div class="col-sm-6 pl-sm-0 pr-sm-3 other-show d-none">
                                                <div class="form-group mb-2">
                                                    <label>Document Name<span class="required"> *</span></label>
                                                    <input type="text" name="doc_name" value="{{ $document->doc_name }}"
                                                        placeholder="Enter Document Name" class="form-control">
                                                    @error('doc_name')
                                                        <div class="text-danger p-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Issue Date</label>
                                                    <input type="date" name="issue_date"
                                                        value="{{ $document->issue_date }}" id="issue_date"
                                                        class="form-control" placeholder="Issue Date">
                                                    @error('issue_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div> --}}
                                            {{-- <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Expiry Date</label>
                                                    <input type="date" name="expiry_date"
                                                        value="{{ $document->expiry_date }}" id="expiry_date"
                                                        class="form-control" placeholder="Expiry Date">
                                                    @error('expiry_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                            </div> --}}

                                        {{-- @if ($document->user->emp_type == 'company')
                                            <div class="row mx-0 px-4">
                                                <div class="col-sm-12 pl-sm-0 pr-sm-3">
                                                    <div class="form-group mb-2">
                                                        <label>Comments</label>
                                                        <textarea placeholder="Enter Your Comments ..." name="comment" id="comment" class="form-control">{{ $document->comment ?? '' }}</textarea>
                                                        @error('comment')
                                                            <div class="text-danger">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                        @endif --}}

                                    </div>
                                    <div class="card-footer text-center row">
                                        <div class="col">
                                            <button type="submit" class="btn btn-success mr-1 btn-bg"
                                                id="submit">Update</button>
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
@endsection
