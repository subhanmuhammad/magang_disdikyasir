@extends('layouts.admin')

@section('header')
<link rel="stylesheet" href="<?=url('/')?>/public/template/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="<?=url('/')?>/public/template/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" 
rel="stylesheet"/>
<?php
function tgl_indo($tanggal){
  $bulan = array (
    1 =>   'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
  );
  $pecahkan = explode('-', $tanggal);     
  return $pecahkan[2] . ' ' . $bulan[ (int)$pecahkan[1] ] . ' ' . $pecahkan[0];
}
?>
<style type="text/css">
  .select2-container .select2-selection--single {
    height: 38px;
    border: 1px solid #ced4da;
  }

</style>
@endsection

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title">BIODATA SISWA</h3>
    <div class="card-tools">
      <div class="input-group input-group-sm">
        <a href="{{url('/')}}/admin/data_siswa" class="btn btn-warning"><i class="fa fa-chevron-left"></i>&nbsp;Daftar Siswa</a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="striped-rows" enctype="multipart/form-data" action="{{url('/')}}/admin/data_siswa/store" method="post">
      {{csrf_field()}}
      <input name="sekolah_id" type="hidden" value="{{auth()->user()->sekolah_id}}">

      <div class="row">
          
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama Lengkap</label>
            <input name="nama_lengkap" type="text" class="form-control" placeholder="Masukan Nama Lengkap" required>
          </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label>NISN</label>
              <input name="nisn" type="number" class="form-control" placeholder="Masukkan NISN" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>NIS</label>
              <input name="nis" type="number" class="form-control" placeholder="Masukkan NIS" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>NIK</label>
              <input name="nik" type="number" class="form-control" placeholder="Masukkan NIK" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="custom-select form-select-lg mb-6" id="jenis_kelamin" name="jenis_kelamin">
                <option selected>Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Tempat Lahir</label>
              <input name="tempat_lahir" type="text" class="form-control" placeholder="Masukkan Tempat Tamggal Lahir" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input name="tanggal_lahir" type="date" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Agama</label>
              <select class="custom-select form-select-lg mb-6" id="agama_id" name="agama_id">
                <option selected>Agama</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Kristen">Hindu</option>
                <option value="Kristen">Budha</option>
            </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Jurusan</label>
              <input name="jurusan" type="text" class="form-control" placeholder="Masukkan Jurusan" required >
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Kebutuhan Khusus</label>
              <select class="custom-select form-select-lg mb-6"  id="kebutuhan_khusus" name="kebutuhan_khusus">
                <option selected>Kebutuhan Khusus</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Foto</label>
              <input name="gambar" type="file" class="form-control" placeholder="Masukkan Foto" required >
            </div>
          </div>
        </div>   
      <hr>
      <button class="btn btn-success" type="submit">Simpan</button>
    </form>  
  </div>
</div>
@endsection

@section('footer')

<!-- DataTables -->
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?=url('/')?>/public/template/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
<script>
  $(function () {
    $('#datatable').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
