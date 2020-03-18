@extends('layouts.master') @section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" /> @endsection @section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah Pelatihan</h4>
</div>
@endsection 

@section('content')
<style type="text/css">
.sembunyi{
    display: none;
}
</style> 
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" class="form_save"> 
                    {{ csrf_field() }}

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Nama Pelatihan:</label>
                            <div class="col-sm-10">
                                <select id="pelatihan_id" class="form-control select2" name="pelatihanpeserta_name">
                                    <option selected="" value="">- Pilih Pelatihan -</option>
                                    @foreach ($pelatihantrainer as $element)
                                    <option 
                                        value="{{ $element->pelatihantrainer_name }}" 
                                        data-deskripsi="{{ $element->pelatihantrainer_deskripsi }}" 
                                        data-namatrainer="{{ $element->pelatihantrainer_namatrainer }}" 
                                        data-ruangtraining="{{ $element->ruangtraining->ruangtraining_id }}" 
                                        data-ruangtraining_text="{{ $element->ruangtraining->ruangtraining_name }}" 
                                        data-nama_training="pelatihan {{ $element->pelatihantrainer_name }}" 
                                        data-peserta="{{ $element->pelatihantrainer_peserta }}">Pelatihan {{ $element->pelatihantrainer_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelatihan</label>
                            <div class="col-sm-10">
                                <input type="text" name="pelatihanpeserta_nama" class="form-control" placeholder="Nama Pelatihan" id="pelatihanpeserta_nama" style="pointer-events: none;background: lightgrey">
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
                            <label for="example-text-input" class="col-sm-2 col-form-label">Ruang Training</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="pelatihanpeserta_ruangtraining" id="pelatihanpeserta_ruangtraining" class="form-control" style="pointer-events: none;background: lightgrey">
                                <input type="text" name="pelatihanpeserta_ruangtraining_text" class="form-control" placeholder="ruang Training" id="pelatihanpeserta_ruangtraining_text" style="pointer-events: none;background: lightgrey">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Jenis Pelatihan:</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="pelatihanpeserta_type" onclick="chose_pelatihan()" value="harian" checked>Pelatihan Harian</label>
                                    <label>
                                        <input type="radio" name="pelatihanpeserta_type" onclick="chose_pelatihan()" value="batch">Pelatihan Batch</label>
                                </div>
                            </div>
                        </div>
                        <label class="col-form-label">Tanggal/Jam Pelatihan:</label>

                        <div class="form-group row sembunyi" id="datepairExample">
                            <input style="margin-right: 20px;margin-left: 18px" type="text" class="col-sm-2 form-control date start" />
                                <input style="margin-right: 20px" type="text" class="hide_timestart_batch col-sm-2 form-control time start" />

                                <input style="margin-right: 20px" type="text" class="hide_timestart_harian col-sm-1 form-control time start_time_1" />
                                <input style="margin-right: 20px" type="text" class="hide_timestart_harian col-sm-1 form-control time end_time_1" />
                            <b>-</b>
                                <input style="margin-right: 20px;margin-left: 20px" type="text" class="hide_timeend_batch col-sm-2 form-control time end" />

                                <input style="margin-right: 20px;margin-left: 20px" type="text" class="hide_timeend_harian col-sm-1 form-control time start_time_2" />
                                <input style="margin-right: 20px" type="text" class="hide_timeend_harian col-sm-1 form-control time end_time_2" />
                            <input style="margin-right: 20px;" type="text" class="col-sm-2 form-control date end" />
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Pilih input user:</label>
                            <div class="col-sm-10">
                                <div class="radio">
                                    <label>
                                        <input type="radio" class="pelatihanpeserta_chose" onclick="chose_user()" name="pelatihanpeserta_chose" value="input_user"> Input User</label>
                                    <label>
                                        <input type="radio" class="pelatihanpeserta_chose" onclick="chose_user()" name="pelatihanpeserta_chose" value="import_user"> Import User</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label">Peserta Pelatihan:</label>
                            <div class="col-sm-10">
                                <div class="hidden_select_user sembunyi">
                                    <select class="select2 form-control select2-multiple" multiple="multiple" name="pelatihanpeserta_username[]" multiple data-placeholder="Choose ...">
                                        @foreach ($user as $element)
                                            <option value="{{ $element->id }}">{{ $element->username }} / {{ $element->fullname}} </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="hidden_import_user sembunyi">
                                    <input type="file" name="file_excel" class="file_excel">
                                    <button class="btn btn-sm btn-warning" type="button" onclick="file_excels()">
                                        Import
                                    </button>
                                    <button class="btn btn-sm btn-success" type="button" data-toggle="modal" data-target=".bd-example-modal-lg">
                                        Lihat data
                                    </button>
                                </div>
                                
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Tanggal Maksimal Pendaftaran</label>
                            <div class="col-sm-10">
                                <div class="input-group date insertInfo" data-provide="datepicker">
                                    <input type="text" class="form-control" placeholder="Tanggal Maksimal Pendaftaran" name="pelatihanpeserta_maksregister">
                                    <div class="input-group-addon close-button">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Status Pelatihan</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="pelatihanpeserta_status">
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
                                <button type="button" onclick="save()" class="btn btn-primary waves-effect waves-light"><i class="fas fa-save"></i> Simpan
                                </button>
                                    <a href="{{ URL::previous() }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Batal</a>
                            </div>
                        </div>
                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                              <div class="drop_table_user">

                              </div>
                            </div>
                          </div>
                        </div>
                    </form>

            </div>
        </div>
    </div>
    <!-- end col -->
    @endsection @section('script')
    <!-- Parsley js -->
    <script src="{{ URL::asset('plugins/parsleyjs/parsley.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/sweet-alert.init.js') }}"></script>
    <script src="{{ URL::asset('plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
    <script src="{{ URL::asset('plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    {{--
    <script src="{{ URL::asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script> --}}
    <script src="{{ URL::asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/form-advanced.js') }}"></script>

    @endsection @section('script-bottom')
    <script>
        $(document).ready(function() {
            $('form').parsley();
        });

        $('#pelatihan_id').on('change', function() {
            $('#pelatihantrainer_deskripsi').val($(this).find(':selected').data('deskripsi'));
            $('#pelatihantrainer_namatrainer').val($(this).find(':selected').data('namatrainer'));
            $('#pelatihantrainer_peserta').val($(this).find(':selected').data('peserta'));
            $('#pelatihanpeserta_ruangtraining').val($(this).find(':selected').data('ruangtraining'));
            $('#pelatihanpeserta_ruangtraining_text').val($(this).find(':selected').data('ruangtraining_text'));
            $('#pelatihanpeserta_nama').val($(this).find(':selected').data('nama_training'));
        })
        $('#pelatihan_id').change();

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

        $(".select2-multiple").select2({
            placeholder: "Pilih Peserta"
        });

        // initialize input widgets first
        $('.time').timepicker({
            'showDuration': true,
            'timeFormat': 'g:ia'
        });

        $('#datepairExample .date').datepicker({
            'format': 'yyyy-m-d',
            'autoclose': true
        });

        // initialize datepair
        function file_excels(argument) {

        var form   = $('.form_save');
        formdata = new FormData(form[0]);
        $.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
             $.ajax({
                type: "post",
                url:"{{ route('pelatihanpeserta_excel_import') }}",
                data: formdata ? formdata : form.serialize(),
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#wait").css("display", "block");
                    $("#wait").css("z-index", "999");
                },
                success:function(data){
                    var user = '';
                    $('.drop_table_user').empty();
                    $.each(data.hasil[0], function(i) {
                         user += '<tr><td><input type="hidden" name="pelatihanpeserta_username[]" value="'+data.hasil[0][i][0]+'" >'+data.hasil[0][i][0]+'</td></tr>';
                    });
                    $('.drop_table_user').append(
                        '<table class="table">'+
                            '<tr>'+
                                '<th class="text-center">USERNAME</th>'+
                            '</tr>'+
                            user+
                        '</table>'
                    );
                    $("#wait").css("display", "none");
                    $("#wait").css("z-index", "-999");
                }
            });
        }

         function save(argument) {

        var form   = $('.form_save');
        formdata = new FormData(form[0]);
        $.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
             $.ajax({
                type: "post",
                url:"{{ route('pelatihanpeserta_store') }}",
                data: formdata ? formdata : form.serialize(),
                processData: false,
                contentType: false,
                beforeSend: function() {
                    $("#wait").css("display", "block");
                    $("#wait").css("z-index", "999");
                },
                success:function(data){
                  
                    $("#wait").css("display", "none");
                    $("#wait").css("z-index", "-999");
                }
            });
        }

        function chose_user(argument) {
            if ($("input[name='pelatihanpeserta_chose']:checked").val() == 'import_user') {
                // $('.select2-multiple').val('').trigger(':update');
                $('.drop_table_user').empty();
                $('.hidden_select_user').hide();
                $('.hidden_import_user').show();
            }else{
                // $('.select2-multiple').val('').trigger(':update');
                $('.drop_table_user').empty();
                $('.hidden_select_user').show();
                $('.hidden_import_user').hide();
            }
        }
        function chose_pelatihan(argument) {
                $('#datepairExample').show();
                $('#datepairExample').css('display','flex');
            if ($("input[name='pelatihanpeserta_type']:checked").val() == 'harian') {
                $('.hide_timestart_batch').hide();
                $('.hide_timestart_harian').show();
                $('.hide_timeend_batch').hide();
                $('.hide_timeend_harian').show();
            }else{
                $('.hide_timestart_batch').show();
                $('.hide_timestart_harian').hide();
                $('.hide_timeend_batch').show();
                $('.hide_timeend_harian').hide();
            }
        }
    </script>

    @endsection