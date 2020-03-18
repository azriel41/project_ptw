@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Detail Site</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('site_update',['id'=>$site->site_id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                            <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Site</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="site_name" class="form-control"  value="{{ $site->site_name }}" disabled="">
                                            </div>
                                        </div>

                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Site</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" name="site_status" disabled="">
                                                    @if ($site->site_status == 0)
                                                        <option value="0" selected="">TIDAK AKTIF</option>
                                                        <option value="1">AKTIF</option>
                                                    @elseif ($site->site_status == 1)
                                                        <option value="0">TIDAK AKTIF</option>
                                                        <option value="1" selected="">AKTIF</option>
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