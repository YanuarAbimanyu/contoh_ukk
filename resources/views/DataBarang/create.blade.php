<x-app-layout>  
      <div class="container mx-auto mt-6">
          <div class=" p-6 bg-white rounded-lg shadow">
              <h3 class="mb-4">Tambah Data</h3>
              <form action="/DataBarang/store" method="POST">
                  @csrf
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Nama Produk</label><br>
                      <input type="text" name="nama_produk" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Harga Produk</label><br>
                      <input type="text" name="harga" class="form-control">
                  </div>
                  <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Stock Produk</label><br>
                      <input type="text" name="stok" class="form-control"><br>
                      <input type="submit" class="btn btn-primary" name="submit" value="Simpan">
                  </div>
                  </div>
              </form>
          </div>
      </div>
          
  </x-app-layout>