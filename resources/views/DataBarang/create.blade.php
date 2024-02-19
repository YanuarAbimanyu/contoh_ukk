<x-app-layout>
    <div class="container p-3 col-10">
        <div class="bg-white shadow-sm p-4 rounded">
            <h3 class="mb-4">Tambah Data</h3>
            <form action="/DataBarang/store" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control"><br>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Harga Produk</label>
                    <input type="text" name="harga" class="form-control"><br>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Stock Produk</label>
                    <input type="text" name="stok" class="form-control"><br>
                </div>
                </div>
                <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
            </form>
        </div>
    </div>
		
</x-app-layout>