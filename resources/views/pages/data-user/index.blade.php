@extends('layouts.app')

@section('title', 'Data Pegawai')
@section('title.category', 'General')

@section('content')
<div class="row">
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
                                                aria-orientation="vertical">
                                                @foreach ($user as $item)
                                                <a class="contact-tab-{{ $loop->index }} nav-link active"
                                                    id="v-pills-user-tab" data-bs-toggle="pill"
                                                    onclick="activeDiv({{ $loop->index }})" href="#v-pills-user"
                                                    role="tab" aria-controls="v-pills-user" aria-selected="true">
                                                    <div class="media"><img
                                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                                            src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                        <div class="media-body">
                                                            <h6>
                                                                <span>{{ $item->nama }}</span>
                                                            </h6>
                                                            <p>{{ $item->jabatan }}</p>
                                                        </div>
                                                    </div>
                                                </a>
                                                @endforeach
                                            </div>
                                        </div>
                                        <div class="col-xl-8 xl-50 col-md-7">
                                            <div class="tab-content" id="v-pills-tabContent">
                                                @foreach ($user as $item)
                                                <div class="tab-pane contact-tab-{{ $loop->index }} tab-content-child fade @if($loop->index == '0') show active @endif"
                                                    id="v-pills-user" role="tabpanel"
                                                    aria-labelledby="v-pills-user-tab">
                                                    <div class="profile-mail">
                                                        <div class="media"><img
                                                                class="img-100 img-fluid m-r-20 rounded-circle"
                                                                src="{{ asset('assets/img/profile.jpg') }}" alt="">
                                                            <input class="updateimg" type="file" name="img"
                                                                onchange="readURL(this,{{ $loop->index }})">
                                                            <div class="media-body mt-0">
                                                                <h5><span>{{ $item->nama }}</span></h5>
                                                                <p>{{ $item->jabatan }}</p>
                                                            </div>
                                                        </div>
                                                        <div class="email-general">
                                                            <h6 class="mb-3">Data Pegawai</h6>
                                                            <ul>
                                                                <li>NIP <span class="font-primary">{{ $item->nip
                                                                        }}</span>
                                                                </li>
                                                                <li>Pangkat <span class="font-primary">{{ $item->pangkat
                                                                        }}</span>
                                                                </li>
                                                                <li>Golongan <span class="font-primary">{{
                                                                        $item->golongan
                                                                        }}
                                                                    </span>
                                                                </li>
                                                                <li>Username <span class="font-primary">{{
                                                                        $item->username }}</span>
                                                                </li>
                                                                <li>Role <span class="font-primary">{{
                                                                        Str::ucfirst($item->role) }}</span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
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
    </div>
</div>
@endsection
