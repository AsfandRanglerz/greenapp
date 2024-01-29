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
                                    <h4>Start Processes</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                            aria-controls="home" aria-selected="true">New Visa Process</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                            aria-controls="profile" aria-selected="false">Renewal Process</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="spo-tab" data-toggle="tab" href="#spo" role="tab"
                                            aria-controls="spo" aria-selected="false">Sponsoared By Some One / Golden Visa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="partime-tab" data-toggle="tab" href="#partime" role="tab"
                                            aria-controls="partime" aria-selected="false">Part time</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="UaE-tab" data-toggle="tab" href="#UaE" role="tab"
                                            aria-controls="UaE" aria-selected="false">UaE & GCC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="Modify_Contract-tab" data-toggle="tab" href="#Modify_Contract" role="tab"
                                            aria-controls="Modify_Contract" aria-selected="false">Modify Contract</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="modification_visa-tab" data-toggle="tab" href="#modification_visa" role="tab"
                                            aria-controls="modification_visa" aria-selected="false">Modification of Visa</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="modification_emirates-tab" data-toggle="tab" href="#modification_emirates" role="tab"
                                            aria-controls="modification_emirates" aria-selected="false">Modification of Emirates</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="visa_cancelation-tab" data-toggle="tab" href="#visa_cancelation" role="tab"
                                            aria-controls="visa_cancelation" aria-selected="false">Visa Cancelation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="permit_cancelation-tab" data-toggle="tab" href="#permit_cancelation" role="tab"
                                            aria-controls="permit_cancelation" aria-selected="false">Permit Cancelation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="individual-tab" data-toggle="tab" href="#individual" role="tab"
                                            aria-controls="individual" aria-selected="false">Individuals Golden Visa</a>
                                    </li>
                                </ul>
                                {{-- owner --}}
                                <div class="tab-content" id="myTabContent">
                                    {{-- new visa --}}
                                    <div class="tab-pane fade active show" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                                <table class="table text-center" id="table_id_1">
                                                    <thead>
                                                        <tr>
                                                            <th>Sr.</th>
                                                            <th>Company Name</th>
                                                            <th>Employee Name</th>
                                                            <th>Dependent Name</th>
                                                            <th>Process Name</th>
                                                            <th class='pl-5 pr-5'>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($data['new_visa'] as $visa)
                                                            <tr>
                                                                <td>{{$loop->iteration}}</td>
                                                                <td>{{ $visa->company->name ?? '--' }}</td>
                                                                <td>{{$visa->user->name}}</td>
                                                                <td>{{$visa->dependent->name ??  '--'}}</td>
                                                                <td>New Visa</td>

                                                                <td>
                                                                    @if($visa->company)
                                                                        <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$visa->company->id,'user_id'=>$visa->user->id ])}}" class='text-success'>View</a>
                                                                    @elseif($visa->dependent)
                                                                        <a class='text-white d-inlin-block btn btn-success' href="{{route('dependent-start-process',['request_id'=>0 , 'user_id'=>$visa->user->id,'dependent_id'=>$visa->dependent->id])}}" class='text-success'>View</a>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                        </div>

                                    </div>
                                    {{-- renewal --}}
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_2">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th>Dependent Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($data['renewal_process'] as $renewal)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$renewal->company->name ?? '--' }}</td>
                                                            <td>{{$renewal->user->name}}</td>
                                                            <td>{{$renewal->dependent->name ??  '--'}}</td>
                                                            <td>
                                                                @if($renewal->company)
                                                                    <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$renewal->company->id,'user_id'=>$renewal->user->id ])}}" class='text-success'>View</a>
                                                                @elseif($renewal->dependent)
                                                                    <a class='text-white d-inlin-block btn btn-success' href="{{route('dependent-start-process',['request_id'=>0 , 'user_id'=>$renewal->user->id,'dependent_id'=>$renewal->dependent->id])}}" class='text-success'>View</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- sponsoared by some one --}}
                                    <div class="tab-pane fade" id="spo" role="tabpanel" aria-labelledby="spo-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_3">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        {{-- <th>Process Name</th> --}}
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>

                                                        @foreach ($data['spo_by_some'] as $sp)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$sp->company->name ?? '--' }}</td>
                                                            <td>{{$sp->user->name}}</td>
                                                            {{-- <td>Sponsord</td> --}}
                                                            <td>
                                                                @if ($sp->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$sp->company->id,'user_id'=>$sp->user->id ])}}" class='text-success'>View</a>

                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- part time --}}
                                    <div class="tab-pane fade" id="partime" role="tabpanel" aria-labelledby="partime-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_4">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($data['part_time'] as $partime)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$partime->company->name ?? '--' }}</td>
                                                            <td>{{$partime->user->name}}</td>
                                                            <td>
                                                                @if ($partime->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$partime->company->id,'user_id'=>$partime->user->id ])}}" class='text-success'>View</a>

                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- uae and gcc --}}
                                    <div class="tab-pane fade" id="UaE" role="tabpanel" aria-labelledby="UaE-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_5">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($data['uae_gcc'] as $uae)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$uae->company->name ?? '--' }}</td>
                                                            <td>{{$uae->user->name}}</td>
                                                            <td>
                                                                @if ($uae->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$uae->company->id,'user_id'=>$uae->user->id ])}}" class='text-success'>View</a>

                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- modify contract --}}
                                    <div class="tab-pane fade" id="Modify_Contract" role="tabpanel" aria-labelledby="Modify_Contract-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_6">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($data['modify_contract'] as $m_c)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$m_c->company->name ?? '--' }}</td>
                                                            <td>{{$m_c->user->name}}</td>
                                                            <td>
                                                                @if ($m_c->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$m_c->company->id,'user_id'=>$m_c->user->id ])}}" class='text-success'>View</a>

                                                                @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- modification of visa --}}

                                    <div class="tab-pane fade" id="modification_visa" role="tabpanel" aria-labelledby="modification_visa-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_7">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th>Dependent Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($data['modification_visa'] as $m_v)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$m_v->company->name ?? '--' }}</td>
                                                            <td>{{$m_v->user->name}}</td>
                                                            <td>{{$m_v->dependent->name ?? '--' }}</td>
                                                            <td>
                                                                @if ($m_v->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$m_v->company->id,'user_id'=>$m_v->user->id ])}}" class='text-success'>View</a>
                                                                @elseif($m_v->dependent)
                                                                <a class='text-white d-inlin-block btn btn-success' href="{{route('dependent-start-process',['request_id'=>0 , 'user_id'=>$m_v->user->id,'dependent_id'=>$m_v->dependent->id])}}" class='text-success'>View</a>
                                                                 @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- modification of emirates --}}

                                    <div class="tab-pane fade" id="modification_emirates" role="tabpanel" aria-labelledby="modification_emirates-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_8">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th>Dependent Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($data['modification_emirates'] as $m_e)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$m_e->company->name ?? '--' }}</td>
                                                            <td>{{$m_e->user->name}}</td>
                                                            <td>{{$m_e->dependent->name ?? '--' }}</td>
                                                            <td>
                                                                @if ($m_e->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$m_e->company->id,'user_id'=>$m_e->user->id ])}}" class='text-success'>View</a>
                                                                @elseif($m_e->dependent)
                                                                <a class='text-white d-inlin-block btn btn-success' href="{{route('dependent-start-process',['request_id'=>0 , 'user_id'=>$m_e->user->id,'dependent_id'=>$m_e->dependent->id])}}" class='text-success'>View</a>
                                                                 @endif
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- visa cancelation --}}

                                    <div class="tab-pane fade" id="visa_cancelation" role="tabpanel" aria-labelledby="visa_cancelation-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_9">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th>Dependent Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($data['visa_cancellation'] as $data)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$data->company->name ?? '--' }}</td>
                                                            <td>{{$data->user->name}}</td>
                                                            <td>{{$data->dependent->name ?? '--' }}</td>
                                                            <td>
                                                                @if ($data->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$data->company->id,'user_id'=>$data->user->id ])}}" class='text-success'>View</a>
                                                                @elseif($data->dependent)
                                                                <a class='text-white d-inlin-block btn btn-success' href="{{route('dependent-start-process',['request_id'=>0 , 'user_id'=>$data->user->id,'dependent_id'=>$data->dependent->id])}}" class='text-success'>View</a>
                                                                 @endif
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    {{-- permit cancelation --}}

                                    <div class="tab-pane fade" id="permit_cancelation" role="tabpanel" aria-labelledby="permit_cancelation-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_10">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Company Name</th>
                                                        <th>Employee Name</th>
                                                        <th>Dependent Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($permit as $permits)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$permits->company->name ?? '--' }}</td>
                                                            <td>{{$permits->user->name}}</td>
                                                            <td>{{$permits->dependent->name ?? '--' }}</td>
                                                            <td>
                                                                @if ($permits->company)
                                                                <a class='text-white d-inlin-block btn btn-success' style="white-space:nowrap" href="{{route('start-process',['request_id'=>0 ,'company_id'=>$permits->company->id,'user_id'=>$permits->user->id ])}}" class='text-success'>View</a>
                                                                @endif
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    {{-- individual visa --}}
                                    <div class="tab-pane fade" id="individual" role="tabpanel" aria-labelledby="individual-tab">
                                        <div class="card-body table-striped table-bordered table-responsive">
                                            <table class="table" id="table_id_11">
                                                <thead>
                                                    <tr>
                                                        <th>Sr.</th>
                                                        <th>Employee Name</th>
                                                        <th>Process Name</th>
                                                        <th class='pl-5 pr-5'>Action</th>
                                                    </tr>
                                                </thead>
                                                    <tbody>
                                                        @foreach ($individual_golden as $golden)
                                                        <tr>
                                                            <td>{{$loop->iteration}}</td>
                                                            <td>{{$golden->user->name}}</td>
                                                            <td>Golden Visa</td>
                                                            <td>
                                                                <a class='text-white d-inlin-block btn btn-success' href="{{route('individual-visa-process-start',['individual_id'=>$golden->user->id,'request_id'=>0])}}"  class='text-success'>View</a>
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
    $(document).ready(function() {
        $('#table_id_1').DataTable();
        $('#table_id_2').DataTable();
        $('#table_id_3').DataTable();
        $('#table_id_4').DataTable();
        $('#table_id_5').DataTable();
        $('#table_id_6').DataTable();
        $('#table_id_7').DataTable();
        $('#table_id_8').DataTable();
        $('#table_id_9').DataTable();
        $('#table_id_10').DataTable();
        $('#table_id_11').DataTable();
    });
</script>
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
