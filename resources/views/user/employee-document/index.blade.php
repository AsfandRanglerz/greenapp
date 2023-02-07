@extends('user.layout.master')
@section('content')
    <div class="mb-5 admin-main-content-inner">
        <h4>Company Dashboard</h4>
        <p><span class="fa fa-user"></span> - Employee Details - <b>{{ $user->name }}</b></p>
        <div class="text-right">
            <a href="{{ route('employeeDocument.show', ['employeeDocument' => $empId]) }}" class="mb-3 btn btn-success"><span
                    class="fa fa-plus mr-2"></span>Add Document</a>
        </div>
        <div class="p-4 rounded light-box-shadow">
            <div class="table-responsive">
                <table class="table table-bordered table-striped mb-0 employees text-center">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Document</th>
                            <th scope="col">Type</th>
                            <th scope="col">Issue Date</th>
                            <th scope="col">Expiry Date</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="employees-body">
                        @foreach ($documents as $document)
                            <tr>
                                <td>#{{ $loop->iteration }}</td>
                                @php
                                    $file_name = $document->file;
                                    $ext = explode('.', $file_name);
                                @endphp
                                <td>
                                    <a target="_black" href="{{ asset('' . '/' . $document->file) }}">
                                        @if ($ext[1] == 'pdf')
                                            <img src="{{ asset('public/admin/assets/img/pdf-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @elseif($ext[1] == 'docx')
                                            <img src="{{ asset('public/admin/assets/img/docx-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @elseif($ext[1] == 'xls' || $ext[1] == 'xlsx')
                                            <img src="{{ asset('public/admin/assets/img/excel-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @elseif($ext[1] == 'pptx')
                                            <img src="{{ asset('public/admin/assets/img/pptx-icon.png') }}"
                                                style="height: 50px;width:50px">
                                        @else
                                            <img src="{{ asset('' . '/' . $document->file) }}"
                                                style="height: 50px;width:50px">
                                        @endif
                                    </a>
                                </td>
                                <td>{{ $document->doc_type }}</td>

                                <td>{{ $document->issue_date }}</td>
                                <td>{{ $document->expiry_date }}</td>
                                <td class="text-center">
                                    <a href="{{ route('employeeDocument.download', $document->id) }}"><span
                                            class="fa fa-download text-success"></span></a>
                                    {{-- <a href="" class="mx-2"><span class="fa fa-edit text-info"></span></a> --}}
                                    <form method="post" action="{{ route('employeeDocument.destroy', $document->id) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="border" type="submit"><span
                                                class="fa fa-trash text-danger show_confirm"></span></button>
                                    </form>
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
@endsection
@section('script')
@if (\Illuminate\Support\Facades\Session::has('message'))
<script>
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
</script>
@endif
    <script type="text/javascript">
        $(function() {
            /*datatable search*/
            $('.employees').DataTable({
                "pageLength": 10,
                aaSorting: [
                    [0, "asc"]
                ],
                "fnDrawCallback": function(oSettings) {
                    if ($('.employees-body > tr').length < 10) {
                        $('.dataTables_paginate').hide();
                    }
                },
                /*"columnDefs": [{"type": "date", "targets": 0}]*/
            });
            /*datatable search*/
        });
    </script>
    <script type="text/javascript">
        $(function() {
            /*dashboard right side content toggle*/
            $(document).on('click', '#menuToggle', function() {
                $("#dashboardSidebarRightContent").toggleClass("toggled");
                $("#dashboardSidebar").toggleClass("sidebar-toggle");
            });

            /*dashboard sidebar*/
            $(".sidebar-links").each(function() {
                var currentUrlBase = window.location.href.split('/').pop();
                var activeUrlBase = $(this).attr("href").split('/').pop();
                if (currentUrlBase == activeUrlBase && currentUrlBase != undefined && activeUrlBase !=
                    undefined) {
                    $(this).parent().addClass('active').parent().show().parent().addClass('opend');
                }
                if ($(this).parent().hasClass('active')) {
                    $(this).parent().addClass('active').parent().show().parent().addClass('opend active');
                }
            });

            $('#dashboardSidebar .side-nav .side-nav-links li').on('click', function() {

                var $this = $(this);

                $this.toggleClass('opend').siblings().removeClass('opend');

                if ($this.hasClass('opend')) {
                    $this.find('.side-nav-dropdown').slideToggle('fast');
                    $this.siblings().find('.side-nav-dropdown').slideUp('fast');
                    $this.tooltip('disable');
                } else {
                    $this.find('.side-nav-dropdown').slideUp('fast');
                    $this.tooltip('enable');
                }
            });

            $('#dashboardSidebar .side-nav .close-aside').on('click', function() {
                $('#' + $(this).data('close')).addClass('show-side-nav');
                contents.removeClass('margin');
            });

            /*dashboard right side content and sidebar toggle switching*/
            sideBarToggleSwitch();

            if ($(window).width() <= 991) {
                /*Side-nav-overlay*/
                sideNavOverlay();
            }
        });

        $(window).resize(function() {
            /*dashboard right side content and sidebar toggle switching*/
            sideBarToggleSwitch();

            /*Side-nav-overlay*/
            sideNavOverlay();
        });

        /*Side-nav-overlay*/
        function sideNavOverlay() {
            $(document).on('click', '#menuToggle', function() {
                $('#sideNavOverlay').removeClass('d-none');
            });
        }

        /*dashboard right side content toggle*/
        function sideBarToggleSwitch() {
            $(document).on('click', function(event) {
                if ($(window).width() <= 991 && !$(event.target).closest('#dashboardSidebar, #menuToggle').length) {
                    $('#dashboardSidebar').addClass('sidebar-toggle');
                    /*Side-nav-overlay*/
                    $('#sideNavOverlay').addClass('d-none');
                }
            });

            if ($(window).width() >= 992) {
                $('#dashboardSidebar').removeClass('sidebar-toggle');
                $('#dashboardSidebarRightContent').removeClass('toggled');
            } else {
                $('#dashboardSidebar').addClass('sidebar-toggle');
                $('#sideNavOverlay').addClass('d-none');
            }
        }

        /*toastr popup function*/
        // function toastrPopUp() {
        //     toastr.options = {
        //         "closeButton": true,
        //         "newestOnTop": false,
        //         "progressBar": true,
        //         "positionClass": "toast-top-right",
        //         "preventDuplicates": false,
        //         "onclick": null,
        //         "showDuration": "3000",
        //         "hideDuration": "1000",
        //         "timeOut": "5000",
        //         "extendedTimeOut": "1000",
        //         "showEasing": "swing",
        //         "hideEasing": "linear",
        //         "showMethod": "fadeIn",
        //         "hideMethod": "fadeOut"
        //     }
        // }
        // toastrPopUp();
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
@endsection
