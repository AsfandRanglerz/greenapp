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
                                    <h4>FAQ's</h4>

                                </div>
                                {{-- @dd($data) --}}
                            </div>
                            {{-- @dd($data) --}}
                            <div class="card-body table-striped table-bordered table-responsive">
                                <!-- <a class="btn btn-primary mb-3"
                                href="{{route('faq.index')}}">Back</a> -->
                                <a class="btn btn-success mb-3"
                                       href="{{route('faq.create')}}">Add New</a>
                                <table class="table" id="table_id_events">
                                    <thead>
                                        <tr>
                                            <th>Sr.</th>
                                            <th>Question</th>
                                            <th>Answer</th>
                                            <th scope="col">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($data as $fax)

                                            <tr>
                                                <td>{{ $loop->iteration }}</td>

                                                <td>{!!$fax->question!!}</td>
                                                <td>{!!$fax->answer!!}</td>
                                            <td>
                                                <div
                                                style="display: flex;align-items: center;justify-content: center;column-gap: 8px">


                                                <a class="btn btn-info"
                                               href="{{route('faq.edit', $fax->id)}}">Edit</a>
                                                        <form method="get" action="{{route('faq.destroy', $fax->id)}}">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-flat show_confirm" data-toggle="tooltip" >Delete</button>
                                                        </form>
                                                           </div>
                                                        </td>
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
    @if (\Illuminate\Support\Facades\Session::has('success'))
        toastr.success('{{ \Illuminate\Support\Facades\Session::get('success') }}');
    @endif

    @if (\Illuminate\Support\Facades\Session::has('error'))
        toastr.error('{{ \Illuminate\Support\Facades\Session::get('error') }}');
    @endif
</script>
<script>
    $(document).ready(function(){
        $('#table_id_events').DataTable()

    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

$('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
@endsection
