@extends('admin.layout.index')

@section('content')
    <div class="container">
        <div class="page-inner">
            {{-- judul halaman --}}
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pb-3">
                <h1 class="fw-bold">List Pesanan</h1>
                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                    <i class="fa fa-plus"></i>
                    Pesanan baru
                </button>
            </div>
            {{--  END judul halaman --}}

            {{-- tabel pesanan --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <!-- Modal -->
                        <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header border-0">
                                        <h5 class="modal-title">
                                            <span class="fw-mediumbold"> Pesanan Baru</span>
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group form-group-default">
                                                        <label>Name</label>
                                                        <input id="addName" type="text" class="form-control"
                                                            placeholder="fill name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pe-0">
                                                    <div class="form-group form-group-default">
                                                        <label>Position</label>
                                                        <input id="addPosition" type="text" class="form-control"
                                                            placeholder="fill position">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group form-group-default">
                                                        <label>Office</label>
                                                        <input id="addOffice" type="text" class="form-control"
                                                            placeholder="fill office">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer border-0">
                                        <button type="button" id="addRowButton" class="btn btn-primary">
                                            Add
                                        </button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                                            Close
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive">
                            <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="myTable" class="table table-striped table-hover">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 10%">Kode</th>
                                                    <th class="text-center" style="width: 15%">Nama</th>
                                                    <th class="text-center" style="width: 10%">Paket</th>
                                                    <th class="text-center" style="width: 15%">Tanggal</th>
                                                    <th class="text-center" style="width: 25%">Status</th>
                                                    <th class="text-center" style="width: 25%">Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->guest }}</td>
                                                        <td>{{ $order->pack->name }}</td>
                                                        <td>{{ $order->date }}</td>
                                                        <td class="text-end">
                                                            @if ($order->status === 'Pending')
                                                                <a href="#" class="bg-warning p-2 rounded"
                                                                    style="color:black">Pending</a>
                                                            @elseif ($order->status === 'Dibayar')
                                                                <a href="#" class="bg-success p-2 rounded"
                                                                    style="color:black">Dibayar</a>
                                                            @else
                                                                <a href="#" class="bg-danger p-2 rounded"
                                                                    style="color:black">Dibatalkan</a>
                                                            @endif
                                                            <button type="button" class="btn btn-link btn-success">
                                                                <i class="fa-brands fa-whatsapp fa-2xl"></i>
                                                            </button>
                                                        </td>
                                                        <td class="text-center">
                                                            <button type="button" class="btn btn-link btn-info">
                                                                <i class="fa-solid fa-circle-exclamation fa-xl"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-link btn-secondary">
                                                                <i class="fa-solid fa-pen-to-square fa-lg"></i>
                                                            </button>
                                                            <button type="button" class="btn btn-link btn-danger"
                                                                onclick="confirmDelete('{{ $order->id }}', 'order')">
                                                                <i class="fa-solid fa-xmark fa-xl"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="add-row_info" role="status"
                                            aria-live="polite">Showing 1 to 5 of 10 entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="add-row_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="add-row_previous"><a href="#" aria-controls="add-row"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="add-row" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="add-row" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item next" id="add-row_next"><a
                                                        href="#" aria-controls="add-row" data-dt-idx="3"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- END tabel pesanan --}}
        </div>
    </div>
@endsection
