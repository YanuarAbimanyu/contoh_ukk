<x-app-layout>
    <div class="p-3 container col-10">

        <div class=" bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <a href="/DataBarang/create" class="btn btn-primary m-3">Tambah Data</a>
    
            <table class="table table-hover">
                <thead >
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </tr>
                </thead>
            {{-- menampilkan data --}}
            @foreach ($produk as $p)
            <tbody>
                <tr>
                    <td>{{ $p -> produk_id }}</td>
                    <td>{{ $p -> nama_produk }}</td>
                    <td>{{ $p -> harga }}</td>
                    <td>{{ $p -> stok }}</td>
                    <td >
                        <div class="d-flex">
                            <a href="/DataBarang/{{ $p-> produk_id }}/edit" class="btn btn-warning me-2">Edit</a>
                            <form action="/DataBarang/{{ $p-> produk_id }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
                
        </div>
    </div>
</x-app-layout>
