@extends('admin.layout.app')

@section('title', 'index')

@section('content')

<div class="main-content" style="min-height: 562px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        @php
                        $company = App\Models\Company::find($company_id);
                        $company_name = $company->name;
                        $employee = App\Models\User::find($employee_id);
                        $employee_name = $employee->name;
                    @endphp
                        <div class="card-header">
                            <div class="col-12">
                                <h4>Visa Process Data of {{$employee_name}}<span>
                                    {{-- @php
                                        if ($new_visa || $renewal_process || $spo_by_some ||
                                        $part_time || $uae_gcc $$$$) {
                                            # code...
                                        }
                                    @endphp --}}
                                </span> </h4>
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
                                            Company Name:
                                        </th>
                                        <th colspan="3">
                                            <span class='font-weight-bold text-uppercase'>
                                                {{$company_name}}
                                            </span>
                                        </th>
                                    </tr>
                                    <tr class="border-bottom">
                                        <th colspan="2">
                                            Employee Name:
                                        </th>

                                        <th colspan="3">
                                            <span class='font-weight-bold text-uppercase'>
                                                {{$employee_name}}
                                            </span>
                                        </th>
                                    </tr>

                                    <tr>
                                        <th>Sr.</th>
                                        <th>Process Name</th>
                                        <th>Transaction No</th>
                                        <th>Transaction Fee</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                    @if(isset($new_visa))
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Job Offer, MB Contracts + Preapproval of work permit</td>
                                            <td>{{$new_visa->job_offer_tran_no}} <br>
                                                {{$new_visa->job_offer_mb_trc_no}} <br>
                                                {{$new_visa->job_offer_preapproval_wp_t_no}} <br>
                                            </td>
                                            <td>{{$new_visa->job_offer_tran_fees}}</td>
                                            <td>{{$new_visa->job_offer_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pay Dubai insurance</td>
                                            <td>{{$new_visa->dubai_insurance_tran_no}}</td>
                                            <td>{{$new_visa->dubai_insurance_tran_fees}}</td>
                                            <td>{{$new_visa->dubai_insurance_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Preapproval Work Permit Fees</td>
                                            <td>{{$new_visa->pre_approved_wp_tran_no}}</td>
                                            <td>{{$new_visa->pre_approved_wp_tran_fees}}</td>
                                            <td>{{$new_visa->pre_approved_wp_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Entry Visa</td>
                                            <td>{{$new_visa->enter_visa_ts_no}}</td>
                                            <td>{{$new_visa->enter_visa_ts_fee}}</td>
                                            <td>{{$new_visa->enter_visa_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Change of Visa status</td>
                                            <td>{{$new_visa->change_of_visa_tno}}</td>
                                            <td>{{$new_visa->change_of_visa_tfee}}</td>
                                            <td>{{$new_visa->change_of_visa_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Medical Fitness</td>
                                            <td>{{$new_visa->medical_fitness_tno}}</td>
                                            <td>{{$new_visa->medical_fitness_tfee}}</td>
                                            <td>{{$new_visa->medical_fitness_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Tawjeeh Training Classes</td>
                                            <td>{{$new_visa->tawjeeh_trans_no}}</td>
                                            <td>{{$new_visa->tawjeeh_trans_fee}}</td>
                                            <td>{{$new_visa->tawjeeh_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Contract Submission</td>
                                            <td>{{$new_visa->contract_tran_no}}</td>
                                            <td>{{$new_visa->contract_tran_fee}}</td>
                                            <td>{{$new_visa->contract_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Health Insurance</td>
                                            <td>{{$new_visa->health_insur_tran_no}}</td>
                                            <td>{{$new_visa->health_insur_tran_fee}}</td>
                                            <td>{{$new_visa->health_insur_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Work Permit</td>
                                            <td>{{$new_visa->work_permit_tran_no}}</td>
                                            <td>{{$new_visa->work_permit_tran_fee}}</td>
                                            <td>{{$new_visa->work_permit_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Emirates ID</td>
                                            <td>{{$new_visa->emirates_tran_no}}</td>
                                            <td>{{$new_visa->emirates_tran_fee}}</td>
                                            <td>{{$new_visa->emirates_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td>Residency Application</td>
                                            <td>{{$new_visa->residency_tran_no}}</td>
                                            <td>{{$new_visa->residency_tran_fee}}</td>
                                            <td>{{$new_visa->residency_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td>Employee Biometric</td>
                                            <td>{{$new_visa->biometric_tranc_no}}</td>
                                            <td>{{$new_visa->biometric_tranc_fee}}</td>
                                            <td>{{$new_visa->biometric_date}}</td>
                                        </tr>
                                        </tbody>
                                    @endif

                                    @if(isset($renewal_process))
                                        <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Medical Fitness</td>
                                            <td>{{$renewal_process->medical_fitness_tran_no}}</td>
                                            <td>{{$renewal_process->medical_fitness_tran_fees}}</td>
                                            <td>{{$renewal_process->medical_fitness_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Work Permit Application</td>
                                            <td>{{$renewal_process->work_permit_tran_no}}</td>
                                            <td>{{$renewal_process->work_permit_tran_fee}}</td>
                                            <td>{{$renewal_process->work_permit_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Upload Signed MB</td>
                                            <td>{{$renewal_process->signed_mb_tranc_no}}</td>
                                            <td>{{$renewal_process->signed_mb_tranc_fee}}</td>
                                            <td>{{$renewal_process->signed_mb_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Pay Dubai Insurance</td>
                                            <td>{{$renewal_process->pay_dubai_insu_tran_no}}</td>
                                            <td>{{$renewal_process->pay_dubai_insu_tran_fee}}</td>
                                            <td>{{$renewal_process->pay_dubai_insu_date }}</td>
                                        </tr>
                                        <tr>
                                                <td>5</td>
                                                <td>Contract Submission</td>
                                                <td>{{$renewal_process->contract_sub_tranc_no}}</td>
                                                <td>{{$renewal_process->contract_sub_tranc_fee}}</td>
                                                <td>{{$renewal_process->contract_sub_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Tawjeeh classes</td>
                                            <td>{{$renewal_process->tawjeeh_tranc_no}}</td>
                                            <td>{{$renewal_process->tawjeeh_tranc_fee}}</td>
                                            <td>{{$renewal_process->tawjeeh_tranc_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Residency</td>
                                            <td>{{$renewal_process->residency_tran_no}}</td>
                                            <td>{{$renewal_process->residency_tran_fees}}</td>
                                            <td>{{$renewal_process->residency_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>ID Renewal</td>
                                            <td>{{$renewal_process->renewal_tran_no}}</td>
                                            <td>{{$renewal_process->renewal_tran_fees}}</td>
                                            <td>{{$renewal_process->renewal_date}}</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Employee Biometric</td>
                                            <td>{{$renewal_process->emp_biometric_tranc_no}}</td>
                                            <td>{{$renewal_process->emp_biometric_tranc_fee}}</td>
                                            <td>{{$renewal_process->emp_biometric_date}}</td>
                                        </tr>

                                        </tbody>
                                    @endif

                                    @if(isset($spo_by_some))
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Work permit application</td>
                                                <td>{{$spo_by_some->work_permit_app_tranc_no}}</td>
                                                <td>{{$spo_by_some->work_permit_app_tranc_fee}}</td>
                                                <td>{{$spo_by_some->work_permit_app_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Upload ST & MB</td>
                                                <td>{{$spo_by_some->signed_mb_st_tranc_no}}</td>
                                                <td>{{$spo_by_some->signed_mb_st_tranc_fee}}</td>
                                                <td>{{$spo_by_some->signed_mb_st_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pay Dubai insurance</td>
                                                <td>{{$spo_by_some->pay_dubai_insu_tranc_no}}</td>
                                                <td>{{$spo_by_some->pay_dubai_insu_tranc_fee}}</td>
                                                <td>{{$spo_by_some->pay_dubai_insu_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td> Preapproval Work Permit Fees</td>
                                                <td>{{$spo_by_some->pre_approv_wp_tranc_no}}</td>
                                                <td>{{$spo_by_some->pre_approv_wp_tranc_fee}}</td>
                                                <td>{{$spo_by_some->pre_approv_wp_date}}</td>
                                            </tr>
                                            <tr>
                                                    <td>5</td>
                                                    <td>Upload Work Permit</td>
                                                    <td>{{$spo_by_some->upload_wp_tranc_no}}</td>
                                                    <td>{{$spo_by_some->upload_wp_tranc_fee}}</td>
                                                    <td>{{$spo_by_some->upload_wp_date}}</td>
                                            </tr>

                                        </tbody>
                                    @endif

                                    @if(isset($part_time))
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Work permit application</td>
                                                <td>{{$part_time->wp_app_trnc_no}}</td>
                                                <td>{{$part_time->wp_app_trnc_fee}}</td>
                                                <td>{{$part_time->wp_app_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Upload ST & MB</td>
                                                <td>{{$part_time->signed_mb_st_trc_no}}</td>
                                                <td>{{$part_time->signed_mb_st_trc_fee}}</td>
                                                <td>{{$part_time->signed_mb_st_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Upload Contract</td>
                                                <td>{{$part_time->contract_tran_no}}</td>
                                                <td>{{$part_time->contract_tran_fee}}</td>
                                                <td>{{$part_time->contract_date}}</td>
                                            </tr>
                                        </tbody>
                                    @endif

                                    @if(isset($uae_gcc))
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Work permit application</td>
                                                <td>{{$uae_gcc->wp_app_trnc_no}}</td>
                                                <td>{{$uae_gcc->wp_app_trnc_fee}}</td>
                                                <td>{{$uae_gcc->wp_app_date	}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Upload ST & MB</td>
                                                <td>{{$uae_gcc->signed_mb_st_trc_no}}</td>
                                                <td>{{$uae_gcc->signed_mb_st_trc_fee}}</td>
                                                <td>{{$uae_gcc->signed_mb_st_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Pay Dubai insurance</td>
                                                <td>{{$uae_gcc->pay_dubai_insu_tranc_no}}</td>
                                                <td>{{$uae_gcc->pay_dubai_insu_tranc_fee}}</td>
                                                <td>{{$uae_gcc->pay_dubai_insu_date}}</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Upload Work Permit</td>
                                                <td>{{$uae_gcc->upload_wp_tranc_no}}</td>
                                                <td>{{$uae_gcc->upload_wp_tranc_fee}}</td>
                                                <td>{{$uae_gcc->upload_wp_date}}</td>
                                            </tr>
                                        </tbody>
                                    @endif

                                    @if(isset($modify_contract))
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Work permit application</td>
                                                <td>{{$modify_contract->wp_app_trnc_no}}</td>
                                                <td>{{$modify_contract->wp_app_trnc_fee}}</td>
                                                <td>{{$modify_contract->wp_app_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Upload ST & MB</td>
                                                <td>{{$modify_contract->signed_mb_st_trc_no}}</td>
                                                <td>{{$modify_contract->signed_mb_st_trc_fee}}</td>
                                                <td>{{$modify_contract->signed_mb_st_date}}</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Upload Work Permit</td>
                                                <td>{{$modify_contract->upload_wp_tranc_no}}</td>
                                                <td>{{$modify_contract->upload_wp_tranc_fee}}</td>
                                                <td>{{$modify_contract->upload_wp_date}}</td>
                                            </tr>
                                        </tbody>
                                    @endif

                                    @if(isset($visa_cancellation))
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Work Permit Cancellation Form</td>
                                                <td>{{$visa_cancellation->wp_app_can_trnc_no}}</td>
                                                <td>{{$visa_cancellation->wp_app_can_trnc_fee}}</td>
                                                <td>{{$visa_cancellation->wp_app_can_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Signed Cancellation Form</td>
                                                <td>{{$visa_cancellation->signd_can_from_tranc_no}}</td>
                                                <td>{{$visa_cancellation->signd_can_from_tranc_fee}}</td>
                                                <td>{{$visa_cancellation->signd_can_from_date}}</td>
                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>Residency Application</td>
                                                <td>{{$visa_cancellation->residency_app_tranc_no}}</td>
                                                <td>{{$visa_cancellation->residency_app_tranc_fee}}</td>
                                                <td>{{$visa_cancellation->residency_app_date}}</td>
                                            </tr>
                                        </tbody>
                                    @endif

                                    @if(isset($permit_cancellation))
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Work Permit Cancellation Form</td>
                                                <td>{{$permit_cancellation->wp_app_can_trnc_no}}</td>
                                                <td>{{$permit_cancellation->wp_app_can_trnc_fee}}</td>
                                                <td>{{$permit_cancellation->wp_app_can_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Signed Cancellation Form</td>
                                                <td>{{$permit_cancellation->signd_can_from_tranc_no}}</td>
                                                <td>{{$permit_cancellation->signd_can_from_tranc_fee}}</td>
                                                <td>{{$permit_cancellation->signd_can_from_date}}</td>
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
        exportTableToExcel('yourTableId', 'exported_table_data_employee.xlsx');
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
