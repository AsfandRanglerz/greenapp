@extends('admin.layout.app')

@section('title', 'index')

@section('content')

    <div class="main-content" style="min-height: 562px;" >


          <div class="card-body table-striped table-bordered table-responsive" id="table-conatainer">

                  <table class="table text-center" id="table-product-list">
                      <thead>
                          <tr>
                              <th>Sr.</th>
                              <th>Process Name</th>
                              <th>Transaction No</th>
                              <th>Transaction Fee</th>
                          </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>   <tr>
                            <th>2</th>
                            <th>Company Name</th>
                            <th>Employee Name</th>
                            <th>Dependent Name</th>
                            <th>Request Name</th>
                            <th>Request Of</th>
                            <th>Status</th>
                        </tr>
                      </tbody>
                  </table>
              </div>

</div>

@endsection

@section('js')
<script
    src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script
    src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script>
    function exportToExcel() {
        alert('ok');
	$('#table-product-list').table2excel({
		exclude: ".no-export",
		filename: "download.xls",
		fileext: ".xls",
		exclude_links: true,
		exclude_inputs: true
	});
}
    function exportToExcel() {
        $("#myTable").tableToExcel({
            filename: 'table_export',
            sheetName: 'Sheet 1'
        });
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
