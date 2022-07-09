@extends('layouts.app')

@section('title', 'TOPENSISAN')
@section('title.category', 'General')

@section('content')
<div class="row">
    <div class="col-md-12 box-col-12">
        <div class="email-right-aside bookmark-tabcontent">
            <div class="card email-body radius-left">
                <div class="ps-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                            aria-labelledby="pills-created-tab">
                            <div class="card mb-0">
                                <div class="card-body p-0">
                                    <div class="taskadd">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th>Jenis Dokumen</th>
                                                    <th></th>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>
                                                            Surat Perintah Tugas
                                                        </h6>
                                                    </td>
                                                    <td><a title="Buat Dokumen SPT" data-bs-toggle="modal"
                                                            data-bs-target="#modalContainer"
                                                            data-title="Buat Dokumen SPT"
                                                            href="{{ route('topensisan.spt.create') }}"><i class="me-2"
                                                                data-feather="plus"></i>Buat</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>
                                                            Kendali SPT
                                                        </h6>
                                                    </td>
                                                    <td><a title="Buat Dokumen Kendali SPT" data-bs-toggle="modal"
                                                            data-bs-target="#modalContainer"
                                                            data-title="Buat Dokumen Kendali SPT"
                                                            href="{{ route('topensisan.ks.create') }}"><i class="me-2"
                                                                data-feather="plus"></i>Buat</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>
                                                            Cost Sheet
                                                        </h6>
                                                    </td>
                                                    <td><a title="Buat Dokumen Cost Sheet" data-bs-toggle="modal"
                                                            data-bs-target="#modalContainer"
                                                            data-title="Buat Dokumen Cost Sheet"
                                                            href="{{ route('topensisan.cs.create') }}"><i class="me-2"
                                                                data-feather="plus"></i>Buat</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>
                                                            Kartu Penugasan
                                                        </h6>
                                                    </td>
                                                    <td><a title="Buat Dokumen Kartu Penugasan" data-bs-toggle="modal"
                                                            data-bs-target="#modalContainer"
                                                            data-title="Buat Dokumen Kartu Penugasan"
                                                            href="{{ route('topensisan.kp.create') }}"><i class="me-2"
                                                                data-feather="plus"></i>Buat</a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6>
                                                            Telaah Staf
                                                        </h6>
                                                    </td>
                                                    <td><a title="Buat Dokumen Telaah Staf" data-bs-toggle="modal"
                                                            data-bs-target="#modalContainer"
                                                            data-title="Buat Dokumen Telaah Staf"
                                                            href="{{ route('topensisan.ts.create') }}"><i class="me-2"
                                                                data-feather="plus"></i>Buat</a></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalContainer" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
    aria-labelledby="modalContainer" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Title</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                ...
            </div>
        </div>
    </div>
</div>
@endsection
