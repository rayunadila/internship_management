@extends('layouts.app')

@section('css_after')
@endsection


@section('content')
    @role('Admin')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">

                            <i class="ri-file-user-line"></i>
                        </div>
                        <p class="text-secondary"> Pengguna</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Pengguna </b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('user.index') }}"> <i class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">

                            <i class="ri-group-line"></i>
                        </div>
                        <p class="text-secondary"> Peserta PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Peserta PKL</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince.index') }}"> <i class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">

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
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
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
                        <p class="text-secondary">Aktivitas Harian Peserta</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Aktivitas Harian</b></h4>
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
                        <p class="text-secondary">Laporan PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Laporan PKL</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince_file.index') }}"><i class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">

                            <i class="ri-pages-line"></i>
                        </div>
                        <p class="text-secondary"> Sertifikat PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Data Sertifikat PKL</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince.index_sertificate') }}"> <i
                                class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
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
                                        <h4 class="card-title">Tentang Kami</h4>
                                    </center>
                                    <center><img src="{{ asset('images/SI_INNA.png') }}" alt="" width="70%">
                                    </center>
                                    <p align="justify">
                                        SI INNA Merupakan Singkatan dari Internship Management yang
                                        digunakan untuk mengelola data-data pengajuan Praktek Kerja
                                        Lapangan (PKL), mengelola data peserta, presensi peserta, mengelola laporan pkl dan
                                        sertifikat PKL. Peserta Didik yang melaksanakan Praktek
                                        Kerja Lapangan (PKL) di Dinas Pekerjaan Umum Bina Marga dan Tata
                                        Ruang Provinsi Sumatera Selatan, diharapkan dengan adanya aplikasi ini diharapkan
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
                                                    <div class="timeline-dots border-warning"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Buat Data Peserta</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Peserta diharuskan mengisi data-data pribadi
                                                            terlebih dahulu agar mendapatkan akses ke fitur-fitur lainnya.

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
                                                        <p align="justify">Peserta dapat mengisi catatan kegiatan selama
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

    @role('Peserta Magang')
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">

                            <i class="ri-group-line"></i>
                        </div>
                        <p class="text-secondary"> Peserta PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Buat Data Peserta</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince.index') }}"> <i class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">
                            <i class="ri-task-line"></i>
                        </div>
                        <p class="text-secondary">Presensi PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Buat Presensi</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('attendance.index') }}"><i class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- batas --}}
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-danger">
                            <i class="ri-book-mark-fill"></i>
                        </div>
                        <p class="text-secondary">Aktivitas Harian PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Buat Aktivitas Harian PKL</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('daily_activity.index') }}"><i
                                class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">
                            <i class="ri-folder-add-fill"></i>
                        </div>
                        <p class="text-secondary">Laporan PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Buat Laporan PKL</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince_file.index') }}"><i
                                class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-success">

                            <i class="ri-pages-line"></i>
                        </div>
                        <p class="text-secondary"> Sertifikat PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Unduh Sertifikat PKL</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince.index_sertificate') }}"> <i
                                class="ri-arrow-right-fill"></i>
                            Selengkapnya</a>
                    </div>
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
                                    <center><img src="{{ asset('images/SI_INNA.png') }}" alt="" width="70%">
                                    </center>
                                    <p align="justify">
                                        SI INNA Merupakan Singkatan dari Internship Management yang
                                        digunakan untuk mengelola data-data pengajuan Praktek Kerja
                                        Lapangan (PKL), mengelola data peserta, presensi peserta, mengelola laporan pkl dan
                                        sertifikat PKL. Peserta Didik yang melaksanakan Praktek
                                        Kerja Lapangan (PKL) di Dinas Pekerjaan Umum Bina Marga dan Tata
                                        Ruang Provinsi Sumatera Selatan, diharapkan dengan adanya aplikasi ini diharapkan
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
                                                    <div class="timeline-dots border-warning"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Buat Data Peserta</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Peserta diharuskan mengisi data-data pribadi
                                                            terlebih dahulu agar mendapatkan akses ke fitur-fitur lainnya.

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

    @role('Calon Magang')
        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">

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
                                        <h4 class="card-title">Tentang Kami</h4>
                                    </center>
                                    <center><img src="{{ asset('images/SI_INNA.png') }}" alt="" width="70%">
                                    </center>
                                    <p align="justify">
                                        SI INNA Merupakan Singkatan dari Internship Management yang
                                        digunakan untuk mengelola data-data pengajuan Praktek Kerja
                                        Lapangan (PKL), mengelola data peserta, presensi peserta, mengelola laporan pkl dan
                                        sertifikat PKL. Peserta Didik yang melaksanakan Praktek
                                        Kerja Lapangan (PKL) di Dinas Pekerjaan Umum Bina Marga dan Tata
                                        Ruang Provinsi Sumatera Selatan, diharapkan dengan adanya aplikasi ini diharapkan
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
                                                    <div class="timeline-dots border-warning"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Buat Data Peserta</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Peserta diharuskan mengisi data-data pribadi
                                                            terlebih dahulu agar mendapatkan akses ke fitur-fitur lainnya.

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
                                                        <p align="justify">Peserta dapat mengisi catatan kegiatan selama
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

     @role('Sekretaris')
        <div class="row">

            <div class="col-sm-6 col-md-6 col-lg-4">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">

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
                                        <h4 class="card-title">Tentang Kami</h4>
                                    </center>
                                    <center><img src="{{ asset('images/SI_INNA.png') }}" alt="" width="70%">
                                    </center>
                                    <p align="justify">
                                        SI INNA Merupakan Singkatan dari Internship Management yang
                                        digunakan untuk mengelola data-data pengajuan Praktek Kerja
                                        Lapangan (PKL), mengelola data peserta, presensi peserta, mengelola laporan pkl dan
                                        sertifikat PKL. Peserta Didik yang melaksanakan Praktek
                                        Kerja Lapangan (PKL) di Dinas Pekerjaan Umum Bina Marga dan Tata
                                        Ruang Provinsi Sumatera Selatan, diharapkan dengan adanya aplikasi ini diharapkan
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
                                                    <div class="timeline-dots border-warning"><i class="ri-pantone-line"></i>
                                                    </div>
                                                    <h6 class="float-left mb-1">Buat Data Peserta</h6>
                                                    <div class="d-inline-block w-100">
                                                        <p align="justify">Peserta diharuskan mengisi data-data pribadi
                                                            terlebih dahulu agar mendapatkan akses ke fitur-fitur lainnya.

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
                                                        <p align="justify">Peserta dapat mengisi catatan kegiatan selama
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
