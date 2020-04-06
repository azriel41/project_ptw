
@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah Karyawan</h4>
</div>
@endsection

@section('content')
   
<div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">        
                    <form enctype="multipart/form-data" method="POST" action="{{ route('karyawan_store') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">NIK Karyawan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nik" class="form-control" placeholder="Masukan NIK Karyawan">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Karyawan</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Karyawan">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">No Identitas</label>
                        <div class="col-sm-10">
                            <input type="text" name="no_identitas" class="form-control" placeholder="Masukan No Identitas">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-10">
                            <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukan Tanggal Lahir">
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="jenin_kelamin">
                                <option value="LAKI-LAKI" selected="">LAKI-LAKI</option>
                                <option value="PEREMPUAN">PEREMPUAN</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Pendidikan</label>
                        <div class="col-sm-10">
                           <select class="form-control" name="pendidikan">
                                <option value="SMP">SMP</option>
                                <option value="SMK/SMA">SMK/SMA</option>
                                <option value="S1">S1</option>
                                <option value="S2">S2</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Agama</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="agama">
                                <option value="ISLAM">ISLAM</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                                <option value="KRISTEN">KRISTEN</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Status Kerja</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status_kerja">
                                <option value="Tetap">Tetap</option>
                                <option value="Pkwt">PKWT</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Status Kawin</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="status_kawin">
                                <option value="KAWIN">KAWIN</option>
                                <option value="BELUM KAWIN">BELUM KAWIN</option>
                            </select>
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Karyawan"></textarea> 
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-10">
                            <input type="file" class="dropify" name="image" >
                        </div>
                    </div>
                     <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea type="text" name="keterangan" class="form-control"></textarea>
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