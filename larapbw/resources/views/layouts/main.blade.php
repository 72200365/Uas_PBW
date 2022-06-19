<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <title>@yield('title')</title>
  </head>
  <body>
      <div class="container-fluid">
          <div class="row">
              <div class="col-lg-12 bg-primary py-2">
              <div class="dropdown d-flex align-items-end flex-column dropdown-menu-right">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
  <i class="bi bi-person-circle"></i>User
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="/user/dashboard">{{Auth::user()->nama_user??''}}</a></li>
    <li><a class="dropdown-item" href="/user">Data Pengguna</a></li>
    <li><a class="dropdown-item" href="/logout">Keluar</a></li>
  </ul>
</div>
              </div>
            </div>
        <div class="row">
              @include('layouts.navbar')
              <div class="col-lg-10 vh-100">
                  <div class="card mt-4">
                      <div class="card header">
                      @yield('navcontent')
</div>

                        <div class="card body">
                          @if(session('alert')=='Data Berhasil di Tambah')
                          <div class="alert alert-success alert-dismissible fade show" role="alert">
                          <strong>{{ session('alert') }}</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @elseif(session('alert')=='Data Berhasil di Update')
                          <div class="alert alert-info alert-dismissible fade show" role="alert">
                          <strong>{{ session('alert') }}</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @elseif(session('alert')=='Data Berhasil di Hapus')
                          <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>{{ session('alert') }}</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                          @endif
                        @yield('content')
                        </div>
                </div>
              </div>
            </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>