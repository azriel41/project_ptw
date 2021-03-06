@extends('layouts.master')

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Data Invoice</h4>
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item"><a href="javascript: void(0);">Purchasing</a></li>
        <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
        <li class="breadcrumb-item active">Faktur/Invoice</li>
    </ol>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table id="datatable" class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead align="center">
                        <tr>
                            <th>No Invoice</th>
                            <th>Keterangan</th>
                            <th>Pengeluaran</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-success p-2">Diterima</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="{{ route('invoiceout') }}"><i class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-danger p-2">Ditolak</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info disabled" href="javascript:void(0);"><i
                                            class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-success p-2">Diterima</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="{{ route('invoiceout') }}"><i class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-danger p-2">Ditolak</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info disabled" href="javascript:void(0);"><i
                                            class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-success p-2">Diterima</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="{{ route('invoiceout') }}"><i class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-danger p-2">Ditolak</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info disabled" href="javascript:void(0);"><i
                                            class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-success p-2">Diterima</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="{{ route('invoiceout') }}"><i class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-danger p-2">Ditolak</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info disabled" href="javascript:void(0);"><i
                                            class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-success p-2">Diterima</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info" href="{{ route('invoiceout') }}"><i class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <td>#12345</td>
                            <td>GAK RO</td>
                            <td>Rp. 1.000</td>
                            <td align="center">
                                <span class="badge badge-danger p-2">Ditolak</span>
                            </td>
                            <td align="center">
                                <form action="#" method="POST">
                                    <a class="btn btn-info disabled" href="javascript:void(0);"><i
                                            class="fas fa-eye"></i>
                                        Show</a>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->
{{-- <div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <div class="row">
                    <div class="col-12">
                        <div class="invoice-title">
                            <h4 class="float-right font-size-16"><strong>Order # 12345</strong></h4>
                            <h3 class="mt-0">
                                <img src="assets/images/inaco.png" alt="logo" height="24">
                            </h3>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <address>
                                    <strong>Billed To:</strong><br>
                                    John Smith<br>
                                    1234 Main<br>
                                    Apt. 4B<br>
                                    Springfield, ST 54321
                                </address>
                            </div>
                            <div class="col-6 text-right">
                                <address>
                                    <strong>Shipped To:</strong><br>
                                    Kenny Rigdon<br>
                                    1234 Main<br>
                                    Apt. 4B<br>
                                    Springfield, ST 54321
                                </address>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 mt-4">
                                <address>
                                    <strong>Payment Method:</strong><br>
                                    Visa ending **** 4242<br>
                                    jsmith@email.com
                                </address>
                            </div>
                            <div class="col-6 mt-4 text-right">
                                <address>
                                    <strong>Order Date:</strong><br>
                                    January 16, 2019<br><br>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div>
                            <div class="p-2">
                                <h3 class="font-size-16"><strong>Order summary</strong></h3>
                            </div>
                            <div class="">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <td><strong>Item</strong></td>
                                                <td class="text-center"><strong>Price</strong></td>
                                                <td class="text-center"><strong>Quantity</strong>
                                                </td>
                                                <td class="text-right"><strong>Totals</strong></td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                                            <tr>
                                                <td>BS-200</td>
                                                <td class="text-center">$10.99</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$10.99</td>
                                            </tr>
                                            <tr>
                                                <td>BS-400</td>
                                                <td class="text-center">$20.00</td>
                                                <td class="text-center">3</td>
                                                <td class="text-right">$60.00</td>
                                            </tr>
                                            <tr>
                                                <td>BS-1000</td>
                                                <td class="text-center">$600.00</td>
                                                <td class="text-center">1</td>
                                                <td class="text-right">$600.00</td>
                                            </tr>
                                            <tr>
                                                <td class="thick-line"></td>
                                                <td class="thick-line"></td>
                                                <td class="thick-line text-center">
                                                    <strong>Subtotal</strong></td>
                                                <td class="thick-line text-right">$670.99</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>Shipping</strong></td>
                                                <td class="no-line text-right">$15</td>
                                            </tr>
                                            <tr>
                                                <td class="no-line"></td>
                                                <td class="no-line"></td>
                                                <td class="no-line text-center">
                                                    <strong>Total</strong></td>
                                                <td class="no-line text-right">
                                                    <h4 class="m-0">$685.99</h4>
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
                                        <a href="#" class="btn btn-primary waves-effect waves-light">Send</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div> <!-- end row -->

            </div>
        </div>
    </div> <!-- end col -->
</div> --}}
@endsection

@section('script')
<!-- Required datatable js -->
<script src="{{ URL::asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Buttons examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/jszip.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/buttons.colVis.min.js') }}"></script>
<!-- Responsive examples -->
<script src="{{ URL::asset('plugins/datatables/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('plugins/datatables/responsive.bootstrap4.min.js') }}"></script>

<!-- Datatable init js -->
<script src="{{ URL::asset('assets/pages/datatables.init.js') }}"></script>

@endsection