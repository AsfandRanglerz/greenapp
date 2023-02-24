@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-key"></span> - Terms & Conditions</p>
            <div class="p-3 rounded light-box-shadow">
                <p>{!! $data->description ?? '' !!}</p>
            </div>
        </div>
    </div>
    </div>

    </div>
@endsection
@section('script')
@endsection
