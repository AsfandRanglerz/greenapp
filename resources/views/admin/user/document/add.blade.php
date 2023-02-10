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
                    <a class="btn btn-primary mb-3" href="{{ route('user-document.index', $data['user_id']) }}">Back</a>
                    <form id="add_student" action="{{ route('user-document.store', $data['user_id']) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="card">
                                    <h4 class="text-center my-4">Add Document<button type="button" class="btn btn-success add-btn"
                                            style="position: absolute;right: 2.5rem"><span
                                                class="fa fa-plus mr-2"></span>Add More</button></h4>
                                    <div id="docField1" class="doc-fields">
                                        <div class="row mx-0 px-4">
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                                <div class="form-group mb-2">
                                                    <label>Document Type<span class="required"> *</span></label>
                                                    {{-- <input type="text" placeholder="document name" name="doc_type[]"
                                                        id="doc_type" value="{{ old('doc_type[]') }}" class="form-control"> --}}
                                                    <select id="selectDocument" class="form-control category" name="doc_type[]"
                                                        value="{{ old('doc_type[]') }}" required>

                                                        <option value="" selected disabled>Select Document</option>
                                                        <option value="Passport">Passport</option>
                                                        <option value="Identitiy Card">Identitiy Card</option>
                                                        <option value="Visa">Visa</option>
                                                        <option value="Insurance Card">Insurance Card</option>
                                                        <option value="Work Permit">Work Permit</option>
                                                        <option value="Driving License">Driving License</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    @error('doc_type.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
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
                                        </div>
                                        <div class="row mx-0 px-4">
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-show d-none">
                                                <div class="form-group mb-2">
                                                    <label>Document Name<span class="required"> *</span></label>
                                                    <input type="text" name="doc_name[]" value="{{ old('doc_name[]') }}"
                                                        placeholder="Enter Document Name" class="form-control" required>
                                                    @error('doc_name')
                                                        <div class="text-danger p-2">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Issue Date<span class="required"> *</span></label>
                                                    <input type="date" name="issue_date[]"
                                                        value="{{ old('issue_date[]') }}" id="issue_date"
                                                        class="form-control" placeholder="Issue Date" required>
                                                    @error('issue_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3 other-none">
                                                <div class="form-group mb-2">
                                                    <label>Expiry Date<span class="required"> *</span></label>
                                                    <input type="date" name="expiry_date[]"
                                                        value="{{ old('expiry_date[]') }}" id="expiry_date"
                                                        class="form-control" placeholder="Expiry Date" required>
                                                    @error('expiry_date')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mx-0 px-4">
                                            <div class="col-sm-12 pl-sm-0 pr-sm-3">
                                                <div class="form-group mb-2">
                                                    <label>Comments</label>
                                                    <textarea name="comment[]" placeholder="Enter Your Comments ..." id="comment" value="{{ old('comment[]') }}" class="form-control"></textarea>
                                                    @error('comment')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mx-0 px-4 py-4">
                                            <button type="button" class="btn btn-danger remove-btn"><span class="fa fa-trash mr-2"></span>Remove</button>
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

            $(document).on('click', '.add-btn', function() {
                // get the last DIV which ID starts with ^= "docField"
                var $div = $('div[id^="docField"]:first');

                // Read the Number from that DIV's ID (i.e: 3 from "klon3")
                // And increment that number by 1
                var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

                // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
                var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end().show();

                $($div).before(html);
            });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.doc-fields').remove();
            });
        });
    </script>


@endsection
