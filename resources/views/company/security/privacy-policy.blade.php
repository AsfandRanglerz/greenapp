@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            @if (Auth::guard('company')->check())
                <h4>Company Dashboard</h4>
            @else
                <h4>Employee Dashboard</h4>
            @endif
            <p><span class="fa fa-lock"></span> - Privacy Policy</p>
            <div class="p-3 rounded light-box-shadow">
                <p>{!! $data->description ??'' !!}</p>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
@section('script')
  
@endsection
