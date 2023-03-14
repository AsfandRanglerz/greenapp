@extends('user.layout.master')

@section('content')
    <div class="admin-main-content-inner">

        <div class="dashboard-front-pg">

            <h4>Employee Dashboard</h4>

            <p><span class="fa fa-home"></span> - Main Overview</p>


            <div class="row mb-3">
                 @if (Auth::guard('web')->user()->emp_type == 'self')
                 @if (isset($user->passport_number))
                 <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                     <p class="font-weight-bold small mb-0 text-center">Passport Number #
                         {{ $user->passport_number ?? '' }}
                        </p>
                    </div>
                    @endif
                    @if (isset($user->unified_number))
                        <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                            <p class="font-weight-bold small mb-0 text-center">Unified Number #
                                {{ $user->unified_number ?? '' }}</p>
                        </div>
                    @endif
                    @if (isset($user->emirate_id_number))
                        <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                            <p class="font-weight-bold small mb-0 text-center">Emirates I'd Number #
                                {{ $user->emirate_id_number ?? '' }}
                            </p>
                        </div>
                    @endif
                    @if (isset($user->work_permit_number))
                        <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                            <p class="font-weight-bold small mb-0 text-center">Work Permit Number #
                                {{ $user->work_permit_number ?? '' }}
                            </p>
                        </div>
                    @endif
                    @if (isset($user->person_code))
                        <div class="col-sm-4 mb-sm-3 mb-1 wow fadeInUp" data-wow-duration="2s">
                            <p class="font-weight-bold small mb-0 text-center">Person Code #
                                {{ $user->person_code ?? '' }}
                            </p>
                        </div>
                    @endif
                @endif
            </div>

            <div class="row">
                <div class="col-sm-4 col-8 mx-auto mb-3 wow fadeInUp" data-wow-duration="2s">
                    <a href="{{ route('user.document.index') }}" class="p-3 text-decoration-none rounded light-box-shadow d-flex flex-column justify-content-center align-items-center total-block-section">
                        <h5 class="text-center mb-4 theme-color">Documents</h5>
                        <span class="block-badge">{{ $document }}</span>
                    </a>
                </div>
            </div>
        </div>

    </div>
@endsection
