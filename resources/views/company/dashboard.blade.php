@extends('company.layout.master')
@section('content')
    <div class="admin-main-content-inner">
        <div class="dashboard-front-pg">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
                <h4 class="mb-0">Company Dashboard</h4>
                <a href="{{ route('company.employee.create') }}" class="btn btn-success"><span
                    class="fa fa-plus mr-2"></span>Add
                Employee</a>
            </div>
            <p><span class="fa fa-home"></span> - Main Overview</p>
            <div class="row mb-sm-3">
                <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                    <p class="font-weight-bold small mb-0 text-center">Trade License No #
                        {{ $company->license_no ?? '' }}
                    </p>
                </div>
                <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                    <p class="font-weight-bold small mb-0 text-center">Establishment Card No #
                        {{ $company->establishment_no ?? '' }}</p>
                </div>
                <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                    <p class="font-weight-bold small mb-0 text-center">MOHRE Company Code #
                        {{ $company->mohre_no ?? '' }}
                    </p>
                </div>
                <div class="col-sm-4 col-8 mx-auto mt-sm-0 my-3 wow fadeInUp" data-wow-duration="2s">
                    <a href="{{ route('company.employee.index') }}"
                        class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-center total-block-section">
                        <h5 class="text-center mb-4 theme-color">Total Employees</h5>
                        <span class="block-badge">{{ $employee }}</span>
                    </a>
                </div>
                <div class="col-sm-4 col-8 mx-auto mb-3 wow fadeInUp" data-wow-duration="2s">
                    <a href="{{ route('company.document.index') }}"
                        class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-center total-block-section">
                        <h5 class="text-center mb-4 theme-color">Company Documents</h5>
                        <span class="block-badge">{{ $companyDocument }}</span>
                    </a>
                </div>
                <div class="col-sm-4 col-8 mx-auto mb-3 wow fadeInUp" data-wow-duration="2s">
                    <a href="{{ route('company.document.index') }}"
                        class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-center total-block-section">
                        <h5 class="text-center mb-4 theme-color">Employee Documents</h5>
                        <span class="block-badge">{{ $employeeDocument }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
