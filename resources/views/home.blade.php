@extends('layouts.app')

@section('css_after')
@endsection

@section('content')
    <div class="row">
        @role('Admin')
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">

                            <i class="ri-file-line"></i>
                        </div>
                        <p class="text-secondary"> Pengajuan PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Pengajuan PKL</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince.index_request') }}"> <i
                                class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">
                            <i class="ri-task-line"></i>
                        </div>
                        <p class="text-secondary">Presensi PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Presensi</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('attendance.index') }}"><i class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">
                            <i class="ri-book-mark-fill"></i>
                        </div>
                        <p class="text-secondary">Aktivitas Harian PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Kegiatan Harian </b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('daily_activity.index') }}"><i class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">
                            <i class="ri-folder-add-fill"></i>
                        </div>
                        <p class="text-secondary">Laporan Kegiatan PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Laporan Kegiatan</b></h4>
                        </div>
                        <a class="text-primary" href=""><i class="ri-arrow-right-fill"></i> Selengkapnya</a>
                    </div>
                </div>
            </div>

            <section class="section">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <br> <br>

                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <center>
                                            <h4 class="card-title">Tentang SI INNA</h4>
                                        </center>
                                        <center><img src="{{ asset('images/SI_INNA.png') }}" alt="" width="40%">
                                        </center>
                                        <p align="justify">
                                            SI INNA Merupakan Singkatan dari Internship Management yang
                                            digunakan untuk mengelola data-data pengajuan Praktik Kerja
                                            Lapangan (PKL), mengelola data peserta, presensi peserta dan
                                            mecetak sertifikat PKL. Peserta Didik yang melaksanakan Praktik
                                            Kerja Lapangan (PKL) di Dinas Pekerjaan Umum Bina Marga dan Tata
                                            Ruang, diharapkan dengan adanya aplikasi ini diharapkan
                                            menjadikan Pengelolaan PKL, Manajemen PKL lebih mudah dalam
                                            pengelolaannya karena peserta dapat menggunakan aplikasi ini
                                            untuk presensi, mencatat kegiatan harian dan mencetaknya sebagai
                                            lampiran laporan tertulis agar mendapatkan sertifikat PKL.
                                        </p>

                                    </div>


                                    <div class="col-lg-6">
                                        <div class="iq-card">
                                            <div class="iq-card-header d-flex justify-content-between">
                                                <div class="iq-header-title">
                                                    <h4 class="card-title">Panduan Peserta PKL</h4>
                                                </div>
                                            </div>
                                            <div class="iq-card-body">
                                                <ul class="iq-timeline">
                                                    <li>
                                                        <div class="timeline-dots"><i class="ri-pantone-line"></i></div>
                                                        <h6 class="float-left mb-1">Masuk Akun</h6>
                                                        <div class="d-inline-block w-100">
                                                            <p align="justify"> Peserta mendapatkan akun kemudian melakukan
                                                                login agar mendapatkan akses ke aplikasi SI INNA

                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-dots border-success"><i
                                                                class="ri-pantone-line"></i></div>
                                                        <h6 class="float-left mb-1">Buat Presensi Harian</h6>
                                                        <div class="d-inline-block w-100">
                                                            <p align="justify">Peserta yang melaksanakan PKL dapat melakukan
                                                                presensi pada saat melaksanakan PKL

                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-dots border-danger"><i class="ri-pantone-line"></i>
                                                        </div>
                                                        <h6 class="float-left mb-1">Buat Catatan Kegiatan Harian</h6>
                                                        <div class="d-inline-block w-100">
                                                            <p align="justify">Peserta dapat mengisi catatan kegiaatan selama
                                                                PKL berlangsung.

                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-dots border-primary"><i
                                                                class="ri-pantone-line"></i></div>
                                                        <h6 class="float-left mb-1">Input Laporan Tertulis</h6>
                                                        <div class="d-inline-block w-100">
                                                            <p align="justify">Setelah melaksanakan PKL peserta mengirimkan
                                                                Laporan tertulis serta melampirkan data presensi dan data
                                                                kegiatan harian.

                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="timeline-dots border-info"><i class="ri-pantone-line"></i>
                                                        </div>
                                                        <h6 class="float-left mb-1">Download Sertifikat</h6>
                                                        <div class="d-inline-block w-100">
                                                            <p align="justify">Setelah laporan peserta telah dikonfirmasi maka
                                                                peserta dapat mendownload sertifikat PKL.

                                                            </p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @endrole

    @role('Mahasiswa')
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body iq-box-relative">
                    <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">

                        <i class="ri-file-line"></i>
                    </div>
                    <p class="text-secondary">Data Peserta PKL</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h4><b>Buat Data Peserta</b></h4>
                    </div>
                    <a class="text-primary" href="{{ route('apprentince.create') }}"> <i class="ri-arrow-right-fill"></i>
                        Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body iq-box-relative">
                    <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">
                        <i class="ri-task-line"></i>
                    </div>
                    <p class="text-secondary">Presensi PKL</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h4><b>Buat Presensi</b></h4>
                    </div>
                    <a class="text-primary" href="{{ route('attendance.create') }}"><i class="ri-arrow-right-fill"></i>
                        Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body iq-box-relative">
                    <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">
                        <i class="ri-book-mark-fill"></i>
                    </div>
                    <p class="text-secondary">Aktivitas Harian PKL</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h4><b>Buat Aktivitas Harian </b></h4>
                    </div>
                    <a class="text-primary" href="{{ route('daily_activity.create') }}"><i class="ri-arrow-right-fill"></i>
                        Selengkapnya</a>
                </div>
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-3">
            <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                <div class="iq-card-body iq-box-relative">
                    <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">
                        <i class="ri-folder-add-fill"></i>
                    </div>
                    <p class="text-secondary">Laporan Kegiatan PKL</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <h4><b>Buat Laporan Kegiatan</b></h4>
                    </div>
                    <a class="text-primary" href="{{ route('apprentince_file.create') }}"><i class="ri-arrow-right-fill"></i> Selengkapnya</a>
                </div>
            </div>
        </div>

        <section class="section">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <br> <br>

                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <center>
                                        <h4 class="card-title">Tentang SI INNA</h4>
                                    </center>
                                    <center><img src="{{ asset('images/SI_INNA.png') }}" alt="" width="40%">
                                    </center>
                                    <p align="justify">
                                        SI INNA Merupakan Singkatan dari Internship Management yang
                                        digunakan untuk mengelola data-data pengajuan Praktik Kerja
                                        Lapangan (PKL), mengelola data peserta, presensi peserta dan
                                        mecetak sertifikat PKL. Peserta Didik yang melaksanakan Praktik
                                        Kerja Lapangan (PKL) di Dinas Pekerjaan Umum Bina Marga dan Tata
                                        Ruang, diharapkan dengan adanya aplikasi ini diharapkan
                                        menjadikan Pengelolaan PKL, Manajemen PKL lebih mudah dalam
                                        pengelolaannya karena peserta dapat menggunakan aplikasi ini
                                        untuk presensi, mencatat kegiatan harian dan mencetaknya sebagai
                                        lampiran laporan tertulis agar mendapatkan sertifikat PKL.
                                    </p>

                                </div>


                                <div class="col-lg-6">
                                    <div class="iq-card">
                                        <div class="iq-card-header d-flex justify-content-between">
                                            <div class="iq-header-title">
                                                <h4 class="card-title">Panduan Peserta PKL</h4>
                                            </div>
                                        </div>
                                        <div class="iq-card-body">
                                            <ul class="iq-timeline">
                                                <li>
                                                    <div class="timeline-dots"><i class="ri-pantone-line"></i></div>
                                                    <h6 class="float-left mb-1">Masuk Akun</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify"> Peserta mendapatkan akun kemudian melakukan
                                                            login agar mendapatkan akses ke aplikasi SI INNA

                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-dots border-success"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Buat Presensi Harian</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Peserta yang melaksanakan PKL dapat melakukan
                                                            presensi pada saat melaksanakan PKL

                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-dots border-danger"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Buat Catatan Kegiatan Harian</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Peserta dapat mengisi catatan kegiaatan selama
                                                            PKL berlangsung.

                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-dots border-primary"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Input Laporan Tertulis</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Setelah melaksanakan PKL peserta mengirimkan
                                                            Laporan tertulis serta melampirkan data presensi dan data
                                                            kegiatan harian.

                                                        </p>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="timeline-dots border-info"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Download Sertifikat</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Setelah laporan peserta telah dikonfirmasi maka
                                                            peserta dapat mendownload sertifikat PKL.

                                                        </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    @endrole
@endsection

@section('js_after')
@endsection
