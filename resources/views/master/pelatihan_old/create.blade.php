@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />

@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah Pelatihan</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        {{-- <form action="" method="GET"> --}}
                                            <form method="POST" action="{{ route('pelatihan_store') }}">
                                            {{ csrf_field() }}


                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihan_name" class="form-control" placeholder="Nama pelatihan" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Direktorat</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="direktorat_name" class="form-control" placeholder="Nama direktorat" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi Pelatihan</label>
                                            {{-- <div class="col-sm-10">
                                                <form method="post">
                                                    <textarea id="elm1" name="area"></textarea>
                                                </form>
                                            </div> --}}
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihan_description" class="form-control" placeholder="Nama pelatihan" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="k_label" class="col-2 col-form-label"><b>Jenis Pelatihan</b></label>
                                            <div class="col-10">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="pelatihan_batch" type="checkbox" id="inlineCheckbox1" value="1">
                                                    <label class="form-check-label" for="inlineCheckbox1">Pelatihan Batch</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" name="pelatihan_harian" type="checkbox" id="inlineCheckbox2" value="2">
                                                    <label class="form-check-label" for="inlineCheckbox2">Pelatihan Harian</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah Peserta:</label>
                <div class="col-sm-10">
                    {{-- <select class="form-control select2"> --}}
                        <select class="form-control" name="pelatihan_kapasitas" required>
                                                    <option value="">-- Piilih Jumlah Peserta Pelatihan --</option>
                                                
                                                        <option value="1">1 Peserta</option>
                                                        <option value="2">2 Peserta</option>
                                                        <option value="3">3 Peserta</option>
                                                        <option value="4">4 Peserta</option>
                                                        <option value="5">5 Peserta</option>
                                                        <option value="6">6 Peserta</option>
                                                        <option value="7">7 Peserta</option>
                                                        <option value="8">8 Peserta</option>
                                                        <option value="9">9 Peserta</option>
                                                        <option value="10">10 Peserta</option>
                                                        <option value="11">11 Peserta</option>
                                                        <option value="12">12 Peserta</option>
                                                        <option value="13">13 Peserta</option>
                                                        <option value="14">14 Peserta</option>
                                                        <option value="15">15 Peserta</option>
                                                        <option value="16">16 Peserta</option>
                                                        <option value="17">17 Peserta</option>
                                                        <option value="18">18 Peserta</option>
                                                        <option value="19">19 Peserta</option>
                                                        <option value="20">20 Peserta</option>
                                                        <option value="21">21 Peserta</option>
                                                        <option value="22">22 Peserta</option>
                                                        <option value="23">23 Peserta</option>
                                                        <option value="24">24 Peserta</option>
                                                </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Awal Pelatihan:</label>
                <div class="col-sm-10">
                    <input type="text" name="pelatihan_start_date" class="form-control" placeholder="Masukan Tanggal Awal Pelatihan" id="from" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Akhir Pelatihan:</label>
                <div class="col-sm-10">
                    <input type="text" name="pelatihan_end_date" class="form-control" placeholder="Masukan Tanggal Akhir Pelatihan" id="to" required>
                </div>
            </div>

             <div class="form-group row">
                <label for="k_label" class="col-2 col-form-label"><b>Waktu Pelatihan</b></label>
                <div class="col-10">
                    <div class="form-check form-check-inline">
                        @foreach ($waktu as $element)
                        <input class="form-check-input" name="pelatihan_waktu[]" type="checkbox" id="inlineCheckbox1" value="{{ $element->waktu_id }}">
                        <label class="form-check-label" for="inlineCheckbox1">{{ $element->waktu_awal }} s/d {{ $element->waktu_akhir }}</label>
                        @endforeach
                    </div>
                    
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Maksimal Registrasi Pelatihan:</label>
                <div class="col-sm-10">
                    <input type="text" name="pelatihan_maks_register" class="form-control" placeholder="Masukan Tanggal Maksimal Registrasi Pelatihan" id="regist" required>
                </div>
            </div>

             

            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Pilih User:</label>
                <div class="col-sm-10">
                    <select class="form-control" name="pelatihan_username" required>
                        <option selected="" value="">- Username -</option>
                        @foreach ($user as $element)
                            <option value="{{ $element->id }}">{{ $element->username }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            



            



                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Pelatihan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="pelatihan_status" required>
                                                    <option value="">- Pilih</option>
                                                    <option value="0">Tidak Aktif</option>
                                                    <option value="1">Aktif</option>
                                                </select>
                                            </div>
                                        </div>
                                            
                                            <div class="form-group m-b-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light"><i class="fas fa-save"></i>
                                                        Simpan
                                                    </button>

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
<script src="{{ URL::asset('plugins/tinymce/tinymce.min.js') }}"></script>
<script src="{{ URL::asset('plugins/select2/js/select2.min.js') }}"></script>
@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {
         $('form').parsley();
    });
</script>
@endsection