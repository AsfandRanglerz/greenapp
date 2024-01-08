<div id="dashboardSidebar">
    <div class="mb-4 user-name-block">
        <a href="#" class="my-4 d-block text-center"><img src="{{ asset('public/user/images/logo.png') }}"
                alt="logo" class="logo-img" /></a>
        <h5 class="mt-3 text-white text-center">{{ Auth::guard('company')->user()->name }}</h5>
    </div>
    <aside class="side-nav opend active">
        <ul class="mb-0 side-nav-links">
            <li class="position-relative">
                <a href="{{ route('company.dashboard') }}" class="sidebar-links"><span
                        class="fa fa-home text-white pr-2 sidebar-link-icons"></span>Dashboard</a>
            </li>
            <li class="position-relative">
                <a href="{{ route('company.profile.index') }}" class="sidebar-links"><span
                        class="fa fa-building text-white pr-2 sidebar-link-icons"></span>Company Profile</a>
            </li>
            <li class="position-relative {{ request()->is('company/employee*') ? 'active' : '' }}">
                <a href="{{ route('company.employee.index') }}" class="sidebar-links"><span
                        class="fa fa-users text-white pr-2 sidebar-link-icons"></span>Employees</a>
            </li>
            <li class="position-relative {{ request()->is('company/document*') ? 'active' : '' }}">
                <a href="{{ route('company.document.index') }}" class="sidebar-links"><span
                        class="fa fa-book text-white pr-2 sidebar-link-icons"></span>Documents/Attachments</a>
            </li>
            <li class="position-relative ">
                <a href="{{ route('company.ChangePassword.index') }}" class="sidebar-links"><span
                        class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Change Password</a>
            </li>

            <li class="position-relative {{ request()->is('company/notifications*') ? 'active' : '' }}">
                @php
                 $authId = Auth::guard('company')->id();
                 $notificationCount = App\Models\AdminNotification::where('company_id',$authId)->where('to_all','Companies')->where('seen','0')->count();
                @endphp

                <a href="{{ route('show-notifications') }}" class="sidebar-links">
                    <span class="fa fa-book text-white pr-2 sidebar-link-icons">
                    </span>
                    <span class='mr-1'>Notifications</span>
                    @if($notificationCount > 0 )
                    <span class="badge badge-danger text-white">
                        {{ $notificationCount}}
                    </span>
                    @endif
                </a>
            </li>


            <li class="position-relative {{ request()->is('faqs*') ? 'active' : '' }}">
                <a href="{{ route('company.faqs') }}" class="sidebar-links"><span
                        class="fa fa-question-circle text-white pr-2 sidebar-link-icons"></span>FAQ's</a>
            </li>
            <li class="position-{{ request()->is('about-us*') ? 'active' : '' }}">
                <a href="{{ route('company.about-us') }}" class="sidebar-links"><span
                        class="fa fa-info-circle text-white pr-2 sidebar-link-icons"></span>About Us</a>
            </li>
            <li class="position-relative {{ request()->is('privacy-policy*') ? 'active' : '' }}">
                <a href="{{ route('company.privacy-policy') }}" class="sidebar-links"><span
                        class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Privacy Policy</a>
            </li>
            <li class="position-relative {{ request()->is('term-condition*') ? 'active' : '' }}">
                <a href="{{ route('company.term-condition') }}" class="sidebar-links"><span
                        class="fa fa-key text-white pr-2 sidebar-link-icons"></span>Terms & Conditions</a>
            </li>
            <li class="position-relative">
                <a href="{{ route('company.logout') }}" class="sidebar-links"><span
                        class="fa fa-sign-out-alt text-white pr-2 sidebar-link-icons"></span>Logout</a>
            </li>
        </ul>
    </aside>
</div>
