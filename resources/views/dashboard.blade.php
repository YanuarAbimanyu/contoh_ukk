<x-app-layout>

  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
      {{ __(' Admin Dashboard') }}
    </h2>
  </x-slot>
    <div class=" m-4  ">
        <div class="row justify-content-center">
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              
              <div class="card-wrap">
                <div class="card-header bg-danger">
                  <h4 class="text-white">Produk</h4>
                </div>
                <div class="card-body">
                  10
                    <a href="/DataBarang" class="btn btn-success">Detail</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
              <div class="card-wrap">
                <div class="card-header bg-warning text-white">
                  <h4> User</h4>
                </div>
                <div class="card-body">
                  47
                  <a href="/Pengguna" class="btn btn-success ">Detail</a>
                </div>
              </div>
            </div>
          </div>                  
        </div>
        <div class="card mt-2">
            <div class="card-body text-center">
                <p>Selamat datang dihalaman admin, silahkan anda bisa mengakses beberapa fitur</p>
            </div>
        </div>
    </div>

</x-app-layout>
