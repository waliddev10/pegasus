@extends('layouts.app')

@section('title', 'Beranda')
@section('title.category', 'General')

@section('content')
<div class="row">
    <a href="{{ route('data-user.index') }}" style="border-top: #2563eb 4px solid;"
        class="col-3 card mx-2 radius-left p-3 text-center">
        <img class="mx-auto my-2" src="{{ asset('assets/img/teamwork.png') }}" height="84" width="84" />
        <h5 class="my-2">Data Pegawai</h5>
        <span>Basis data realtime</span>
    </a>
    <a href="{{ route('peraturan.index') }}" style="border-top: #2563eb 4px solid;"
        class="col-3 card mx-2 radius-left p-3 text-center">
        <img class="mx-auto my-2" src="{{ asset('assets/img/documents.png') }}" height="84" width="84" />
        <h5 class="my-2">Kumpulan Peraturan</h5>
        <span>Peraturan terbaru terkait administrasi penugasan</span>
    </a>
    <a href="{{ route('konsep.index') }}" style="border-top: #2563eb 4px solid;"
        class="col-3 card mx-2 radius-left p-3 text-center">
        <img class="mx-auto my-2" src="{{ asset('assets/img/notes.png') }}" height="84" width="84" />
        <h5 class="my-2">Konsep Penugasan</h5>
        <span>Format konsep penugasan kosong</span>
    </a>
</div>
<div class="row">
    <a href="{{ route('dashboard.index') }}" style="border-top: #2563eb 4px solid;"
        class="col-3 card mx-2 radius-left p-3 text-center">
        <img class="mx-auto my-2" src="{{ asset('assets/img/book-stack.png') }}" height="84" width="84" />
        <h5 class="my-2">TOPENSISAN</h5>
        <span>Tool pembantu administrasi penugasan</span>
    </a>
    <a href="{{ route('dashboard.index') }}" style="border-top: #2563eb 4px solid;"
        class="col-3 card mx-2 radius-left p-3 text-center">
        <img class="mx-auto my-2" src="{{ asset('assets/img/timetable.png') }}" height="84" width="84" />
        <h5 class="my-2">Data Penugasan</h5>
        <span>Daftar penugasan bidang khusus</span>
    </a>
