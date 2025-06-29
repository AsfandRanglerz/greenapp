<?php
use App\Models\Note;
$authId = Auth::guard('company')->id();
if ($authId) { // Check if the user is authenticated
    $data['note'] = Note::where('company_id', $authId)->first();
}
?>

<nav class="row mx-0 position-sticky top-0 d-flex align-items-center admin-panel-header">
    <div id="sideNavOverlay" class="position-fixed d-none"></div>
    <div class="col-6">
        <button class="btn p-0 menuToggle" id="menuToggle"><span class="fa fa-bars text-white"></span></button>
        <script>
            function menuToggleFunction() {
                // alert('as');
                window.ReactNativeWebView.postMessage(JSON.stringify({
                    drawer: true
                }));
            }

            // Ensure the DOM is fully loaded before attaching the click event handler
            document.addEventListener('DOMContentLoaded', function() {
                // Select the .menuToggle element using vanilla JavaScript
                var menuToggleButton = document.querySelector('.menuToggle');

                // Check if the menuToggleButton exists
                if (menuToggleButton) {
                    // Attach a click event handler
                    menuToggleButton.addEventListener('click', function() {
                        // alert('ytui'); // Alert to test if the click event is triggered
                        menuToggleFunction(); // Call the menuToggleFunction
                    });
                }
            });
        </script>



        <button onclick="history.back()" class="btn btn-success ml-3 back-btn backNavigate"><span
                class="fa fa-angle-left mr-2 backNavigate"></span>Back</button>
                <script>
                    function backNavigate() {
                        // alert('as')
                        window.ReactNativeWebView.postMessage(JSON.stringify({
                            backNavigate: true
                        }));
                    }
                    // Ensure the DOM is fully loaded before attaching the click event handler
                    document.addEventListener('DOMContentLoaded', function() {
                        // Select the .logout element using vanilla JavaScript
                        var backNavigateButton = document.querySelector('.backNavigate');

                        // Check if the logoutButton exists
                        if (backNavigateButton) {
                            // Attach a click event handler
                            backNavigateButton.addEventListener('click', function() {
                                // alert('ytui'); // Alert to test if the click event is triggered
                                backNavigate(); // Call the logout function
                            });
                        }
                    });
                </script>
    </div>
    <div class="col-6">
        <div class="navbar p-0">
            <div class="dropdown ml-auto d-flex align-items-center">
                <!-- Button trigger modal -->
                <h5 type="button" class="text-white mb-0 mr-3" data-toggle="modal" data-target="#notesModel" title="here you can save Notes for Reminder,
Here You can save your data, this option allows you to send request for these services etc.">
                    <span class="fa fa-edit text-success mr-2"></span>Notes
                </h5>
                <a class="p-0 btn dropdown-toggle rounded-circle" role="button" id="profContentBtn"
                    data-toggle="dropdown" aria-expanded="false">
                    @if (isset(Auth::guard('company')->user()->image))
                        <img src="{{ asset(Auth::guard('company')->user()->image) }}" class="profile-user-pic">
                    @else
                        <img src="https://img.freepik.com/free-vector/abstract-logo-flame-shape_1043-44.jpg?w=2000"
                            class="profile-user-pic">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right animated-dropdown slideIn w-100 border-0 dark-box-shadow">
                    <b class="text-muted text-uppercase d-block mb-2 user-name-text">Company Menu</b>
                    <hr class="my-1">
                    <a class="dropdown-item logout" href="{{ route('company.logout') }}"><span
                            class="fa fa-sign-out-alt mr-2"></span>Logout</a>
                            <script>
                                function logout() {
                                    window.ReactNativeWebView.postMessage(JSON.stringify({
                                        logout: true
                                    }));
                                }
                                // Ensure the DOM is fully loaded before attaching the click event handler
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Select the .logout element using vanilla JavaScript
                                    var logoutButton = document.querySelector('.logout');

                                    // Check if the logoutButton exists
                                    if (logoutButton) {
                                        // Attach a click event handler
                                        logoutButton.addEventListener('click', function() {
                                            // alert('ytui'); // Alert to test if the click event is triggered
                                            logout(); // Call the logout function
                                        });
                                    }
                                });
                            </script>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="notesModel" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="notesModelLabel" aria-hidden="true">
    <form action="{{route('company.note.update')}}" method="POST">
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
                    <textarea cols="30" rows="10" class="form-control notes-section" name="note" placeholder="Your Notes ...">@if ($data['note']){{ $data['note']->note }}@endif</textarea>
                </div>
                <div class="modal-footer">
                    <button class="btn-bg reset-btn">Reset</button>
                    <button type="submit" class="btn-bg">Save</button>
                </div>
            </div>
        </div>
    </form>
</div>
