<x-app-layout>
    <div class="container p-3 col-10">
        <div class="bg-white shadow-sm p-4 rounded">
            <h3 class="mb-4">Edit Data</h3>
            <form action="/DataBarang/{{ $produk -> produk_id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" value="{{ $produk -> nama_produk }}"><br>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Produk</label>
                    <input type="text" name="harga" class="form-control" value="{{ $produk -> harga }}"><br>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock Produk</label>
                    <input type="text" name="stok" class="form-control" value="{{ $produk -> stok }}"><br>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
		
</x-app-layout>