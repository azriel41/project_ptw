@extends('layouts.master')

@section('css')
<!-- DataTables -->
<link href="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive datatable examples -->
<link href="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Item</h4>
</div>
@endsection

@section('content')
@if (session('info'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    {{ session('info') }}
</div>
@endif
<!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary">
        <a href={{ url('/downtime/tambah') }} class="btn btn-primary"><i class="fas fa-plus fa-sm text-white-90"></i> Tambah Data Mesin Mati</a>
      </h6>
    </div>

    <div class="card-body">
      <div>
        <table class="table table-bordered dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead class="bg-white">
            <tr>
              <th>Nomor Mesin</th>
              <th>Nama Mesin</th>
              <th>Durasi Downtime</th>
              <th>Keterangan</th>
              <th>Gambar</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
          </tbody>
        </table>
      </div>
    </div>
  </div>

<!-- delete data -->
  <form action="" method="post" id="deleteForm">
    @csrf 
    @method('DELETE')
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi Hapus</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Apakah Anda yakin ingin menghapus Item ini?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
            <button type="submit" class="btn btn-danger">Ya</button>
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#dataTable').DataTable({
        processing: true,
        serverside: true,
        ajax:"{{ route('ajax.get.data.downtime') }}",
        columns:[
          {data:'no_mesin', name:'no_mesin'},
          {data:'nama_mesin', name:'nama_mesin'},
          {data:'durasi', name:'durasi'},
          {data:'keterangan', name:'keterangan'},
          {data:'gambar', name:'gambar'},
          {data:'aksi', name:'aksi'}
        ]
      });

      $(document).on('click','.delete',function () {
        var url = $(this).attr('data-url');
        console.log(url);
        $("#deleteForm").attr("action", url);
      });

    });
  </script>
@stop