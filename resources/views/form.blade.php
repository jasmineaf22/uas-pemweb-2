
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Data Buku</title>

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
      <div class="container-fluid ">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Form Pendataan Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Pendataan Buku Perpustakaan</a></li>
              <li class="breadcrumb-item active">Formulir</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-5 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary mt-5">
              <div class="card-header text-center">
                <h3 class="card-title">Formulir Pendataan Buku Perpustakaan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ $buku ? route('buku.update', $buku) : route('submit-form') }}">
                @csrf
                @if ($buku)
                @method('PUT')
                @endif
                <div class="card-body">
                  <div class="form-group">
                    <label for="judul">Judul</label>
                    <input type="text" class="form-control" id="judul" placeholder="Judul buku" name="judul" value="{{ $buku ? $buku->judul : '' }}" required>
                  </div>
                  <div class="form-group">
                    <label for="penulis">Penulis</label>
                    <input type="text" class="form-control" id="penulis" placeholder="Nama Penulis" name="penulis" value="{{ $buku ? $buku->penulis : '' }}" required>
                  </div>
                  <div class="form-group">
                    <label for="id_kategori">Kategori</label>
                    <select class="form-control" id="id_kategori" name="id_kategori" required>
                        <option value="" selected disabled>Select Kategori</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id_kategori }}" {{ $buku && $buku->id_kategori == $category->id_kategori ? 'selected' : '' }}>
                                {{ $category->nama_kategori }}
                            </option>
                        @endforeach
                    </select>
                </div>              
                  <div class="form-group">
                    <label for="sinopsis">Sinopsis</label>
                    <input type="text" class="form-control" id="sinopsis" placeholder="Sinopsis" name="sinopsis" value="{{ $buku ? $buku->sinopsis : '' }}" required>
                  </div>
                  <div class="form-group">
                    <label for="tahun_terbit">Tahun terbit</label>
                    <input type="text" class="form-control" id="tahun_terbit" placeholder="Tahun terbit" name="tahun_terbit" value="{{ $buku ? $buku->tahun_terbit : '' }}" required>
                  </div>
                  <div class="form-group">
                    <label for="foto">Cover Buku</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Choose file</label>
                        </div>
                    </div>
                </div>
              </div></div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">{{ $buku ? 'Update' : 'Submit' }}</button>
                </div>
              </form>
            </div>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  @include('layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('template/') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('template/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{ asset('template/') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template/') }}/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
