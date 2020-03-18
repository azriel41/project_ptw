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
                <form method="POST" class="form_save">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelatihan</label>
                        <div class="col-sm-10">
                            <input type="text" name="pelatihantrainer_name" class="form-control" placeholder="Nama Pelatihan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi Pelatihan</label>
                        <div class="col-sm-10">
                            <input type="text" name="pelatihantrainer_deskripsi" class="form-control" placeholder="Deskripsi Pelatihan" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Ruang Training</label>
                        <div class="col-sm-10">
                            <select class="form-control select2 pelatihantrainer_ruangtraining" name="pelatihantrainer_ruangtraining" required>
                                <option value="">- Ruang Training -</option>
                                @foreach ($ruang_training as $element)
                                <option value="{{ $element->ruangtraining_id }}" data-kapasitas="{{ $element->ruangtraining_kapasitas }}">{{ $element->ruangtraining_name }}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kapasitas</label>
                        <div class="col-sm-10">
                            <input type="text" readonly="" name="pelatihantrainer_kapasitas" class="pelatihantrainer_kapasitas form-control" placeholder="Kapasitas Ruang" required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah Peserta:</label>
                        <div class="col-sm-10">
                            <select class="form-control select2 pelatihantrainer_peserta" name="pelatihantrainer_peserta" required>
                                <option value="">-- Piilih Jumlah Peserta Pelatihan --</option>
                                @php
                                    for ($i=1; $i <51 ; $i++) { 
                                        echo '<option value="'.$i.'">'.$i.' Peserta</option>';
                                    }
                                @endphp
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control pelatihantrainer_category" name="pelatihantrainer_category" required>
                                <option value="">- Pilih</option>
                                <option value="1">Internal</option>
                                <option value="2">Eksternal</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-lg-2 col-form-label">Nama Trainer</label>
                        <div class="col-sm-10">
                            <div class="drop_trainer_internal" style="display: none">
                                <select class="form-control select2 pelatihantrainer_namatrainer_internal" name="pelatihantrainer_namatrainer_internal" required>
                                    <option value="">- Username -</option>
                                    @foreach ($user as $element)
                                    <option value="{{ $element->fullname }}">Username: {{ $element->username }} / Nama Lengkap: {{ $element->fullname }}</option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="drop_trainer_external" style="display: none">
                                <input type="text" name="pelatihantrainer_namatrainer_external" class="pelatihantrainer_namatrainer_external form-control" placeholder="Trainer External">
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" id="everything">Status Pelatihan</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="pelatihantrainer_status" required>
                                <option value="">- Pilih</option>
                                <option value="0">Tidak Aktif</option>
                                <option value="1">Aktif</option>
                            </select>

                        </div>
                    </div>
                    <input type="hidden" name="created_by" class="form-control" placeholder="Nama Ruang Training" value="{{ Auth::user()->username }}">
                    <input type="hidden" name="updated_by" class="form-control" placeholder="Nama Ruang Training" value="{{ Auth::user()->username }}">
                    <div class="form-group m-b-0">
                        <div>
                            <button type="button" onclick="save()" class="btn btn-primary waves-effect waves-light"><i class="fas fa-save"></i> Simpan
                            </button>

                            {{--
                            <button type="button" class="btn btn-primary waves-effect waves-light" id="sa-warning">Simpan</button> --}}

                            <a href="{{ URL::previous() }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i> Batal</a>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- end col -->
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
{{--
<script src="{{ URL::asset('plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script> --}}
<script src="{{ URL::asset('plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/form-advanced.js') }}"></script>

@endsection @section('script-bottom')
<script>
    $(document).ready(function() {
        $('form').parsley();
    });
    $('.pelatihantrainer_ruangtraining').on('change',function (argument) {
        $('.pelatihantrainer_kapasitas').val($(this).find(':selected').data('kapasitas'));
    })
    $('.pelatihantrainer_category').on('change',function (argument) {
        if ($(this).val() == 1) {
            $('.drop_trainer_internal').css('display','block');
            $('.drop_trainer_external').css('display','none');
        }else{
            $('.drop_trainer_internal').css('display','none');
            $('.drop_trainer_external').css('display','block');
        }
    })
    $('.pelatihantrainer_peserta').on('change',function (argument) {
        if (parseInt($(this).val()) > parseInt($('.pelatihantrainer_kapasitas').val())) {
            iziToast.warning({
                title: 'Hayolo',
                message: 'Tidak boleh melebihi kapasitas',
            });
            $(this).val('').trigger('change');
        }
    })
    function save(argument) {
        var form   = $('.form_save');
        formdata = new FormData(form[0]);
        $.ajaxSetup({
           headers: {
             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
        });
        iziToast.show({
            theme: 'dark',
            icon: 'fas fa-save',
            title: 'Beneran ?',
            message: 'pengen ngesave?!',
            position: 'center', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
            progressBarColor: 'rgb(0, 255, 184)',
            buttons: [
                ['<button>Simpan</button>', function (instance, toast) {
                        
                    $.ajax({
                        type: "post",
                        url:"{{ route('pelatihantrainer_store') }}",
                        data: formdata ? formdata : form.serialize(),
                        processData: false,
                        contentType: false,
                        beforeSend: function() {
                            $("#wait").css("display", "block");
                            $("#wait").css("z-index", "999");
                        },
                        success:function(data){
                            if (data.status == 'sukses') {
                                iziToast.success({
                                    title: 'yeayy',
                                    message: 'Berhasill menyimpan',
                                });
                                // location.reload();
                            }else if(data.status == 'gagal'){
                                iziToast.warning({
                                    title: 'waduhh',
                                    message: 'Error nya gaes '+data.exception,
                                });
                            }
                            $("#wait").css("display", "none");
                            $("#wait").css("z-index", "-999");
                        }
                    });
                    iziToast.hide({
                        transitionOut: 'fadeOutDown'
                    }, toast);

                }, true], // true to focus
                ['<button>Close</button>', function (instance, toast) {
                    instance.hide({
                        transitionOut: 'fadeOutUp',
                        onClosing: function(instance, toast, closedBy){
                            console.info('closedBy: ' + closedBy); // The return will be: 'closedBy: buttonName'
                        }
                    }, toast, 'buttonName');
                }]
            ],
            onOpening: function(instance, toast){
                console.info('callback abriu!');
            },
            onClosing: function(instance, toast, closedBy){
                console.info('closedBy: ' + closedBy); // tells if it was closed by 'drag' or 'button'
            }
        });

               
    }
</script>

@endsection