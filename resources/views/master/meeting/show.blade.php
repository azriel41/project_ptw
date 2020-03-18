@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Detail Pelatihan Peserta</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('pelatihanpeserta_update',['id'=>$pelatihanpeserta->pelatihanpeserta_id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ $pelatihanpeserta->pelatihanpeserta_name }}" disabled="">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Deskripsi Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ $pelatihanpeserta->pelatihanpeserta_deskripsi }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Trainer</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ $pelatihanpeserta->pelatihanpeserta_namatrainer }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Jumlah Peserta</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ $pelatihanpeserta->pelatihanpeserta_jumlahpeserta }} Peserta" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Jenis Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"

                                                @if ($pelatihanpeserta->pelatihanpeserta_type == "harian")
                                                value="Pelatihan Harian" 
                                                @else
                                                value="Pelatihan Batch" 
                                                @endif


                                                disabled="">
                                            </div>
                                        </div>


                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Start Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_name" class="form-control" value="{{ date('d-M-Y',strtotime($pelatihanpeserta->pelatihanpeserta_startdate)) }}" disabled="">
                                            </div>
                                        </div>

                                         <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">End Date</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_name" class="form-control" value="{{ date('d-M-Y',strtotime($pelatihanpeserta->pelatihanpeserta_enddate)) }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Peserta Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_name" class="form-control" value="{{ $pelatihanpeserta->pelatihanpeserta_username }}" disabled="">
                                            </div>
                                        </div>

                                       

                                        {{-- <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Pelatihan</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="pelatihanpeserta_status" disabled="">
                                                    @if ($pelatihanpeserta->pelatihanpeserta_status == 0)
                                                        <option value="0" selected="">Tidak Aktif</option>
                                                        <option value="1">Aktif</option>
                                                    @elseif ($pelatihanpeserta->pelatihanpeserta_status == 1)
                                                        <option value="0">Tidak Aktif</option>
                                                        <option value="1" selected="">Aktif</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div> --}}

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Created By</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ $pelatihanpeserta->created_by }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Updated By</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ $pelatihanpeserta->updated_by }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Created At</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ date('d-M-Y H:i:s A',strtotime($pelatihanpeserta->created_at)) }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Updated At</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="pelatihanpeserta_pelatihan" class="form-control"  value="{{ date('d-M-Y H:i:s A',strtotime($pelatihanpeserta->updated_at)) }}" disabled="">
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