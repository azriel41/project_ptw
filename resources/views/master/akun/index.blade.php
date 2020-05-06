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
    <h4 class="page-title">akun</h4>
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
        <a href={{ url('/akun/tambah') }} class="btn btn-primary"><i class="fas fa-plus fa-sm text-white-90"></i> Tambah Data akun</a>
      </h6>
    </div>

    <div class="card-body">
      <div>
        <table class="table table-bordered dt-responsive nowrap" id="dataTable" width="100%" cellspacing="0" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
          <thead class="bg-white">
            <tr>
              <th>Kode</th>
              <th>Nama</th>
              <th>Stok</th>
              <th>Jenis</th>
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


@section('script')
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/fixedcolumns/3.3.0/js/dataTables.fixedColumns.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#dataTable').DataTable({
        processing: true,
        serverside: true,
        ajax:"{{ route('ajax.get.data.akun') }}",
        columns:[
          {data:'kode', name:'kode'},
          {data:'nama', name:'nama'},
          {data:'stok', name:'stok'},
          {data:'jenis', name:'jenis'},
          {data:'gambarr', name:'gambarr'},
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