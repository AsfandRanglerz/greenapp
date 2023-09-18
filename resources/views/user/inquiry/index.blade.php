@extends('user.layout.master')
@section('content')

    <body>
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
        </style>

        <div class="admin-main-content-inner">
            <div class="dashboard-front-pg">
                @if (Auth::guard('web')->user()->emp_type == 'self')
            <h4>Dashboard</h4>
            @else
            <h4>Employee Dashboard</h4>
            @endif

                <p><span class="fa fa-question-circle"></span> - Inquiry</p>
                <div class="text-right">
                    <a href="{{ route('user.inquiry.create') }}" class="mb-3 btn btn-success"><span
                            class="fa fa-plus mr-2"></span>Add Inquiry</a>
                </div>
                @if (count($data) > 0)
                    <div class="p-3 rounded light-box-shadow">
                        <section class="faq-section">
                            <div class="faq" id="accordion">
                                @foreach ($data as $inquiry)
                                    <div class="card">
                                        <div class="card-header" id="faqHeading-1">
                                            <div class="mb-0 d-flex">
                                                <div class="flex-fill">
                                                    <h6 class="faq-title" data-toggle="collapse"
                                                        data-target="#faqCollapse-{{ $inquiry->id }}"
                                                        data-aria-expanded="true"
                                                        data-aria-controls="faqCollapse-{{ $inquiry->id }}">
                                                        <span
                                                            class="badge @if (!isset($inquiry->answer)) bg-danger @endif"></span>{!! $inquiry->question ?? '' !!}
                                                    </h6>
                                                </div>
                                                {{-- <div class="text-right m-3">
                                                @if (isset($inquiry->answer))
                                                    <form class="d-inline" method="post"
                                                        action="{{ route('user.inquiry.destroy', $inquiry->id) }}">
                                                        @csrf
                                                        <input name="_method" type="hidden" value="DELETE">
                                                        <a class="form-btn" type="submit"><span
                                                                class="fa fa-trash text-danger show_confirm"></span></a>
                                                    </form>
                                                @endif
                                            </div> --}}
                                            </div>
                                        </div>
                                        <div id="faqCollapse-{{ $inquiry->id }}" class="collapse"
                                            aria-labelledby="faqHeading-1" data-parent="#accordion">
                                            <div class="card-body">
                                                <p>{!! $inquiry->answer ?? '' !!}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>
                    </div>
                @endif
            </div>
        </div>
    @endsection
    @section('script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
        <script type="text/javascript">
            $(function() {
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
