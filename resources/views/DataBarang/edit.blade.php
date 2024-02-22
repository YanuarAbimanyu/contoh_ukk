<x-app-layout>
    <div class="container mx-auto mt-6">
        <div class="p-6 bg-white rounded-lg shadow">
            <h3 class="mb-4">Edit Data</h3>
            <form action="/DataBarang/{{ $produk -> produk_id }}" method="POST">
                @method('put')
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Produk</label><br>
                    <input type="text" name="nama_produk" class="form-control" value="{{ $produk -> nama_produk }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Produk</label><br>
                    <input type="text" name="harga" class="form-control" value="{{ $produk -> harga }}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock Produk</label><br>
                    <input type="text" name="stok" class="form-control" value="{{ $produk -> stok }}">
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                </div>
            </form>
        </div>
    </div>
		
</x-app-layout>