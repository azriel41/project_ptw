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
                                        <form method="POST" action="{{ route('pelatihanpeserta_store') }}"> {{ csrf_field() }}
                                            {{-- <form method="POST" action="{{ route('trainer_store') }}"> {{ csrf_field() }} --}}

            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Nama Pelatihan:</label>
                <div class="col-sm-10">
                    <select id="pelatihan_id" class="form-control select2" name="pelatihanpeserta_name" required>
                        <option selected="" value="">- Pilih Pelatihan -</option>
                        @foreach ($pelatihantrainer as $element)
                            <option value="{{ $element->pelatihantrainer_name }}" data-deskripsi="{{ $element->pelatihantrainer_deskripsi }}" data-namatrainer="{{ $element->pelatihantrainer_namatrainer }}" data-peserta="{{ $element->pelatihantrainer_peserta }}">Pelatihan {{ $element->pelatihantrainer_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi Pelatihan</label>
                <div class="col-sm-10">
                    <input type="text" name="pelatihanpeserta_deskripsi" class="form-control" placeholder="Deskripsi Pelatihan" id="pelatihantrainer_deskripsi" style="pointer-events: none;background: lightgrey">
                </div>
            </div>


            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Trainer</label>
                <div class="col-sm-10">
                    <input type="text" name="pelatihanpeserta_namatrainer" class="form-control" id="pelatihantrainer_namatrainer" style="pointer-events: none;background: lightgrey" placeholder="Nama Trainer">
                </div>
            </div>

            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah Peserta Pelatihan</label>
                <div class="col-sm-10">
                    <input type="text" name="pelatihanpeserta_jumlahpeserta" class="form-control" id="pelatihantrainer_peserta" placeholder="Jumlah Peserta Pelatihan" style="pointer-events: none;background: lightgrey">
                </div>
            </div>

 
            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Jenis Pelatihan:</label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label><input type="radio" name="pelatihanpeserta_type" value="harian" checked>Pelatihan Harian</label>
                        <label><input type="radio" name="pelatihanpeserta_type" value="batch">Pelatihan Batch</label>
                    </div>
                </div>
            </div>

            <div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Start Date</label>
    <div class="col-sm-10">
        <div class="input-group date insertInfo" data-provide="datepicker">
            <input type="text" class="form-control" placeholder="Tanggal Mulai Pelatihan" name="pelatihanpeserta_startdate" required>
            <div class="input-group-addon close-button">
            </div>
        </div>
    </div>
</div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">End Date</label>
    <div class="col-sm-10">
        <div class="input-group date insertInfo" data-provide="datepicker">
            <input type="text" class="form-control" placeholder="Tanggal Akhir Pelatihan" name="pelatihanpeserta_enddate" required>
            <div class="input-group-addon close-button">
            </div>
        </div>
    </div>
</div>


<div class="form-group row">
                <label class="col-lg-2 col-form-label">Peserta Pelatihan:</label>
                <div class="col-sm-10">
                    {{-- <select class="form-control select2" name="pelatihan_username" required> --}}
                        <select class="select2 form-control select2-multiple" multiple="multiple" name="pelatihanpeserta_username" multiple data-placeholder="Choose ...">
                        {{-- <option selected="" value="">- Peserta Pelatihan -</option> --}}
                        @foreach ($user as $element)
                            <option value="{{ $element->id }}">{{ $element->username }} / {{ $element->fullname}} </option>
                        @endforeach
                    </select>
                </div>
            </div>

<div class="form-group row">
    <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Maksimal Pendaftaran</label>
    <div class="col-sm-10">
        <div class="input-group date insertInfo" data-provide="datepicker">
            <input type="text" class="form-control" placeholder="Tanggal Maksimal Pendaftaran" name="pelatihanpeserta_maksregister" required>
            <div class="input-group-addon close-button">
            </div>
        </div>
    </div>
</div>


                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Pelatihan</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="pelatihanpeserta_status" required>
                                                    <option value="">- Pilih</option>
                                                    <option value="0">Tidak Aktif</option>
                                                    <option value="1">Aktif</option>
                                                </select>
                                            </div>
                                        </div>

<input type="hidden" name="created_by" class="form-control" value="{{ Auth::user()->username }}">
<input type="hidden" name="updated_by" class="form-control" value="{{ Auth::user()->username }}">

                                            
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
<script src="{{ URL::asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ URL::asset('plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
{{-- <script src="{{ URL::asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script> --}}
<script src="{{ URL::asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/form-advanced.js') }}"></script>

@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {
         $('form').parsley();
    });
</script>
<script type="text/javascript">
    $('#pelatihan_id').on('change', function(){
        $('#pelatihantrainer_deskripsi').val($(this).find(':selected').data('deskripsi'));
        $('#pelatihantrainer_namatrainer').val($(this).find(':selected').data('namatrainer'));
        // $('#pelatihantrainer_category').val($(this).find(':selected').data('category'));
        $('#pelatihantrainer_peserta').val($(this).find(':selected').data('peserta'));
    })
$('#pelatihan_id').change();
</script>

<script type="text/javascript">
$('.date').datepicker({
  format: 'd-M-yyyy',
  autoclose: true,
  TodayHighlight: true
});

$('.close-button').unbind();

$('.close-button').click(function() {
  if ($('.datepicker').is(":visible")) {
    $('.date').datepicker('hide');
  } else {
    $('.date').datepicker('show');
  }
});
</script>
<script type="text/javascript">
    $(".select2-multiple").select2({
    placeholder: "Pilih Peserta"
});
</script>

@endsection