<!DOCTYPE html>
<html lang="en">
  <!-- Head --> 
  @include('include.head')
  <body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="{{ asset ('/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    @include('include.header')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('include.sidebar')

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success')}}
      </div>
    @endif

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-1">
                <div class="col-sm-12 mb-2">
                  <h1 class="m-0 fw-bold">{{$berita->judul}}</h1>
                </div><!-- /.col -->
              </div><!-- /.row -->
              <div class="row mb-1">
                  <div class="col-sm-6 mb-2">
                     <p>{{$berita->updated_at}}</p>
                     <p>Oleh Penulis {{$berita->penulis}}</p>
                  </div>
              </div>
            </div><!-- /.container-fluid -->
          </div>
          <section class="content">
            <div class="container-fluid">
              <div class="row mb-3">
                <div class="col-md-12">
                  <img src="{{ asset('gambar/'. $berita->gambar)}}" style="width: 700px; height: 400px;">
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-md-12">
                  <p class="text-justify">{{$berita->isi}}</p>
                </div>
              </div>
              <div class="row mb-3">
                <div class="col-sm-3">
                  <input type="button" class="btn btn-success" value="Kembali" onclick="history.back(-1)"/>
                  <a href="#" class="btn btn-warning">Ubah</a>
                  <form action="#" method="post" class="d-inline">
                    @csrf
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?')">Hapus</button>
                  </form>
                </div>
              </div>
            </div>
          </section>
      </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.2.0-rc
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="{{ asset ('/plugins/jquery/jquery.min.js')}}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset ('/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <!-- Bootstrap 4 -->
  <script src="{{ asset ('/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{ asset ('/plugins/chart.js/Chart.min.js')}}"></script>
  <!-- Sparkline -->
  <script src="{{ asset ('/plugins/sparklines/sparkline.js')}}"></script>
  <!-- JQVMap -->
  <script src="{{ asset ('/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
  <script src="{{ asset ('/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset ('/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset ('/plugins/moment/moment.min.js')}}"></script>
  <script src="{{ asset ('/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset ('/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
  <!-- Summernote -->
  <script src="{{ asset ('/plugins/summernote/summernote-bs4.min.js')}}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset ('/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset ('/dist/js/adminlte.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{ asset ('/dist/js/demo.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{ asset ('/dist/js/pages/dashboard.js')}}"></script>
  </body>
</html>
