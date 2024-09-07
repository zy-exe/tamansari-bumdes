@extends('admin.layout.index')

@section('content')
    <div class="container">
        <div class="page-inner">
            {{-- judul halaman --}}
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pb-3">
                <h1 class="fw-bold">Paket Wisata</h1>
                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                    <i class="fa fa-plus"></i>
                    Paket wisata baru
                </button>
            </div>
            {{--  END judul halaman --}}

            {{-- tabel paket --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="myTable" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 35%">Nama</th>
                                                    <th class="text-center" style="width: 15%">Harga</th>
                                                    <th class="text-center" style="width: 15%">Min Pax</th>
                                                    <th class="text-center" style="width: 25%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($packages as $package)
                                                    <tr>
                                                        <td>{{ $package->name }}</td>
                                                        <td class="text-center">Rp
                                                            {{ number_format($package->price, 0, ',', '.') }}</td>
                                                        <td class="text-center">{{ $package->min_book }}</td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-link btn-info">
                                                                <i class="fa-solid fa-circle-exclamation fa-xl"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-link btn-secondary">
                                                                <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-link btn-danger"
                                                                onclick="confirmDelete('{{ $package->id }}', 'pack')">
                                                                <i class="fa-solid fa-xmark fa-xl"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END tabel paket --}}
        </div>
    </div>
@endsection
