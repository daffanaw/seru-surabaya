<!--begin::Header-->
<div id="kt_header" class="header header-fixed">
                            <!--begin::Container-->
                            <div class="container d-flex align-items-stretch justify-content-between">
                                <!--begin::Left-->
                                <div class="d-flex align-items-stretch mr-3">
                                    <!--begin::Header Logo-->
                               
                                    <!--end::Header Logo-->
                                    <!--begin::Header Menu Wrapper-->
                                    <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                                        <!--begin::Header Menu-->
                                        <div id="kt_header_menu" class="header-menu header-menu-left header-menu-mobile header-menu-layout-default">
                                            <!--begin::Header Nav-->
                                            <ul class="menu-nav">
                                                <?php if ($this->session->userdata('level') == 'pengguna' || $this->session->userdata('level') == 'admin') { ?>
                                                <li class="menu-item menu-item-open menu-item-submenu menu-item-rel menu-item-open <?= $this->uri->segment(1) === 'Dashboard' ? 'menu-item-here' : '' ?> ">
                                                    <a href="Dashboard" class="menu-link ">
                                                        <span class="menu-text">Dashboard</span>
                                                        <i class="menu-arrow"></i>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                                <?php if ($this->session->userdata('level') == 'admin') { ?>
                                                    <li class="menu-item menu-item-submenu <?= $this->uri->segment(1) === 'Users' ? 'menu-item-here' : '' ?>" >
                                                                <a href="Users" class="menu-link">
                                                                    <span class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Communication/Add-user.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                                                <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                                <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                    <span class="menu-text">Users</span>
                                                                </a>
                                                            </li>
                                                            <?php } ?>
                                                              <?php if ($this->session->userdata('level') == 'admin') { ?>
                                                    <li class="menu-item <?= $this->uri->segment(1) === 'Kriteria' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                                <a href="Kriteria" class="menu-link">
                                                                    <span class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Shield-check.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                                                                                <path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                    <span class="menu-text">Kriteria</span>
                                                                </a>
                                                            </li>
                                                <?php } ?>             
                                                <?php if ($this->session->userdata('level') == 'admin') { ?>
                                                    <li class="menu-item menu-item-submenu <?= $this->uri->segment(1) === 'BobotKriteria' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                                <a href="BobotKriteria" class="menu-link">
                                                                    <span class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Shopping/Box2.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000" />
                                                                                <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                    <span class="menu-text">Bobot Kriteria</span>
                                                                </a>
                                                            </li>
                                                <?php } ?>
                                                   <?php if ($this->session->userdata('level') == 'pengguna' || $this->session->userdata('level') == 'admin') { ?>
                                                            <li class="menu-item menu-item-submenu <?= $this->uri->segment(1) === 'Kendaraan' ? 'menu-item-here' : '' ?>">
                                                                <a href="Kendaraan" class="menu-link">
                                                                    <span class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/Files/Pictures1.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M18,2 L20,2 C21.6568542,2 23,3.34314575 23,5 L23,19 C23,20.6568542 21.6568542,22 20,22 L18,22 L18,2 Z" fill="#000000" opacity="0.3" />
                                                                                <path d="M5,2 L17,2 C18.6568542,2 20,3.34314575 20,5 L20,19 C20,20.6568542 18.6568542,22 17,22 L5,22 C4.44771525,22 4,21.5522847 4,21 L4,3 C4,2.44771525 4.44771525,2 5,2 Z M12,11 C13.1045695,11 14,10.1045695 14,9 C14,7.8954305 13.1045695,7 12,7 C10.8954305,7 10,7.8954305 10,9 C10,10.1045695 10.8954305,11 12,11 Z M7.00036205,16.4995035 C6.98863236,16.6619875 7.26484009,17 7.4041679,17 C11.463736,17 14.5228466,17 16.5815,17 C16.9988413,17 17.0053266,16.6221713 16.9988413,16.5 C16.8360465,13.4332455 14.6506758,12 11.9907452,12 C9.36772908,12 7.21569918,13.5165724 7.00036205,16.4995035 Z" fill="#000000" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                    <span class="menu-text">Tempat Wisata</span>
                                                                </a>
                                                            </li>
                                                <?php } ?>
                                                <?php if ( $this->session->userdata('level') == 'pengguna' || $this->session->userdata('level') == 'admin') { ?>
                                                    <li class="menu-item menu-item-submenu <?= $this->uri->segment(1) === 'BobotAlternatif' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                                <a href="BobotAlternatif" class="menu-link">
                                                                    <span class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Thunder-move.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000" />
                                                                                <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                    <span class="menu-text">Bobot Alternatif</span>
                                                                </a>
                                                            </li>
                                                <?php } ?>
                                                <?php if ($this->session->userdata('level') == 'pengguna'|| $this->session->userdata('level') == 'admin') { ?>
                                                <li class="menu-item menu-item-submenu menu-item-rel <?= $this->uri->segment(1) === 'Penghitungan' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                    <a href="Penghitungan" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Thunder-move.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000" />
                                                                                <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                            <span class="menu-text">Penghitungan FAHP</span>
                                                        <span class="menu-desc"></span>
                                                        <i class="menu-arrow"></i>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                                 <?php if ($this->session->userdata('level') == 'admin') { ?>
                                                <li class="menu-item menu-item-submenu menu-item-rel <?= $this->uri->segment(1) === 'PetunjukAdmin' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                    <a href="PetunjukAdmin" class="menu-link">
                                                    <span class="svg-icon menu-icon">
                                                                        <!--begin::Svg Icon | path:/metronic/theme/html/demo1/dist/assets/media/svg/icons/General/Thunder-move.svg-->
                                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                                <rect x="0" y="0" width="24" height="24" />
                                                                                <path d="M4,6 L20,6 C20.5522847,6 21,6.44771525 21,7 L21,8 C21,8.55228475 20.5522847,9 20,9 L4,9 C3.44771525,9 3,8.55228475 3,8 L3,7 C3,6.44771525 3.44771525,6 4,6 Z M5,11 L10,11 C10.5522847,11 11,11.4477153 11,12 L11,19 C11,19.5522847 10.5522847,20 10,20 L5,20 C4.44771525,20 4,19.5522847 4,19 L4,12 C4,11.4477153 4.44771525,11 5,11 Z M14,11 L19,11 C19.5522847,11 20,11.4477153 20,12 L20,19 C20,19.5522847 19.5522847,20 19,20 L14,20 C13.4477153,20 13,19.5522847 13,19 L13,12 C13,11.4477153 13.4477153,11 14,11 Z" fill="#000000" />
                                                                                <path d="M14.4452998,2.16794971 C14.9048285,1.86159725 15.5256978,1.98577112 15.8320503,2.4452998 C16.1384028,2.90482849 16.0142289,3.52569784 15.5547002,3.83205029 L12,6.20185043 L8.4452998,3.83205029 C7.98577112,3.52569784 7.86159725,2.90482849 8.16794971,2.4452998 C8.47430216,1.98577112 9.09517151,1.86159725 9.5547002,2.16794971 L12,3.79814957 L14.4452998,2.16794971 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                                            </g>
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                            <span class="menu-text">Cara Penggunaan</span>
                                                        <span class="menu-desc"></span>
                                                        <i class="menu-arrow"></i>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                                  <?php if ($this->session->userdata('level') == 'pengguna') { ?>
                                                <li class="menu-item menu-item-submenu menu-item-rel <?= $this->uri->segment(1) === 'PetunjukPengguna' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                    <a href="PetunjukPengguna" class="menu-link">
                                                        <span class="menu-text">Cara Penggunaan</span>
                                                        <span class="menu-desc"></span>
                                                        <i class="menu-arrow"></i>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                                <!-- <?php if ($this->session->userdata('level') == 'pegawai' || $this->session->userdata('level') == 'admin') { ?>
                                                <li class="menu-item menu-item-submenu menu-item-rel <?= $this->uri->segment(1) === 'Hasil' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                    <a href="<?= base_url('Hasil') ?>" class="menu-link">
                                                        <span class="menu-text">Hasil Perhitungan</span>
                                                        <span class="menu-desc"></span>
                                                        <i class="menu-arrow"></i>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                                <?php if ($this->session->userdata('level') == 'nasabah') { ?>
                                                <li class="menu-item menu-item-submenu menu-item-rel <?= $this->uri->segment(1) === 'UpdateProfile' ? 'menu-item-here' : '' ?>" aria-haspopup="true">
                                                    <a href="<?= base_url('UpdateProfile') ?>" class="menu-link">
                                                        <span class="menu-text">Update Profile</span>
                                                        <span class="menu-desc"></span>
                                                        <i class="menu-arrow"></i>
                                                    </a>
                                                </li>
                                                <?php } ?>
                                           -->
                                            </ul>
                                            <!--end::Header Nav-->
                                        </div>
                                        <!--end::Header Menu-->
                                    </div>
                                    <!--end::Header Menu Wrapper-->
                                </div>
                                <!--end::Left-->
                                <!--begin::Topbar-->
                                <div class="topbar">
                                    
                                    <!--begin::User-->
                                    <div class="dropdown">
                                        <!--begin::Toggle-->
                                        <div class="topbar-item">
                                            <div class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto">
                                                <span class="text-white opacity-70 font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                                <span class="text-white opacity-90 font-weight-bolder font-size-base d-none d-md-inline mr-4"><?= $this->session->userdata('user') ?></span>
                                            </div>
                                            <a href="logout" class="btn btn-icon btn-hover-transparent-white d-flex align-items-center btn-lg px-md-2 w-md-auto ">Keluar</a>
                                        </div>
                                        <!--end::Toggle-->
                                    </div>
                                    <!--end::User-->
                                </div>
                                <!--end::Topbar-->
                            </div>
                            <!--end::Container-->
                        </div>
					<!--end::Header-->