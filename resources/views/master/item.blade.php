@extends('layouts.master')

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Master Item</h4>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
        <li class="breadcrumb-item active">Item</li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead align="center">
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Departemen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Permen</td>
                            <td>Bahan Produksi</td>
                            <td>Produksi</td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="javascript:void(0);"><i class="fas fa-eye"></i>
                                        Show</a>
                                    <a class="btn btn-primary" href="javascript:void(0);"><i class="fas fa-edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Permen</td>
                            <td>Bahan Produksi</td>
                            <td>Produksi</td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="javascript:void(0);"><i class="fas fa-eye"></i>
                                        Show</a>
                                    <a class="btn btn-primary" href="javascript:void(0);"><i class="fas fa-edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Permen</td>
                            <td>Bahan Produksi</td>
                            <td>Produksi</td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="javascript:void(0);"><i class="fas fa-eye"></i>
                                        Show</a>
                                    <a class="btn btn-primary" href="javascript:void(0);"><i class="fas fa-edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Permen</td>
                            <td>Bahan Produksi</td>
                            <td>Produksi</td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="javascript:void(0);"><i class="fas fa-eye"></i>
                                        Show</a>
                                    <a class="btn btn-primary" href="javascript:void(0);"><i class="fas fa-edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>Permen</td>
                            <td>Bahan Produksi</td>
                            <td>Produksi</td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="javascript:void(0);"><i class="fas fa-eye"></i>
                                        Show</a>
                                    <a class="btn btn-primary" href="javascript:void(0);"><i class="fas fa-edit"></i>
                                        Edit</a>
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"
                                            aria-hidden="true"></i> Delete</button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
{{-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <p>
                    <a href="{{ route('user_create') }}" class="btn btn-primary">
<i class="la la-plus"></i>
Tambah
</a>
</p>
<table id="datatable" class="table table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
    <thead align="center">
        <tr>
            <th>Nama User</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Status</th>
            <th>Created Date</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($user as $user)
        <tr>
            <td>{{ $user->username }}</td>
            <td>{{ $user->fullname }}</td>
            <td>{{ $user->email }}</td>
            <td align="center">
                @if ($user->user_status == 1)
                Aktif
                @else
                Tidak Aktif
                @endif
            </td>
            <td align="center">{{ date('d-M-Y',strtotime($user->created_at)) }}</td>
            <td align="center">
                <form action="{{ route('user_destroy',['id'=>$user->id]) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('POST') }}

                    <a class="btn btn-info" href="{{ route('user_show',['id'=>$user->id]) }}"><i class="fas fa-eye"></i>
                        Show</a>

                    <a class="btn btn-primary" href="{{ route('user_edit',['id'=>$user->id]) }}"><i
                            class="fas fa-edit"></i> Edit</a>

                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i>
                        Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
</div>
</div> <!-- end col -->
</div> <!-- end row --> --}}
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