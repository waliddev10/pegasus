@extends('layouts.app')

@section('title', 'Beranda')

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
                                {{-- <div class="card-header d-flex">
                                    <h5 class="mb-0">Konsep Penugasan</h5>
                                </div> --}}
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
                                                {{-- <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Peraturan Gubernur Kalimantan Timur
                                                            Nomor 53 Tahun 2021</h6>
                                                        <p class="project_name_0">Peraturan Gubernur</p>
                                                    </td>
                                                    <td><a href="#"><i data-feather="download"></i></a></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h6 class="task_title_0">Client meeting</h6>
                                                        <p class="project_name_0">Peraturan Presiden</p>
                                                    </td>
                                                    <td><a href="#"><i data-feather="download"></i></a></td>
                                                </tr> --}}
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
                                                        <p>Generate Dokumen Cost Sheet <span
                                                                class="badge bg-success">Excel
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
                            class="dots dots7 dot-small-semi"></span><span
                            class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">
                        </span></span></span>
            </div>
        </div>
    </div>
    <div class="col-lg-6 xl-50 box-col-6">
        <div id="list" class="row">
            <div class="card">
                <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i
                        class="fa fa-check-circle"></i></div>
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
                <div class="ribbon ribbon-bookmark ribbon-vertical-left ribbon-primary"><i
                        class="fa fa-check-circle"></i></div>
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
    </div>
    <div class="col-md-12 box-col-12">
        <div class="email-right-aside bookmark-tabcontent contacts-tabs">
            <div class="card email-body radius-left">
                <div class="ps-0">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-personal" role="tabpanel"
                            aria-labelledby="pills-personal-tab">
                            <div class="card mb-0">
                                <div class="card-body p-0">
                                    <div class="row list-persons" id="addcon">
                                        <div class="col-xl-4 xl-50 col-md-5">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                                aria-orientation="vertical"><a class="contact-tab-0 nav-link active"
                                                    id="v-pills-user-tab" data-bs-toggle="pill" onclick="activeDiv(0)"
                                                    href="#v-pills-user" role="tab" aria-controls="v-pills-user"
                                                    aria-selected="true">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6>
                                                                <span>Dr. H. M Irfan Prananta, SE, MM</span>
                                                            </h6>
                                                            <p>Inspektur</p>
                                                        </div>
                                                    </div>
                                                </a><a class="contact-tab-1 nav-link" id="v-pills-profile-tab"
                                                    data-bs-toggle="pill" onclick="activeDiv(1)" href="#v-pills-profile"
                                                    role="tab" aria-controls="v-pills-profile" aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_1"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6>
                                                                <span>Adji Yudhistira, SE, M.Si</span>
                                                            </h6>
                                                            <p>Sekretaris</p>
                                                        </div>
                                                    </div>
                                                </a><a class="contact-tab-2 nav-link" id="v-pills-messages-tab"
                                                    data-bs-toggle="pill" onclick="activeDiv(2)"
                                                    href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_2"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6>
                                                                <span>Hj. Aulia Rina Novita
                                                                </span>
                                                            </h6>
                                                            <p>Kasubbag Keuangan
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a><a class="contact-tab-3 nav-link" id="v-pills-settings-tab"
                                                    data-bs-toggle="pill" onclick="activeDiv(3)"
                                                    href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_3"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6>
                                                                <span>Edi Santoso, S.P.

                                                                </span>
                                                            </h6>
                                                            <p>Irban Bidang Khusus

                                                            </p>
                                                        </div>
                                                    </div>
                                                </a><a class="contact-tab-4 nav-link" id="v-pills-contact1-tab"
                                                    data-bs-toggle="pill" onclick="activeDiv(4)"
                                                    href="#v-pills-contact1" role="tab" aria-controls="v-pills-settings"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_4"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6>
                                                                <span>Hasbi, S.T.
                                                                </span>
                                                            </h6>
                                                            <p>Auditor Muda
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a><a class="contact-tab-5 nav-link" id="v-pills-contact8-tab"
                                                    data-bs-toggle="pill" onclick="activeDiv(5)"
                                                    href="#v-pills-contact2" role="tab" aria-controls="v-pills-settings"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_5"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6>
                                                                <span>Sri Hendrawati S.E.

                                                                </span>
                                                            </h6>
                                                            <p>Auditor Muda
                                                            </p>
                                                        </div>
                                                    </div>
                                                </a><a class="contact-tab-6 nav-link" id="v-pills-contact3-tab"
                                                    data-bs-toggle="pill" onclick="activeDiv(6)"
                                                    href="#v-pills-contact3" role="tab" aria-controls="v-pills-settings"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_6"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6> <span class="first_name_6">Brock </span><span
                                                                    class="last_name_6">Lee</span></h6>
                                                            <p class="email_add_6">lee@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-xl-8 xl-50 col-md-7">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                <div class="tab-pane contact-tab-0 tab-content-child fade show active"
                                                    id="v-pills-user" role="tabpanel"
                                                    aria-labelledby="v-pills-user-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle"
                                                                src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,0)">
                                                            <div class="media-body mt-0">
                                                                <h5><span>Dr. H.
                                                                        M Irfan Prananta, SE, MM</span></h5>
                                                                <p class="email_add_0">Inspektur</p>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">Data Pegawai</h6>
                                                            <ul>
                                                                <li>NIP <span class="font-primary">19740818 199703 1
                                                                        006</span>
                                                                </li>
                                                                <li>Pangkat <span class="font-primary">Pembina Utama
                                                                        Madya </span>
                                                                </li>
                                                                <li>Golongan <span class="font-primary">IV/d
                                                                    </span>
                                                                </li>
                                                                <li>Username <span
                                                                        class="font-primary">197408181997031006</span>
                                                                </li>
                                                                <li>Role <span class="font-primary">User</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane contact-tab-1 tab-content-child fade"
                                                    id="v-pills-profile" role="tabpanel"
                                                    aria-labelledby="v-pills-profile-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_1"
                                                                src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,1)">
                                                            <div class="media-body mt-0">
                                                                <h5><span class="first_name_1">Comeren </span><span
                                                                        class="last_name_1">Diaz</span></h5>
                                                                <p class="email_add_1">comeren@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="editContact(1)">Edit</a>
                                                                    </li>
                                                                    <li><a href="#"
                                                                            onclick="deleteContact(1)">Delete</a></li>
                                                                    <li><a href="#" onclick="history(1)">History</a>
                                                                    </li>
                                                                    <li><a href="#" onclick="printContact(1)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">General</h6>
                                                            <ul>
                                                                <li>Name <span
                                                                        class="font-primary first_name_1">Comeren</span>
                                                                </li>
                                                                <li>Gender <span class="font-primary">Female</span></li>
                                                                <li>Birthday<span class="font-primary"> <span
                                                                            class="birth_day_1">7</span><span
                                                                            class="birth_month_1 ms-1">Feb</span><span
                                                                            class="birth_year_1 ms-1">1995</span></span>
                                                                </li>
                                                                <li>Personality<span
                                                                        class="font-primary personality_1">Cool</span>
                                                                </li>
                                                                <li>City<span class="font-primary city_1">Delhi</span>
                                                                </li>
                                                                <li>Mobile No<span class="font-primary mobile_num_1">+0
                                                                        1800 55812</span></li>
                                                                <li>Email Address <span
                                                                        class="font-primary email_add_1">comeren@gmail.com</span>
                                                                </li>
                                                                <li>Website<span
                                                                        class="font-primary url_add_1">www.cometest@.com</span>
                                                                </li>
                                                                <li>Interest<span
                                                                        class="font-primary interest_1">sports</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane contact-tab-2 tab-content-child fade"
                                                    id="v-pills-messages" role="tabpanel"
                                                    aria-labelledby="v-pills-messages-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_2"
                                                                src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,2)">
                                                            <div class="media-body mt-0">
                                                                <h5> <span class="first_name_2">Issa </span><span
                                                                        class="last_name_2">Bell</span></h5>
                                                                <p class="email_add_2">issabell@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="editContact(2)">Edit</a>
                                                                    </li>
                                                                    <li><a href="#"
                                                                            onclick="deleteContact(2)">Delete</a></li>
                                                                    <li><a href="#" onclick="history(2)">History</a>
                                                                    </li>
                                                                    <li><a href="#" onclick="printContact(2)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">General</h6>
                                                            <ul>
                                                                <li>Name <span
                                                                        class="font-primary first_name_2">Issa</span>
                                                                </li>
                                                                <li>Gender <span class="font-primary">Male</span></li>
                                                                <li>Birthday<span class="font-primary"> <span
                                                                            class="birth_day_2">20</span><span
                                                                            class="birth_month_2 ms-1">Jul</span><span
                                                                            class="birth_year_2 ms-1">1993</span></span>
                                                                </li>
                                                                <li>Personality<span
                                                                        class="font-primary personality_2">Cool</span>
                                                                </li>
                                                                <li>City<span class="font-primary city_2">Mumbai</span>
                                                                </li>
                                                                <li>Mobile No<span class="font-primary mobile_num_2">+0
                                                                        1800 87412</span></li>
                                                                <li>Email Address <span
                                                                        class="font-primary email_add_2">issabell@gmail.com</span>
                                                                </li>
                                                                <li>Website<span
                                                                        class="font-primary url_add_2">www.belltest@.com</span>
                                                                </li>
                                                                <li>Interest<span
                                                                        class="font-primary interest_2">cooking</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane contact-tab-3 tab-content-child fade"
                                                    id="v-pills-settings" role="tabpanel"
                                                    aria-labelledby="v-pills-settings-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_3"
                                                                src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,3)">
                                                            <div class="media-body mt-0">
                                                                <h5> <span class="first_name_3">Andew </span><span
                                                                        class="last_name_3">Jon</span></h5>
                                                                <p class="email_add_3">andewjon@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="editContact(3)">Edit</a>
                                                                    </li>
                                                                    <li><a href="#"
                                                                            onclick="deleteContact(3)">Delete</a></li>
                                                                    <li><a href="#" onclick="history(3)">History</a>
                                                                    </li>
                                                                    <li><a href="#" onclick="printContact(3)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">General</h6>
                                                            <ul>
                                                                <li>Name <span
                                                                        class="font-primary first_name_3">Andew</span>
                                                                </li>
                                                                <li>Gender <span class="font-primary">Male</span></li>
                                                                <li>Birthday<span class="font-primary"> <span
                                                                            class="birth_day_3">25</span><span
                                                                            class="birth_month_3 ms-1">Aug</span><span
                                                                            class="birth_year_3 ms-1">1996</span></span>
                                                                </li>
                                                                <li>Personality<span
                                                                        class="font-primary personality_3">Cool</span>
                                                                </li>
                                                                <li>City<span class="font-primary city_3">Amreli</span>
                                                                </li>
                                                                <li>Mobile No<span class="font-primary mobile_num_3">+0
                                                                        1800 79877</span></li>
                                                                <li>Email Address <span
                                                                        class="font-primary email_add_3">andewjon@gmail.com</span>
                                                                </li>
                                                                <li>Website<span
                                                                        class="font-primary url_add_3">www.test@.com</span>
                                                                </li>
                                                                <li>Interest<span
                                                                        class="font-primary interest_3">photography</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane contact-tab-4 tab-content-child fade"
                                                    id="v-pills-contact1" role="tabpanel"
                                                    aria-labelledby="v-pills-contact1-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_4"
                                                                src="../assets/images/user/5.jpg" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,4)">
                                                            <div class="media-body mt-0">
                                                                <h5> <span class="first_name_4">Jason </span><span
                                                                        class="last_name_4">Borne</span></h5>
                                                                <p class="email_add_4">jasonb@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="editContact(4)">Edit</a>
                                                                    </li>
                                                                    <li><a href="#"
                                                                            onclick="deleteContact(4)">Delete</a></li>
                                                                    <li><a href="#" onclick="history(4)">History</a>
                                                                    </li>
                                                                    <li><a href="#" onclick="printContact(4)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">General</h6>
                                                            <ul>
                                                                <li>Name <span
                                                                        class="font-primary first_name_4">Jason</span>
                                                                </li>
                                                                <li>Gender <span class="font-primary">Male</span></li>
                                                                <li>Birthday<span class="font-primary"> <span
                                                                            class="birth_day_4">30</span><span
                                                                            class="birth_month_4 ms-1">Oct</span><span
                                                                            class="birth_year_4 ms-1">1992</span></span>
                                                                </li>
                                                                <li>Personality<span
                                                                        class="font-primary personality_4">Cool</span>
                                                                </li>
                                                                <li>City<span class="font-primary city_4">Delhi</span>
                                                                </li>
                                                                <li>Mobile No<span class="font-primary mobile_num_4">+0
                                                                        1800 11547</span></li>
                                                                <li>Email Address <span
                                                                        class="font-primary email_add_4">jasonb@gmail.com</span>
                                                                </li>
                                                                <li>Website<span
                                                                        class="font-primary url_add_4">www.jason@.com</span>
                                                                </li>
                                                                <li>Interest<span
                                                                        class="font-primary interest_4">photography</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane contact-tab-5 tab-content-child fade"
                                                    id="v-pills-contact8" role="tabpanel"
                                                    aria-labelledby="v-pills-contact1-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_5"
                                                                src="../assets/images/avtar/11.jpg" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,5)">
                                                            <div class="media-body mt-0">
                                                                <h5> <span class="first_name_5">Monty </span><span
                                                                        class="last_name_5">Carlo</span></h5>
                                                                <p class="email_add_5">monty@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="editContact(5)">Edit</a>
                                                                    </li>
                                                                    <li><a href="#"
                                                                            onclick="deleteContact(5)">Delete</a></li>
                                                                    <li><a href="#" onclick="history(5)">History</a>
                                                                    </li>
                                                                    <li><a href="#" onclick="printContact(5)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">General</h6>
                                                            <ul>
                                                                <li>Name <span
                                                                        class="font-primary first_name_5">Monty</span>
                                                                </li>
                                                                <li>Gender <span class="font-primary">Male</span></li>
                                                                <li>Birthday<span class="font-primary"> <span
                                                                            class="birth_day_5">12</span><span
                                                                            class="birth_month_5 ms-1">Nov</span><span
                                                                            class="birth_year_5 ms-1">1994</span></span>
                                                                </li>
                                                                <li>Personality<span
                                                                        class="font-primary personality_5">Cool</span>
                                                                </li>
                                                                <li>City<span class="font-primary city_5">Amreli</span>
                                                                </li>
                                                                <li>Mobile No<span class="font-primary mobile_num_5">+0
                                                                        1800 87944</span></li>
                                                                <li>Email Address <span
                                                                        class="font-primary email_add_5">monty@gmail.com</span>
                                                                </li>
                                                                <li>Website<span
                                                                        class="font-primary url_add_5">www.mon@.com</span>
                                                                </li>
                                                                <li>Interest<span
                                                                        class="font-primary interest_5">sports</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane contact-tab-6 tab-content-child fade"
                                                    id="v-pills-contact9" role="tabpanel"
                                                    aria-labelledby="v-pills-contact8-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_6"
                                                                src="../assets/images/avtar/16.jpg" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,6)">
                                                            <div class="media-body mt-0">
                                                                <h5> <span class="first_name_6">Brock </span><span
                                                                        class="last_name_6">Lee</span></h5>
                                                                <p class="email_add_6">lee@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="editContact(6)">Edit</a>
                                                                    </li>
                                                                    <li><a href="#"
                                                                            onclick="deleteContact(6)">Delete</a></li>
                                                                    <li><a href="#" onclick="history(6)">History</a>
                                                                    </li>
                                                                    <li><a href="#" onclick="printContact(6)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">General</h6>
                                                            <ul>
                                                                <li>Name <span
                                                                        class="font-primary first_name_6">Brock</span>
                                                                </li>
                                                                <li>Gender <span class="font-primary">Male</span></li>
                                                                <li>Birthday<span class="font-primary"> <span
                                                                            class="birth_day_6">8</span><span
                                                                            class="birth_month_6 ms-1">Dec</span><span
                                                                            class="birth_year_6 ms-1">1992</span></span>
                                                                </li>
                                                                <li>Personality<span
                                                                        class="font-primary personality_6">Cool</span>
                                                                </li>
                                                                <li>City<span
                                                                        class="font-primary city_6">Ahemdabad</span>
                                                                </li>
                                                                <li>Mobile No<span class="font-primary mobile_num_6">+0
                                                                        1800 58712</span></li>
                                                                <li>Email Address <span
                                                                        class="font-primary email_add_6">lee@gmail.com</span>
                                                                </li>
                                                                <li>Website<span
                                                                        class="font-primary url_add_6">www.lee.com</span>
                                                                </li>
                                                                <li>Interest<span
                                                                        class="font-primary interest_6">photography
                                                                    </span></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="fade tab-pane" id="pills-organization" role="tabpanel"
                            aria-labelledby="pills-organization">
                            <div class="card mb-0">
                                <div class="card-header d-flex">
                                    <h5>Organization</h5><span class="f-14 pull-right mt-0">10 Contacts</span>
                                </div>
                                <div class="card-body p-0">
                                    <div class="row list-persons">
                                        <div class="col-xl-4 xl-50 col-md-5">
                                            <div class="nav flex-column nav-pills" id="v-pills-tab1" role="tablist"
                                                aria-orientation="vertical"><a class="nav-link active"
                                                    id="v-pills-iduser-tab" data-bs-toggle="pill" href="#v-pills-iduser"
                                                    role="tab" aria-controls="v-pills-iduser" aria-selected="true">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle"
                                                            src="../assets/images/user/user.png" alt="">
                                                        <div class="media-body">
                                                            <h6>Mark jecno</h6>
                                                            <p>markjecno@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </a><a class="nav-link" id="v-pills-iduser1-tab" data-bs-toggle="pill"
                                                    href="#v-pills-iduser1" role="tab" aria-controls="v-pills-iduser1"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle"
                                                            src="../assets/images/user/3.jpg" alt="">
                                                        <div class="media-body">
                                                            <h6>Jason Borne</h6>
                                                            <p>jasonb@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </a><a class="nav-link" id="v-pills-iduser2-tab" data-bs-toggle="pill"
                                                    href="#v-pills-iduser2" role="tab" aria-controls="v-pills-iduser2"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle"
                                                            src="../assets/images/user/4.jpg" alt="">
                                                        <div class="media-body">
                                                            <h6>Sarah Loren</h6>
                                                            <p>barnes@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </a><a class="nav-link" id="v-pills-iduser3-tab" data-bs-toggle="pill"
                                                    href="#v-pills-iduser3" role="tab" aria-controls="v-pills-iduser3"
                                                    aria-selected="false">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle"
                                                            src="../assets/images/user/10.jpg" alt="">
                                                        <div class="media-body">
                                                            <h6>Andew Jon</h6>
                                                            <p>andrewj@gmail.com</p>
                                                        </div>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="col-xl-8 xl-50 col-md-7">
                                            <div class="tab-content" id="v-pills-tabContent1">
                                                <div class="tab-pane fade show active" id="v-pills-iduser"
                                                    role="tabpanel" aria-labelledby="v-pills-iduser-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_5"
                                                                src="../assets/images/user/user.png" alt="">
                                                            <div class="media-body mt-0">
                                                                <h5><span class="first_name_5">Mark </span><span
                                                                        class="last_name_5">jecno</span></h5>
                                                                <p class="email_add_5">markjecno@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="printContact(5)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6>General</h6>
                                                            <p>Email Address: <span
                                                                    class="font-primary email_add_5">markjecno@gmail.com</span>
                                                            </p>
                                                            <div class="gender">
                                                                <h6>Personal</h6>
                                                                <p>Gender: <span>Male</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-iduser1" role="tabpanel"
                                                    aria-labelledby="v-pills-iduser1-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_6"
                                                                src="../assets/images/user/3.jpg" alt="">
                                                            <div class="media-body mt-0">
                                                                <h5><span class="first_name_6">Jason </span><span
                                                                        class="last_name_6">Borne</span></h5>
                                                                <p class="email_add_6">jasonb@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="printContact(6)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6>General</h6>
                                                            <p>Email Address: <span
                                                                    class="font-primary email_add_6">jasonb@gmail.com</span>
                                                            </p>
                                                            <div class="gender">
                                                                <h6>Personal</h6>
                                                                <p>Gender: <span>Male</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-iduser2" role="tabpanel"
                                                    aria-labelledby="v-pills-iduser2-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_7"
                                                                src="../assets/images/user/4.jpg" alt="">
                                                            <div class="media-body mt-0">
                                                                <h5> <span class="first_name_7">Sarah </span><span
                                                                        class="last_name_7">Loren</span></h5>
                                                                <p class="email_add_7">barnes@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="printContact(7)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6>General</h6>
                                                            <p>Email Address: <span
                                                                    class="font-primary email_add_7">barnes@gmail.com</span>
                                                            </p>
                                                            <div class="gender">
                                                                <h6>Personal</h6>
                                                                <p>Gender: <span>Female</span></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="v-pills-iduser3" role="tabpanel"
                                                    aria-labelledby="v-pills-iduser3-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_8"
                                                                src="../assets/images/user/10.jpg" alt="">
                                                            <div class="media-body mt-0">
                                                                <h5> <span class="first_name_8">Andew </span><span
                                                                        class="last_name_8">Jon</span></h5>
                                                                <p class="email_add_8">andrewj@gmail.com</p>
                                                                <ul>
                                                                    <li><a href="#" onclick="printContact(8)"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#printModal">Print</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6>General</h6>
                                                            <p>Email Address: <span
                                                                    class="font-primary email_add_8">andrewj@gmail.com</span>
                                                            </p>
                                                            <div class="gender">
                                                                <h6>Personal</h6>
                                                                <p>Gender: <span>Female</span></p>
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
                </div>
            </div>
        </div>
    </div> --}}
</div>
@endsection
