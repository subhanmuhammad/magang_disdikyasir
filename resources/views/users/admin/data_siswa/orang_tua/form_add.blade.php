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
    <h3 class="card-title">TAMBAH DATA ORANG TUA</h3>
    <div class="card-tools">
      <div class="input-group input-group-sm">
        <a href="{{url('/')}}/admin/data_siswa" class="btn btn-warning"><i class="fa fa-chevron-left"></i>&nbsp;Daftar Data Orang Tua</a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="striped-rows" enctype="multipart/form-data" action="{{url()->current()}}/store" method="post">
      {{csrf_field()}}
      <input name="pendik_id" type="hidden" value="{{ $id_pendik }}">

      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Nama Ayah</label>
            <input name="ayah_nama" type="text" class="form-control" placeholder="" required>
          </div>
        </div>

       <div class="col-md-6">
            <div class="form-group">
              <label>Kebutuhan Khusus (Ayah)</label>
              <select class="custom-select form-select-lg mb-3"  id="ayah_kebutuhan_khusus" name="ayah_kebutuhan_khusus">
                <option selected>Kebutuhan Khusus (Ayah)</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
            </div>
          </div>

        <div class="col-md-6">
            <div class="form-group">
              <label>Pekerjaan Ayah</label>
              <input name="ayah_pekerjaan" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Penghasilan Ayah</label>
              <input name="ayah_penghasilan" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Pendidikan Ayah</label>
              <input name="ayah_pendidikan" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Ibu</label>
              <input name="ibu_nama" type="text" class="form-control" placeholder="" required>
            </div>
          </div>

         <div class="col-md-6">
            <div class="form-group">
              <label>Kebutuhan Khusus (Ibu)</label>
              <select class="custom-select form-select-lg mb-3"  id="ibu_kebutuhan_khusus" name="ibu_kebutuhan_khusus">
                <option selected>Kebutuhan Khusus (Ibu)</option>
                <option value="Ya">Ya</option>
                <option value="Tidak">Tidak</option>
            </select>
            </div>
          </div>

          <div class="col-md-6">
              <div class="form-group">
                <label>Pekerjaan Ibu</label>
                <input name="ibu_pekerjaan" type="text" class="form-control" placeholder="" required >
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Penghasilan Ibu</label>
                <input name="ibu_penghasilan" type="text" class="form-control" placeholder="" required >
              </div>
            </div>
  
            <div class="col-md-6">
              <div class="form-group">
                <label>Pendidikan Ibu</label>
                <input name="ibu_pendidikan" type="text" class="form-control" placeholder="" required >
              </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Wali</label>
                  <input name="wali_nama" type="text" class="form-control" placeholder="" required>
                </div>
              </div>      
      
              <div class="col-md-6">
                  <div class="form-group">
                    <label>Pekerjaan Wali</label>
                    <input name="wali_pekerjaan" type="text" class="form-control" placeholder="" required >
                  </div>
                </div>
      
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Pendidikan wali</label>
                    <input name="wali_pendidikan" type="text" class="form-control" placeholder="" required >
                  </div>
                </div>
      
                <div class="col-md-6">
                  <div class="form-group">
                    <label>Penghasilan wali</label>
                    <input name="wali_penghasilan" type="text" class="form-control" placeholder="" required >
                  </div>
                </div>    
          </div>
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
