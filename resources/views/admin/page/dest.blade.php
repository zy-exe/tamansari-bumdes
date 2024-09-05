@extends('admin.layout.index')

@section('content')
    <div class="container">
        <div class="page-inner">
            {{-- judul halaman --}}
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pb-3">
                <h1 class="fw-bold">Destinasi Wisata</h1>
                <button class="btn btn-primary btn-round ms-auto" data-bs-toggle="modal" data-bs-target="#addRowModal">
                    <i class="fa fa-plus"></i>
                    Destinasi wisata baru
                </button>
            </div>
            {{--  END judul halaman --}}

            {{-- tabel destinasi --}}
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="add-row" class="display table table-striped table-hover dataTable"
                                            role="grid" aria-describedby="add-row_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="add-row"
                                                        aria-sort="ascending"
                                                        aria-label="Name: activate to sort column descending"
                                                        style="width: 680px;">Nama</th>
                                                    <th class="sorting" tabindex="0" aria-controls="add-row"
                                                        aria-label="Action: activate to sort column ascending">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($destinations as $destination)
                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1 fw-bold">{{ $destination->name }}</td>
                                                        <td>
                                                            <div class="form-button-action">
                                                                <button type="button" data-bs-toggle="tooltip"
                                                                    title="" class="btn btn-link btn-primary btn-lg"
                                                                    data-original-title="Edit Task">
                                                                    <i class="fa fa-edit"></i>
                                                                </button>
                                                                <button type="button" data-bs-toggle="tooltip"
                                                                    title="" class="btn btn-link btn-danger"
                                                                    data-original-title="Remove">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                            </div>
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
            {{-- END tabel destinasi --}}
        </div>
    </div>
@endsection
