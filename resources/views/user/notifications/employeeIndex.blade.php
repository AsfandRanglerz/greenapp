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
                @if (Auth::guard('web')->user()->emp_type == 'company')
            <h4>Dashboard</h4>
            @else
            <h4>Employee Dashboard</h4>
            @endif

                <p><span class="fa fa-question-circle"></span> - Notifications</p>
                <div class="p-3 rounded light-box-shadow">
                    <section class="faq-section">
                        <div class="faq" id="accordion">
                            @foreach ($employee_notifications as $data)
                                <div class="card">
                                    <div class="card-header" id="faqHeading-1">
                                        <div class="mb-0">
                                            <h6 class="faq-title" data-toggle="collapse"
                                                data-target="#faqCollapse-{{ $data->id }}" data-aria-expanded="true"
                                                data-aria-controls="faqCollapse-{{ $data->id }}">
                                                <span class="badge">1</span>{!! $data->title ?? '' !!}
                                            </h6>
                                        </div>
                                    </div>
                                    <div id="faqCollapse-{{ $data->id }}" class="collapse"
                                        aria-labelledby="faqHeading-1" data-parent="#accordion">
                                        <div class="card-body">
                                            <p>{!! $data->message ?? '' !!}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
    @endsection
