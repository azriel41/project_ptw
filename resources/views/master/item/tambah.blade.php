@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah Item</h4>
</div>
@endsection

@section('content')
   
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">        
                    <form method="POST" action="{{ route('master_item_store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Kode</label>
                            <div class="col-sm-10">
                                <input type="text" name="kode" class="form-control" value="{{ old('kode') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Stok</label>
                            <div class="col-sm-10">
                                <input type="number" name="stok" class="form-control" value="{{ old('stok') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Jenis</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="tipe" name="tipe">
                                    <option value="" selected>Pilih Jenis</option>
                                    <option value="1">Bahan Baku</option>
                                    <option value="2">Produk Jadi</option>
                                    <option value="3">Mesin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">gambar</label>
                            <div class="col-sm-10">
                                <input type="file" name="gambar" class="dropify" value="{{ old('gambar') }}">
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
<script src="{{ URL::asset('plugins/dropify/dropify.min.js') }}"></script>
@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {
         $('form').parsley();
    });
    
    $('.dropify').dropify();

</script>
@endsection