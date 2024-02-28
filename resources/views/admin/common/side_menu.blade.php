<div class="main-sidebar sidebar-style-2" style="overflow: auto">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand ">
            <a href="{{ URL::TO('admin/dashboard') }}"><img alt="image" height="80px" width=""
                    src="{{ asset('public/admin/assets/img/logo2.png') }}" /></a>
        </div>
        <ul class="sidebar-menu">

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Dashboard'))
            <li class="dropdown {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link"><i
                        class="fa fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link"><i
                        class="fa fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            @endif

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('SubAdmin'))
            <li class="dropdown {{ request()->is('admin/get-sub-admins*') ? 'active' : '' }}">
                <a href="{{ route('get-sub-admins') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Sub Admins</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/get-sub-admins*') ? 'active' : '' }}">
                <a href="{{ route('get-sub-admins') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Sub Admins</span></a>
            </li>
            @endif


            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Companies'))
            <li class="dropdown {{ request()->is('admin/company*') ? 'active' : '' }}">
                <a href="{{ route('company.index') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Companies</span></a>

            </li>
            @elseif(auth()->guard('admin')->check())

            <li class="dropdown {{ request()->is('admin/company*') ? 'active' : '' }}">
                <a href="{{ route('company.index') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Companies</span></a>
            </li>
            @endif

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Employees'))
            <li class="dropdown {{ request()->is('admin/user*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Employees</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/user*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Employees</span></a>
            </li>
            @endif



            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Individuals'))
            <li class="dropdown {{ request()->is('admin/selfemployee*') ? 'active' : '' }}">
                <a href="{{ route('selfemployee.index') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Individuals</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/selfemployee*') ? 'active' : '' }}">
                <a href="{{ route('selfemployee.index') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Individuals</span></a>
            </li>
            @endif


            @php
            $request_count = App\Models\VisaProcessRequest::where('seen_by_admin', '0')->count();
            @endphp
            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Visa Process'))
            <li class="dropdown {{ request()->is('admin/visa*') ? 'active' : '' }}">
                <a href="{{ route('visa.index') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Visa Process</span>
                        @if ($request_count)
                        <span class="badge badge-danger text-white">
                            {{ $request_count }}
                        </span>
                        @endif
                    </a>

            </li>
            @elseif(auth()->guard('admin')->check())

            <li class="dropdown {{ request()->is('admin/visa*') ? 'active' : '' }}">
                <a href="{{ route('visa.index') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Visa Process</span>
                        @if ($request_count)
                        <span class="badge badge-danger text-white">
                            {{ $request_count }}
                        </span>
                        @endif

                    </a>
            </li>
            @endif


            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('CompleteProcesses'))
            <li class="dropdown {{ request()->is('admin/get-complete-processes*') ? 'active' : '' }}">
                <a href="{{ route('get-complete-processes') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Complete Processes</span>
                    </a>
            </li>
            @elseif(auth()->guard('admin')->check())

            <li class="dropdown {{ request()->is('admin/get-complete-processes*') ? 'active' : '' }}">
                <a href="{{ route('get-complete-processes') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Complete Processes</span>
                    </a>
            </li>
            @endif


            @if(auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('StartProcesses'))
            <li class="dropdown {{ request()->is('admin/admin-start-processes*') ? 'active' : '' }}">
                <a href="{{ route('get-admin-start-processes') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Start Processes</span>
                    </a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/admin-start-processes*') ? 'active' : '' }}">
                <a href="{{ route('get-admin-start-processes') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Start Processes</span>
                    </a>
            </li>
            @endif


            {{-- @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Receipts'))
            <li class="dropdown {{ request()->is('admin/receipt-user-index*') ? 'active' : '' }}">
                <a href="{{ route('receipt-user-index') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Receipts</span></a>

            </li>
            @elseif(auth()->guard('admin')->check())

            <li class="dropdown {{ request()->is('admin/receipt-user-index*') ? 'active' : '' }}">
                <a href="{{ route('receipt-user-index') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Receipts</span></a>
            </li>
            @endif --}}

            @php
            $notificationCount = App\Models\NotifyToAdmin::where('seen', '0')->count();
            @endphp
            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Notifications'))
            <li class="dropdown {{ request()->is('admin/notification-index*') ? 'active' : '' }}">
                <a href="{{ route('notification-index') }}" class="nav-link"><i
                        class="fas fa-bell"></i><span>Notifications</span>
                        @if ($notificationCount)
                        <span class="badge badge-danger text-white">
                            {{ $notificationCount }}
                        </span>
                    @endif
                    </a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/notification-index*') ? 'active' : '' }}">
                <a href="{{ route('notification-index') }}" class="nav-link"><i
                        class="fas fa-bell"></i><span>Notifications</span>
                        @if ($notificationCount)
                        <span class="badge badge-danger text-white">
                            {{ $notificationCount }}
                        </span>
                    @endif
                    </a>
            </li>
            @endif

            @php
                $notificationCount = App\Models\Inquiry::where('seen', '0')->count();
            @endphp
            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Inquiry'))
            <li class="dropdown {{ request()->is('admin/inquiry*') ? 'active' : '' }}">
                <a href="{{ route('inquiry.index') }}" class="nav-link">
                    <i class="fa fa-users"></i><span>Inquiry</span>
                    @if ($notificationCount)
                        <span class="badge badge-danger text-white">
                            {{ $notificationCount }}
                        </span>
                    @endif
                </a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/inquiry*') ? 'active' : '' }}">
                <a href="{{ route('inquiry.index') }}" class="nav-link">
                    <i class="fa fa-users"></i><span>Inquiry</span>
                    @if ($notificationCount)
                        <span class="badge badge-danger text-white">
                            {{ $notificationCount }}
                        </span>
                    @endif
                </a>
            </li>
            @endif

            @php
                $response_count = App\Models\IndividualService::where('seen_by_admin', '0')->count();
            @endphp

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Services'))
            <li class="dropdown {{ request()->is('admin/get-services-requests*') ? 'active' : '' }}">
                <a href="{{ route('get-services-requests') }}" class="nav-link"><i
                        class="fa fa-question"></i><span>Services</span>
                        @if ($response_count > 0)
                        <span class="badge badge-danger text-white">
                            {{$response_count}}
                        </span>
                        @endif
                    </a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/get-services-requests*') ? 'active' : '' }}">
                <a href="{{ route('get-services-requests') }}" class="nav-link"><i
                        class="fa fa-question"></i><span>Services</span>
                        @if ($response_count > 0)
                        <span class="badge badge-danger text-white">
                            {{$response_count}}
                        </span>
                        @endif
                    </a>
            </li>
            @endif

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('FAQs'))
            <li class="dropdown {{ request()->is('admin/faq*') ? 'active' : '' }}">
                <a href="{{ route('faq.index') }}" class="nav-link"><i
                        class="fa fa-question-circle"></i><span>FAQ's</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/faq*') ? 'active' : '' }}">
                <a href="{{ route('faq.index') }}" class="nav-link"><i
                        class="fa fa-question-circle"></i><span>FAQ's</span></a>
            </li>
            @endif

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('About us'))
            <li class="dropdown {{ request()->is('admin/about-us*') ? 'active' : '' }}">
                <a href="{{ route('about-us.index') }}" class="nav-link"><i class="fa fa-info-circle"></i><span>About
                        Us</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())

            <li class="dropdown {{ request()->is('admin/about-us*') ? 'active' : '' }}">
                <a href="{{ route('about-us.index') }}" class="nav-link"><i class="fa fa-info-circle"></i><span>About
                        Us</span></a>
            </li>
            @endif

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Privacy Policy'))
            <li class="dropdown {{ request()->is('admin/privacy-policy*') ? 'active' : '' }}">
                <a href="{{ route('privacy-policy.index') }}" class="nav-link"><i class="fa fa-lock"></i><span>Privacy
                        Policy</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/privacy-policy*') ? 'active' : '' }}">
                <a href="{{ route('privacy-policy.index') }}" class="nav-link"><i class="fa fa-lock"></i><span>Privacy
                        Policy</span></a>
            </li>
            @endif

            @if (auth()->guard('web')->check() &&
            auth()->guard('web')->user()->can('Terms & Conditions'))
            <li class="dropdown {{ request()->is('admin/term-condition*') ? 'active' : '' }}">
                <a href="{{ route('term-condition.index') }}" class="nav-link"><i class="fa fa-key"></i><span>Terms &
                        Conditions</span></a>
            </li>
            @elseif(auth()->guard('admin')->check())
            <li class="dropdown {{ request()->is('admin/term-condition*') ? 'active' : '' }}">
                <a href="{{ route('term-condition.index') }}" class="nav-link"><i class="fa fa-key"></i><span>Terms &
                        Conditions</span></a>
            </li>
            @endif

        </ul>
    </aside>
</div>
