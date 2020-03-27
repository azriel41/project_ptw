@extends('layouts.master')

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Master Item</h4>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Purchasing</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Master</a></li>
        <li class="breadcrumb-item active">Item</li>
    </ol>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
            <div class="col-sm-10">
                <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
            <div class="col-sm-10">
                <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-url-input" class="col-sm-2 col-form-label">URL</label>
            <div class="col-sm-10">
                <input class="form-control" type="url" value="https://getbootstrap.com" id="example-url-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-url-input" class="col-sm-2 col-form-label">Date</label>
            <div class="col-sm-10">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-tel-input" class="col-sm-2 col-form-label">Telephone</label>
            <div class="col-sm-10">
                <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
            </div>
        </div>
        <div class="form-group row">
            <label for="example-number-input" class="col-sm-2 col-form-label">Number</label>
            <div class="col-sm-10">
                <input class="form-control" type="number" value="42" id="example-number-input">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Select</label>
            <div class="col-sm-10">
                <select class="form-control">
                    <option>Select</option>
                    <option>Large select</option>
                    <option>Small select</option>
                </select>
            </div>
        </div>
        <div class="form-group float-right">
            <div>
                <button type="submit" class="btn btn-primary waves-effect waves-light mr-1">
                    Submit
                </button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function(){
     $("#datepicker-autoclose").datepicker({
         format: 'dd/mm/yyyy',
         autoclose: true,         
     });
    });
</script>
@endsection