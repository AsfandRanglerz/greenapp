@extends('user.layout.master')
@section('content')
<style>
    .common-btn {
        background-color: var(--theme-clr);
    }
</style>

<body>
<div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
                <h4>Dependents</h4>
            <p><span class="fa fa-solid fa-users"></span> - Dependents</p>
            {{-- @dd(auth()->user()->id); --}}
            <form action="{{route('user.add-dependent',auth()->user()->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="col-lg-9 mx-auto py-3 rounded light-box-shadow">
                    <div
                        class="form-group d-flex flex-sm-row flex-column justify-content-between align-items-sm-start align-items-center">
                        <h6><span class="fa fa-solid fa-users"></span> - Dependents</h6>
                        <a type="button" class="mb-3 btn btn-success add-btn"><span class="fa fa-plus mr-2"></span>Add
                            More</a>
                    </div>
                    <div class="form-row position-relative doc-fields" id="docField1">
                        <div class="form-group col-xl-4 col-lg-6 col-md-4">
                            <label>Select Dependent<span class="required"> *</span></label>
                            <select id="selectDocument" name="dependent_type[]" value="{{ old('doc_type[]') }}"
                                class="form-control" required>
                                <option value="" disabled selected>Select Dependent</option>
                                <option value="Father">Father</option>
                                <option value="Mother">Mother</option>
                                <option value="Wife">Wife</option>
                                <option value="Son">Son</option>
                                <option value="Daughter">Daughter</option>
                            </select>
                        </div>
                        <div class="form-group col-xl-4 col-lg-6 col-md-4">
                            <label>Name<span class="required"> *</span></label>
                            <input type="text" name="name[]" placeholder="name" class='form-control'>
                        </div>

                        {{-- <div class="form-group col-xl-4 col-lg-6 col-md-4">
                            <label>Select File<span class="required"> *</span></label>
                            <div class="input-group">
                                <input type="file" class="form-control" name="file[]" value="{{ old('file[]') }}"
                                    style="line-height: 1" required>
                                <div class="input-group-prepend">
                                    <small class="input-group-text"><span class="fa fa-paperclip"></span></small>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="form-group col-xl-4 col-lg-6 col-md-4">
                            <label>Issue Date</label>
                            <div class="input-group">
                                <input type="date" name="issue_date[]" placeholder="dd.mm.yyyy"
                                    value="{{ old('issue_date[]') }}" class="form-control issue-date">
                            </div>
                            @error('issue_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-xl-4 col-lg-6 col-md-4">
                            <label>Expiry Date</label>
                            <div class="input-group">
                                <input type="date" name="expiry_date[]" placeholder="dd.mm.yyyy"
                                    value="{{ old('expiry_date[]') }}" class="form-control expire-date">
                            </div>
                            @error('expiry_date')
                                <div class="text-danger p-2">{{ $message }}</div>
                            @enderror
                        </div> --}}
                    </div>
                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                        <button type="submit" class="btn-bg">Save</button>
                    </div>
                </div>
            </form>
        </div>


    </div>

    <!-- <div class="mb-5 admin-main-content-inner">
            <h4>Dashboard</h4>
        <p><span class="fa fa-book"></span> - Dependents</p>
        <div class="text-right">
            <a href="{{ route('user.document.create') }}" class="mb-3 btn btn-success"><span class="fa fa-plus mr-2"></span>Add
                Dependent</a>
        </div>
        <div class="p-4 rounded light-box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 dependants text-center">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Dependent type</th>
                            <th scope="col">Request type</th>
                            <th scope="col">File</th>
                            <th scope="col">Response</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body"></tbody>
                </table>
            </div>
        </div>
    </div> -->
</body>

@endsection
@section('script')
<script type="text/javascript">
        $(function() {
            $(document).on('click', '.add-btn', function() {
                // get the last DIV which ID starts with ^= "docField"
                var $div = $('div[id^="docField"]:first');

                // Read the Number from that DIV's ID (i.e: 3 from "klon3")
                // And increment that number by 1
                var num = parseInt($div.prop("id").match(/\d+/g), 10) + 1;

                // Clone it and assign the new ID (i.e: from num 4 to ID "klon4")
                var html = $div.clone().prop('id', 'docField' + num).find("input, textarea").val("").end()
                    .show();
                html.find('.other-show, .other-none, .receipts-show').addClass('d-none');
                $($div).before(html);
            });

            $(document).on('click', '.remove-btn', function() {
                $(this).closest('.doc-fields').remove();
            });
        });
    </script>

<!-- <script type="text/javascript">
    $(function() {
        /*datatable search*/
        $('.dependants').DataTable({
            "pageLength": 10,
            aaSorting: [
                [0, "asc"]
            ]
        });
        /*datatable search*/

        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#uploadedImage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $(".file-upload").on('change', function() {
            readURL(this);
        });

        $(".upload-button-removeDrop").on('click', function() {
            $(this).siblings('.file-upload').click();
        });
    });
</script> -->

@endsection
