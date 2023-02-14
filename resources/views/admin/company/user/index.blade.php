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
                                    <h4>Employees</h4>

                                </div>
                                {{-- @dd($data) --}}
                            </div>
                            {{-- @dd($data) --}}
                            <div class="card-body table-striped table-bordered table-responsive">
                                {{-- <a class="btn btn-primary mb-3"
                                href="{{route('admin.user.index')}}">Back</a> --}}

                                <table class="table text-center" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Employee Name</th>
                                            <th>Image</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>DOB</th>
                                            <th>Nationality</th>
                                            <th>Religion</th>


                                            {{-- <th scope="col">Action</th> --}}
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($data as $employee)

                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $employee->name}}</td>
                                                <td><a target="_black" href="{{ asset(''). '/' .$employee->image }}">
                                                    <img src="{{ asset(''). '/' .$employee->image }}" alt="" height="50" width="50" class="image"></a>
                                                    </td>
                                                <td>{{ $employee->email}}</td>
                                                <td>{{ $employee->phone}}</td>
                                                <td>{{ $employee->dob}}</td>
                                                <td>{{ $employee->nationality}}</td>
                                                <td>{{ $employee->religion }}</td>


                                                        </tr>
                                      @endforeach

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@section ('js')


<script>
    $(document).ready(function(){
        $('#table_id_events').DataTable();
    });
</script>

@endsection
