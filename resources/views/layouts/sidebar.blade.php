<!-- ========== Left Sidebar Start ========== -->
<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Halaman Utama</li>
                <li>
                    <a href="{{ 'home' }}" class="waves-effect">
                        <i class="ti-home"></i> <span> Beranda </span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-key"></i> <span> Master <span
                                class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span> </a>
                    <ul class="submenu">
                        <li><a href="{{ route('master_item') }}">Item</a></li>
                        <li><a href="{{ route('master_supplier') }}">Supplier</a></li>
                        <li><a href="{{ route('user_index') }}">User</a></li>
                        <li><a href="{{ route('departemen_index') }}">Departemen</a></li>
                        <li><a href="{{ route('karyawan_index') }}">Karyawan</a></li>
                        <li><a href="{{ route('akun_index') }}">Akun</a></li>
                        <!-- <li><a href="{{ route('master_produk') }}">Produk</a></li> -->
                    </ul>
                </li>
                <li class="menu-title">Human Resource</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Karyawan
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris">Data Calon Karyawann</a></li>
                        <li><a href="charts-morris">Data Karyawan</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Absensi
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris">Jadwal Karyawan</a></li>
                        <li><a href="charts-morris">Sisa Cuti</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Payroll
                            <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris">Gaji</a></li>
                    </ul>
                </li>
                <li class="menu-title">Produksi</li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="ti-pie-chart"></i>
                        <span> Request Bahan Baku</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-pie-chart"></i>
                        <span> Laporan
                            <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i>
                            </span>
                        </span>
                    </a>
                    <ul class="submenu">
                        <li><a href="{{ route('downtime') }}">Downtime Mesin</a></li>
                        <li><a href="charts-morris">Harian Produksi</a></li>
                        <li><a href="charts-morris">Produk Cacat</a></li>
                        <li><a href="charts-morris">Serah Terima Produk</a></li>
                    </ul>
                </li>
                <li class="menu-title">Ware House</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Lebokno Dewe
                            Coy <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris">Lebokno Dewe Coy</a></li>
                    </ul>
                </li>
                <li class="menu-title">Purchasing</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-receipt"></i><span> Form<span
                                class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span> </span></a>
                    <ul class="submenu">
                        <li><a href="{{ route('spp') }}">Pembelian (SPP)</a></li>
                        <li><a href="{{ route('faktur') }}">Faktur Pembelian</a></li>
                    </ul>
                </li>
                <li class="menu-title">Penjualan</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Lebokno Dewe
                            Coy <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris">Lebokno Dewe Coy</a></li>
                    </ul>
                </li>
                <li class="menu-title">Finance</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-pie-chart"></i><span> Lebokno Dewe
                            Coy <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </span></a>
                    <ul class="submenu">
                        <li><a href="charts-morris">Laporan Produksi</a></li>
                        <li><a href="charts-chartist">Laporan HR</a></li>
                        <li><a href="charts-chartjs">Laporan Warehouse</a></li>
                        <li><a href="charts-flot">Laporan Keuangan</a></li>
                        <li><a href="charts-knob">Laporan Pembelian</a></li>
                        <li><a href="charts-echart">Laporan Penjualan</a></li>
                    </ul>
                </li>
                <li class="menu-title">Bantuan</li>
                <li>
                    <a href="{{ route('faq') }}" class="waves-effect"><i class="ti-calendar"></i><span> FAQ
                        </span></a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
        <div class="clearfix"></div>
    </div>
    <!-- Sidebar -left -->
</div>
<!-- Left Sidebar End -->