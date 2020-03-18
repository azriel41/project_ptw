@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Tambah Ruang Training</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('ruangtraining_store') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Ruang Training</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="ruangtraining_name" class="form-control" placeholder="Nama Ruang Training" required>
                                                </div>
                                            </div>

                                            <input type="hidden" name="created_by" class="form-control" placeholder="Nama Ruang Training" value="{{ Auth::user()->username }}">

                                            <div class="form-group row">
                                                <label for="example-text-input" class="col-sm-2 col-form-label">Kapasitas Ruang Training</label>
                                                <div class="col-sm-10">
                                                    <input type="number" name="ruangtraining_kapasitas" class="form-control" placeholder="
                                            Kapasitas Ruang Training" value="">
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                    <label class="col-lg-2 col-form-label">Site:</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="ruangtraining_site">
                                                            <option selected="" value="">- Pilih Site -</option>
                                                            @foreach ($site as $element)
                                                                <option value="{{ $element->site_name }}">{{ $element->site_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                            <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Status Ruang Training</label>
                                            <div class="col-sm-10">
                                                <select class="form-control" name="ruangtraining_status" required>
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
@endsection

@section('script-bottom')
<script>
    $(document).ready(function() {
         $('form').parsley();
    });
</script>
@endsection