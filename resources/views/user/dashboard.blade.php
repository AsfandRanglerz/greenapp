@extends('user.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <h4>Employee Dashboard</h4>
            <p><span class="fa fa-home"></span> - Main Overview</p>
            <div class="row mb-sm-3">
                <div class="col-sm-4 col-8 mx-auto mb-3 wow fadeInUp" data-wow-duration="2s">
                    <a href="{{ route('user.document.index') }}"
                        class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-center total-block-section">
                        <h5 class="text-center mb-4 theme-color">Documents</h5>
                        <span class="block-badge">{{ $document }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection

