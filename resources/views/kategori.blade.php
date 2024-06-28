<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kategori Buku</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template/') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template/') }}/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@include('layout.navbargeneral')
@include('layout.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Kategori</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pendataan Buku Perpustakaan</a></li>
              <li class="breadcrumb-item active">Kategori</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Kategori Buku</h3>
              </div>
              <div class="card-body">
                <div id="accordion">
                  @foreach ($categories as $category)
                  <div class="card card-primary">
                      <div class="card-header">
                          <h4 class="card-title w-100">
                              <a data-toggle="collapse" href="#collapse{{ $category->id_kategori }}" class="d-block w-100">
                                  {{ $category->nama_kategori }}
                              </a>
                          </h4>
                      </div>
                      <div id="collapse{{ $category->id_kategori }}" class="collapse" data-parent="#accordion">
                          <div class="card-body">
                              <p>{{ $category->deskripsi }}</p>
                              <div class="row">
                                  @foreach ($category->bukus as $buku)
                                      <div class="col-md-6">
                                          <div class="card mb-3">
                                              <div class="row g-0">
                                                  <div class="col-md-4">
                                                      <img src="{{ asset('img/') }}/{{ $buku->foto }}" class="img-fluid rounded-start" alt="...">
                                                  </div>
                                                  <div class="col-md-8">
                                                      <div class="card-body">
                                                          <h5 class="card-title">{{ $buku->judul }}</h5>
                                                          <p class="card-text">
                                                              <small>{{ $buku->penulis }} ({{ $buku->tahun_terbit }})</small>
                                                              <br>
                                                              {{ $buku->sinopsis }}
                                                          </p>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  @endforeach
                              </div>
                          </div>
                      </div>
                  </div>
              @endforeach
              
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  @include('layout.footer')

  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>

<script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
<script src="{{ asset('template/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
<script src="{{ asset('template/') }}/dist/js/demo.js"></script>
</body>
</html>
