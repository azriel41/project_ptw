@extends('layouts.master')

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Surat Permintaan Pembelian</h4>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Purchasing</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
        <li class="breadcrumb-item active">Pembelian (SPP)</li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p>
                    <a href="{{ route('addspp') }}" class="btn btn-primary">
                        <i class="la la-plus"></i>
                        Tambah
                    </a>
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead align="center">
                        <tr>
                            <th>No SPP</th>
                            <th>Tanggal</th>
                            <th>Departement</th>
                            <th>Harga Total</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SPP-200406/0001</td>
                            <td>2020/04/06</td>
                            <td>NON-DEPARTMENT</td>
                            <td>Rp. 75.000</td>
                            <td align="center">
                                <span class="badge badge-success p-2">Diterima</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="{{ route('sppout') }}"><i class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>SPP-200406/0001</td>
                            <td>2020/04/06</td>
                            <td>NON-DEPARTMENT</td>
                            <td>Rp. 75.000</td>
                            <td align="center">
                                <span class="badge badge-danger p-2">Ditolak</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info disabled" href="{{ route('sppout') }}"><i
                                            class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
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