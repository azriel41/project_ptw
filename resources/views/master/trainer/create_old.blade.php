@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
{{-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> --}}
{{-- <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css"> --}}

<link href="{{ URL::asset('plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet">
<link href="{{ URL::asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" /> 

@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah trainer</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        {{-- <form action="" method="GET"> --}}
                                            <form method="POST" enctype="multipart/form-data" action="{{ route('trainer_store') }}">
                                            {{ csrf_field() }}
        <input type="hidden" name="created_by" class="form-control" placeholder="Nama Ruang Training" value="{{ Auth::user()->username }}">

                                            
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select id="trainer_category_select" class="form-control" name="trainer_category">
                        <option id="pilot_form" value="1">Internal</option>
                        <option id="client_form" value="2">Eksternal</option>
                    </select>
                </div>
            </div>

{{-- Hide / Show Form when dropdown choose --}}
{{-- Trainer Internal --}}
<div id="internal_form" style="display:none;">
    <form action="" method="POST" name="graph_form">
        <div class="form-group row">
            <label class="col-lg-2 col-form-label">Nama Trainer</label>
            <div class="col-sm-10">
                <select class="form-control select2" name="trainer_name" required>
                    <option value="">- Username -</option>
                    @foreach ($user as $element)
                        <option value="{{ $element->id }}">Username: {{ $element->username }} / Nama Lengkap: {{ $element->fullname }}</option>

                    @endforeach
                </select>
            </div>
        </div>

            <div class="form-group row">
                <label class="col-lg-2 col-form-label">Nama Pelatihan</label>
                <div class="col-sm-10">
                    <select class="form-control select2" name="trainer_pelatihan">
                        <option selected="" value="">- Pelatihan -</option>
                        @foreach ($pelatihantrainer as $element)
                            <option value="{{ $element->pelatihantrainer_id }}">Pelatihan {{ $element->pelatihantrainer_name }}</option>

                        @endforeach
                    </select>
                </div>
            </div>

           
        
                                      
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status Trainer</label>
        <div class="col-sm-10">
            <select class="form-control" name="trainer_status" required>
                <option value="">- Pilih</option>
                <option value="0">Tidak Aktif</option>
                <option value="1">Aktif</option>
            </select>
        </div>
    </div>

  </form>
</div>
  
<div id="eksternal_form" style="display:none;">
  <form action="" method="POST">
    <div class="form-group row">
        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Trainer</label>
        <div class="col-sm-10">
            <input type="text" name="trainer_name" class="form-control" placeholder="Nama Trainer" required>
        </div>
    </div>

    <div class="form-group row">
                <label class="col-lg-2 col-form-label">Nama Pelatihan</label>
                <div class="col-sm-10">
                    <select class="form-control select2" name="trainer_pelatihan">
                        <option selected="" value="">- Pelatihan -</option>
                        @foreach ($pelatihantrainer as $element)
                            <option value="{{ $element->pelatihantrainer_id }}">Pelatihan {{ $element->pelatihantrainer_name }}</option>

                        @endforeach
                    </select>
                </div>
            </div>
                                      
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Status Trainer</label>
        <div class="col-sm-10">
            <select class="form-control" name="trainer_status" required>
                <option value="">- Pilih</option>
                <option value="0">Tidak Aktif</option>
                <option value="1">Aktif</option>
            </select>
        </div>
    </div>
  </form>
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
<script src="{{ URL::asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ URL::asset('plugins/select2/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
<script src="{{ URL::asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<!-- Plugins Init js -->
<script src="{{ URL::asset('assets/pages/form-advanced.js') }}"></script>

{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.js"></script>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> --}}
<script>
    $( function() {
        var dateFormat = "mm/dd/yy",
            from = $( "#from" )
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1
                })
                .on( "change", function() {
                    to.datepicker( "option", "minDate", getDate( this ) );
                }),
            to = $( "#to" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
            .on( "change", function() {
                from.datepicker( "option", "maxDate", getDate( this ) );
            });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
    </script>

    <script>
    $( function() {
        var dateFormat = "mm/dd/yy",
            regist = $( "#regist" )
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 1
                })
                .on( "change", function() {
                    to.datepicker( "option", "minDate", getDate( this ) );
                }),
            to = $( "#to" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1
            })
            .on( "change", function() {
                regist.datepicker( "option", "maxDate", getDate( this ) );
            });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
    </script>




@endsection

@section('script-bottom')
{{-- <script>
    $(document).ready(function() {
         $('form').parsley();
    });
</script> --}}
<script type="text/javascript">
$(function() {
  $("#trainer_category_select").change(function() {
    if ($("#pilot_form").is(":selected")) {
      $("#internal_form").show();
      $("#eksternal_form").hide();
    } else {
      $("#internal_form").hide();
      $("#eksternal_form").show();
    }
  }).trigger('change');
});
</script>
@endsection