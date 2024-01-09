@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')

    <body>
        <div class="main-content">
            <section class="section">
                <div class="section-body">
                    <a class="btn btn-primary mb-3" href="#">Back</a>
                    {{-- <form action="{{route('send-notification')}}" method="POST" enctype="multipart/form-data">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-6">
                                <div class="card">
                                    <h4 class="text-center my-4">Create Notifications</h4>
                                    <div class="row mx-0 px-4">
                                            <div class="col-lg-12">
                                                <div class="form-group mb-2">
                                                    <label>Select<span class="required"> *</span></label>
                                                    <select name="select" class="form-control" id="" >
                                                        <option value="" hidden>Select</option>
                                                        <option value="Companies">Companies</option>
                                                        <option value="Employees">Employees</option>
                                                        <option value="Individuals">Individuals</option>
                                                        <option value="All Employees">All Employees</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                    @csrf
                                                    <div class="form-group mb-2">
                                                        <label>Title</label>
                                                        <input type="text" name="title" placeholder="Title"
                                                        class="form-control mb-1">
                                                        <label>Message</label>
                                                        <textarea type="text" name="message" placeholder="Ask anything ..."
                                                            class="form-control" rows="5"></textarea>
                                                        @error('question')
                                                            <div class="text-danger p-2">{{ $message }}</div>
                                                        @enderror
                                                    </div>
                                                    <div class="w-100 mt-3 mb-sm-2 mb-0" align="center">
                                                        <button type="submit" class="btn btn-primary">Send</button>
                                                    </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form> --}}

                    <div class="card">
                        <div class="card-header" id="faqHeading-1">
                            <div class="mb-0">
                                <h6 class="faq-title" data-toggle="collapse"
                                    data-target="#faqCollapse-{{ $data->id }}" data-aria-expanded="true"
                                    data-aria-controls="faqCollapse-{{ $data->id }}">
                                    <span class="badge">{{$loop->iteration}}</span>{!! $data->title ?? '' !!}
                                </h6>
                            </div>
                        </div>
                        <div id="faqCollapse-{{ $data->id }}" class="collapse"
                            aria-labelledby="faqHeading-1" data-parent="#accordion">
                            <div class="card-body">
                                <p>{!! $data->message ?? '' !!}</p>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </section>
        </div>
    </body>
@endsection

@section('js')


    <script>
        @if (\Illuminate\Support\Facades\Session::has('success'))
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
        @endif

        @if (\Illuminate\Support\Facades\Session::has('error'))
            toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
        @endif

        $(function() {
            $('#company_id').select2({
                placeholder: 'Select Company'
            });
            $('#nationality').select2({
                placeholder: 'Select Country'
            });
            $('#selReligion').select2({
                placeholder: 'Select Religion'
            });
            $('#selGender').select2({
                placeholder: 'Select Gender'
            });
            $('#martialStatus').select2({
                placeholder: 'Select Martial Status'
            });
            $('#salDetails').select2({
                placeholder: 'Salary Detail'
            });
        });
    </script>
@endsection
