@extends('layouts.app')

@section('title', 'Konsep Penugasan')
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
                                                    <th>#</th>
                                                    <th>Judul</th>
                                                    <th>Deskripsi</th>
                                                    <th>Pengunggah</th>
                                                    <th class="d-flex"><a title="Tambah Konsep Penugasan"
                                                            data-bs-toggle="modal" data-bs-target="#modalContainer"
                                                            data-title="Tambah Konsep Penugasan"
                                                            href="{{ route('konsep.create') }}"><i class="me-2"
                                                                data-feather="plus"></i>Tambah</a></th>
                                                </tr>
                                                @foreach($konsep as $item)
                                                <tr>
                                                    <td
                                                        style="min-width: 1% !important; max-width: 1% !important; width: 1% !important;">
                                                        <i class="fa
                                                        @if(\File::extension($item->file) == 'jpg' || \File::extension($item->file) == 'jpeg' || \File::extension($item->file) == 'png') fa-file-image-o txt-success @endif
                                                        @if(\File::extension($item->file) == 'xlsx' || \File::extension($item->file) == 'xls') fa-file-excel-o txt-success @endif
                                                        @if(\File::extension($item->file) == 'pdf') fa-file-pdf-o txt-secondary @endif
                                                        @if(\File::extension($item->file) == 'doc' || \File::extension($item->file) == 'docx') fa-file-word-o txt-linkedin @endif
                                                        "></i>
                                                    </td>
                                                    <td>
                                                        <h6 class="task_title_0">{{ $item->judul }}
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">{{ $item->deskripsi }}</p>
                                                    </td>
                                                    <td><a class="me-2" href="#"><i data-feather="user"></i></a>{{
                                                        $item->user->nama }}
                                                    </td>
                                                    <td><a href="{{ route('konsep.show', $item->id) }}"><i
                                                                data-feather="download"></i></a></td>
                                                </tr>
                                                @endforeach
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
