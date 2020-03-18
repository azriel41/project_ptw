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
    <h4 class="page-title">Trainer</h4>
</div>                   
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
               

<table id="datatable" class="table table_datatable table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead align="center">
        <tr>
            <th>Nama Trainer</th>
            <th>Nama Pelatihan</th>
            <th>Ruang Training</th>
            <th>Status</th>
            <th>Created Date</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>

</div>
</div>
</div> <!-- end col -->
</div> <!-- end row -->

                        
@endsection

@section('script')      
<!-- Required datatable js -->
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
{{-- <script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>    --}}
<script type="text/javascript">
    $(document).ready(function() {
    var table = $('.table_datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: {
          url:'{{ route('trainer_datatable') }}',
          error:function(){
            table.DataTable().ajax.reload();
          }
      },
      columns: [
        // HIDDEN DATA
        {data: 'pelatihantrainer_namatrainer', name: 'pelatihantrainer_namatrainer',class:'left'},
        {data: 'pelatihantrainer_name', name: 'pelatihantrainer_name',class:'left'},
        {data: 'ruangtraining.ruangtraining_name', name: 'ruangtraining.ruangtraining_name',class:'left'},
        {data: 'status', name: 'status',class:'left'},
        {data: 'created_at', name: 'created_at',class:'left'},
        {
          sortable: false,
          "render": function ( data, type, full, meta ) {
            var buttonID = full.ce_icon;
            return '<i class="'+buttonID+'"></i>';
          }
        },
      ],
      columnDefs:[{
         targets: 2, 
         defaultContent : "<button type='button' class='btn btn-info rounded-round edit_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-pen fa-lg'></i></button> <button type='button' class='btn btn-danger rounded-round mr-2 delete_button' style='width: 35px;padding-left: 8px;'><i class='fas fa-trash'></i></button>"
        },]
    });

      $('.table_datatable tbody').on( 'click', '.edit_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
      });

      $('.table_datatable tbody').on( 'click', '.delete_button', function () {
          var parent   = $(this).closest("tr");
          var data = $('.table_datatable').DataTable().row(parent).data();
          $.ajax({
              url:"{{ route('trainer_destroy') }}",
              data: {'id':data['pelatihantrainer_id']},
              success:function(data){
                if (data.status == 'sukses') {
                    $('.table_datatable').DataTable().ajax.reload();
                    iziToast.error({position: 'topRight',title: 'Data Telah Terhapus'});
                }
              }
          });
      });

    });

</script>
@endsection