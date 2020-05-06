@extends('layouts.master')

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Surat Permintaan Pembelian</h4>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Purchasing</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Form</a></li>
        <li class="breadcrumb-item"><a href="{{ route('spp') }}">Pembelian (SPP)</a></li>
        <li class="breadcrumb-item active">Cetak SPP</li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <div class="invoice-title">
                            <h4 class="float-right font-size-16"><strong>SPP-200406/0001</strong></h4>
                            <h3 class="mt-0">
                                <img src="assets/images/inaco.png" alt="logo" height="24">
                            </h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <address>
                                    <strong>Supplier:</strong><br>
                                    PT. GRAMEDIA
                                </address>
                            </div>
                            <div class="col-6 text-right">
                                <address>
                                    <strong>Untuk:</strong><br>
                                    NON-DEPARTMENT
                                </address>
                            </div>
                        </div>
                        <div class="float-left">
                            <address>
                                <strong>Tanggal Pembelian:</strong><br>
                                04 April 2020
                            </address>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div>
                            <div class="p-2">
                                <h3 class="font-size-16"><strong>Ringkasan Pembelian</strong></h3>
                            </div>
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td><strong>Item</strong></td>
                                                <td class="text-center"><strong>Quantity</strong>
                                                </td>
                                                <td class="text-center"><strong>Satuan</strong>
                                                </td>
                                                <td class="text-center"><strong>Harga</strong></td>
                                                <td class="text-right"><strong>Total</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            <tr>
                                                <td>Kertas A4</td>
                                                <td class="text-center">1</td>
                                                <td class="text-center">RIM</td>
                                                <td class="text-center">Rp. 15.000</td>
                                                <td class="text-right">Rp. 15.000</td>
                                            </tr>
                                            <tr>
                                                <td>Binder Kertas</td>
                                                <td class="text-center">2</td>
                                                <td class="text-center">PCS</td>
                                                <td class="text-center">Rp. 30.000</td>
                                                <td class="text-right">Rp. 60.000</td>
                                            </tr>
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center">
                                                    <strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">Rp. 75.000</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>DPP</strong></td>
                                                <td class="no-line text-right">Rp. 75.000</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>PPN %</strong></td>
                                                <td class="no-line text-right">Exclude 10%</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>PPN</strong></td>
                                                <td class="no-line text-right">Rp. 7.500</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>Total</strong></td>
                                                <td class="no-line text-right">
                                                    <h4 class="m-0">Rp. 82.500</h4>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="d-print-none">
                                    <div class="float-right">
                                        <a href="javascript:window.print()"
                                            class="btn btn-success waves-effect waves-light"><i
                                                class="fa fa-print"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- end row -->

            </div>
        </div>
    </div> <!-- end col -->
</div>
@endsection