</div>
{{-- <div class="col-md-12 box-col-12">
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
                                                <td>
                                                    <h6 class="task_title_0">Cost Sheet
                                                    </h6>
                                                    <p class="project_name_0">Excel
                                                    </p>
                                                </td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Anggaran Waktu</h6>
                                                    <p class="project_name_0">Excel</p>
                                                </td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Kartu Penugasan</h6>
                                                    <p class="project_name_0">Excel</p>
                                                </td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Kendali SPT</h6>
                                                    <p class="project_name_0">Word</p>
                                                </td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
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
</div> --}}
{{-- <div class="col-md-12 box-col-12">
    <div class="email-right-aside bookmark-tabcontent">
        <div class="card email-body radius-left">
            <div class="ps-0">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                        aria-labelledby="pills-created-tab">
                        <div class="card mb-0">
                            <div class="card-header d-flex">
                                <h5 class="mb-0">Topensisan</h5>
                            </div>
                            <div class="card-body p-0">
                                <div class="taskadd">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <h6>Telaahan Staf
                                                    </h6>
                                                    <p>Generate Dokumen Telaahan Staf <span class="badge bg-blue"
                                                            style="background: blue;">Docx
                                                        </span>
                                                    </p>

                                                </td>
                                                <td><a href="#"><i data-feather="edit-3"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>SPT
                                                    </h6>
                                                    <p>Generate Dokumen SPT <span class="badge bg-blue"
                                                            style="background: blue;">Docx
                                                        </span>
                                                        </span>
                                                    </p>
                                                </td>
                                                <td><a href="#"><i data-feather="edit-3"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Kendali SPT
                                                    </h6>
                                                    <p>Generate Dokumen Kendali SPT <span class="badge bg-blue"
                                                            style="background: blue;">Docx
                                                        </span>
                                                    </p>
                                                </td>
                                                <td><a href="#"><i data-feather="edit-3"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Kartu Penugasan
                                                    </h6>
                                                    <p>Generate Dokumen Kartu Penugasan <span
                                                            class="badge bg-success">Excel
                                                        </span>
                                                    </p>
                                                </td>
                                                <td><a href="#"><i data-feather="edit-3"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Anggaran Waktu
                                                    </h6>
                                                    <p>Generate Dokumen Anggaran Waktu <span
                                                            class="badge bg-success">Excel
                                                        </span>
                                                    </p>
                                                </td>
                                                <td><a href="#"><i data-feather="edit-3"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6>Cost Sheet
                                                    </h6>
                                                    <p>Generate Dokumen Cost Sheet <span class="badge bg-success">Excel
                                                        </span>
                                                    </p>
                                                </td>
                                                <td><a href="#"><i data-feather="edit-3"></i></a></td>
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
</div> --}}
{{-- <div class="col-lg-6 xl-50 calendar-sec box-col-6">
    <div class="card gradient-primary o-hidden">
        <div class="card-body">
            <div class="default-datepicker">
                <div id="kalender_penugasan" class="datepicker-here" data-language="en"></div>
            </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span
                        class="dots dots1"></span><span class="dots dots2 dot-small"></span><span
                        class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span
                        class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span
                        class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span
                        class="dots dots9 dot-small">
                    </span></span></span>
        </div>
    </div>
</div>
<div class="col-lg-6 xl-50 box-col-6">
    <div id="list" class="row">
        <div class="card">
            <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i class="fa fa-check-circle"></i>
            </div>
            <div class="job-search">
                <div class="card-body">
                    <div class="media">
                        <img class="img-40 img-fluid m-r-20" src="http://siap.test/assets/images/job-search/1.jpg"
                            alt="">
                        <div class="media-body">
                            <h6 class="f-w-600">
                                <a href="javascript:void(0)">Pendampingan Manajemen Resiko</a>

                            </h6>
                            <p class="mb-0">
                                <strong>Dari:</strong> Kamis, 16 Juni 2022
                            </p>
                            <p class="mb-0">
                                <strong>Sampai:</strong> Kamis, 30 Juni 2022
                            </p>
                            <p class="mb-0">
                                <strong>SKPD:</strong> -
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i class="fa fa-check-circle"></i>
            </div>
            <div class="job-search">
                <div class="card-body">
                    <div class="media">
                        <img class="img-40 img-fluid m-r-20" src="http://siap.test/assets/images/job-search/1.jpg"
                            alt="">
                        <div class="media-body">
                            <h6 class="f-w-600">
                                <a href="javascript:void(0)">Penilaian Kinerja</a>

                            </h6>
                            <p class="mb-0">
                                <strong>Dari:</strong> Rabu, 15 Juni 2022
                            </p>
                            <p class="mb-0">
                                <strong>Sampai:</strong> Sabtu, 18 Juni 2022
                            </p>
                            <p class="mb-0">
                                <strong>SKPD:</strong> -
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12 box-col-12">
    <div class="email-right-aside bookmark-tabcontent">
        <div class="card email-body radius-left">
            <div class="ps-0">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="pills-created" role="tabpanel"
                        aria-labelledby="pills-created-tab">
                        <div class="card mb-0">
                            <div class="card-header d-flex">
                                <h5 class="mb-0">Database Peraturan</h5><a href="#"><i class="me-2"
                                        data-feather="plus"></i>Tambah</a>
                            </div>
                            <div class="card-body p-0">
                                <div class="taskadd">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Peraturan Menteri Keuangan Republik
                                                        Indonesia Nomor 113/PMK.05/2012
                                                    </h6>
                                                    <p class="project_name_0">Peraturan Menteri
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="task_desc_0">PERJALANAN DINAS DALAM NEGERI BAGI
                                                        PEJABAT
                                                        NEGARA,
                                                        PEGAWAI NEGERI, DAN PEGAWAI TIDAK TETAP</p>
                                                </td>
                                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a
                                                        href="#"><i data-feather="more-horizontal"></i></a></td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Keputusan Gubernur Kalimantan Timur No.
                                                        057/K.163/2022</h6>
                                                    <p class="project_name_0">Peraturan Gubernur</p>
                                                </td>
                                                <td>
                                                    <p class="task_desc_0">PENETAPAN PROGRAM KERJA PENGAWASAN
                                                        TAHUNAN INSPEKTORAT DAERAH PROVINSI KALIMANTAN TIMUR TAHUN
                                                        2022</p>
                                                </td>
                                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a
                                                        href="#"><i data-feather="more-horizontal"></i></a></td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Peraturan Gubernur Kalimantan Timur
                                                        Nomor 1 Tahun 2020</h6>
                                                    <p class="project_name_0">Peraturan Gubernur</p>
                                                </td>
                                                <td>
                                                    <p class="task_desc_0">PETUNJUK PELAKSANAAN PERJALANAN DINAS DI
                                                        LINGKUNGAN PEMERINTAH PROVINSI KALIMANTAN TIMUR</p>
                                                </td>
                                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a
                                                        href="#"><i data-feather="more-horizontal"></i></a></td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Peraturan Gubernur Kalimantan Timur
                                                        Nomor 34 Tahun 2020</h6>
                                                    <p class="project_name_0">Peraturan Gubernur</p>
                                                </td>
                                                <td>
                                                    <p class="task_desc_0">SUSUNAN ORGANISASI, TUGAS, FUNGSI, DAN
                                                        TATA KERJA INSPEKTORAT DAERAH PROVINSI KALIMANTAN TIMUR</p>
                                                </td>
                                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a
                                                        href="#"><i data-feather="more-horizontal"></i></a></td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Peraturan Gubernur Kalimantan Timur
                                                        Nomor 53 Tahun 2021</h6>
                                                    <p class="project_name_0">Peraturan Gubernur</p>
                                                </td>
                                                <td>
                                                    <p class="task_desc_0">PENETAPAN STANDAR HARGA SATUAN, STANDAR
                                                        SARANA DAN PRASARANA KERJA PEMERINTAH PROVINSI KALIMANTAN
                                                        TIMUR TAHUN 2022</p>
                                                </td>
                                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a
                                                        href="#"><i data-feather="more-horizontal"></i></a></td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <h6 class="task_title_0">Client meeting</h6>
                                                    <p class="project_name_0">Peraturan Presiden</p>
                                                </td>
                                                <td>
                                                    <p class="task_desc_0">Lorem Ipsum is simply dummy text of the
                                                        printing and typesetting industry. Lorem Ipsum has been</p>
                                                </td>
                                                <td><a class="me-2" href="#"><i data-feather="link"></i></a><a
                                                        href="#"><i data-feather="more-horizontal"></i></a></td>
                                                <td><a href="#"><i data-feather="download"></i></a></td>
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
</div> --}}
</div>
@endsection
