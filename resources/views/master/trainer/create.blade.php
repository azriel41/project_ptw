@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />


@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah Trainer</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('trainer_store') }}"> {{ csrf_field() }}

             <input type="hidden" name="created_by" class="form-control" placeholder="Nama Ruang Training" value="{{ Auth::user()->username }}">

                                            
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select id="trainer_category_select" class="form-control" name="trainer_category" required>
                        <option id="pilot_form" value="1">Internal</option>
                        <option id="client_form" value="2">Eksternal</option>
                    </select>
                </div>
            </div>

           <div class="form-group row">
            <label class="col-lg-2 col-form-label">Nama Trainer</label>
            <div class="col-sm-10">
                <select class="form-control select2" name="trainer_name" required>
                    <option value="">- Username -</option>
                    @foreach ($user as $element)
                        <option value="{{ $element->fullname }}">Username: {{ $element->username }} / Nama Lengkap: {{ $element->fullname }}</option>

                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
                <label class="col-lg-2 col-form-label">Nama Pelatihan</label>
                <div class="col-sm-10">
                    <select class="form-control select2" name="trainer_pelatihan" required>
                        <option selected="" value="">- Pelatihan -</option>
                        @foreach ($pelatihantrainer as $element)
                            <option value="{{ $element->pelatihantrainer_id }}">Pelatihan {{ $element->pelatihantrainer_name }}</option>

                        @endforeach
                    </select>
                </div>
            </div>


                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status trainer</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="trainer_status" required>
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
    $('#trainer_id').on('change', function(){
        $('#trainer_deskripsi').val($(this).find(':selected').data('deskripsi'));
    })
$('#trainer_id').change();
</script>

<script type="text/javascript">
    $('#trainer_id').on('change', function(){
        $('#trainer_category').val($(this).find(':selected').data('category'));
    })
$('#trainer_id').change();
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