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
    <h3 class="card-title">DOMISILI</h3>
    <div class="card-tools">
      <div class="input-group input-group-sm">
        <a href="{{url('/')}}/admin/data_siswa" class="btn btn-warning"><i class="fa fa-chevron-left"></i>&nbsp;Daftar Domisili</a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="striped-rows" enctype="multipart/form-data" action="{{url()->current()}}/update" method="post">
      {{csrf_field()}}
      <input name="id" type="hidden" value="{{ $domisili->id }}">
      <div class="row">    
        <div class="col-md-6">
          <div class="form-group">
            <label>Alamat</label>
            <input name="alamat" type="text" class="form-control" placeholder="" required  value="{{ $domisili->alamat }}">
          </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label>Dusun</label>
              <input name="dusun" type="text" class="form-control" placeholder="" required value="{{ $domisili->dusun }}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Kelurahan</label>
              <input name="kelurahan" type="text" class="form-control" placeholder="" required value="{{ $domisili->kelurahan }}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>kecamatan</label>
              <input name="kecamatan" type="text" class="form-control" placeholder="" required value="{{ $domisili->kecamatan }}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Kabupatan Kota</label>
              <input name="kab_kota_id" type="text" class="form-control" placeholder="" required value="{{ $domisili->kab_kota_id }}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Transportasi</label>
              <input name="transportasi_id" type="text" class="form-control" placeholder="" required value="{{ $domisili->transportasi_id }}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Jenis Tinggal</label>
              <input name="jenis_tinggal_id" type="text" class="form-control" placeholder="" required value="{{ $domisili->jenis_tinggal_id }}">
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
              <label>Lintang</label>
              <input name="lintang" type="text" class="form-control" placeholder="" required value="{{ $domisili->lintang }}">
          </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
              <label>Bujur</label>
              <input name="bujur" type="text" class="form-control" placeholder="" required value="{{ $domisili->bujur }}">
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
