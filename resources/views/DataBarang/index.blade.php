<x-app-layout>
  
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __(' Data Barang') }}
      </h2>
    </x-slot>
      <div class="container mx-auto mt-6 ">
          <div class=" p-6 bg-white rounded-lg shadow ">
              <a href="/DataBarang/create" class="btn btn-primary m-3">Tambah Data</a>
              <table class="table table-hover">
                  <thead >
                      <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Nama Produk</th>
                          <th class="text-center">Harga</th>
                          <th class="text-center">Stock</th>
                          <th class="text-center">Action</th>
                      </tr>
                  </thead>
              {{-- menampilkan data --}}
              @foreach ($produk as $p)
              <tbody>
                  <tr>
                      <td class="text-center">{{ $p -> produk_id }}</td>
                      <td class="text-center">{{ $p -> nama_produk }}</td>
                      <td class="text-center">Rp. {{ $p -> harga }}</td>
                      <td class="text-center">{{ $p -> stok }}</td>
                      <td class="text-center">
                          <div class="btn-group">
                              <a href="/DataBarang/{{ $p-> produk_id }}/edit" class="btn btn-warning me-2 ">Edit</a>
                              <form action="/DataBarang/{{ $p-> produk_id }}" method="post">
                                  @csrf
                                  @method('delete')
                                  <input type="submit" value="Delete" class="btn btn-danger text-dark">
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
  