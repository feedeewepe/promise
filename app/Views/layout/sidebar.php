<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">    
        <div class="sb-sidenav-menu">
            <div class="nav">
                <?php if($usergroup=='Administrator') { ?>
                <div class="sb-sidenav-menu-heading">Administrator</div>
                <a class="nav-link" href="<?= base_url('users'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                    User Management
                </a>
                <a class="nav-link" href="<?= base_url('dashboard/view_dashboard/Administrator'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard Admin
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                        Layouts
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="layout-static.html">Static Navigation</a>
                            <a class="nav-link" href="layout-sidenav-light.html">Light Sidenav</a>
                        </nav>
                    </div>                   
                <?php } ?>

                <?php if($usergroup=='Fakultas' || $usergroup=='Administrator'){ ?>
                    
                <div class="sb-sidenav-menu-heading">Fakultas</div>
                
                <a class="nav-link" href="<?= base_url('dashboard/view_dashboard/Fakultas'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard Fakultas
                </a>
                <a class="nav-link" href="<?= base_url('review-permohonan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Permohonan KP
                </a>
                <a class="nav-link" href="<?= base_url('review-survey-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                    Survey KP
                </a>
                <a class="nav-link" href="<?= base_url('penentuan-lokasi-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                    Lokasi KP
                </a>
                <a class="nav-link" href="<?= base_url('pengumuman-jadwal-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Jadwal KP
                </a>
                <a class="nav-link" href="<?= base_url('pengumuman-jadwal-upkp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                    Jadwal UPKP
                </a>
                <a class="nav-link" href="<?= base_url('ucapan-terima-kasih'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                    Ucapan Terima Kasih
                </a>
                <?php } ?>

                <?php if($usergroup=='Bagian Pelayanan Akademik' || $usergroup=='Administrator'){ ?>
                <div class="sb-sidenav-menu-heading">BPA</div>
                <a class="nav-link" href="<?= base_url('dashboard/view_dashboard/Bagian Pelayanan Akademik'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard BPA
                </a>
                <a class="nav-link" href="<?= base_url('penerbitan-surat-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Penerbitan Surat KP
                </a>
                <a class="nav-link" href="<?= base_url('penyerahan-surat-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Penyerahan Surat KP
                </a>
                <a class="nav-link" href="<?= base_url('penyerahan-ba-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Penyerahan BA KP
                </a>
                <?php } ?>

                <?php if($usergroup=='Pembimbing Akademik' || $usergroup=='Administrator'){ ?>
                <div class="sb-sidenav-menu-heading">Pembimbing Akademik</div>
                <a class="nav-link" href="<?= base_url('dashboard/view_dashboard/Pembimbing Akademik'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard Pembimbing Akademik
                </a>
                <a class="nav-link" href="<?= base_url('pembekalan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Pembekalan KP
                </a>
                <a class="nav-link" href="<?= base_url('konsultasi-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Konsultasi KP
                </a>
                <a class="nav-link" href="<?= base_url('tandatangan-BA'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Tanda Tangan BA KP
                </a>
                <a class="nav-link" href="<?= base_url('rekap-nilai-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Rekap Nilai KP
                </a>
                <?php } ?>

                <?php if($usergroup=='Pembimbing Lapangan' || $usergroup=='Administrator'){ ?>
                <div class="sb-sidenav-menu-heading">Pembimbing Lapangan</div>
                <a class="nav-link" href="<?= base_url('dashboard/view_dashboard/Pembimbing Lapangan'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard Pembimbing Lapangan
                </a>
                <a class="nav-link" href="<?= base_url('pemantauan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Pemantauan KP
                </a>
                <a class="nav-link" href="<?= base_url('bimbingan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Bimbingan KP
                </a>
                <a class="nav-link" href="<?= base_url('penilaian-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Penilaian KP
                </a>
                <?php } ?>

                <?php if($usergroup=='Penguji' || $usergroup=='Administrator'){ ?>
                <div class="sb-sidenav-menu-heading">Penguji</div>
                <a class="nav-link" href="<?= base_url('dashboard/view_dashboard/Penguji'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard Penguji
                </a>
                <a class="nav-link" href="<?= base_url('review-laporan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Review Laporan KP
                </a>
                <?php } ?>

                <?php if($usergroup=='Mahasiswa' || $usergroup=='Administrator'){ ?>
                <div class="sb-sidenav-menu-heading">Mahasiswa</div>
                <a class="nav-link" href="<?= base_url('dashboard/view_dashboard/Mahasiswa'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard Mahasiswa
                </a>
                <a class="nav-link" href="<?= base_url('kerjapraktek/daftarKP');?>">
                    <div class="sb-nav-link-icon"><i class="icon-note"></i></div>
                    Pendaftaran KP
                </a>
                <a class="nav-link" href="<?= base_url('survey-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-chart"></i></div>
                    Survey KP
                </a>
                <a class="nav-link" href="<?= base_url('proposal-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-book-open"></i></div>
                    Proposal KP
                </a>
                <a class="nav-link" href="<?= base_url('surat-permohonan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-notebook"></i></div>
                    Permohonan KP
                </a>
                <a class="nav-link" href="<?= base_url('surat-balasan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-envelope"></i></div>
                    Surat Balasan KP
                </a>
                <a class="nav-link" href="<?= base_url('revisi-laporan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-calendar"></i></div>
                    Jadwal KP
                </a>
                <a class="nav-link" href="<?= base_url('pakta-integritas-KP'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-badge"></i></div>
                    Pakta Integritas KP
                </a>
                <a class="nav-link" href="<?= base_url('pelaksanaan-kp'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-rocket"></i></div>
                    Pelaksanaan-KP
                </a>
                <a class="nav-link" href="<?= base_url('laporan-KP'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-doc"></i></div>
                    Laporan KP
                </a>
                <a class="nav-link" href="<?= base_url('presentasi'); ?>">
                    <div class="sb-nav-link-icon"><i class="icon-event"></i></div>
                    Jadwal UPKP
                </a>                    
                <?php } ?>

                <!-- <div class="sb-sidenav-menu-heading">CRUD</div>
                <a class="nav-link" href="<?= base_url('builder'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-database"></i></div>
                    Query Builder
                </a>
                <a class="nav-link" href="<?= base_url('objects'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-server"></i></div>
                    Object Model
                </a>
                <a class="nav-link" href="<?= base_url('ajax-jquery'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-spinner"></i></div>
                    Ajax jQuery
                </a>
                <div class="sb-sidenav-menu-heading">Report</div>
                <a class="nav-link" href="<?= base_url('export-pdf'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-pdf"></i></div>
                    PDF
                </a>
                <a class="nav-link" href="<?= base_url('export-excel'); ?>">
                    <div class="sb-nav-link-icon"><i class="fas fa-file-excel"></i></div>
                    EXCEL
                </a>
                <div class="sb-sidenav-menu-heading">Logout</div> -->
                    
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            <?= (user()!=NULL)?user()->username:''; ?> (<?= $usergroup; ?>)                
            <a class="btn danger" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-power-off"></i> Logout
            </a>
        </div>
    </nav>
</div>
