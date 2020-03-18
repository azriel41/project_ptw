@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Detail Pelatihan</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('pelatihantrainer_update',['id'=>$pelatihantrainer->pelatihantrainer_id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihantrainer_name" class="form-control"  value="{{ $pelatihantrainer->pelatihantrainer_name }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihantrainer_deskripsi" class="form-control"  value="{{ $pelatihantrainer->pelatihantrainer_deskripsi }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Kategori Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihantrainer_deskripsi" class="form-control"

                                                @if ($pelatihantrainer->$pelatihantrainer != 1)
                                                {{-- @if ($trainer->trainer_category == 1) --}}
                                                Value="Internal"
                                                @else
                                                value="Eksternal" 
                                                @endif

                                                disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Trainer</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihantrainer_deskripsi" class="form-control"  value="{{ $pelatihantrainer->pelatihantrainer_namatrainer }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihantrainer_peserta" class="form-control"  value="{{ $pelatihantrainer->pelatihantrainer_peserta }} Peserta" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Created By</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="created_by" class="form-control"  value="{{ $pelatihantrainer->created_by }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Created At</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="created_by" class="form-control"  value="{{ date('d-M-Y H:i:s A',strtotime($pelatihantrainer->created_at)) }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Updated At</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="created_by" class="form-control"  value="{{ date('d-M-Y H:i:s A',strtotime($pelatihantrainer->updated_at)) }}" disabled="">
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Pelatihan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="pelatihantrainer_status" disabled="">
                                                    @if ($pelatihantrainer->pelatihantrainer_status == 0)
                                                        <option value="0" selected="">Tidak Aktif</option>
                                                        <option value="1">Aktif</option>
                                                    @elseif ($pelatihantrainer->pelatihantrainer_status == 1)
                                                        <option value="0">Tidak Aktif</option>
                                                        <option value="1" selected="">Aktif</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                            
                                            <div class="form-group m-b-0">
                                                <div>
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
@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {
         $('form').parsley();
    });
</script>
@endsection