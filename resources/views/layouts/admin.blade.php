<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin | Website Sekolah</title>
  <!-- External Assets -->
  <link rel="stylesheet"href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet"href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Internal Assets -->
  <link rel="stylesheet"href="<?=url('/')?>/public/template/adminlte/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet"href="<?=url('/')?>/public/template/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link rel="stylesheet"href="<?=url('/')?>/public/template/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <link rel="stylesheet"href="<?=url('/')?>/public/template/adminlte/plugins/jqvmap/jqvmap.min.css">
  <link rel="stylesheet"href="<?=url('/')?>/public/template/adminlte/dist/css/adminlte.min.css">
  <link rel="stylesheet"href="<?=url('/')?>/public/template/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  @yield('header')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
      </ul>
    </nav>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-light-primary elevation-4">
      <a href="{{url('/')}}" class="brand-link" style="display: flex; justify-content: center;">
        <span class="brand-text font-weight-light">
          <img src="<?=url('/')?>/public/assets/img/logo/logo1.png" style="width: 8em;">
        </span>
      </a>
      <!-- Sidebar -->
      <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div style="height: auto; display: flex; justify-content: center; align-items: center; margin-left: 1em;">
            <img src="<?=url('/')?>/public/template/adminlte/dist/img/login.png" class="img-circle elevation-10" style="width: 3em;" alt="User Image">
          </div>
          <div class="info" style="color: rgb(0, 0, 0); display: flex; flex-direction: column;">
            <div>{{Auth()->user()->username}}</div>
            <small>{{Session::get('roles')}}</small>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
           @if (Session::get('roles') == 'superadmin')
        
           <li class="nav-item">
            <a href="<?=url('/')?>/admin/data_guru" class="nav-link @if (Request::segment(2) == 'manajemen data siswa') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p><b>
                Manajemen Data Guru
              </b></p>
            </a>
          </li>     
          <li class="nav-item">

           <li class="nav-item">
            <a href="<?=url('/')?>/admin/data_siswa" class="nav-link @if (Request::segment(2) == 'manajemen data siswa') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p><b>
                Manajemen Data Siswa
              </b></p>
            </a>
          </li>     
          <li class="nav-item">

            <a href="<?=url('/')?>/admin/data_kejuruan" class="nav-link @if (Request::segment(3) == 'manajemen data kejuruan') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p><b>
                Manajemen Data Kejuruan
              </b></p>
            </a>
          </li>
          <li class="nav-item">

            <a href="<?=url('/')?>/admin/data_sarpras" class="nav-link @if (Request::segment(4) == 'manajemen data sarpras') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p><b>
                Manajemen Data Sarpras
              </b></p>
            </a>
          </li>    
            
          <li class="nav-item">
            <a href="<?=url('/')?>/admin/ekstrakulikuler" class="nav-link @if (Request::segment(5) == 'manajemen ekstrakulikuler') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p><b>
                Manajemen Ekstrakulikuler
              </b></p>
            </a>
          </li>

         <!--  <li class="nav-item">
            <a href="<?=url('/')?>/admin/landingpage" class="nav-link @if (Request::segment(9) == 'landing page') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p><b>
                Landing Page
              </b></p>
            </a>
          </li> -->
         
          @endif
          <hr style="border: 1px solid #141516; width: 95%;">
          
          <li class="nav-item">
            <a href="<?=url('/')?>/logout" method="post" class="nav-link @if (Request::segment(1) == 'logout') active @endif">
              <i class="nav-icon fas fa-th"></i>
              <p><b>
                Logout
              </b></p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
         @yield('content_header')
       </div><!-- /.row -->
     </div><!-- /.container-fluid -->
   </div>
   <!-- /.content-header -->
   <div class="modal fade" id="modal_ganti_prass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form class="striped-rows" enctype="multipart/form-data" action="{{url('/')}}/admin/data-dasar/pengawas/reset-prass" method="post">
          {{csrf_field()}}
          <div class="modal-body">
            <div class="text-center" style="display: flex; flex-direction: column; justify-content: center; align-content: center;">
              <div style="width: 100%;"><h4 class="card-title" style="width: 100%; text-align: center; margin-bottom: 1em;">Tugas Baru</h4></div>
              <div><i class="fas fa-user fa-4x mb-3 "></i></div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input type="text" name="id" id="id_user" value="{{auth()->user()->id}}" hidden>
                  <label for="nama_jenis_proyek">password Baru</label>
                  <input name="ganti_prass" type="text" class="form-control" placeholder="" required>
                </div>
                <div class="form-group">
                  <label for="inputprassword3">Konfirmasi prassword</label>
                  <input name="ganti_prass_confirm" type="text" class="form-control" placeholder="" required>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between ">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-dark">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  {{-- modal --}}
  @if(Session::get('kode-notif'))
  <div class="modal fade" id="modal-notif" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-body">
          {{ csrf_field() }}
          <div style="text-align: center;">
            <i class="" id="icon" style="font-size: 5em;"></i>
            <h4 style="margin-top: 0.5em;" id="header"></h4>
            <div style="margin-top: 0.5em;" id="pesan-error-notif"></div>
          </div>  
        </div>
        <div class="modal-footer" id="modal-footer-notif" data-dismiss="modal" style="color: white; display: flex; justify-content: center;">
          Tutup
        </div>
      </div>
    </div>
  </div>
  @endif
  @yield('modal')
  {{-- end modal --}}

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @yield('content')
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; {{date('Y')}} <a href="#">Kaili Nusantara Production</a>.</strong>
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0.0
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
<script src="<?=url('/')?>/public/template/adminlte/plugins/jquery/jquery.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?=url('/')?>/public/template/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/sparklines/sparkline.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/dist/js/adminlte.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/dist/js/pages/dashboard.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/dist/js/demo.js"></script>
<script type="text/javascript">
  @if(Session::get('kode-notif'))
  $("#pesan-error-notif").html("{!!Session::get('message')!!}");
  $("#header").html("{{Session::get('header')}}");
  $("#icon").addClass("{{Session::get('icon')}}");
  $("#header").css("color", "{{Session::get('color')}}");
  $("#icon").css("color", "{{Session::get('color')}}");
  $('#modal-footer-notif').css("background", "{{Session::get('color')}}");
  $('#modal-notif').modal('show');    
  @endif

  function ganti_prass(id){
    $("#modal_ganti_prass").modal('show');
  }

</script>
@yield('footer')
</body>
</html>
