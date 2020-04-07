@extends('layouts.master')

@section('css')
<!--Chartist Chart CSS -->
<link rel="stylesheet" href="{{ URL::asset('plugins/chartist/css/chartist.min.css') }}">
<link href="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.css') }}" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
{{-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css"> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script> --}}


@endsection

@section('breadcrumb')
<div class="col-sm-6">
    <h4 class="page-title">Yang Baca Gay</h4>
</div>
@endsection

@section('content')

<div class="card">
    <div class="card-body">
        <h4 class="card-title">Halaman Utama</h4>
        <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="{{ URL::asset('assets/images/IMG_7245.jpg') }}" alt="..." class="d-block img-fluid">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Ini merupakan tempat yang menjadi saksi bisu antara Verdy dan Deny yang melakukan hubungan
                            terlarang sesama laki-laki</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/jamed1.jpeg') }}" alt="..."
                        class="d-block img-fluid mx-auto">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jamed Top Global Gay</h5>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ URL::asset('assets/images/jamed2.jpeg') }}" alt="..."
                        class="d-block img-fluid mx-auto">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Jamed Ding Ding Pak Ding Ding</h5>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaption" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Kembali</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaption" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Lanjut</span>
            </a>
        </div>
    </div>
</div>
{{-- <div class="row">
    <div class="col-xl-3 col-md-6">
        <div class="card mini-stat bg-primary text-white">
            <div class="card-body">
                <div class="mb-4">
                    <div class="float-left mini-stat-img mr-4">
                        <img src="{{ URL::asset('assets/images/services-icon/g.png') }}" alt="">
</div>
<h5 class="font-16 text-uppercase mt-0 text-white-50">GEMPOL</h5>
<h4 class="font-500">297 Peserta </h4>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card mini-stat bg-primary text-white">
        <div class="card-body">
            <div class="mb-4">
                <div class="float-left mini-stat-img mr-4">
                    <img src="{{ URL::asset('assets/images/services-icon/j.png') }}" alt="">
                </div>
                <h5 class="font-16 text-uppercase mt-0 text-white-50">JAKARTA</h5>
                <h4 class="font-500">170 Peserta</h4>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card mini-stat bg-primary text-white">
        <div class="card-body">
            <div class="mb-4">
                <div class="float-left mini-stat-img mr-4">
                    <img src="{{ URL::asset('assets/images/services-icon/k.png') }}" alt="">
                </div>
                <h5 class="font-16 text-uppercase mt-0 text-white-50">KEDIRI</h5>
                <h4 class="font-500">489 Peserta</h4>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6">
    <div class="card mini-stat bg-primary text-white">
        <div class="card-body">
            <div class="mb-4">
                <div class="float-left mini-stat-img mr-4">
                    <img src="{{ URL::asset('assets/images/services-icon/s.png') }}" alt="">
                </div>
                <h5 class="font-16 text-uppercase mt-0 text-white-50">SURABAYA</h5>
                <h4 class="font-500">223 Peserta</h4>
            </div>
        </div>
    </div>
</div>
</div>
<!-- end row -->

<div class="row">
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body">
                <h4 class="mt-0 header-title mb-5">Detail Pelatihan</h4>
                <div class="row">
                    <div class="col-lg-12">
                        <div>
                            <canvas id="line-chart" width="400" height="100"></canvas>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end card -->
    </div> --}}
    @endsection

    @section('script')
    {{-- <!--Chartist Chart-->
    <script src="{{ URL::asset('plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ URL::asset('plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- peity JS -->
    <script src="{{ URL::asset('plugins/peity-chart/jquery.peity.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/dashboard.js') }}"></script>
    <script src="{{ URL::asset('plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
    <script src="{{ URL::asset('assets/pages/sweet-alert.init.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
    <script type="text/javascript">
        new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ["Pelatihan Windows 10", "Pelatihan Autodesk"],
    datasets: [{ 
        data: [297,23],
        label: "Gempol",
        borderColor: "#3e95cd",
        fill: true
      }, { 
        data: [170,0],
        label: "Jakarta",
        borderColor: "#8e5ea2",
        fill: true
      }, { 
        data: [489,45],
        label: "Kediri",
        borderColor: "#3cba9f",
        fill: true
      }, { 
        data: [223,0],
        label: "Surabaya",
        borderColor: "#e8c3b9",
        fill: true
      }, 
    ]
  },
  options: {
    title: {
      display: false,
      text: 'World population per region (in millions)'
    }
  }
});
    </script> --}}
    @endsection