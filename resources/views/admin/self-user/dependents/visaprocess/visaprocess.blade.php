@extends('admin.layout.app')

@section('title', 'index')

@section('content')

<div class="main-content" style="min-height: 562px;">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col-12">
                                <h4>Dependents Visa Process</h4>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg scrol employee-details-model" id="mymodal">
        </div>
    </div>
</div>


@endsection
{{-- @section('script') --}}
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>

<script>
    @if (\Illuminate\Support\Facades\Session:: has('success'))
    toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
    @endif

    @if (\Illuminate\Support\Facades\Session:: has('error'))
    toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
    @endif
   </script>
@endsection

