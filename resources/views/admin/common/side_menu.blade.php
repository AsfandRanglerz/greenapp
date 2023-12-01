<div class="main-sidebar sidebar-style-2" style="overflow: auto">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand ">
            <a href="{{ URL::TO('admin/dashboard') }}"><img alt="image" height="80px" width=""
                    src="{{ asset('public/admin/assets/img/logo2.png') }}" /></a>
        </div>
        <ul class="sidebar-menu">

            <li class="dropdown {{ request()->is('admin/dashboard') ? 'active' : '' }}">
                <a href="{{ url('/admin/dashboard') }}" class="nav-link"><i
                        class="fa fa-tachometer-alt"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown {{ request()->is('admin/company*') ? 'active' : '' }}">
                <a href="{{ route('company.index') }}" class="nav-link"><i
                        class="fa fa-briefcase"></i><span>Companies</span></a>
            </li>
            <li class="dropdown {{ request()->is('admin/user*') ? 'active' : '' }}">
                <a href="{{ route('user.index') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Employees</span></a>
            </li>
            <li class="dropdown {{ request()->is('admin/selfemployee*') ? 'active' : '' }}">
                <a href="{{ route('selfemployee.index') }}" class="nav-link"><i
                        class="fa fa-users"></i><span>Individuals</span></a>
            </li>
            <li class="dropdown {{ request()->is('admin/notifications*') ? 'active' : '' }}">
                <a href="{{ route('notification-index') }}" class="nav-link"><i
                        class="fas fa-bell"></i><span>Notifications</span></a>
            </li>
            @php
                $notificationCount = App\Models\Inquiry::where('seen', '0')->count();
            @endphp

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
            @php
                $response_count = App\Models\IndividualService::where('seen_by_admin', '0')->count();
            @endphp
            <li class="dropdown {{ request()->is('admin/services*') ? 'active' : '' }}">
                <a href="{{ route('get-services-requests') }}" class="nav-link"><i
                        class="fa fa-question"></i><span>Services</span>
                        @if ($response_count > 0)
                        <span class="badge badge-danger text-white">
                            {{$response_count}}
                        </span>
                        @endif
                    </a>
            </li>

            <li class="dropdown {{ request()->is('admin/faq*') ? 'active' : '' }}">
                <a href="{{ route('faq.index') }}" class="nav-link"><i
                        class="fa fa-question-circle"></i><span>FAQ's</span></a>
            </li>
            <li class="dropdown {{ request()->is('admin/about-us*') ? 'active' : '' }}">
                <a href="{{ route('about-us.index') }}" class="nav-link"><i class="fa fa-info-circle"></i><span>About
                        Us</span></a>
            </li>
            <li class="dropdown {{ request()->is('admin/privacy-policy*') ? 'active' : '' }}">
                <a href="{{ route('privacy-policy.index') }}" class="nav-link"><i class="fa fa-lock"></i><span>Privacy
                        Policy</span></a>
            </li>
            <li class="dropdown {{ request()->is('admin/term-condition*') ? 'active' : '' }}">
                <a href="{{ route('term-condition.index') }}" class="nav-link"><i class="fa fa-key"></i><span>Terms &
                        Conditions</span></a>
            </li>
        </ul>
    </aside>
</div>
