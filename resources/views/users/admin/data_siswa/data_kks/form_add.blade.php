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

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div class="card">
    <h3 class="card-title">DATA KKS</h3>
    <div class="card-tools">
      <div class="input-group input-group-sm">
        <a href="{{url('/')}}/admin/data_siswa" class="btn btn-warning"><i class="fa fa-chevron-left"></i>&nbsp;Daftar KKS</a>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
    </div>
  </div>
  <div class="modal-body">
    <form class="striped-rows" enctype="multipart/form-data" action="{{url()->current()}}/store" method="post">
      {{csrf_field()}}
      <input name="pendik_id" type="hidden" value="{{ $id_pendik }}">

      <div class="row">  
        <div class="col-md-6">
          <div class="form-group">
            <label>No KKS</label>
            <input name="kks_no" type="text" class="form-control" placeholder="" required >
          </div>
        </div>


        <div class="col-md-6">
            <div class="form-group">
              <label>Status PKH</label>
              <input name="pkh_status" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nomor PKH</label>
              <input name="pkh_nomor" type="number" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Status PIP</label>
              <input name="pip_status" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Alasan Pip</label>
              <input name="pip_alasan" type="text" class="form-control" placeholder="" >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Status Kip</label>
              <input name="kip_status" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nomor KIP</label>
              <input name="kip_nomor" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Nama Tertera Di KIP</label>
              <input name="kip_nama_tertera" type="text" class="form-control" placeholder="" required >
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Alasan Menolok</label>
              <input name="kip_alasan_menolok" type="text" class="form-control" placeholder="" required >
            </div>
          </div>
          
          <div class="col-md-6">
            <div class="form-group">
              <label>No Akta Kelahiran</label>
              <input name="no_akta_lahir" type="text" class="form-control" placeholder="" >
          </div>
        </div>
 
      </div>
      <hr>
      <button class="btn btn-success" type="submit">Simpan</button>
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
