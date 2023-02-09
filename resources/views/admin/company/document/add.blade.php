@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <style>
            #docField1 .remove-fields {
                display: none;
            }
        </style>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="{{ route('company-document.index', $data['company_id']) }}">Back</a>
                    <!-- @if (count($errors) > 0)
                      <div class="row">
                          <div class="col-md-12">
                              <div class="alert alert-danger alert-dismissible">
                                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                  @foreach ($errors->all() as $error)
    {{ $error }} <br>
    @endforeach
                              </div>
                          </div>
                      </div>
                    @endif -->
                    <form id="add_student" action="{{ route('company-document.store', $data['company_id']) }}"
                        method="POST" enctype="multipart/form-data">

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
                                                    <label>Document Name<span class="required"> *</span></label>
                                                    <input type="text" placeholder="Document Name" name="doc_name[]"
                                                        id="doc_name[]" value="{{ old('doc_name[]') }}"
                                                        class="form-control" required>
                                                    @error('doc_name.*')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-sm-6 pl-sm-0 pr-sm-3">
                                                <div class="form-group mb-2">

                                                    <label>Select File<span class="required"> *</span></label>
                                                    <input type="file" name="file[]" id="file[]"
                                                        value="{{ old('file[]') }}" class="form-control">

                                                    @error('file.*')
                                                        <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                            </div>

                                        </div>
                                        <div class="row mx-0 px-4 py-2">
                                            <button type="button" class="btn btn-danger remove-fields"><span class="fa fa-trash mr-2"></span>Remove</button>
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
        $(document).ready(function() {
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
