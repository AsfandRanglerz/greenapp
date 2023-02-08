<div id="dashboardSidebar">
    <div class="mb-4 user-name-block">
        <a href="#" class="my-4 d-block text-center"><img src="{{ asset('public/user/images/logo.png') }}"
                alt="logo" class="logo-img" /></a>
        @if (Auth::guard('company')->check())
            <h5 class="mt-3 text-white text-center">{{ Auth::guard('company')->user()->name }}</h5>
        @else
            <h5 class="mt-3 text-white text-center">{{ Auth::guard('web')->user()->name }}</h5>
        @endif
    </div>
    <aside class="side-nav opend active">
        <ul class="mb-0 side-nav-links">
            <li class="position-relative">
                <a href="{{ route('home') }}" class="sidebar-links"><span
                        class="fa fa-home text-white pr-2 sidebar-link-icons"></span>Dashboard</a>
            </li>
            @if (Auth::guard('web')->check())
                <li class="position-relative">
                    <a href="{{ route('EmployeeProfile.index') }}" class="sidebar-links"><span
                            class="fa fa-building text-white pr-2 sidebar-link-icons"></span>Employee Profile</a>
                </li>
                <li class="position-relative {{ request()->is('document*') ? 'active' : '' }}">
                    <a href="{{ route('document.index') }}" class="sidebar-links"><span
                            class="fa fa-building text-white pr-2 sidebar-link-icons"></span>Document</a>
                </li>
                <li class="position-relative">
                    <a href="{{ route('employeeChangePassword.index') }}" class="sidebar-links"><span
                            class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Change Password</a>
                </li>
            @endif
            @if (Auth::guard('company')->check())
                <li class="position-relative">
                    <a href="{{ route('companyProfile.index') }}" class="sidebar-links"><span
                            class="fa fa-building text-white pr-2 sidebar-link-icons"></span>Company Profile</a>
                </li>
                <li class="position-relative {{ request()->is('employee*') ? 'active' : '' }}">
                    <a href="{{ route('employee.index') }}" class="sidebar-links"><span
                            class="fa fa-users text-white pr-2 sidebar-link-icons"></span>Employees</a>
                </li>
                <li class="position-relative {{ request()->is('companyDocument*') ? 'active' : '' }}">
                    <a href="{{ route('companyDocument.index') }}" class="sidebar-links"><span
                            class="fa fa-book text-white pr-2 sidebar-link-icons"></span>Documents/Attachments</a>
                </li>
                <li class="position-relative ">
                    <a href="{{ route('companyChangePassword.index') }}" class="sidebar-links"><span
                            class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Change Password</a>
                </li>
            @endif

            <li class="position-relative {{ request()->is('faqs*') ? 'active' : '' }}">
                <a href="{{ route('faqs') }}" class="sidebar-links"><span
                        class="fa fa-question-circle text-white pr-2 sidebar-link-icons"></span>FAQ's</a>
            </li>
            <li class="position-{{ request()->is('about-us*') ? 'active' : '' }}">
                <a href="{{ route('about-us') }}" class="sidebar-links"><span
                        class="fa fa-info-circle text-white pr-2 sidebar-link-icons"></span>About Us</a>
            </li>
            <li class="position-relative {{ request()->is('privacy-policy*') ? 'active' : '' }}">
                <a href="{{ route('privacy-policy') }}" class="sidebar-links"><span
                        class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Privacy Policy</a>
            </li>
            <li class="position-relative {{ request()->is('term-condition*') ? 'active' : '' }}">
                <a href="{{ route('term-condition') }}" class="sidebar-links"><span
                        class="fa fa-key text-white pr-2 sidebar-link-icons"></span>Terms & Conditions</a>
            </li>
        </ul>
    </aside>
</div>
