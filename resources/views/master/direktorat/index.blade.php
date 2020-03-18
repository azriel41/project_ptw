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
    <h4 class="page-title">Direktorat</h4>
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
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p>
                    <a href="{{ route('direktorat_create') }}" class="btn btn-primary">
                        <i class="la la-plus"></i>
                        Tambah
                    </a>
                </p>

<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead align="center">
        <tr>
            <th>Nama Direktorat</th>
            <th>Status</th>
            <th>Created Date</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @foreach($direktorat as $direktorat)
            <tr>
                <td>{{ $direktorat->direktorat_name }}</td>
                <td align="center">
                    @if ($direktorat->direktorat_status == 1)
                        Aktif
                        @else
                        Tidak Aktif
                    @endif
                </td>
                <td align="center">{{ date('d-M-Y',strtotime($direktorat->created_at)) }}</td>
                <td align="center">
                    <form action="{{ route('direktorat_destroy',['id'=>$direktorat->direktorat_id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('POST') }}
                    
                    <a class="btn btn-info" href="{{ route('direktorat_show',['id'=>$direktorat->direktorat_id]) }}"><i class="fas fa-eye"></i> Show</a>
    
                    <a class="btn btn-primary" href="{{ route('direktorat_edit',['id'=>$direktorat->direktorat_id]) }}"><i class="fas fa-edit"></i> Edit</a>
                    
                    <button type="submit"  class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
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
<script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>   

@endsection