<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">TANJUNG PINANG</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">TANJUNG PINANG</a></li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                TANJUNG PINANG
                            </div>
                            <div class="card-body">

                            <!-- notifikasi berhasil tambah produk -->
                            <?php if(session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                <?= session('success'); ?>
                            </div>
                                <?php endif; ?>

                                <!-- notifikasi gagal -->
                                <?php if(session('failed')) : ?>
                                <div class="alert alert-danger" role="alert">
                                <?= session('failed'); ?>
                            </div>
                                <?php endif; ?>

                                <form action="<?= base_url('daftar-produk2/create-produk2'); ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field(); ?>

                            <div class="mb-3">
                                <label for="deskripsi">Nama anda</label>
                                <textarea name="deskripsi" id="deskripsi" cols="30" rows="1" class="form-control <?= $validation->hasError('deskripsi') ? 'is-invalid' : null ?>"></textarea>

                                <?php if($validation->hasError('deskripsi')) : ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('deskripsi'); ?>
                                        </div>
                                        <?php endif; ?>
                            </div>

                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="nama">Tujuan</label>
                                    <select name="nama_produk" id="nama_produk" class="form-control <?= $validation->hasError('nama_produk') ? 'is-invalid' : null ?>">
                                    <option value="">-- pilih --</option>
                                     <?php foreach($kategori_produk as $kategori) :?>
                                        <option value="<?= $kategori->nama_kategori; ?>"><?= $kategori->nama_kategori; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?php if($validation->hasError('nama_produk')) : ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('nama_produk'); ?>
                                        </div>
                                        <?php endif; ?>
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="sluq_kategori">Nama Hotel</label>
                                    <select name="sluq_kategori" id="sluq_kategori" class="form-control <?= $validation->hasError('sluq_kategori') ? 'is-invalid' : null ?>">
                                    <option value="">-- pilih --</option>
                                    <?php foreach($kategori_produk as $kategori) :?>
                                        <option value="<?= $kategori->nama_produk; ?>"><?= $kategori->nama_produk; ?></option>
                                        <?php endforeach; ?>
                                    </select>
       

                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="departure">Tanggal Destinasi</label>
                                <input type="date" class="form-control" name="departure">

                                <?php if($validation->hasError('departure')) : ?>
                                        <div class="invalid-feedback">
                                            <?= $validation->getError('departure'); ?>
                                        </div>
                                        <?php endif; ?>
                            </div>
                            
                            <div class="justify-content-end d-flex">
                                <button class="btn btn-primary btn-sm">Tambah</button>
                            </div>
                                </form>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </main>

<?= $this->endSection(); ?>

