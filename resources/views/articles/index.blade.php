@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Articles</h3>

        <a href="{{ route('articles.create')}}" class="btn btn-primary my-3">Add New</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($articles->isEmpty())
                    <tr>
                        <td colspan="4" class="text-center">
                            Articles is Empty
                        </td>
                    </tr>
                @endif

                @foreach ($articles as $article)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $article->title }}</td>
                        <td>{{ $article->category_id }}</td>
                        <td>
                            <a href="{{ route('articles.show', $article->id)}}"
                                class="btn btn-sm btn-secondary">Show</a>
                            <a ref="{{ route('articles.edit', $article->id)}}"
                                class="btn btn-sm btn-primary">Edit</a>
                            <a href="javascript:;"
                                onclick="hanleDelete('{{ $article->id}}')"
                                class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    
    <form action=""id="form-delete" method="POST">
        @csrf
        @method('DELETE')
    </form>
    
@endsection
@push('scripts') 
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script type="text/javascript">
    function handleDelete(id) {
      Swal.fire({
        title: "Apakah kamu yakin?",
        text: "Data yang dihapus tidak bisa dikembalikan",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#dc3545",
        cancelButtonColor: "#adb5bd",
        confirmButtonText: "Ya, Hapus!",
        cancelButtonText: "Batal"
      }).then((result) => {
        if(result.isConfirmed) {
        var form = document.getElementById('form-delete');
        form.setAttribute('action', '{{ url("/articles") }}/' +id);
        form.submit();
          
           }
        });
    }
</script>
@endpush