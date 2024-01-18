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
                                            <th>Dependent Name</th>
                                            <th>Request Name</th>
                                            <th>Request Of</th>
                                            <th>Status</th>
                                            <th class='pl-5 pr-5'>Action</th>
                                            {{-- <th scope="col">Action</th> --}}
                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($visa_requests as $requests)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $requests->company ? $requests->company->name : '--' }}</td>
                                                <td>{{ $requests->user->name }}</td>
                                                <td>{{ $requests->dependent ? $requests->dependent->name : '--' }}</td>
                                                <td>{{ $requests->process_name }} <br>
                                                @if ($requests->sub_type)
                                                       <span class='text-danger'>({{$requests->sub_type}})</span>
                                                @endif
                                                </td>
                                                <td>{{ $requests->request_for }}</td>
                                                <td>
                                                    @php
                                                                $user_id = $requests->user->id;
                                                                if($requests->company)
                                                                {
                                                                    $id = $requests->company->id;
                                                                }
                                                                elseif($requests->dependent) {
                                                                    $id = $requests->dependent->id;
                                                                }
                                                                $status = NULL;
                                                                if($requests->process_name == 'new visa')
                                                                {
                                                                    $new_visa = App\Models\NewVisaProcess::
                                                                    where('employee_id', $user_id)
                                                                    ->orWhere('company_id', $id)
                                                                    ->orWhere('dependent_id', $id)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                    if($new_visa)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                }elseif ($requests->process_name == 'renewal process') {
                                                                    $renewal_process = App\Models\RenewalProcess::
                                                                    where('employee_id', $user_id)
                                                                    ->orWhere('company_id', $id)
                                                                    ->orWhere('dependent_id', $id)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($renewal_process)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'sponsored by some one') {
                                                                    $spo_by_some = App\Models\SponsaredBySomeOne::
                                                                    where('employee_id', $user_id)
                                                                    ->where('company_id', $idid)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($spo_by_some)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'part time') {
                                                                    $part_time = App\Models\PartTimeAndTemporary::
                                                                    where('employee_id', $user_id)
                                                                    ->where('company_id', $id)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($part_time)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'uae and gcc') {
                                                                    $uae_gcc = App\Models\UaeAndGccNational::
                                                                    where('employee_id', $user_id)
                                                                    ->where('company_id', $id)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($uae_gcc)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'modify contract') {
                                                                    $modify_contract = App\Models\ModifyContract::
                                                                    where('employee_id', $user_id)
                                                                    ->where('company_id', $id)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($modify_contract)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'modification of visa') {
                                                                    $modification_visa = App\Models\ModificationVisaEmiratesId::
                                                                    where('employee_id', $user_id)
                                                                    ->orWhere('company_id', $id)
                                                                    ->orWhere('dependent_id', $id)
                                                                    ->where('process_name', 'modification of visa')
                                                                    ->where('status','completed')->first();
                                                                            if($modification_visa)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'modification of emirates Id') {
                                                                    $modification_emirates = App\Models\ModificationVisaEmiratesId::
                                                                    where('employee_id', $user_id)
                                                                    ->orWhere('company_id', $id)
                                                                    ->orWhere('dependent_id', $id)
                                                                    ->where('process_name', 'modification of emirates Id')
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($modification_emirates)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'visa cancellation') {
                                                                    $visa_cancellation = App\Models\VisaCancelation::
                                                                    where('employee_id', $user_id)
                                                                    ->orWhere('company_id', $id)
                                                                    ->orWhere('dependent_id', $id)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($visa_cancellation)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'permit cancellation') {
                                                                    $permit_cancellation = App\Models\PermitCancellation::
                                                                    where('employee_id', $user_id)
                                                                    ->where('company_id', $id)
                                                                    ->where('status','completed')
                                                                    ->first();
                                                                            if($permit_cancellation)
                                                                    {
                                                                        $status = "yes";
                                                                    }
                                                                     }
                                                    @endphp
                                                            @if($status == 'yes')
                                                                <div class='badge p-2 badge-shadow bg-dark text-white'>Completed</div>
                                                            @else
                                                                <div class='badge p-2 badge-shadow bg-warning text-white'>Pending</div>
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
                                                                $user_id = $requests->user->id;
                                                                if($requests->company)
                                                                {
                                                                    $id = $requests->company->id;
                                                                }
                                                                elseif($requests->dependent) {
                                                                    $id = $requests->dependent->id;
                                                                }
                                                                // $company_id = $requests->company->id;
                                                                $con = NULL;
                                                                if($requests->process_name == 'new visa')
                                                                {
                                                                    $new_visa = App\Models\NewVisaProcess::where('employee_id', $user_id)
                                                                    ->where(function ($query) use ($id) {
                                                                        $query->where('company_id', $id)
                                                                            ->orWhere('dependent_id', $id);
                                                                    })
                                                                    ->first();
                                                                    if($new_visa)
                                                                    {
                                                                        $con = "yes";
                                                                    }

                                                                }elseif ($requests->process_name == 'renewal process') {
                                                                    $renewal_process = App\Models\RenewalProcess::where('employee_id', $user_id)
                                                                    ->where(function ($query) use ($id) {
                                                                        $query->where('company_id', $id)
                                                                            ->orWhere('dependent_id', $id);
                                                                    })
                                                                    ->first();
                                                                            if($renewal_process)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'sponsored by some one') {
                                                                    $spo_by_some = App\Models\SponsaredBySomeOne::where('employee_id', $user_id)->where('company_id', $id)->first();
                                                                            if($spo_by_some)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'part time') {
                                                                    $part_time = App\Models\PartTimeAndTemporary::where('employee_id', $user_id)->where('company_id', $id)->first();
                                                                            if($part_time)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'uae and gcc') {
                                                                    $uae_gcc = App\Models\UaeAndGccNational::where('employee_id', $user_id)->where('company_id', $id)->first();
                                                                            if($uae_gcc)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'work permit' && $requests->sub_type == 'modify contract') {
                                                                    $modify_contract = App\Models\ModifyContract::where('employee_id', $user_id)->where('company_id', $id)->first();
                                                                            if($modify_contract)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'modification of visa') {
                                                                    $modification_visa = App\Models\ModificationVisaEmiratesId::where('employee_id', $user_id)
                                                                    ->where('process_name', 'modification of visa')
                                                                    ->where(function ($query) use ($id) {
                                                                        $query->orWhere('company_id', $id)
                                                                            ->orWhere('dependent_id', $id);
                                                                    })
                                                                    ->first();
                                                                            if($modification_visa)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'modification of emirates Id') {
                                                                    $modification_emirates = App\Models\ModificationVisaEmiratesId::where('employee_id', $user_id)
                                                                    ->where('process_name', 'modification of emirates Id')
                                                                    ->where(function ($query) use ($id) {
                                                                        $query->orWhere('company_id', $id)
                                                                            ->orWhere('dependent_id', $id);
                                                                    })
                                                                    ->first();
                                                                            if($modification_emirates)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'visa cancellation') {
                                                                    $visa_cancellation = App\Models\VisaCancelation::where('employee_id', $user_id)
                                                                    ->where(function ($query) use ($id) {
                                                                        $query->where('company_id', $id)
                                                                            ->orWhere('dependent_id', $id);
                                                                    })
                                                                    ->first();
                                                                            if($visa_cancellation)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                elseif ($requests->process_name == 'permit cancellation') {
                                                                    $permit_cancellation = App\Models\PermitCancellation::where('employee_id', $user_id)->where('company_id', $id)->first();
                                                                            if($permit_cancellation)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                     }
                                                                 elseif ($requests->user->emp_type == 'self' && $requests->request_for == 'individual') {
                                                                    $golden_visa = App\Models\IndividualGoldenVisa::
                                                                    where('individual_id', $user_id)
                                                                    ->first();
                                                                            if($golden_visa)
                                                                    {
                                                                        $con = "yes";
                                                                    }
                                                                 }
                                                            @endphp
                                                                @if($con == 'yes')
                                                                     @if ($requests->company)
                                                                        <a href="{{route('start-process',['request_id'=>$requests->id ,'user_id'=>$requests->user->id ,'company_id'=>$requests->company->id])}}" class='text-success'>View</a>
                                                                     @elseif($requests->dependent)
                                                                        <a href="{{route('dependent-start-process',['request_id'=>$requests->id , 'user_id'=>$requests->user->id,'dependent_id'=>$requests->dependent->id])}}" class='text-success'>View</a>
                                                                    @elseif($requests->user->emp_type == 'self')
                                                                        <a href="{{route('individual-visa-process-start',['individual_id'=>$requests->user->id,'request_id'=>$requests->id])}}"  class='text-success'>View</a>
                                                                    @endif
                                                                @else
                                                                     @if ($requests->company)
                                                                        <a class="btn btn-primary"
                                                                        href="{{ route('start-process',['request_id'=>$requests->id ,'user_id'=>$requests->user->id ,'company_id'=>$requests->company->id])}}">Start Process</a>
                                                                    @elseif($requests->dependent)
                                                                        <a href="{{route('dependent-start-process',['request_id'=>$requests->id , 'user_id'=>$requests->user->id,'dependent_id'=>$requests->dependent->id])}}" class='btn btn-primary'>Start Process</a>
                                                                    @elseif($requests->user->emp_type == 'self')
                                                                        <a href="{{route('individual-visa-process-start',['individual_id'=>$requests->user->id,'request_id'=>$requests->id])}}" class='btn btn-primary'>Start Process</a>
                                                                    @endif
                                                                @endif
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
