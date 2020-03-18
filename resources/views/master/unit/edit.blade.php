@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Edit Unit</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('unit_update',['id'=>$unit->unit_id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Unit</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="unit_name" class="form-control"  value=" {{ $unit->unit_name }}">
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status unit</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="unit_status" required>
                                                    @if ($unit->unit_status == 0)
                                                        <option value="0" selected="">Tidak Aktif</option>
                                                        <option value="1">Aktif</option>
                                                    @elseif ($unit->unit_status == 1)
                                                        <option value="0">Tidak Aktif</option>
                                                        <option value="1" selected="">Aktif</option>
                                                    @endif
                                                </select>
                                            </div>
                                        </div>
                                            
                                            <div class="form-group m-b-0">
                                                <div>
                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                                        Update
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
@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {
         $('form').parsley();
    });
</script>
@endsection