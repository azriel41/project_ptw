
@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Edit Departemen</h4>
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
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kode Departemen</label>
                        <div class="col-sm-10">
                            <input type="text" name="kode_departemen" class="form-control" placeholder="Masukan Nama Departemen" required>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Departemen</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_departemen" class="form-control" placeholder="Masukan Nama Departemen" required>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="keterangan" class="form-control">
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
</script>
@endsection