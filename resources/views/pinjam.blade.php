<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pinjam Form</title>

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
            <h1>Form Peminjaman Buku</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Peminjaman Buku</a></li>
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
          <div class="col-md-6 mx-auto">
            <!-- general form elements -->
            <div class="card card-primary mt-5">
              <div class="card-header text-center">
                <h3 class="card-title">Formulir Peminjaman Buku</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
              <form method="POST" action="{{ isset($pinjam) ? route('pinjam.update', $pinjam->id_pinjam) : route('pinjam.store') }}">
                @csrf
                @if (isset($pinjam))
                    @method('PUT')
                @endif
                <div class="card-body">
                    <div class="form-group">
                        <label for="buku_id">Buku</label>
                        <select class="form-control" id="buku_id" name="buku_id" required>
                          <option value="" selected disabled>Select Buku</option>
                          @foreach ($bukus as $buku)
                              <option value="{{ $buku->id }}" {{ isset($pinjam) && $pinjam->id_buku == $buku->id ? 'selected' : '' }}>
                                  {{ $buku->judul }}
                              </option>
                          @endforeach
                      </select>
                      
                      
                      
                    </div>
            
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="{{ isset($pinjam) ? $pinjam->tanggal_pinjam : '' }}" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggal_kembali">Tanggal Kembali</label>
                        <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="{{ isset($pinjam) ? $pinjam->tanggal_kembali : '' }}" required>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">{{ isset($pinjam) ? 'Update' : 'Submit' }}</button>
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
<!-- AdminLTE App -->
<script src="{{ asset('template/') }}/dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    bsCustomFileInput.init();
  });
</script>
</body>
</html>
