@extends('admin.layout.app')

@section('title', 'index')

@section('content')

<div class="main-content" style="min-height: 562px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            @php
                            $individual = App\Models\User::find($individual_id);
                            $name = $individual->name;
                        @endphp
                            <div class="col-12">
                                <h4>Visa Process Data of {{$name}}</h4>
                                <button id="exportButton" class="btn btn-primary">Export Table</button>

                            </div>
                            {{-- @dd($data) --}}
                        </div>
                        {{-- @dd($data) --}}
                        <div class="card-body table-striped table-bordered table-responsive">

                            <table class="table text-center" id="yourTableId">
                                <thead>
                                    <tr class="border-bottom">
                                        <th colspan="2">
                                            Individual Name:
                                        </th>
                                        <th colspan="2">
                                            <span class='font-weight-bold text-uppercase'>
                                                {{$name}}
                                            </span>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>Sr.</th>
                                        <th>Process Name</th>
                                        <th>Transaction No</th>
                                        <th>Transaction Fee</th>
                                    </tr>
                                </thead>

                                    @if(isset($golden_visa))
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Entry Visa</td>
                                            <td>{{$golden_visa->enter_visa_ts_no}}</td>
                                            <td>{{$golden_visa->enter_visa_ts_fee}}</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Change of Visa status</td>
                                            <td>{{$golden_visa->change_of_visa_tno}}</td>
                                            <td>{{$golden_visa->change_of_visa_tfee}}</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Medical Fitness</td>
                                            <td>{{$golden_visa->medical_fitness_tno}}</td>
                                            <td>{{$golden_visa->medical_fitness_tfee}}</td>
                                        </tr>


                                        <tr>
                                            <td>4</td>
                                            <td>Health Insurance</td>
                                            <td>{{$golden_visa->health_insur_tran_no}}</td>
                                            <td>{{$golden_visa->health_insur_tran_fee}}</td>
                                        </tr>

                                        <tr>
                                            <td>5</td>
                                            <td>Emirates ID</td>
                                            <td>{{$golden_visa->emirates_tran_no}}</td>
                                            <td>{{$golden_visa->emirates_tran_fee}}</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Residency Application</td>
                                            <td>{{$golden_visa->residency_tran_no}}</td>
                                            <td>{{$golden_visa->residency_tran_fee}}</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Biometric</td>
                                            <td>{{$golden_visa->biometric_tranc_no}}</td>
                                            <td>{{$golden_visa->biometric_tranc_fee}}</td>
                                        </tr>
                                        </tbody>
                                    @endif



                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->

</div>

@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>

<script>
    document.getElementById('exportButton').addEventListener('click', function () {
        exportTableToExcel('yourTableId', 'exported_table_data_individual.xlsx');
    });

    function exportTableToExcel(tableId, fileName) {
        var table = document.getElementById(tableId);
        var ws = XLSX.utils.table_to_sheet(table);

        // Create a blob and save the file
        var wb = XLSX.utils.book_new();
        XLSX.utils.book_append_sheet(wb, ws, 'Sheet1');
        XLSX.writeFile(wb, fileName);
    }
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
