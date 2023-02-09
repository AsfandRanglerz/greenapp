@extends('admin.layout.app')
@section('title', 'Term&Condition Edit')
@section('content')
    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <form action="{{route('term-condition.update', $data->id)}}" method="POST"
                enctype="multipart/form-data">
                @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Terms & Conditions</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control">{{$data->description}}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-success mr-1" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

@endsection
@section('js')
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'description');
    </script>
@endsection


