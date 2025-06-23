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
                                    <h4>Account Deletion Requests</h4>
                                </div>
                            </div>
                            <div class="card-body table-striped table-bordered table-responsive">
                                {{-- <a class="btn btn-success mb-3" href="{{ route('company.create') }}">Add Company</a> --}}
                                <table class="table text-center" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Request Of</th>
                                            <th>Name</th>
                                            <th>Staus</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $request)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $request->user_id ? 'Employee' : 'Company' }}</td>
                                                @if ($request->company_id)
                                                    @php
                                                        $user = App\Models\Company::find($request->company_id);
                                                    @endphp
                                                @else
                                                    @php
                                                        $user = App\Models\User::find($request->user_id);
                                                    @endphp
                                                @endif
                                                <td>
                                                    {{$user->name}}
                                                </td>
                                                <td>
                                                    @if($request->status == "pending")
                                                        <span class='badge badge-danger text-white'>{{ $request->status }}</span>
                                                    @else
                                                        <span class='badge badge-success text-white'>{{ $request->status }}</span>
                                                    @endif
                                                </td>
                                                {{-- <td>{{ $request->email }}</td> --}}
                                                {{-- <td>
                                                </td> --}}

                                                <td>
                                                    <div style="display: flex;align-items: center;justify-content: center;column-gap: 8px">
                                                        <button type="button" class="btn btn-success btn_approve" value="{{$request->id}}" href="">Approve</button>
                                                        <button type="button" class="btn btn-danger btn_reject" value="{{$request->id}}" href="">Reject</button>
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
            $(document).on('click', '.btn_approve', function() {
                var id = $(this).val();
                $.ajax({
                    url: '{{ route('requests-action') }}',
                    type: 'GET',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    },
                    data: {
                        '_token': '{{ csrf_token() }}',
                        id: id,
                        status: 'approve',
                    },
                    success: function(data) {
                            toastr.success('Account Deleted Successfully');
                            window.location.href = '{{ url('admin/get-all-delete-requests') }}';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error getting data:', error);
                    }
                });
            });
            $(document).on('click', '.btn_reject', function() {
                var id = $(this).val();
                $.ajax({
                    url: '{{ route('requests-action') }}',
                    type: 'GET',
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}'
                    },
                    data: {
                        '_token': '{{ csrf_token() }}',
                        id: id,
                        status: 'rejected',
                    },
                    success: function(data) {

                            toastr.success('Request Has Been Rejected Successfully');
                            window.location.href = '{{ url('admin/get-all-delete-requests') }}';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error updating religion:', error);
                    }
                });
            });
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
        $('.company-data').click(function() {
            var id = $(this).attr('id');
            // console.log(id);
            $.ajax({
                type: "GET",
                dataType: "json",
                headers: {
                    'X-CSRF-Token': '{{ csrf_token() }}', // Corrected csrf_token() usage
                },
                url: "{{ url('admin/company-view') }}",
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
