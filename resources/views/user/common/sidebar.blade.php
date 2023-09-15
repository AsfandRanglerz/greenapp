<div id="dashboardSidebar">
    <div class="mb-4 user-name-block">
        <a href="#" class="my-4 d-block text-center"><img src="{{ asset('public/user/images/logo.png') }}"
                alt="logo" class="logo-img" /></a>
        @php
            $company = \App\Models\Company::find(auth()->user()->company_id);
        @endphp
        <h5 class="mt-3 text-white text-center">
            {{ Auth::guard('web')->user()->emp_type == 'self' ? Auth::guard('web')->user()->name : $company->name }}
        </h5>
    </div>
    <aside class="side-nav opend active">
        <ul class="mb-0 side-nav-links">
            <li class="position-relative">
                <a href="{{ route('user.dashboard') }}" class="sidebar-links"><span
                        class="fa fa-home text-white pr-2 sidebar-link-icons"></span>Dashboard</a>
            </li>
            <li class="position-relative">
                <a href="{{ route('user.profile.index') }}" class="sidebar-links"><span
                        class="fa fa-user text-white pr-2 sidebar-link-icons"></span>My Profile</a>
            </li>
            <li class="position-relative {{ request()->is('user/document*') ? 'active' : '' }}">
                <a href="{{ route('user.document.index') }}" class="sidebar-links"><span
                        class="fa fa-book text-white pr-2 sidebar-link-icons"></span>Documents/Attachments</a>
            </li>
            @if (Auth::guard('web')->user()->emp_type == 'self')
                <li class="position-relative {{ request()->is('user/inquiry*') ? 'active' : '' }}">
                    <a href="{{ route('user.inquiry.index') }}" class="sidebar-links"><span
                            class="fa fa-question-circle text-white pr-2 sidebar-link-icons"></span>Inquiries</a>
                </li>
            @endif
            <li class="position-relative">
                <a href="{{ route('user.changePassword.index') }}" class="sidebar-links"><span
                        class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Change Password</a>
            </li>
            <li class="position-relative {{ request()->is('faqs*') ? 'active' : '' }}">
                <a href="{{ route('user.faqs') }}" class="sidebar-links"><span
                        class="fa fa-question-circle text-white pr-2 sidebar-link-icons"></span>FAQ's</a>
            </li>
            <li class="position-{{ request()->is('about-us*') ? 'active' : '' }}">
                <a href="{{ route('user.about-us') }}" class="sidebar-links"><span
                        class="fa fa-info-circle text-white pr-2 sidebar-link-icons"></span>About Us</a>
            </li>
            <li class="position-relative {{ request()->is('privacy-policy*') ? 'active' : '' }}">
                <a href="{{ route('user.privacy-policy') }}" class="sidebar-links"><span
                        class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Privacy Policy</a>
            </li>
            <li class="position-relative {{ request()->is('term-condition*') ? 'active' : '' }}">
                <a href="{{ route('user.term-condition') }}" class="sidebar-links"><span
                        class="fa fa-key text-white pr-2 sidebar-link-icons"></span>Terms & Conditions</a>
            </li>
            <li class="position-relative">
                <a href="{{ route('user.logout') }}" class="sidebar-links"><span
                        class="fa fa-sign-out-alt text-white pr-2 sidebar-link-icons"></span>Logout</a>
            </li>
        </ul>
    </aside>
</div>
