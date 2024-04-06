<style>
    .faq {
        background: #FFF;
        box-shadow: 0 2px 48px 0 rgba(0, 0, 0, 0.06);
        border-radius: 4px;
    }

    .faq .card {
        border: none;
        background: none;
        border-bottom: 1px dashed #CEE1F8;
    }

    .faq .card .card-header {
        padding: 0px;
        border: none;
        background: none;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }

    .faq .card .card-header:hover {
        background: rgb(29 44 66 / 9%);
        padding-left: 10px;
    }

    .faq .card .card-header .faq-title {
        display: flex;
        width: 100%;
        text-align: left;
        padding: 0 16px;
        letter-spacing: 1px;
        color: #3B566E;
        text-decoration: none !important;
        -webkit-transition: all 0.3s ease 0s;
        -moz-transition: all 0.3s ease 0s;
        -o-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
        cursor: pointer;
        padding-top: 20px;
        padding-bottom: 20px;
        margin-bottom: 0;
    }

    .faq .card .card-header .faq-title .badge {
        display: inline-block;
        width: 20px;
        height: 20px;
        line-height: 14px;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
        text-align: center;
        background: var(--green-clr);
        color: #FFF;
        font-size: 12px;
        margin-right: 8px;
    }

    .faq .card .card-body {
        padding-bottom: 16px;
        font-weight: 400;
        font-size: 15px;
        color: var(--theme-clr);
        letter-spacing: 1px;
        border-top: 1px solid #F3F8FF;
        text-align: justify;
    }

    .faq .card .card-body p {
        margin-bottom: 0;
    }

    @media (max-width: 991px) {
        #menuToggle {
            display: none;
        }

        .back-btn.backNavigate {
            margin-left: 0 !important;
        }
    }
</style>

@extends('company.layout.master')
@section('content')
    <div class="mb-2 admin-main-content-inner">
        <h4>Company Dashboard</h4>
        <p><span class="fa fa-question-circle"></span> - Notifications</p>
                <div class="p-3 rounded light-box-shadow">
                    <section class="faq-section">
                        <div class="faq" id="accordion">
                            @foreach ($company_notifications as $data)
                            {{-- @if ($data->seen == '0') --}}
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
                                            <p>{!! $data->message ?? '' !!}
                                                <span class="badge p-2 badge-shadow bg-danger text-white">({{ \Carbon\Carbon::parse($data['created_at'])->format('d M, Y') }})</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            {{-- @endif --}}
                            @endforeach
                        </div>
                    </section>
                </div>
    </div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $(function() {
            /*datatable search*/
            $('.employees').DataTable({
                "pageLength": 10,
                aaSorting: [
                    [0, "asc"]
                ]
            });
            /*datatable search*/

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
        });
    </script>
@endsection
