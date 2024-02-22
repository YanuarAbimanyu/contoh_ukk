<x-app-layout>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
          {{ __(' Pengguna') }}
        </h2>
      </x-slot>
      <div class="container mx-auto mt-6 ">
          <div class=" p-6 bg-white rounded-lg shadow ">
              <table class="table table-hover">
                  <thead >
                      <tr>
                          <th class="text-center">No</th>
                          <th class="text-center">Nama</th>
                          <th class="text-center">Email</th>
                          <th class="text-center">Action</th>
                      </tr>
                  </thead>
              {{-- menampilkan data --}}
              {{-- @foreach ($users as $u) --}}
              <tbody>
                  <tr>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center"></td>
                      <td class="text-center">
                          {{-- <div class="btn-group">
                              <a href="/DataBarang/{{ $p-> produk_id }}/edit" class="btn btn-warning me-2 text-white">Edit</a>
                              <form action="/DataBarang/{{ $p-> produk_id }}" method="post">
                                  @csrf
                                  @method('delete')
                                  <input type="submit" value="Delete" class="btn btn-danger">
                              </form>
                          </div> --}}
                      </td>
                  </tr>
                  {{-- @endforeach --}}
              </tbody>
              </table>
                  
          </div>
      </div>
  </x-app-layout>
  