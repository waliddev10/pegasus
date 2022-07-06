@extends('layouts.app')

@section('title', 'Peraturan')
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
                                <div class="card-header d-flex">
                                    <h5 class="mb-0">Database Peraturan</h5><a title="Tambah Peraturan"
                                        data-bs-toggle="modal" data-bs-target="#modalContainer"
                                        data-title="Tambah Peraturan" href="{{ route('peraturan.create') }}"><i
                                            class="me-2" data-feather="plus"></i>Tambah</a>
                                </div>
                                <div class="card-body p-0">
                                    <div class="taskadd">
                                        <div class="table-responsive">
                                            <table class="table">
                                                @foreach($peraturan as $item)
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">{{ $item->deskripsi }} Nomor {{
                                                            $item->nomor }} Tahun {{ $item->tahun }}
                                                        </h6>
                                                        <p class="project_name_0">{{ $item->jenis }}
                                                        </p>
                                                    </td>
                                                    <td>
                                                        <p class="task_desc_0">{{ $item->judul }}</p>
                                                    </td>
                                                    <td><a class="me-2" href="#"><i data-feather="user"></i></a>{{
                                                        $item->user->nama }}
                                                    </td>
                                                    <td><a href="#"><i data-feather="download"></i></a></td>
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
