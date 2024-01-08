@extends('admin.layout.app')

@section('title', 'index')

@section('content')
<style>
    .btn_warning{
    background: #ef9e09;
    padding: 9px 14px;
    border-radius: 9px;
    box-shadow: 0 2px 6px #82d3f8;
    }
</style>
    <div class="main-content" style="min-height: 562px;">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col-12">
                                    <h4>Visa Process Requests</h4>

                                </div>
                                {{-- @dd($data) --}}
                            </div>
                            {{-- @dd($data) --}}
                            <div class="card-body table-striped table-bordered table-responsive">
                                {{-- <a class="btn btn-primary mb-3"
                                href="{{route('admin.user.index')}}">Back</a> --}}
                                {{-- <a class="btn btn-success mb-3" href="{{ route('receipt-user-index') }}">Back</a> --}}

                                <table class="table text-center" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Company Name</th>
                                            <th>Employee Name</th>
                                            <th>Process Request</th>
                                            <th>Action</th>
                                            {{-- <th scope="col">Action</th> --}}
                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($visa_requests as $requests)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $requests->company->name }}</td>
                                                <td>{{ $requests->user->name }}</td>
                                                <td>{{ $requests->process_name }} <br>
                                                @if ($requests->sub_type)
                                                       <span class='text-danger'>({{$requests->sub_type}})</span>
                                                @endif
                                                </td>
                                                 <td>
                                                    <div
                                                        style="display: flex;align-items: center;justify-content: center;column-gap: 8px">
                                                        @if ($requests->status == 'pending')
                                                            <a class="btn btn-info"
                                                                href="{{ route('visa.show', $requests->id) }}">Approve</a>
                                                            <a class="btn btn-danger"
                                                                href="{{ route('visa.show', $requests->id) }}">Rejecte</a>
                                                        @else
                                                            @php
                                                                $con = NUll;
                                                                $user_id = $requests->user->id;
                                                                $company_id = $requests->company->id;
                                                                if (App\Models\NewVisaProcess::where('employee_id',$user_id)->where('company_id',$company_id)->first() ||
                                                                App\Models\RenewalProcess::where('employee_id',$user_id)->where('company_id',$company_id)->first() ||
                                                                App\Models\SponsaredBySomeOne::where('employee_id',$user_id)->where('company_id',$company_id)->first() ||
                                                                App\Models\PartTimeAndTemporary::where('employee_id',$user_id)->where('company_id',$company_id)->first() ||
                                                                App\Models\UaeAndGccNational::where('employee_id',$user_id)->where('company_id',$company_id)->first())
                                                                {
                                                                    $con = 'yes';
                                                                }
                                                            @endphp
                                                                {{-- @if($con == 'yes')
                                                                    <a href="{{route('view-process',['request_id'=>$requests->id ,'user_id'=>$requests->user->id ,'company_id'=>$requests->company->id])}}" class='btn btn-success'>View</a>
                                                                @else --}}

                                                                 <a class="btn btn-primary"
                                                                 href="{{ route('start-process',['request_id'=>$requests->id ,'user_id'=>$requests->user->id ,'company_id'=>$requests->company->id])}}">Start Process</a>
                                                                {{-- @endif --}}
                                                        @endif
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg scrol employee-details-model" id="mymodal">
            </div>
        </div>
    </div>

@endsection

@section('js')
    <script>
        @if (\Illuminate\Support\Facades\Session::has('success'))
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
        @endif

        @if (\Illuminate\Support\Facades\Session::has('error'))
            toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
        @endif
    </script>

    <script>
        $(document).ready(function() {
            $('#table_id_events').DataTable();
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Are you sure you want to delete this record?`,
                    text: "If you delete this, it will be gone forever.",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    }
                });
        });
    </script>
    <script>
        $('.employee-data').click(function() {
            var id = $(this).attr('id');
            // console.log(id);
            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}', // Corrected csrf_token() usage
                },
                url: "{{ url('admin/employee-view') }}",
                data: {
                    'id': id,
                },
                success: function(response) {
                    $("#mymodal").html(response);
                }
            });
        });
    </script>
@endsection
