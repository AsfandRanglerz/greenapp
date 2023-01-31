<nav class="row mx-0 position-sticky top-0 d-flex align-items-center admin-panel-header">
    <div id="sideNavOverlay" class="position-fixed d-none"></div>
    <div class="col-6">
        <button class="btn p-0" id="menuToggle"><span class="fa fa-bars text-white"></span></button>
    </div>
    <div class="col-6">
        <div class="navbar p-0">
            <div class="dropdown ml-auto">
                <a class="p-0 btn dropdown-toggle rounded-circle" role="button" id="profContentBtn"
                    data-toggle="dropdown" aria-expanded="false">
                    @if (Auth::guard('company')->check())
                        @if (isset(Auth::guard('company')->user()->image))
                            <img src="{{ asset(Auth::guard('company')->user()->image) }}" class="profile-user-pic">
                        @else
                            <img src="https://img.freepik.com/free-vector/abstract-logo-flame-shape_1043-44.jpg?w=2000"
                                class="profile-user-pic">
                        @endif
                    @else
                        @if (isset(Auth::guard('web')->user()->image))
                            <img src="{{ asset(Auth::guard('web')->user()->image) }}" class="profile-user-pic">
                        @else
                            <img src="https://img.freepik.com/free-vector/abstract-logo-flame-shape_1043-44.jpg?w=2000"
                                class="profile-user-pic">
                        @endif
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                    @if (Auth::guard('company')->check())
                        <b class="text-muted text-uppercase d-block mb-2 user-name-text">Company Menu</b>
                    @else
                        <b class="text-muted text-uppercase d-block mb-2 user-name-text">Employee Menu</b>
                    @endif
                    <hr class="my-1">
                    <a class="dropdown-item" href="{{ route('logout') }}"><span
                            class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>
