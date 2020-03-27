
@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah User</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                         <form method="POST" action="{{ route('user_store') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="user_name" class="form-control" placeholder="Masukan Username" required>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nik" class="form-control" placeholder="Masukan NIK" required>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="fullname" class="form-control" placeholder="Masukan Nama Lengkap" required>
                                            </div>
                                        </div>                                         
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tempat Lahir</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tempat_lahir" class="form-control datepicker" placeholder="Masukkan Tempat Lahir" required>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Kerja</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="tanggal_kerja" class="form-control datepicker" placeholder="Masukkan Tanggal Kerja" required>
                                            </div>
                                        </div>
                                         <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Departemen:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="departemen" required>
                                                    <option selected="" value="">- Pilih Departemen -</option>
                                                    @foreach ($departemen as $element)
                                                        <option value="{{ $element->departemen_id }}">{{ $element->departemen_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    <div class="form-group row">
                                            <label class="col-lg-2 col-form-label">Hak Akses:</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="hakakses" required>
                                                    <option value="">- Pilih Hak Akses -</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Manager</option>
                                                    <option value="3">Leader</option>
                                                    <option value="4">Helpdesk</option>
                                                    <option value="5">Coordinator</option>
                                                    <option value="6">User</option>
                                                    <option value="7">Registrasi</option>
                                                </select>
                                            </div>
                                        </div>
                                            
                                            <div class="form-group m-b-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fas fa-save"></i>
                                                        Simpan
                                                    </button>
                                                    
                                                {{-- <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Simpan</button> --}}

                                                    <a href="{{ URL::previous() }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Batal</a>
                                                </div>
                                            </div>
                                        </form>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
@endsection

@section('script')
<!-- Parsley js -->
<script src="{{ URL::asset('plugins/parsleyjs/parsley.min.js') }}"></script>
<script src="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/sweet-alert.init.js') }}"></script>  
@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {
         $('form').parsley();
    });
    $('.datepicker').datepicker();
</script>
@endsection