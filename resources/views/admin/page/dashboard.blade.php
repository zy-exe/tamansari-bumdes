@extends('admin.layout.index')

@section('content')
    <div class="container">
        <div class="page-inner">
            {{-- judul halaman --}}
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pb-3">
                <div>
                    <h1 class="fw-bold">Dashboard</h1>
                    <h5 class="op-7">Rekap bulan ... tahun 2024</h5>
                </div>
            </div>
            {{--  END judul halaman --}}
            {{-- card recap --}}
            <div class="row">
                {{-- recap pengunjung --}}
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Pengunjung</p>
                                        <h4 class="card-title">1.294</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END recap pengunjung --}}
                {{-- recap reservasi --}}
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="far fa-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Reservasi</p>
                                        <h4 class="card-title">1.303</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END recap reservasi --}}
                {{-- recap pendapatan --}}
                <div class="col-sm-6 col-md-4">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-success bubble-shadow-small">
                                        <i class="fas fa-luggage-cart"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Pendapatan</p>
                                        <h4 class="card-title">$ 1,345</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- END recap pendapatan --}}
                {{-- <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="far fa-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Order</p>
                                        <h4 class="card-title">576</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- END card recap --}}

            {{-- chart pengunjung --}}
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Statistik Pengunjung</div>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        Export
                                    </a>
                                    <a href="#" class="btn btn-label-info btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fa fa-print"></i>
                                        </span>
                                        Print
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="min-height: 200px">
                                <canvas id="statisticsChart"></canvas>
                            </div>
                            <div id="myChartLegend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-info card-round">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Pengunjung bulan ini</div>
                            </div>
                            <div class="card-category">September 2024</div>
                        </div>
                        <div class="card-body">
                            <div class="text-end">
                                <h1 class="text-muted fw-bold">1.294</h1>
                                <p>
                                    <span class="fw-bold">+5%</span>
                                    <span>dari bulan lalu</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END chart pengunjung --}}

            {{-- chart reservasi --}}
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Statistik Reservasi</div>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        Export
                                    </a>
                                    <a href="#" class="btn btn-label-info btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fa fa-print"></i>
                                        </span>
                                        Print
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="min-height: 200px">
                                <canvas id="statisticsChart"></canvas>
                            </div>
                            <div id="myChartLegend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-secondary card-round">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Reservasi bulan ini</div>
                            </div>
                            <div class="card-category">September 2024</div>
                        </div>
                        <div class="card-body">
                            <div class="text-end">
                                <h1 class="text-muted fw-bold">27</h1>
                                <p>
                                    <span class="fw-bold">+5%</span>
                                    <span>dari bulan lalu</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END chart reservasi --}}

            {{-- chart pendapatan --}}
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Statistik Pendapatan</div>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                                        <span class="btn-label">
                                            <i class="fa fa-pencil"></i>
                                        </span>
                                        Export
                                    </a>
                                    <a href="#" class="btn btn-label-info btn-round btn-sm">
                                        <span class="btn-label">
                                            <i class="fa fa-print"></i>
                                        </span>
                                        Print
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="chart-container" style="min-height: 200px">
                                <canvas id="statisticsChart"></canvas>
                            </div>
                            <div id="myChartLegend"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-success card-round">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Pendapatan bulan ini</div>
                            </div>
                            <div class="card-category">September 2024</div>
                        </div>
                        <div class="card-body">
                            <div class="text-end">
                                <h1 class="text-muted fw-bold">Rp 10.000.000</h1>
                                <p>
                                    <span class="fw-bold">+5%</span>
                                    <span>dari bulan lalu</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END chart pendapatan --}}

            {{-- lokasi user --}}
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-round">
                        <div class="card-header">
                            <div class="card-head-row card-tools-still-right">
                                <h4 class="card-title">Users Geolocation</h4>
                                <div class="card-tools">
                                    <button class="btn btn-icon btn-link btn-primary btn-xs">
                                        <span class="fa fa-angle-down"></span>
                                    </button>
                                    <button class="btn btn-icon btn-link btn-primary btn-xs btn-refresh-card">
                                        <span class="fa fa-sync-alt"></span>
                                    </button>
                                    <button class="btn btn-icon btn-link btn-primary btn-xs">
                                        <span class="fa fa-times"></span>
                                    </button>
                                </div>
                            </div>
                            <p class="card-category">
                                Map of the distribution of users around the world
                            </p>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="table-responsive table-hover table-sales">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="kaiadmin/img/flags/id.png" alt="indonesia" />
                                                        </div>
                                                    </td>
                                                    <td>Indonesia</td>
                                                    <td class="text-end">2.320</td>
                                                    <td class="text-end">42.18%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="kaiadmin/img/flags/us.png" alt="united states" />
                                                        </div>
                                                    </td>
                                                    <td>USA</td>
                                                    <td class="text-end">240</td>
                                                    <td class="text-end">4.36%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="kaiadmin/img/flags/au.png" alt="australia" />
                                                        </div>
                                                    </td>
                                                    <td>Australia</td>
                                                    <td class="text-end">119</td>
                                                    <td class="text-end">2.16%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="kaiadmin/img/flags/ru.png" alt="russia" />
                                                        </div>
                                                    </td>
                                                    <td>Russia</td>
                                                    <td class="text-end">1.081</td>
                                                    <td class="text-end">19.65%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="kaiadmin/img/flags/cn.png" alt="china" />
                                                        </div>
                                                    </td>
                                                    <td>China</td>
                                                    <td class="text-end">1.100</td>
                                                    <td class="text-end">20%</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="flag">
                                                            <img src="kaiadmin/img/flags/br.png" alt="brazil" />
                                                        </div>
                                                    </td>
                                                    <td>Brasil</td>
                                                    <td class="text-end">640</td>
                                                    <td class="text-end">11.63%</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mapcontainer">
                                        <div id="world-map" class="w-100" style="height: 300px"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END lokasi user --}}
        </div>
    </div>
@endsection
