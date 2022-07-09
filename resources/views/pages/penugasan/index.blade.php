@extends('layouts.app')

@section('title', 'Data Penugasan')
@section('title.category', 'General')

@section('content')
<a class="btn bg-primary mb-3" title="Tambah Data Penugasan" data-bs-toggle="modal" data-bs-target="#modalContainer"
    data-title="Tambah Data Penugasan" href="{{ route('penugasan.create') }}">Tambah</a>
<div class="row">
    <div class="col-lg-6 xl-50 calendar-sec box-col-6">
        <div class="card gradient-primary o-hidden">
            <div class="card-body">
                <div class="default-datepicker">
                    <div id="kalender_penugasan" class="datepicker-here" data-language="en"></div>
                </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span
                            class="dots dots1"></span><span class="dots dots2 dot-small"></span><span
                            class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span
                            class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span
                            class="dots dots7 dot-small-semi"></span><span
                            class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                        </span></span></span>
            </div>
        </div>
    </div>
    <div class="col-md-6 box-col-6">
        @forelse($penugasan as $item)
        <div class="card">
            @if(\Carbon\Carbon::parse($item->tgl_mulai) <= \Carbon\Carbon::now() && \Carbon\Carbon::parse($item->
                tgl_selesai) <= \Carbon\Carbon::now()) <div
                    class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary">
                    <i class="fa fa-check-circle"></i></div>
        @elseif(\Carbon\Carbon::parse($item->tgl_mulai) <= \Carbon\Carbon::now() && \Carbon\Carbon::parse($item->
            tgl_selesai) >
            \Carbon\Carbon::now()) <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-warning">
                <i class="fa fa-clock-o"></i>
            </div>
            @endif

            <div class="job-search">
                <div class="card-body">
                    <div class="media">
                        <img class="img-40 img-fluid m-r-20" src="{{ asset('assets/images/job-search/1.jpg') }}" alt="">
                        <div class="media-body">
                            <h6 class="f-w-600">
                                <a href="javascript:void(0)">{{
                                    $item->judul }}</a>

                            </h6>
                            <small>{{ $item->keterangan }}</small>
                            <p class="mb-0">
                                <strong>Dari:</strong> {{
                                \Carbon\Carbon::parse($item->tgl_mulai)
                                ->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                            <p class="mb-0">
                                <strong>Sampai:</strong> {{
                                \Carbon\Carbon::parse($item->tgl_selesai)
                                ->isoFormat('dddd, D MMMM YYYY') }}
                            </p>
                            <p class="mb-0">
                                <strong>SKPD:</strong> {{
                                $item->skpd }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    @empty
    <div class="card">
        <div class="card-body">
            Tidak ada tugas bulan ini.
        </div>
    </div>
    @endforelse
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
