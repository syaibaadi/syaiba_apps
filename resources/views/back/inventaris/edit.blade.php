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

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <form action="/update-inventaris/{{$inventaris->id}}" method="POST" enctype="multipart/form-data">
              @csrf
            <div class="form-group">
              <div class="mb-3">
                <label for="Judul" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" name="nama" id="Judul" placeholder="Nama Barang" value="{{$inventaris->nama}}">
              </div>
              <div class="mb-3">
                <label for="Isi Berita" class="form-label">Deskripsi Barang</label>
                <textarea class="form-control" name="diskripsi" id="Isi Berita" rows="3">{{$inventaris->diskripsi}}</textarea>
              </div>
              <div class="mb-3">
                <label for="tema" class="form-label">Keterangan Kondisi Barang</label>
                <select class="form-select" aria-label="Default select example" name="keterangan">
                  <option selected>{{$inventaris->keterangan}}</option>
                  <option value="bagus">Bagus</option>
                  <option value="buruk">Buruk</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="tema" class="form-label">Ketersediaan Barang</label>
                <select class="form-select" aria-label="Default select example" name="ketersediaan">
                  <option selected>{{$inventaris->ketersediaan}}</option>
                  <option value="Tersedia">Tersedia</option>
                  <option value="Tidak Tersedia">Tidak Tersedia</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Upload Foto</label>
                @if ($inventaris->photo)
                  <img src="{{ asset('photo/' . $inventaris->photo)}}" class="img-preview img-fluid mb-3 col-sm-2 d-block">
                @else
                <img class="img-preview img-fluid mb-3 col-sm-2">
                @endif
                <input class="form-control" type="file" name="photo" id="foto" onchange="previewImage()">
              </div>
              <div class="mb-3">
                <button type="submit" class="btn btn-success">Kirim</button>
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
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

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script>
    function previewImage(){
      const foto = document.querySelector('#foto');
      const imgPreview = document.querySelector('.img-preview');
      
      imgPreview.style.display = 'block';

      const oFReader = new FileReader();
      oFReader.readAsDataURL(foto.files[0]);

      oFReader.onload = function(oFREvent){
        imgPreview.src = oFREvent.target.result;
      }
    }
  </script>
  </body>
</html>
