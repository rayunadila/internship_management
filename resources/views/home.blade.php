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
                        <a class="text-primary" href="{{ route('apprentince.index') }}"> <i class="ri-arrow-right-fill"></i>
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
        @endrole
        @role('Mahasiswa')
            <div class="col-sm-6 col-md-6 col-lg-3">
                <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                    <div class="iq-card-body iq-box-relative">
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-primary">

                            <i class="ri-file-line"></i>
                        </div>
                        <p class="text-secondary">Pengajuan PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Buat Pengajuan</b></h4>
                        </div>
                        <a class="text-primary" href="{{ route('apprentince.create') }}"> <i class="ri-arrow-right-fill"></i>
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
                        <div class="iq-box-absolute icon iq-icon-box rounded-circle iq-bg-warning">
                            <i class="ri-folder-add-fill"></i>
                        </div>
                        <p class="text-secondary">Laporan Kegiatan PKL</p>
                        <div class="d-flex align-items-center justify-content-between">
                            <h4><b>Buat Laporan Kegiatan</b></h4>
                        </div>
                        <a class="text-primary" href=""><i class="ri-arrow-right-fill"></i> Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endrole

    </div>
@endsection

@section('js_after')
@endsection
