<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?= base_url('dashboard') ?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>

                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>

                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">

                                <?php if (session()->get('level') == 3 || 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-produk') ?>">Anambas</a>
                                    <?php } ?>

                                    <?php if (session()->get('level') == 3 || 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-produk1') ?>">Batam</a>
                                    <?php } ?>

                                    <?php if (session()->get('level') == 3 || 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-produk2') ?>">Tanjung Pinang</a>
                                    <?php } ?>

                                    <?php if (session()->get('level') == 3 || 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-produk3') ?>">Karimun</a>
                                    <?php } ?>


                                    <!-- admin -->
                                    <?php if (session()->get('level') == 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-kategori') ?>">anambas</a>
                                    <?php } ?>

                                    <?php if (session()->get('level') == 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-kategori1') ?>">batam</a>
                                    <?php } ?>

                                    <?php if (session()->get('level') == 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-kategori2') ?>">tanjung pinang</a>
                                    <?php } ?>

                                    <?php if (session()->get('level') == 1) { ?>
                                    <a class="nav-link" href="<?= base_url('daftar-kategori3') ?>">karimun</a>
                                    <?php } ?>

                                </nav>
                            </div>



                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">


                            

                                </nav>
                            </div>
                        </div>
                    </div>

                </nav>
            </div>