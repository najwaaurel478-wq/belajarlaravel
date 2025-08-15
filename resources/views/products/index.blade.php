@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Products</h3>

        <a href="{{ route('products.create') }}"
            class="btn btn-primary my-3">
            Add New
        </a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Images</th>
                    <th>Stock</th>
                    <th>Unit</th>
                    <th>Price</th>
                    <th>Discount</th>
                    <th>Description</th>
                    <th>Suppliers</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @if ($products->isEmpty())
                    <tr>
                        <td colspan="10" class="text-center">
                            Products is Empty
                        </td>
                    </tr>
                @endif

                @foreach ($products as $products)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $products->name }}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $products->images )}}" alt="{{ $products->name}}" width="100">
                        </td>
                        <td>{{ $products->stock }}</td>
                        <td>{{ $products->unit }}</td>
                        <td>{{ $products->price }}</td>
                        <td>{{ $products->discount }}</td>
                        <td>{{ $products->description }}</td>
                        <td>{{ $products->suppliers_id}}</td>
                        <td>
                            <a href="{{ route('products.show', $products->id)}}">Detail</a>
                            <a href="{{ route('products.edit', $products->id)}}">Edit</a>
                            <a href="javascript:;"
                            onclick="handleDelete('{{ $products->id }}')" class="text-danger">Hapus</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <form action="" id="form-delete" method="POST">
          @csrf
          @method('DELETE')
     </form>
    </div>
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
        form.setAttribute('action', '{{ url("/products") }}/' +id);
        form.submit();
          
           }
        });
    }
</script>
@endpush