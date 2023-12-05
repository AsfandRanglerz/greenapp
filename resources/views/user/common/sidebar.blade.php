<div id="dashboardSidebar" style="overflow: auto">
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
            <li class="position-relative {{ request()->is('user/generateCV/mycv_index*') ? 'active' : '' }}">
                <a href="{{ route('user.myCv.index') }}" class="sidebar-links"><span
                        class="far fa-paper-plane text-white pr-2 sidebar-link-icons"></span>My CV</a>
            </li>
            @php
            $user = Auth::guard('web')->user();
            $usercount = App\Models\Inquiry::where('user_id',$user->id)->where('answered','1')->where('individual_seen','0')->count();
            @endphp
                <li class="position-relative {{ request()->is('user/inquiry*') ? 'active' : '' }}">
                    <a href="{{ route('user.inquiry.index') }}" class="sidebar-links">
                        <span class="fa fa-question-circle text-white pr-2 sidebar-link-icons"></span>
                        <span class="py-1 mr-1">Inquiries</span>
                        @if($usercount)
                        <span class="badge badge-danger text-white">
                           {{$usercount}}
                        </span>
                    @endif
                    </a>
                </li>
                <li class="position-relative {{ request()->is('user/generateCV*') ? 'active' : '' }}">
                    <a href="{{ route('user.generateCV.index') }}" class="sidebar-links"><span
                            class="fas fa-print text-white pr-2 sidebar-link-icons"></span>Generate CV</a>
                </li>
            @endif

            <li class="position-relative">
                <a href="{{ route('user.changePassword.index') }}" class="sidebar-links"><span
                        class="fa fa-lock text-white pr-2 sidebar-link-icons"></span>Change Password</a>
            </li>

            @if (Auth::guard('web')->user()->emp_type == 'self')
            <li class="position-relative">
                @php
                $notificationCount = App\Models\AdminNotification::whereIn('to_all', ['Individuals', 'All Employees'])->where('seen','0')->count();
               @endphp
                <a href="{{ route('show-notifications-to-self-employee') }}" class="sidebar-links"><span
                        class="far fa-bell text-white pr-2 sidebar-link-icons"></span>
                        <span class='mr-1'>Notifications</span>
                            @if ($notificationCount > 0)
                        <span class="badge badge-danger text-white">
                            {{$notificationCount}}
                        </span>
                        @endif
                </a>
            </li>
            @else
            <li class="position-relative">
                @php
                $notificationCount = App\Models\AdminNotification::whereIn('to_all', ['Employees', 'All Employees'])->where('seen','0')->count();
               @endphp
                <a href="{{ route('show-notifications-to-employee') }}" class="sidebar-links"><span
                        class="far fa-bell text-white pr-2 sidebar-link-icons"></span>
                        <span class='mr-1'>Notifications</span>
                        @if ($notificationCount > 0)
                        <span class="badge badge-danger text-white">
                            {{$notificationCount}}
                        </span>
                        @endif
                </a>
            </li>
            @endif

            @if(Auth::guard('web')->user()->emp_type = 'self')
            {{-- @php
            $response_count = App\Models\IndividualService::whereNotNull('response')->where('seen_by_user','0')->count();
        @endphp --}}

            <li class="position-relative {{ request()->is('user/dependents*') ? 'active' : '' }}">
                <a href="{{route('user.get-dependent')}}" class="sidebar-links"><span
                        class="fab fa-servicestack text-white pr-2 sidebar-link-icons"></span>Dependents
                        {{-- @if ($response_count > 0)
                        <span class="badge badge-danger text-white ml-1">
                            {{$response_count}}
                        </span>
                        @endif --}}
                    </a>
            </li>
            @endif

            @if(Auth::guard('web')->user()->emp_type = 'self')
            @php
            $response_count = App\Models\IndividualService::whereNotNull('response')->where('seen_by_user','0')->count();
        @endphp

            <li class="position-relative {{ request()->is('user/services*') ? 'active' : '' }}">
                <a href="{{route('user.get-services.index')}}" class="sidebar-links"><span
                        class="fab fa-servicestack text-white pr-2 sidebar-link-icons"></span>Services
                        @if ($response_count > 0)
                        <span class="badge badge-danger text-white ml-1">
                            {{$response_count}}
                        </span>
                        @endif
                    </a>
            </li>
            @endif


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
