<div class="iq-sidebar">
    <div class="iq-navbar-logo d-flex justify-content-between">
        <a href="index.html" class="header-logo">
            <img src="images/logo.png" class="img-fluid rounded" alt="">
            <span>SI INNA</span>
        </a>
        <div class="iq-menu-bt align-self-center">
            <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-menu-line"></i></div>
                <div class="hover-circle"><i class="ri-close-fill"></i></div>
            </div>
        </div>

    </div>

    @role('Mahasiswa')
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="">
                        <a href="{{ route('home') }}" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i
                                class="las la-home iq-arrow-left"></i><span>Beranda</span></a>
                    </li>
                    <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse"
                            aria-expanded="false"><i class="ri-pages-line iq-arrow-left"></i><span>Kelola Sertifikat
                                PKL</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{ route('apprentince.index_sertificate') }}"><i
                                        class="las la-sign-in-alt"></i>Data Sertifikat PKL</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    @endrole

    @role('Admin')
        <div id="sidebar-scrollbar">
            <nav class="iq-sidebar-menu">
                <ul id="iq-sidebar-toggle" class="iq-menu">
                    <li class="">
                        <a href="{{ route('home') }}" class="iq-waves-effect"><span class="ripple rippleEffect"></span><i
                                class="las la-home iq-arrow-left"></i><span>Beranda</span></a>
                    </li>
                    <li>
                        <a href="#userinfo" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                                class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>
                                Kelola Pengguna</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                            <li><a href="{{ route('user.index') }}"><i class="las la-id-card-alt"></i> Pengguna</a></li>
                            <li><a href="{{ route('role.index') }}"><i class="las la-plus-circle"></i> Peran</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#userinfo2" class="iq-waves-effect" data-toggle="collapse" aria-expanded="false"><span
                                class="ripple rippleEffect"></span><i class="las la-user-tie iq-arrow-left"></i><span>
                                Kelola Peserta PKL</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="userinfo2" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle" style="">
                            <li><a href="{{ route('apprentince.index') }}"><i class="las la-id-card-alt"></i> Data Peserta
                                    PKL</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                                class="lab la-wpforms iq-arrow-left"></i><span>Kelola Pengajuan </span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{ route('apprentince.index_request') }}"><i class="las la-book"></i>Data Pengajuan
                                    PKL
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse"
                            aria-expanded="false"><i class="ri-archive-drawer-line iq-arrow-left"></i><span>Kelola Presensi
                            </span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="wizard-form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{ route('attendance.index') }}"><i class="ri-clockwise-line"></i> Data Presensi
                                </a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                                class="ri-table-line iq-arrow-left"></i><span>Kelola Catatan Harian </span><i
                                class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{ route('daily_activity.index') }}"><i class="ri-table-line"></i>Data Catatan
                                    Harian</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#extra-pages" class="iq-waves-effect collapsed" data-toggle="collapse"
                            aria-expanded="false"><i class="ri-pantone-line iq-arrow-left"></i><span>Kelola Laporan
                                PKL</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="extra-pages" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{ route('apprentince_file.index') }}"><i class="ri-archive-line"></i>Data
                                    Laporan PKL</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse"
                            aria-expanded="false"><i class="ri-pages-line iq-arrow-left"></i><span>Kelola Sertifikat
                                PKL</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                            <li><a href="{{ route('apprentince.index_sertificate') }}"><i
                                        class="las la-sign-in-alt"></i>Data Sertifikat PKL</a></li>
                        </ul>
                    </li>
            </nav>
            <div class="p-3"></div>
        </div>
    @endrole
</div>
