@extends('layouts.master')

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Buat Surat Permintaan Pembelian</h4>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Purchasing</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
        <li class="breadcrumb-item active">Pembelian (SPP)</li>
    </ol>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form class="outer-repeater">
            <div data-repeater-list="outer-group" class="outer">
                <div data-repeater-item="" class="outer">
                    <div class="form-group">
                        <label for="formname">No Surat Permintaan Pembelian</label>
                        <input type="text" class="form-control" id="formname" value="SPP-200406/0003" disabled>
                    </div>

                    <div class="form-group">
                        <label for="formemail">Department</label>
                        <select class="form-control">
                            <option>DEPARTMENT HUMAN RESOURCE</option>
                            <option>DEPARTMENT PRODUKSI</option>
                            <option>DEPARTMENT WAREHOUSE</option>
                            <option>DEPARTMENT PENJUALAN</option>
                            <option>DEPARTMENT FINANCE</option>
                            <option>NON-DEPARTMENT</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formemail">Supplier</label>
                        <select class="form-control">
                            <option>PT. Gramedia</option>
                            <option>Google LLC</option>
                            <option>PT. GOJEK</option>
                            <option>PT. Tokopedia</option>
                            <option>PT. Bukalapak</option>
                            <option>PT. Mencari Waifu Yang Hilang</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="formname">Tanggal</label>
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="dd/mm/yyyy" id="datepicker-autoclose">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="mdi mdi-calendar"></i></span>
                            </div>
                        </div>
                    </div>

                    <div class="inner-repeater mb-4">
                        <div data-repeater-list="inner-group" class="inner form-group">
                            <label>Barang</label>
                            <div data-repeater-item="" class="inner mb-3 row">

                                <div class="col-md-10 col-8 mb-2">
                                    <select class="form-control">
                                        <option>Alat Tulis Kantor</option>
                                        <option>Kertas A4/RIM</option>
                                        <option>Binder</option>
                                        <option>Bolpoin</option>
                                        <option>Tinta Printer</option>
                                        <option>Mouse</option>
                                    </select>
                                </div>

                                <div class="col-md-10 col-8">
                                    <input class="form-control" type="number" value="0" id="example-number-input">
                                </div>
                                <div class="col-md-2 col-4">
                                    <input data-repeater-delete="" type="button" class="btn btn-primary btn-block inner"
                                        value="Hapus">
                                </div>
                            </div>
                        </div>
                        <input data-repeater-create="" type="button" class="btn btn-success inner"
                            value="Tambah Barang">
                    </div>

                    <div class="form-group">
                        <label for="formmessage">Keterangan</label>
                        <textarea id="formmessage" class="form-control" rows="3"></textarea>
                    </div>
                    <div class="form-group m-b-0">
                        <div>
                            <button type="submit" class="btn btn-primary waves-effect waves-light"><i
                                    class="fas fa-save"></i>
                                Simpan
                            </button>
                            <a href="{{ route('spp') }}" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                                Batal</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(function(){
     $("#datepicker-autoclose").datepicker({
         format: 'dd/mm/yyyy',
         autoclose: true,   
         orientation: "top auto"      
     });
    });
</script>
<script src="{{ URL::asset('plugins/jquery-repeater/jquery.repeater.min.js') }}"></script>
<script src="{{ URL::asset('assets/pages/form-repeater.int.js') }}"></script>
@endsection