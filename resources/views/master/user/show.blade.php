@extends('layouts.master')

@section('css')
<!-- Dropzone css -->
<link href="{{ URL::asset('plugins/dropzone/dist/dropzone.css') }}" rel="stylesheet" type="text/css">
@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Detail User</h4>
</div>
@endsection

@section('content')
   
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">        
                                        <form method="POST" action="{{ route('user_update',['id'=>$user->id]) }}">
                                            {{ csrf_field() }}
                                            {{ method_field('POST') }}
                                        
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama User</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="user_name" class="form-control"  value="{{ $user->username }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Nama Lengkap</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="fullname" class="form-control"  value="{{ $user->fullname }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">NIK</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="nik" class="form-control"  value="{{ $user->nik }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="fullname" class="form-control"  value="{{ $user->email }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Lokasi</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="site" class="form-control"  value="{{ $user->site_name }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Direktorat</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="direktorat" class="form-control"  value="{{ $user->direktorat_name }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Departemen</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="departemen" class="form-control"  value="{{ $user->departemen_name }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Unit</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="unit" class="form-control"  value="{{ $user->unit_name }}" disabled="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Hak Akses</label>
                                            <div class="col-sm-10">

                                                <input type="text" name="unit" class="form-control"  value="@if ($user->hakakses == 1)
                                                admin
                                                @elseif ($user->hakakses == 2)
                                                manager
                                                @elseif ($user->hakakses == 3)
                                                Leader
                                                @elseif ($user->hakakses == 4)
                                                Helpdesk
                                                @elseif ($user->hakakses == 5)
                                                Coordinator
                                                @elseif ($user->hakakses == 6)
                                                User
                                                @elseif ($user->hakakses == 7)
                                                Registrasi
                                                @endif" disabled="">
                                                 {{-- <select class="form-control" name="hakakses">
                                                    <option value="{{ $user->hakakses }}" selected="">- Pilih Hak Akses -</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Manager</option>
                                                    <option value="3">Leader</option>
                                                    <option value="4">Helpdesk</option>
                                                    <option value="5">Coordinator</option>
                                                    <option value="6">User</option>
                                                    <option value="7">Registrasi</option>
                                                </select> --}}
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