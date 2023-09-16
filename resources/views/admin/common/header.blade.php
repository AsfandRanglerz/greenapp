<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar sticky">
    <div class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i
                        data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                    <i data-feather="maximize"></i>
                </a></li>
            <li>

            </li>
        </ul>
    </div>
    <ul class="navbar-nav navbar-right align-items-center">
                <!-- Button trigger modal -->
                <h5 type="button" class="mb-0 mr-3" data-toggle="modal" data-target="#notesModel" title="here you can save Notes for Reminder,
Here You can save your data, this option allows you to send request for these services etc.">
                    <span class="fa fa-edit text-success mr-2"></span>Notes
                </h5>
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image"
                    src="{{ asset(Auth::guard('admin')->user()->image) }}" class="user-img-radious-style"> <span
                    class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
                <div class="dropdown-title">Hello Admin</div>
                <a href="{{ url('admin/profile') }}" class="dropdown-item has-icon"> <i class="far fa-user"></i> Profile
                    <!-- </a> <a href="timeline.html" class="dropdown-item has-icon"> <i class="fas fa-bolt"></i>
                    Activities
                </a> <a href="#" class="dropdown-item has-icon"> <i class="fas fa-cog"></i>
                    Settings
                </a> -->
                    <div class="dropdown-divider"></div>
                    <a href="{{ url('admin/logout') }}" class="dropdown-item has-icon text-danger"> <i
                            class="fas fa-sign-out-alt"></i>
                        Logout
                    </a>
            </div>
        </li>
    </ul>
</nav>

<!-- Modal -->
<div class="modal fade" id="notesModel" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="notesModelLabel" aria-hidden="true">
    <form action="" method="POST">
        @csrf
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notesModelLabel"><span class="fa fa-edit text-success mr-2"></span>Notes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="fa fa-times"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <textarea cols="30" rows="10" class="form-control notes-section" name="note" placeholder="Your Notes ..."></textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success reset-btn">Reset</button>
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
