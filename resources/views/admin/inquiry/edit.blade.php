@extends('admin.layout.app')
@section('title', 'Dashboard')
@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <a class="btn btn-primary mb-3" href="{{ url()->previous() }}">Back</a>
                <form id="add_student" action="{{ route('inquiry.update', $data->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <h4 class="text-center my-4">Inquiry</h4>
                                <div class="row mx-0 px-4">
                                    <div class="form-group col-12">
                                        <div class="form-group mb-2">
                                            <label>Inquiry</label>
                                            <input class="form-control" type="text" name="question" value="{{ $data->question}}" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group col-12">
                                        <div class="form-group mb-3">
                                            <label>Answer</label>
                                            <textarea name="answer" id="task-textarea1" class="form-control">{{ $data['answer'] ?? '' }}
                                                </textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-footer text-center row">
                                    <div class="col">
                                        <button type="submit" class="btn btn-success mr-1 btn-bg"
                                            id="submit">Respond</button>
                                    </div>
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
    @if (\Illuminate\Support\Facades\Session::has('message'))
        <script>
            toastr.success('{{ \Illuminate\Support\Facades\Session::get('message') }}');
        </script>
    @endif
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea'))
            .catch(error => {
                console.error(error);
            });
    </script>
    <script>
        ClassicEditor
            .create(document.querySelector('#task-textarea1'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
