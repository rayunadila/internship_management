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
                    <a href="#forms" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                            class="lab la-wpforms iq-arrow-left"></i><span>Kelola Pengajuan </span><i
                            class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                    <ul id="forms" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li><a href="{{ route('apprentince.index') }}"><i class="las la-book"></i>Data Pengajuan PKL
                            </a>
                        </li>
                        <li><a href="form-validation.html"><i class="las la-edit"></i>Konfirmasi PKL</a></li>
                </li>
            </ul>
            </li>

            <li>
                <a href="#wizard-form" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="ri-archive-drawer-line iq-arrow-left"></i><span>Kelola Presensi </span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="wizard-form" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li><a href="form-wizard.html"><i class="ri-clockwise-line"></i> Data Presensi </a></li>
                </ul>
            </li>

            <li>
                <a href="#tables" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i
                        class="ri-table-line iq-arrow-left"></i><span>Kelola Catatan Harian </span><i
                        class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="tables" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li><a href="tables-basic.html"><i class="ri-table-line"></i>Data Catatan Harian</a></li>
            </li>
            </ul>
            </li>

            <li>
                <a href="#authentication" class="iq-waves-effect collapsed" data-toggle="collapse"
                    aria-expanded="false"><i class="ri-pages-line iq-arrow-left"></i><span>Kelola Sertifikat
                        PKL</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="authentication" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    <li><a href="sign-in.html"><i class="las la-sign-in-alt"></i>Data Sertifikat PKL</a></li>
                </ul>
            </li>
        </nav>
        <div class="p-3"></div>
    </div>
</div>
