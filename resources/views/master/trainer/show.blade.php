@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Detail Trainer</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('trainer_update',['id'=>$trainer->trainer_id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}

                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Kategori Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="trainer_name" class="form-control"

                                                 @if ($trainer->trainer_category == 1)
                                                Value="Internal"
                                                @else
                                                Value="Eksternal"
                                                @endif

                                                  disabled="">
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Trainer</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="trainer_name" class="form-control" value="{{ $trainer->trainer_name }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Pelatihan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="trainer_pelatihan" class="form-control"  value="{{ $trainer->trainer_pelatihan }}" disabled="">
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status trainer</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="trainer_status" disabled="">
                                                    @if ($trainer->trainer_status == 0)
                                                        <option value="0" selected="">TIDAK AKTIF</option>
                                                        <option value="1">AKTIF</option>
                                                    @elseif ($trainer->trainer_status == 1)
                                                        <option value="0">TIDAK AKTIF</option>
                                                        <option value="1" selected="">AKTIF</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Created By</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="trainer_pelatihan" class="form-control"  value="{{ $trainer->created_by }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Updated By</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="trainer_pelatihan" class="form-control"  value="{{ $trainer->updated_by }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Created At</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="trainer_pelatihan" class="form-control"  value="{{ $trainer->created_at }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Updated At</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="trainer_pelatihan" class="form-control"  value="{{ $trainer->updated_at }}" disabled="">
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