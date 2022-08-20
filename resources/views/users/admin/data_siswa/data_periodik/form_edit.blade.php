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
    <h3 class="card-title">DATA PERIODIK</h3>
    <div class="card-tools">
      <div class="input-group input-group-sm">
        <a href="{{url('/')}}/admin/data_siswa" class="btn btn-warning"><i class="fa fa-chevron-left"></i>&nbsp;Daftar Data Periodik</a>
      </div>
    </div>
  </div>
  <div class="card-body">
    <form class="striped-rows" enctype="multipart/form-data" action="{{url()->current()}}/update" method="post">
      {{csrf_field()}}
      <input name="id" type="hidden" value="{{ $periodik->id }}">
      <div class="row">          
        <div class="col-md-6">
          <div class="form-group">
            <label>Tinggi Badan</label>
            <input name="tinggi_badan" type="text" class="form-control" placeholder="" required value="{{ $periodik->tinggi_badan }}">
          </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
              <label>Jarak Tempat Tinggal</label>
              <input name="jarak_tempat_tinggal" type="text" class="form-control" placeholder="" required value="{{ $periodik->jarak_tempat_tinggal }}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Waktu Tempuh</label>
              <input name="waktu_tempuh" type="text" class="form-control" placeholder="" required value="{{ $periodik->waktu_tempuh }}">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Jumlah Saudara Kandung</label>
              <input name="jumlah_saudara_kandung" type="text" class="form-control" placeholder="" required value="{{ $periodik->jumlah_saudara_kandung }}">
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
